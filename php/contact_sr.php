<?php

/**
 * Document info: Scandina PHP File
 *     File name: contact_sr.php
 *        Author: Vladimir Maric
 *   
 *   Description: Validates and sends an email which includes the 
 *                information given in the contact form. The code 
 *                is written for the contact form on Serbian page. 
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
                    return "* Ime je obavezno";   
                } elseif (!preg_match($pregName, $value)) {
                    return "* Ime mora biti dugačko između 2 i 20 znakova i sadržati samo slova";
                }
                break;
                
                case "surname":
                if (empty($surname)) {
                    return "<br/>* Prezime je obavezno";
                } elseif (!preg_match($pregName, $value)) {
                    return "<br/>* Prezime mora biti dugačko između 2 i 20 znakova i sadržati samo slova";
                }
                break;
                
                case "email":
                if (empty($email)) {
                    return "<br/>* E-mail adresa je obavezna";
                } elseif (!preg_match($pregEmail, $value)) {
                    return "<br/>* E-mail format koji ste uneli nije važeći";
                }
                break;
                
                case "subject":
                if (!preg_match($pregSubject, $value)) {
                    return "<br/>* Naslov poruke može biti dugačak do 50 znakova";
                }
                break;
                
                case "message":
                if (empty($message)) {
                    return "<br/>* Poruka je obavezna";
                } elseif (!preg_match($pregMessage, $value)) {
                    return "<br/>* Poruka može biti dugačka do 1000 znakova";
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
            echo "<p id='errorMessage'>Ponovo ispunite obrazac sa tačnim podacima.</p>";
            $allFieldsOk = false;
        } else {
            $allFieldsOk = true;
        }
        
        if ($allFieldsOk) {
            $toMail = "info@scandina.rs";
            
            if (mail($toMail, $subject, $message, "From: ".$email)) {
                $responseMessage = "Vaša poruka je poslata, hvala što ste nas kontaktirali!";
                echo "<p id='successMessage'>".$responseMessage."</p>";
            } else {
                $responseMessage = "Poruka nije poslata, molimo pokušajte ponovo kasnije.";
                echo "<p id='errorMessage'>".$responseMessage."</p>";
            }
        }
    }
}

?>

