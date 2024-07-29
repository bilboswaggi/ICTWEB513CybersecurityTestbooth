<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Initialize an array to store error messages
    $errors = [];

    // Validate username
    $username = trim($_POST['username']);
    if (!preg_match("/^[a-zA-Z0-9]{6,20}$/", $username)) {
        $errors['username'] = "Username must be between 6 and 20 characters and contain no special characters.";
    }

    // Validate email
    $email = trim($_POST['email']);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = "Please enter a valid email address.";
    }

    // Validate password
    $password = trim($_POST['password']);
    if (!preg_match("/^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,12}$/", $password)) {
        $errors['password'] = "Password must be between 8 and 12 characters long and contain at least one letter and one number.";
    }

    // Validate confirm password
    $confirmPassword = trim($_POST['confirmPassword']);
    if ($confirmPassword !== $password) {
        $errors['confirmPassword'] = "Passwords do not match.";
    }

    // Validate first name
    $firstName = trim($_POST['firstName']);
    if (!preg_match("/^[a-zA-Z]{3,20}$/", $firstName)) {
        $errors['firstName'] = "First Name must be between 3 and 20 characters and contain no special characters.";
    }

    // Validate surname
    $surname = trim($_POST['surname']);
    if (!preg_match("/^[a-zA-Z]{3,20}$/", $surname)) {
        $errors['surname'] = "Surname must be between 3 and 20 characters and contain no special characters.";
    }

    // Validate gender
    $gender = $_POST['gender'];
    if (empty($gender)) {
        $errors['gender'] = "Please select your gender.";
    }

    // Validate address
    $address = trim($_POST['address']);
    if (!preg_match("/^[a-zA-Z0-9\s,]{3,50}$/", $address)) {
        $errors['address'] = "Address must be between 3 and 50 characters and contain no special characters.";
    }

    // Validate suburb
    $suburb = trim($_POST['suburb']);
    if (!preg_match("/^[a-zA-Z0-9\s,]{3,50}$/", $suburb)) {
        $errors['suburb'] = "Suburb must be between 3 and 50 characters and contain no special characters.";
    }

    // Validate postcode
    $postcode = trim($_POST['postcode']);
    if (!preg_match("/^\d{4}$/", $postcode)) {
        $errors['postcode'] = "Postcode must be exactly 4 digits.";
    }

    // Validate state
    $state = $_POST['state'];
    if (empty($state)) {
        $errors['state'] = "Please select your state.";
    }

    // Validate phone (optional)
    $phone = trim($_POST['phone']);
    if (!empty($phone) && !preg_match("/^[0-9]{8,10}$/", $phone)) {
        $errors['phone'] = "Phone number must be between 8 and 10 digits and contain no special characters.";
    }

    // Check if there are any errors
    if (empty($errors)) {
        // Here, you can proceed with registration (e.g., save data to the database)
        // For demonstration, let's assume registration is successful
        echo "Registration successful!";
    } else {
        // Display errors
        foreach ($errors as $field => $error) {
            echo "<p class='error-message'>$error</p>";
        }
    }
}
?>
