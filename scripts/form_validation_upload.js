/*-----------------------------------------------------*/
/*------------- Scandina JS Script File ---------------*/
/*----------- Client-side Form Validation -------------*/
/*-------------- Author: Vladimir Maric ---------------*/
/*-----------------------------------------------------*/

/* Regular Expression variables */ 
var REGEX_NAME = /^[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð '-]{2,20}$/;
var REGEX_EMAIL = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
var REGEX_TLF = /^\+(?:[0-9] ?){6,14}[0-9]$/;

/* First name validation functions */
function validate_name_en() {
    accept = REGEX_NAME.test(document.uploadForm.name.value);
    errorMessage = document.getElementById("error-upload-name-en");
    
    if(!accept) {
        errorMessage.innerHTML = "First name must be between 2 and 20 characters long and include only letters";
        return false;
    } else {
        errorMessage.innerHTML = "";
        return true;
    }
}

function validate_name_no() {
    accept = REGEX_NAME.test(document.uploadForm.name.value);
    errorMessage = document.getElementById("error-upload-name-no");
    
    if(!accept) {
        errorMessage.innerHTML = "Fornavnet må være mellom 2 og 20 tegn langt og kun inneholde bokstaver";
        return false;
    } else {
        errorMessage.innerHTML = "";
        return true;
    }
}

function validate_name_sr() {
    accept = REGEX_NAME.test(document.uploadForm.name.value);
    errorMessage = document.getElementById("error-upload-name-sr");
    
    if(!accept) {
        errorMessage.innerHTML = "Ime mora biti dugačko između 2 i 20 znakova i sadržati samo slova";
        return false;
    } else {
        errorMessage.innerHTML = "";
        return true;
    }
}

/* Last name validation functions */
function validate_surname_en() {
    accept = REGEX_NAME.test(document.uploadForm.surname.value);
    errorMessage = document.getElementById("error-upload-surname-en");
    
    if(!accept) {
        errorMessage.innerHTML = "Last name must be between 2 and 20 characters long and include only letters";
        return false;
    } else {
        errorMessage.innerHTML = "";
        return true;
    }
}

function validate_surname_no() {
    accept = REGEX_NAME.test(document.uploadForm.surname.value);
    errorMessage = document.getElementById("error-upload-surname-no");
    
    if(!accept) {
        errorMessage.innerHTML = "Etternavnet må være mellom 2 og 20 tegn langt og kun inneholde bokstaver";
        return false;
    } else {
        errorMessage.innerHTML = "";
        return true;
    }
}

function validate_surname_sr() {
    accept = REGEX_NAME.test(document.uploadForm.surname.value);
    errorMessage = document.getElementById("error-upload-surname-sr");
    
    if(!accept) {
        errorMessage.innerHTML = "Prezime mora biti dugačko između 2 i 20 znakova i sadržati samo slova";
        return false;
    } else {
        errorMessage.innerHTML = "";
        return true;
    }
}

/* E-mail validation functions */
function validate_email_en() {
    accept = REGEX_EMAIL.test(document.uploadForm.email.value);
    errorMessage = document.getElementById("error-upload-email-en");
    
    if(!accept) {
        errorMessage.innerHTML = "Please enter a valid e-mail address";
        return false;
    } else {
        errorMessage.innerHTML = "";
        return true;
    }
}

function validate_email_no() {
    accept = REGEX_EMAIL.test(document.uploadForm.email.value);
    errorMessage = document.getElementById("error-upload-email-no");
    
    if(!accept) {
        errorMessage.innerHTML = "Vennligst oppgi en gyldig e-post adresse";
        return false;
    } else {
        errorMessage.innerHTML = "";
        return true;
    }
}

function validate_email_sr() {
    accept = REGEX_EMAIL.test(document.uploadForm.email.value);
    errorMessage = document.getElementById("error-upload-email-sr");
    
    if(!accept) {
        errorMessage.innerHTML = "Molimo vas da unesete ispravnu e-mail adresu";
        return false;
    } else {
        errorMessage.innerHTML = "";
        return true;
    }
}

/* Phone number validation functions */
function validate_tlf_en() {
    accept = REGEX_TLF.test(document.uploadForm.tlf.value);
    errorMessage = document.getElementById("error-upload-tlf-en");
    
    if(!accept) {
        text = "Phone number can only include numbers and whitespace<br/>";
        text += "Phone number must include your country code (eg. +47)"; 
        errorMessage.innerHTML = text;
        return false;
    } else {
        errorMessage.innerHTML = "";
        return true;
    }
}

function validate_tlf_no() {
    accept = REGEX_TLF.test(document.uploadForm.tlf.value);
    errorMessage = document.getElementById("error-upload-tlf-no");
    
    if(!accept) {
        text = "Telefonnummeret kan kun inneholde tall og mellomrom<br/>";
        text += "Telefonnummeret må inneholde landskoden (f.eks. +47)"; 
        errorMessage.innerHTML = text;
        return false;
    } else {
        
        return true;
    }
}

function validate_tlf_sr() {
    accept = REGEX_TLF.test(document.uploadForm.tlf.value);
    errorMessage = document.getElementById("error-upload-tlf-sr");
    
    if(!accept) {
        text = "Tlf. broj može da sadrži samo brojeve i razmake<br/>";
        text += "Tlf. broj mora da sadrži pozivni kod (npr. +381)"; 
        errorMessage.innerHTML = text;
        return false;
    } else {
        errorMessage.innerHTML = "";
        return true;
    }
}

/* File upload validation functions */
function validate_file_upload_en() {
    errorMessage = document.getElementById("error-upload-file-en");
    uploadedFile = document.getElementById('form-file-upload');
    ext = uploadedFile.value.split('.').pop().toLowerCase();
    
    if (uploadedFile.files.length > 0) {
        if (ext === "pdf" || ext === "PDF" ||
            ext === "docx" || ext === "DOCX" ||
            ext === "doc" || ext === "DOC") {
            errorMessage.innerHTML = "";
            return true;
        } else {
            errorMessage.innerHTML = "File format is invalid";
            return false;
        }
    } else {
        errorMessage.innerHTML = "No file was selected";
        return false;
    }
}

function validate_file_upload_no() {
    errorMessage = document.getElementById("error-upload-file-no");
    uploadedFile = document.getElementById('form-file-upload');
    ext = uploadedFile.value.split('.').pop().toLowerCase();
    
    if (uploadedFile.files.length > 0) {
        if (ext === "pdf" || ext === "PDF" ||
            ext === "docx" || ext === "DOCX" ||
            ext === "doc" || ext === "DOC") {
            errorMessage.innerHTML = "";
            return true;
        } else {
            errorMessage.innerHTML = "Filformatet er ugyldig";
            return false;
        }
    } else {
        errorMessage.innerHTML = "Ingen fil ble valgt";
        return false;
    }
}

function validate_file_upload_sr() {
    errorMessage = document.getElementById("error-upload-file-sr");
    uploadedFile = document.getElementById('form-file-upload');
    ext = uploadedFile.value.split('.').pop().toLowerCase();
    
    if (uploadedFile.files.length > 0) {
        if (ext === "pdf" || ext === "PDF" ||
            ext === "docx" || ext === "DOCX" ||
            ext === "doc" || ext === "DOC") {
            errorMessage.innerHTML = "";
            return true;
        } else {
            errorMessage.innerHTML = "Format fajla nije odgovarajući";
            return false;
        }
    } else {
        errorMessage.innerHTML = "Nijedan fajl nije odabran";
        return false;
    }
}

/* All inputs fields validation function - English page */
function validate_all_en() {
    nameAccept = validate_name_en();
    surnameAccept = validate_surname_en();
    emailAccept = validate_email_en();
    tlfAccept = validate_tlf_en();
    fileUploadAccept = validate_file_upload_en();

    if(nameAccept && surnameAccept && emailAccept && tlfAccept && fileUploadAccept) {
        return true;
    } else {
        return false;
    }
}

/* All inputs fields validation function - Norwegian page */
function validate_all_no() {
    nameAccept = validate_name_no();
    surnameAccept = validate_surname_no();
    emailAccept = validate_email_no();
    tlfAccept = validate_tlf_no();
    fileUploadAccept = validate_file_upload_no();
    
    if(nameAccept && surnameAccept && emailAccept && tlfAccept && fileUploadAccept) {
        return true;
    } else {
        return false;
    }
}

/* All inputs fields validation function - Serbian page */
function validate_all_sr() {
    nameAccept = validate_name_sr();
    surnameAccept = validate_surname_sr();
    emailAccept = validate_email_sr();
    tlfAccept = validate_tlf_sr();
    fileUploadAccept = validate_file_upload_sr(); 
    
    if(nameAccept && surnameAccept && emailAccept && tlfAccept && fileUploadAccept) {
        return true;
    } else {
        return false;
    }
}


