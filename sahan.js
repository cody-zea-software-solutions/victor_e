function login() {
    let email = document.getElementById("email").value.trim();
    let password = document.getElementById("password").value.trim();
    var remember = document.getElementById("remember").checked;

    if (email === "" || password === "") {
        alert("Please enter both email and password.");
        return;
    }

    alert(email);
    alert(password);

    let formData = new FormData();
    formData.append("email", email);
    formData.append("password", password);
    formData.append("remember", remember);

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
function forgotpassword() {
    let email = document.getElementById("email").value.trim();

    if (email === "") {
        alert("Please enter your email address.");
        return;
    }
    var req = new XMLHttpRequest();
    req.open("POST", "forgotpasspro.php", true);
    var form = new FormData();
    form.append("email", email);
    req.onload = function () {
        if (req.status === 200) {
            let response = req.responseText;
            if (response == 1) {
                forgotpasswordformo();
                alert("check your inbox");
            } else {
                alert(response);
            }
        } else {
            alert("An error occurred while processing your request. Please try again.");
        }
    };
    req.onerror = function () {
        alert("Failed to send request. Check your network connection.");
    };
    req.send(form);
}
function forgotpasswordformo() {
    const modal = new bootstrap.Modal(document.getElementById('forgotPasswordModal'));
    modal.show();
}
function updatePassword() {
    const verificationCode = document.getElementById('verificationCode').value;
    const newPassword = document.getElementById('newPassword').value;
    const confirmPassword = document.getElementById('confirmPassword').value;
    let email = document.getElementById("email").value.trim();

    // Validate inputs
    if (!verificationCode || !newPassword || !confirmPassword) {
        alert('Please fill in all fields.');
        return;
    }
    if (newPassword !== confirmPassword) {
        alert('Passwords do not match.');
        return;
    }

    // Prepare data to send
    const data = new FormData();
    data.append('verificationCode', verificationCode);
    data.append('newPassword', newPassword);
    data.append("email",email);

    // Create and send AJAX request
    const req = new XMLHttpRequest();
    req.open('POST', 'updatepasswordpr.php', true);

    req.onload = function () {
        if (req.status === 200) {
            const response = JSON.parse(req.responseText); // Assuming the server returns JSON
            if (response.success) {
                alert('Password updated successfully!');
                // Optionally close the modal after success
                const modal = bootstrap.Modal.getInstance(document.getElementById('forgotPasswordModal'));
                modal.hide();
            } else {
                alert('Error: ' + response.message);
            }
        } else {
            alert('An error occurred while processing your request.');
        }
    };

    req.onerror = function () {
        alert('Network error. Please try again later.');
    };

    req.send(data);
}
function Register() {
    
    const mobile = document.getElementById("mobile").value.trim();
    const email = document.getElementById("emailTwo").value.trim();
    const password = document.getElementById("enter-password").value.trim();

    if (!mobile) {
        alert("Please enter your mobile number.");
        return;
    }

    if (!/^[0-9]{10}$/.test(mobile)) {
        alert("Mobile number must be 10 digits.");
        return;
    }

    if (!email) {
        alert("Please enter your email address.");
        return;
    }

    if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)) {
        alert("Please enter a valid email address.");
        return;
    }

    if (!password) {
        alert("Please enter your password.");
        return;
    }

    if (password.length < 6) {
        alert("Password must be at least 6 characters long.");
        return;
    }

    var form = new FormData();
    form.append("mobile", mobile);
    form.append("email", email);
    form.append("password", password);

    var req = new XMLHttpRequest();
    req.onreadystatechange = function() {
        // Ensure the request is complete and check the status
        if (req.readyState === 4) {
            if (req.status === 200) {
                var x = req.responseText;
                alert(x);
                window.location.href = "/index.html";
            } else {
                alert("Error: " + req.status);
            }
        }
    };
    req.open("POST", "registerpro.php", true);
    req.send(form);
}
function updatepro() {
    var firstname = document.getElementById("first-name").value;
    var lastname = document.getElementById("last-name").value;
    var mobile = document.getElementById("mobile").value;
    var birthday = document.getElementById("birthday").value;
    var district = document.getElementById("district").value;
    var city = document.getElementById("city").value;
    var address1 = document.getElementById("address-line-1").value; // Fixed typo
    var address2 = document.getElementById("address-line-2").value; // Fixed typo
    var email = document.getElementById("email").value;


    var form = new FormData();

    // Append form data
    form.append("firstname", firstname);
    form.append("lastname", lastname);
    form.append("mobile", mobile);
    form.append("birthday", birthday);
    form.append("district", district);
    form.append("city", city);
    form.append("address1", address1);
    form.append("address2", address2);
    form.append("email", email);

    // Create a new XMLHttpRequest
    var req = new XMLHttpRequest();

    req.open("POST", "updateProfilepro.php", true);

    // Define the callback function for the request
    req.onreadystatechange = function () {
        if (req.readyState === 4 && req.status === 200) {
            alert(req.responseText);
            alert("Profile updated successfully!");
        } else if (req.readyState === 4) {
            // Handle errors
            alert("An error occurred. Please try again.");
        }
    };

    // Send the request with the form data
    req.send(form);
}
