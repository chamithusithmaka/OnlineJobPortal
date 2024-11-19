function validateForm() {
    var email = document.getElementById('email').value;
    var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    var firstName = document.getElementById('first_name').value;
    var lastName = document.getElementById('last_name').value;
    var age = document.getElementById('age').value;
    var phone = document.getElementById('phone').value;
    var address = document.getElementById('address').value;
    var postCode = document.getElementById('post-code').value;
    var cv = document.getElementById('cv').value;
    var isValid = true;

    if (email === "") {
        document.getElementById('emailError').textContent = "Email field is required";
        isValid = false;
    } else if (!emailRegex.test(email)) {
        document.getElementById('emailError').textContent = "Invalid email format";
        isValid = false;
    } else {
        document.getElementById('emailError').textContent = "";
    }

    if (firstName === "") {
        document.getElementById('firstNameError').textContent = "First Name field is required";
        isValid = false;
    } else {
        document.getElementById('firstNameError').textContent = "";
    }

    if (lastName === "") {
        document.getElementById('lastNameError').textContent = "Last Name field is required";
        isValid = false;
    } else {
        document.getElementById('lastNameError').textContent = "";
    }

    if (age === "") {
        document.getElementById('ageError').textContent = "Age field is required";
        isValid = false;
    } else {
        document.getElementById('ageError').textContent = "";
    }

    if (phone === "") {
        document.getElementById('phoneError').textContent = "Phone Number field is required";
        isValid = false;
    } else {
        document.getElementById('phoneError').textContent = "";
    }

    if (address === "") {
        document.getElementById('addressError').textContent = "Address field is required";
        isValid = false;
    } else {
        document.getElementById('addressError').textContent = "";
    }

    if (postCode === "") {
        document.getElementById('postCodeError').textContent = "Post Code field is required";
        isValid = false;
    } else {
        document.getElementById('postCodeError').textContent = "";
    }

    if (cv === "") {
        document.getElementById('cvError').textContent = "CV field is required";
        isValid = false;
    } else {
        document.getElementById('cvError').textContent = "";
    }

    return isValid;
}