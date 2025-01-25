<?php
require "connection.php";
require "sequrity.php";

class main
{
     public $fname;
     public $lname;
     public $email;
     public $password;

     public function validatePassword($password)
     {
          return preg_match('/[A-Z]/', $password) && preg_match('/[a-z]/', $password) && preg_match('/[0-9]/', $password);
     }

     public function main()
     {
          $this->email = "sfahan@gmail.com";
          $this->fname = "sahan";
          $this->lname = "tharak";
          $this->password = "1234Aa";

          if (empty($this->fname)) {
               return "Please enter your first name";
          } else if (empty($this->lname)) {
               return "Please enter your last name";
          } else if (strlen($this->lname) > 45) {
               return "Last name must be 45 characters or less";
          } else if (empty($this->email)) {
               return "Please enter your email";
          } else if (!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
               return "Invalid email format";
          } else if (strlen($this->email) > 101) {
               return "Email is too long";
          } else if (empty($this->password)) {
               return "Password is empty";
          } else if (strlen($this->password) > 16) {
               return "Password is too long";
          } else if (!$this->validatePassword($this->password)) {
               return "Password must contain at least one uppercase letter, one lowercase letter, and one number.";
          } else {
               $user_data = [
                    'email' => $this->email,
                    'first_name' => $this->fname,
                    'last_name' => $this->lname,
                    'password' => $this->password
               ];
               $x = new validate();
               return $x->get($user_data);
          }
     }
}

class validate
{
     public function get($user_data)
     {
          $sanitized_input = Security::sanitizeInput($user_data["email"]);
          if ($sanitized_input === false) {
               return "Potential SQL injection detected!";
          } else {
               $sanitized_input = Security::sanitizeInput($user_data["password"]);
               if ($sanitized_input === false) {
                    return "Potential SQL injection detected!";
               } else {
                    $sanitized_input = Security::sanitizeInput($user_data["first_name"]);
                    if ($sanitized_input === false) {
                         return "Potential SQL injection detected!";
                    } else {
                         $sanitized_input = Security::sanitizeInput($user_data["last_name"]);
                         if ($sanitized_input === false) {
                              return "Potential SQL injection detected!";
                         } else {
                              $user_data = [
                                   'email' => $user_data["email"],
                                   'first_name' => $user_data["first_name"],
                                   'last_name' => $user_data["last_name"],
                                   'password' => $user_data["password"]
                              ];
                              $g = new datainsert();
                             return $g->datainser($user_data);
                         }
                    }
               }
          }
     }
}
class datainsert
{
     public function usercheck($email){
          $query = "SELECT * FROM `user` WHERE `email` = '".$email."'";
          $result = Database::Search($query);
          $row = $result->num_rows;
          if( $row == 1) {
               return 1;
          } else{
               return 0;
          }  
     }
     public function datainser($user_data)
     {
          $check = $this->usercheck($user_data["email"]);
          if($check == 0){
               $d = new DateTime();
               $tz = new DateTimeZone("Asia/Colombo");
               $d->setTimezone($tz);
               $date = $d->format("Y-m-d H:i:s");
     
               $query = "INSERT INTO `user` (`fname`, `lname`, `email`, `password`, `date`, `status`) VALUES (?, ?, ?, ?, ?, ?)";
     
               $params = [
                    $user_data["first_name"],
                    $user_data["last_name"],
                    $user_data["email"],
                    $user_data["password"],
                    $date,
                    1 
               ];
     
               $types = "sssssi"; 
               $result = Database::iud($query, $params, $types);
     
               if ($result) {
                    return "User inserted successfully.";
               } else {
                    return "Error inserting user.";
               }
          }else{
               return "this email already rejisterd";
          }
     }
}


// Instantiate the class and call the main method
$x = new main();
$xx = $x->main();
echo $xx;
