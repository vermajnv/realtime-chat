const cnfPassword = document.getElementById('cnfPassword');
document.getElementById('signup').addEventListener('click', function () {
    if (cnfPassword.value.localeCompare(document.getElementById('password').value) == 0) {
        console.log("Password and Confirm Password matched.");
        cnfPassword.setCustomValidity("");
    }
    else {
        console.log("Password and Confirm Password did not matched.");
        cnfPassword.setCustomValidity("This field should be same as Password");
    }
});

