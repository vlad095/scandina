/*-----------------------------------------------------*/
/*------------- Scandina JS Script File ---------------*/
/*----------- Client-side Form Validation -------------*/
/*-------------- Author: Vladimir Maric ---------------*/
/*-----------------------------------------------------*/

/* Regular Expression variables */ 
var REGEX_NAME = /^[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð '-]{2,20}$/;
var REGEX_EMAIL = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
var REGEX_SUBJECT = /^.{0,50}$/;
var REGEX_MESSAGE = /^.{1,1000}$/;

/* First name validation functions */
function validate_name_en() {
    accept = REGEX_NAME.test(document.contactForm.name.value);
    errorMessage = document.getElementById("error-name-en");
    
    if(!accept) {
        errorMessage.innerHTML = "First name must be between 2 and 20 characters long and include only letters";
        return false;
    } else {
        errorMessage.innerHTML = "";
        return true;
    }
}

function validate_name_no() {
    accept = REGEX_NAME.test(document.contactForm.name.value);
    errorMessage = document.getElementById("error-name-no");
    
    if(!accept) {
        errorMessage.innerHTML = "Fornavnet må være mellom 2 og 20 tegn langt og kun inneholde bokstaver";
        return false;
    } else {
        errorMessage.innerHTML = "";
        return true;
    }
}

function validate_name_sr() {
    accept = REGEX_NAME.test(document.contactForm.name.value);
    errorMessage = document.getElementById("error-name-sr");
    
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
    accept = REGEX_NAME.test(document.contactForm.surname.value);
    errorMessage = document.getElementById("error-surname-en");
    
    if(!accept) {
        errorMessage.innerHTML = "Last name must be between 2 and 20 characters long and include only letters";
        return false;
    } else {
        errorMessage.innerHTML = "";
        return true;
    }
}

function validate_surname_no() {
    accept = REGEX_NAME.test(document.contactForm.surname.value);
    errorMessage = document.getElementById("error-surname-no");
    
    if(!accept) {
        errorMessage.innerHTML = "Etternavnet må være mellom 2 og 20 tegn langt og kun inneholde bokstaver";
        return false;
    } else {
        errorMessage.innerHTML = "";
        return true;
    }
}

function validate_surname_sr() {
    accept = REGEX_NAME.test(document.contactForm.surname.value);
    errorMessage = document.getElementById("error-surname-sr");
    
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
    accept = REGEX_EMAIL.test(document.contactForm.email.value);
    errorMessage = document.getElementById("error-email-en");
    
    if(!accept) {
        errorMessage.innerHTML = "Please enter a valid e-mail address";
        return false;
    } else {
        errorMessage.innerHTML = "";
        return true;
    }
}

function validate_email_no() {
    accept = REGEX_EMAIL.test(document.contactForm.email.value);
    errorMessage = document.getElementById("error-email-no");
    
    if(!accept) {
        errorMessage.innerHTML = "Vennligst oppgi en gyldig e-post adresse";
        return false;
    } else {
        errorMessage.innerHTML = "";
        return true;
    }
}

function validate_email_sr() {
    accept = REGEX_EMAIL.test(document.contactForm.email.value);
    errorMessage = document.getElementById("error-email-sr");
    
    if(!accept) {
        errorMessage.innerHTML = "Molimo vas da unesete ispravnu e-mail adresu";
        return false;
    } else {
        errorMessage.innerHTML = "";
        return true;
    }
}

/* Subject validation functions */
function validate_subject_en() {
    accept = REGEX_SUBJECT.test(document.contactForm.subject.value);
    errorMessage = document.getElementById("error-subject-en");
    
    if(!accept) {
        errorMessage.innerHTML = "This field can be at most 50 characters long";
        return false;
    } else {
        errorMessage.innerHTML = "";
        return true;
    }
}

function validate_subject_no() {
    accept = REGEX_SUBJECT.test(document.contactForm.subject.value);
    errorMessage = document.getElementById("error-subject-no");
    
    if(!accept) {
        errorMessage.innerHTML = "Dette feltet kan være opptil 50 tegn langt";
        return false;
    } else {
        errorMessage.innerHTML = "";
        return true;
    }
}

function validate_subject_sr() {
    accept = REGEX_SUBJECT.test(document.contactForm.subject.value);
    errorMessage = document.getElementById("error-subject-sr");
    
    if(!accept) {
        errorMessage.innerHTML = "Ovo polje može biti dugačko do 50 karaktera";
        return false;
    } else {
        errorMessage.innerHTML = "";
        return true;
    }
}

/* Message validation functions */
function validate_message_en() {
    accept = REGEX_MESSAGE.test(document.contactForm.message.value);
    errorMessage = document.getElementById("error-message-en");
    
    if(!accept) {
        errorMessage.innerHTML = "This field cannot be empty or longer than 1000 characters";
        return false;
    } else {
        errorMessage.innerHTML = "";
        return true;
    }
}

function validate_message_no() {
    accept = REGEX_MESSAGE.test(document.contactForm.message.value);
    errorMessage = document.getElementById("error-message-no");
    
    if(!accept) {
        errorMessage.innerHTML = "Dette feltet kan ikke være tomt eller lengre enn 1000 tegn";
        return false;
    } else {
        errorMessage.innerHTML = "";
        return true;
    }
}

function validate_message_sr() {
    accept = REGEX_MESSAGE.test(document.contactForm.message.value);
    errorMessage = document.getElementById("error-message-sr");
    
    if(!accept) {
        errorMessage.innerHTML = "Ovo polje ne može biti prazno ili duže od 1000 karaktera";
        return false;
    } else {
        errorMessage.innerHTML = "";
        return true;
    }
}

/* All inputs fields validation function - English page */
function validate_all_en() {
    nameAccept = validate_name_en();
    surnameAccept = validate_surname_en();
    emailAccept = validate_email_en();
    subjectAccept = validate_subject_en();
    messageAccept = validate_message_en();
    
    if(nameAccept && surnameAccept && emailAccept && subjectAccept && messageAccept) {
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
    subjectAccept = validate_subject_no();
    messageAccept = validate_message_no();
    
    if(nameAccept && surnameAccept && emailAccept && subjectAccept && messageAccept) {
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
    subjectAccept = validate_subject_sr();
    messageAccept = validate_message_sr();
    
    if(nameAccept && surnameAccept && emailAccept && subjectAccept && messageAccept) {
        return true;
    } else {
        return false;
    }
}