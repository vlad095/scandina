<?php

/**
 * Document info: Scandina PHP File
 *     File name: contact.php
 *        Author: Vladimir Maric
 *   
 *   Description: Validates and sends an email which includes the 
 *                information given in the contact form. The code 
 *                is written for the contact form on English page. 
 *                
 *     Copyright: © 2020 Scandina
 */

// Includes php file with error handling
include_once 'error_handling.php';

// Cheks if the form is submitted by clicking the button "Send"
if (isset($_POST["send"])) {
    // Defineing input variables
    $name = filter_input(INPUT_POST, 'name');
    $surname = filter_input(INPUT_POST, 'surname');
    $email = filter_input(INPUT_POST, 'email');
    $subject = filter_input(INPUT_POST, 'subject');
    $message = filter_input(INPUT_POST, 'message');
    
    // Checks if the form is submitted with POST method
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Input validation function
        function validate($input, $value, $name, $surname, $email, $subject, $message) {
            // Defineing RegEx variables  
            $pregName = "/^[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð '-]{2,20}$/";
            $pregEmail = "/^(([^<>()\[\]\\.,;:\s@']+(\.[^<>()\[\]\\.,;:\s@']+)*)|('.+'))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/";
            $pregSubject = "/^.{0,50}$/";
            $pregMessage = "/^[\s\S]{1,1000}$/";
            
            switch ($input) {
                case "name":
                if (empty($name)) {
                    return "* First name is required";   
                } elseif (!preg_match($pregName, $value)) {
                    return "* First name must be between 2 and 20 characters long and include only letters";
                }
                break;
                
                case "surname":
                if (empty($surname)) {
                    return "<br/>* Last name is required";
                } elseif (!preg_match($pregName, $value)) {
                    return "<br/>* Last name must be between 2 and 20 characters long and include only letters";
                }
                break;
                
                case "email":
                if (empty($email)) {
                    return "<br/>* E-mail address is required";
                } elseif (!preg_match($pregEmail, $value)) {
                    return "<br/>* The e-mail format you entered is invalid";
                }
                break;
                
                case "subject":
                if (!preg_match($pregSubject, $value)) {
                    return "<br/>* The subject input can be at most 50 characters long";
                }
                break;
                
                case "message":
                if (empty($message)) {
                    return "<br/>* Message is required";
                } elseif (!preg_match($pregMessage, $value)) {
                    return "<br/>* The message can be at most 1000 characters long";
                }
                break;
            }
        }
        
        // We make an array with all input fields so we can validate one by one
        $input = array(
            "name" => $name,
            "surname" => $surname,
            "email" => $email,
            "subject" => $subject,
            "message" => $message
        );
      
        $allFieldsOk = "";
        $responseMessage = "";
        
        foreach ($input as $key => $value) {
            $responseMessage .= validate($key, $value, $name, $surname, $email, $subject, $message);
        }
        
        if ($responseMessage != "") {
            echo "<p id='errorMessage'>".$responseMessage."</p>";
            echo "<p id='errorMessage'>Fill in the form again with the correct information.</p>";
            $allFieldsOk = false;
        } else {
            $allFieldsOk = true;
        }
        
        if ($allFieldsOk) {
            $toMail = "info@scandina.rs";
            
            if (mail($toMail, $subject, $message, "From: ".$email)) {
                $responseMessage = "Your message was sent, thank you for contacting us!";
                echo "<p id='successMessage'>".$responseMessage."</p>";
            } else {
                $responseMessage = "The message could not be sent, please try again later.";
                echo "<p id='errorMessage'>".$responseMessage."</p>";
            }
        }
    }
}

?>