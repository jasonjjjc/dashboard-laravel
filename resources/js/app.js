import "./bootstrap";

const registerForm = document.getElementById("register-form");
const registerFormInputs = document.getElementById("register-form-inputs");
const errorContainer = document.getElementById("error-container");

// Regular expression for email validation
const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

// Function to display validation error messages below the input fields
function showValidationError(message) {
    const errorDiv = document.createElement("div");
    errorDiv.className = "validation-error";
    errorDiv.classList.add("text-sm", "text-red-500", "w-full", "bottom-0");
    errorDiv.textContent = message;
    errorContainer.appendChild(errorDiv);
}

// Function to remove validation error messages
function removeAllValidationErrors() {
    const errorDivs = document.querySelectorAll(".validation-error");
    errorDivs.forEach((errorDiv) => {
        errorDiv.remove();
    });
}

// Add event listener to the form's submit event
if (registerForm) {
    registerForm.addEventListener("submit", function (event) {
        // Prevent the form from submitting by default
        event.preventDefault();

        // Remove all existing validation error messages
        removeAllValidationErrors();

        // Get the values of the form fields
        const name = document.getElementById("name").value;
        const password = document.getElementById("password").value;
        const passwordConfirm =
            document.getElementById("password-confirm").value;

        // Array to store validation error messages
        let errorMessages = [];

        // Perform basic validation
        if (name.trim() === "") {
            errorMessages.push("Please enter your name.");
        }

        if (name.trim().length < 3) {
            errorMessages.push("Your name should have 3 or more characters.");
        }

        if (password.trim() === "" || passwordConfirm.trim() === "") {
            errorMessages.push("Please enter a password.");
        }

        if (password.length < 8 || passwordConfirm.length < 8) {
            errorMessages.push("Passwords should have 8 or more characters.");
        }

        if (password !== passwordConfirm) {
            errorMessages.push("Passwords do not match.");
        }

        // Display all validation error messages
        errorMessages.forEach((message) => {
            showValidationError(message);
        });

        if (errorMessages.length === 0) {
            // If there are no validation errors, submit the form
            registerFormInputs.classList.add("hidden");
            registerForm.submit();
        }
    });
}
