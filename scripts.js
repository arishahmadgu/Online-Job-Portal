// Validate Login Form
function validateLogin() {
    let email = document.getElementById("email").value.trim();
    let password = document.getElementById("password").value.trim();

    if (email === "" || password === "") {
        alert("Please fill all fields!");
        return false;
    }
    return true;
}

// Validate Registration Form
function validateRegister() {
    let name = document.getElementById("name").value.trim();
    let email = document.getElementById("email").value.trim();
    let password = document.getElementById("password").value.trim();

    if (name === "" || email === "" || password === "") {
        alert("All fields are required!");
        return false;
    }
    return true;
}

// Validate Post Job Form
function validatePostJob() {
    let title = document.getElementById("job_title").value.trim();
    let company = document.getElementById("company").value.trim();
    let location = document.getElementById("location").value.trim();

    if (title === "" || company === "" || location === "") {
        alert("Please enter all job details!");
        return false;
    }
    return true;
}

// Validate Apply Job Form
function validateApplyJob() {
    let name = document.getElementById("name").value.trim();
    let email = document.getElementById("email").value.trim();

    if (name === "" || email === "") {
        alert("Name and Email are required!");
        return false;
    }
    return true;
}


// ===== Navigation Highlight (Optional) =====
document.addEventListener("DOMContentLoaded", () => {
    let links = document.querySelectorAll(".navbar a");
    let current = window.location.pathname;

    links.forEach(link => {
        if (link.href.includes(current)) {
            link.style.color = "#00bcd4";
        }
    });
});
