function login() {
    let email = document.getElementById("email").value.trim();
    let password = document.getElementById("password").value.trim();

    if (email === "" || password === "") {
        alert("Please enter both email and password.");
        return;
    }

    alert(email);
    alert(password);

    let formData = new FormData();
    formData.append("email", email);
    formData.append("password", password);

    fetch("loginpro.php", {
        method: "POST",
        body: formData
    })
    .then(response => response.text()) 
    .then(data => {
       alert(data);
    })
    .catch(error => console.error("Error:", error));
}
 