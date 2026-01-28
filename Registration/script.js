function validateForm() {

    let username = document.getElementById("username").value;
    let email = document.getElementById("email").value;
    let password = document.getElementById("password").value;
    let error = document.getElementById("error");

    error.innerHTML = "";

    // Username validation
    if (username === "") {
        error.innerHTML = "Username is required";
        return false;
    }

    // Email validation
    if (email === "") {
        error.innerHTML = "Email is required";
        return false;
    }

    // Password validation
    if (password.length < 6) {
        error.innerHTML = "Password must be at least 6 characters";
        return false;
    }

    // If all validations pass
    return true;
}
