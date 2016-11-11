<?php

    include "post_utils.php";
    include "db_utils.php";
    include "session_utils.php";
    include "account.php";

    ///////////
    // Script
    ////////

    $email = $pword = "";
    $errors = false;

    if(isset($_POST["submit"]) && $_SERVER["REQUEST_METHOD"] == "POST") {

        // Validating email format
        $email = clean_post($_POST["email"]);
        if(!empty($_POST['email']) || !is_valid_email($email)) {
            $errors = true;
        }

        // Validating password format
        $pword = clean_post($_POST["pword"]);
        if(!empty($_POST['pword']) || !is_valid_password($pword)) {  
            $errors = true;
        }

        // Display error or redirect to user account page
        if(verify_login_info($email, $pword)) {
            // Creating new client session
            create_session($email);
            
            // Serving user account page
            display_account_page();
        } else {
            echo("Incorrect user and/or password information.");
        }

    } else {
        // Redirect to form submission error page
        header("Location: ../login.html");
        // error: "Submission failed. Please try again."
    }

    // Exit script
    exit();

?>