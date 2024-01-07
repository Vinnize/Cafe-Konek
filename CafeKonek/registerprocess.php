<?php
// Validate form submission
if (isset($_POST["submit"])) {
    // Extract form data
    $Firstname = $_POST["Firstname"];
    $Lastname = $_POST["Lastname"];
    $Email = $_POST["Email"];
    $Password = $_POST["Password"];
    $Confirmpassword = $_POST["Confirmpassword"];
    $passwordHash = password_hash($Password, PASSWORD_DEFAULT); // Hash the password

    // Initialize error array
    $errors = [];

    // Check for empty fields
    if (empty($Firstname) || empty($Lastname) || empty($Email) || empty($Password) || empty($Confirmpassword)) {
        $errors[] = "Must fill out all the required fields";
    }

    // Validate email format
    if (!filter_var($Email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Email is not valid";
    }

    // Check if the email already exists in the database
    include 'database.php';

    $checkEmailQuery = "SELECT * FROM users WHERE Email = ?";
    $checkStmt = mysqli_stmt_init($conn);

    if (mysqli_stmt_prepare($checkStmt, $checkEmailQuery)) {
        mysqli_stmt_bind_param($checkStmt, "s", $Email);
        mysqli_stmt_execute($checkStmt);
        mysqli_stmt_store_result($checkStmt);

        if (mysqli_stmt_num_rows($checkStmt) > 0) {
            $errors[] = "Email already registered";
        }

        mysqli_stmt_close($checkStmt);
    } else {
        die("Statement preparation failed: " . mysqli_error($conn));
    }

    // Validate password length and match
    if (strlen($Password) < 8) {
        $errors[] = "Password must be at least 8 characters long";
    }

    if ($Password !== $Confirmpassword) {
        $errors[] = "Passwords do not match";
    }

    // If there are no errors, proceed with database insertion
    if (count($errors) === 0) {
        $sql = "INSERT INTO users (Firstname, Lastname, Email, Password) VALUES (?, ?, ?, ?)";
        $stmt = mysqli_stmt_init($conn);
    
        if (mysqli_stmt_prepare($stmt, $sql)) {
            mysqli_stmt_bind_param($stmt, "ssss", $Firstname, $Lastname, $Email, $passwordHash);
    
            if (mysqli_stmt_execute($stmt)) {
                $lastInsertedID = mysqli_insert_id($conn);
    
                if ($lastInsertedID > 0) {
                    echo "<div class='alert alert-success'>You are registered successfully. Your ID is: $lastInsertedID</div>";
                    header('Location: login.php'); // Redirect to the login page
                    exit;
                } else {
                    echo "<div class='alert alert-danger'>Failed to retrieve ID after insertion.</div>";
                }
            } else {
                echo "<div class='alert alert-danger'>Something went wrong with the database.</div>";
            }
        } else {
            die("Statement preparation failed: " . mysqli_error($conn));
        }
    } else {
        // Display errors if any
        foreach ($errors as $error) {
            echo "<div class='alert alert-danger'>$error</div>";
        }
    }
    
}
?>
