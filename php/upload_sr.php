<?php

// Includes php file with error handling
include_once 'error_handling.php';

// Cheks if the form is submitted by clicking the button "Send"
if (isset($_POST["upload"])) {
    // Defineing input variables
    $name = filter_input(INPUT_POST, 'name');
    $surname = filter_input(INPUT_POST, 'surname');
    $email = filter_input(INPUT_POST, 'email');
    $tlf = filter_input(INPUT_POST, 'tlf');
    
    // Checks if the form is submitted with POST method
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Input validation function
        function validate($input, $value, $name, $surname, $email, $tlf) {
            // Defineing RegEx variables  
            $pregName = "/^[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð '-]{2,20}$/";
            $pregEmail = "/^(([^<>()\[\]\\.,;:\s@']+(\.[^<>()\[\]\\.,;:\s@']+)*)|('.+'))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/";
            $pregTlf = "/^\+(?:[0-9] ?){6,14}[0-9]$/";
            
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
                
                case "tlf":
                if (empty($tlf)) {
                    return "<br/>* Phone number is required";
                } elseif (!preg_match($pregTlf, $value)) {
                    $str = "<br/>* Tlf. broj može da sadrži samo brojeve i razmake";
                    $str .= "<br/>* Tlf. broj mora da sadrži pozivni kod (npr. +381)";
                    
                    return $str;
                }
                break;
            }
        }
        
        // We make an array with all input fields so we can validate one by one
        $input = array(
            "name" => $name,
            "surname" => $surname,
            "email" => $email,
            "tlf" => $tlf,
        );
      
        $allFieldsOk = "";
        $responseMessage = "";
        
        foreach ($input as $key => $value) {
            $responseMessage .= validate($key, $value, $name, $surname, $email, $tlf);
        }
        
        if ($responseMessage != "") {
            echo "<p id='errorMessage'>".$responseMessage."</p>";
            echo "<p id='errorMessage'>Ponovo ispunite obrazac sa tačnim podacima.</p>";
            $allFieldsOk = false;
        } else {
            $allFieldsOk = true;
        }
        
        if ($allFieldsOk) {
            $uploadStatus = 1;
            
            // Upload attachment file
            if (!empty($_FILES["uploaded_file"]["name"])) {
                $fileDir = "uploads/".$name."-".$surname."-(".$tlf.")-";
                $fileName = basename($_FILES["uploaded_file"]["name"]);
                $fileFullPath = $fileDir . $fileName;
                $fileType = pathinfo($fileFullPath, PATHINFO_EXTENSION);
                $allowTypes = array('pdf', 'PDF', 'doc', 'DOC', 'docx', 'DOCX');
                $maxFileSize = 20000000; // max file size 20MB
                
                // Allow certain file formats
                if (in_array($fileType, $allowTypes)) {
                    // Checks if the file size is valid 
                    if ($_FILES["uploaded_file"]["size"] <= $maxFileSize) {
                        // Checks if uploaded file was moved to new folder created on server
                        if(move_uploaded_file($_FILES["uploaded_file"]["tmp_name"], $fileFullPath)){
                            $uploadedFile = $fileFullPath;
                        } else {
                            $uploadStatus = 0;
                            $responseMessage = "Došlo je do greške prilikom prenošenja datoteke, pokušajte ponovo.";
                            echo "<p id='errorMessage'>".$responseMessage."</p>";
                        }
                    } else {
                        $uploadStatus = 0;
                        $responseMessage = "Izabrana datoteka ne može biti veća od 20MB.";
                        echo "<p id='errorMessage'>".$responseMessage."</p>";
                    }
                } else {
                    $uploadStatus = 0;
                    $responseMessage = "Samo PDF, DOC i DOCX datoteke se mogu uploadovati.";
                    echo "<p id='errorMessage'>".$responseMessage."</p>";
                }       
            } else {
                $uploadStatus = 0;
                $responseMessage = "Nijedan fajl nije odabran.";
                echo "<p id='errorMessage'>".$responseMessage."</p>";
            }
            
            if ($uploadStatus == 1) {
                // E-mail related variables
                $to = "info@scanidna.rs";
                $from = $email;
                $subject = "CV Upload - ".$name." ".$surname." (".$tlf.")";
                
                // Getting attachment ready
                $fileContent = file_get_contents($uploadedFile);
                $attachment = chunk_split(base64_encode($fileContent));
                
                // a random hash will be necessary to send mixed content
                $separator = md5(time());

                // carriage return type (RFC)
                $eol = "\r\n";
                
                // Mail configuration
                $headers = "From: <".$from.">" . $eol;
                $headers .= "MIME-Version: 1.0" . $eol;
                $headers .= "Content-Type: multipart/mixed; boundary=\"" . $separator . "\"" . $eol;
                $headers .= "Content-Transfer-Encoding: 7bit" . $eol;
                $headers .= "This is a MIME encoded message." . $eol;

                $body = "--" . $separator . $eol;
                $body .= "Content-Type: text/plain; charset=\"iso-8859-1\"" . $eol;
                $body .= "Content-Transfer-Encoding: 8bit" . $eol;

                $body .= "--" . $separator . $eol;
                $body .= "Content-Type: application/octet-stream; name=\"" . $uploadedFile . "\"" . $eol;
                $body .= "Content-Transfer-Encoding: base64" . $eol;
                $body .= "Content-Disposition: attachment" . $eol;
                $body .= $attachment . $eol;
                $body .= "--" . $separator . "--";
                
                // Checks if the mail was sent
                if (mail($to, $subject, $body, $headers)) {
                    $responseMessage = "Vaš CV je uspešno uploadovan!";
                    echo "<p id='successMessage'>".$responseMessage."</p>";
                } else {
                    $responseMessage = "Vaš CV nije uspeo da se učita, pokušajte ponovo.";
                    echo "<p id='errorMessage'>".$responseMessage."</p>";
                }
            } 
        }
    }
}
?>



