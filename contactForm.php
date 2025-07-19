<?php
    //Connect to database
    require ('./config.php');

    //Get form data
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        
        //Sanitize and validate user inputs
        $fullName = htmlspecialchars(strip_tags(trim($_POST['fullName'])));
        $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
        $client_message = htmlspecialchars(strip_tags(trim($_POST['client_message'])));

        //Check if inputs are empty
        if(empty($fullName) || empty($email) || empty($client_message) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
            //Reload page with error message
            header("location: index.php?status=error#contact");
            exit();
        }

        //Check if email already exists in database
        $check_email = $makeconnection->prepare("SELECT id from user_messages WHERE email = ?");
        $check_email->bind_param("s", $email);
        $check_email->execute();
        $check_email->store_result();

        if($check_email->num_rows > 0) {
            //Reload page with error message
            header("location: index.php?status=email_exists#contact");
            exit();
        }

        $check_email->close();

        //Insert data in database
        $stmt = $makeconnection->prepare("INSERT INTO user_messages(fullName, email, client_message) VALUES(?, ?, ?)");
        //Create if statement if data is inserted
        if($stmt) {
            $stmt->bind_param("sss", $fullName, $email, $client_message);
            $stmt->execute();
            $stmt->close();

            //Reload page with success message
            header("location: index.php?status=success#contact");
            exit();
        } else {
            //Reload page with error message
            header("location: index.php?status=error#contact");
            exit();
        }

    }