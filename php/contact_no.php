<?php

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
            $pregMessage = "/^.{1,1000}$/";
            
            switch ($input) {
                case "name":
                if (empty($name)) {
                    return "* Fornavn er obligatorisk";   
                } elseif (!preg_match($pregName, $value)) {
                    return "* Fornavnet må være mellom 2 og 20 tegn langt og kun inneholde bokstaver";
                }
                break;
                
                case "surname":
                if (empty($surname)) {
                    return "<br/>* Etternavn er obligatorisk";
                } elseif (!preg_match($pregName, $value)) {
                    return "<br/>* Etternavnet må være mellom 2 og 20 tegn langt og kun inneholde bokstaver";
                }
                break;
                
                case "email":
                if (empty($email)) {
                    return "<br/>* E-post adresse er obligatorisk";
                } elseif (!preg_match($pregEmail, $value)) {
                    return "<br/>* E-post formatet du skrev inn er ugyldig";
                }
                break;
                
                case "subject":
                if (!preg_match($pregSubject, $value)) {
                    return "<br/>* Emnet for henvendelsen kan være opptil 50 tegn langt";
                }
                break;
                
                case "message":
                if (empty($message)) {
                    return "<br/>* Meldingen må skrives";
                } elseif (!preg_match($pregMessage, $value)) {
                    return "<br/>* Meldingen kan være opptil 1000 tegn langt";
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
            echo "<p id='errorMessage'>Fyll ut skjemaet igjen med riktig informasjon.</p>";
            $allFieldsOk = false;
        } else {
            $allFieldsOk = true;
        }
        
        if ($allFieldsOk) {
            $toMail = "vmaric1995@gmail.com";
            
            if (mail($toMail, $subject, $message, "From: ".$email)) {
                $responseMessage = "Din melding ble sendt, takk for at du tok kontakt med oss!";
                echo "<p id='successMessage'>".$responseMessage."</p>";
            } else {
                $responseMessage = "Meldingen kunne ikke sendes, vennligst prøv igjen senere.";
                echo "<p id='errorMessage'>".$responseMessage."</p>";
            }
        }
    }
}

?>