<?php
// Function to sanitize input data
function sanitize_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

// Initialize error array
$errors = array();

// Validate POST data
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Example data validation (assuming form fields 'product', 'quantity', and 'cost')
    if (empty($_POST["product"])) {
        $errors[] = "Product is required.";
    } else {
        $product = sanitize_input($_POST["product"]);
        if (!preg_match("/^[a-zA-Z0-9 ]*$/", $product)) {
            $errors[] = "Invalid product name.";
        }
    }

    if (empty($_POST["quantity"])) {
        $errors[] = "Quantity is required.";
    } else {
        $quantity = sanitize_input($_POST["quantity"]);
        if (!filter_var($quantity, FILTER_VALIDATE_INT)) {
            $errors[] = "Invalid quantity.";
        }
    }

    if (empty($_POST["cost"])) {
        $errors[] = "Cost is required.";
    } else {
        $cost = sanitize_input($_POST["cost"]);
        if (!filter_var($cost, FILTER_VALIDATE_FLOAT)) {
            $errors[] = "Invalid cost.";
        }
    }

    // Check if there are errors
    if (empty($errors)) {
        // Process the form data (e.g., save to database)
        echo "Form submitted successfully!";
    } else {
        // Display errors
        foreach ($errors as $error) {
            echo "<p style='color: red;'>$error</p>";
        }
    }
}
?>
