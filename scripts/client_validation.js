/*-----------------------------------------------------*/
/*------------- Scandina JS Script File ---------------*/
/*----------- Client-side Form Validation -------------*/
/*-------------- Author: Vladimir Maric ---------------*/
/*-----------------------------------------------------*/

// RegEx variables 
var regExName = /^[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,20}$/;
var regExEmail = "";
var regExTlf = "";
var regExSubject = "";
var regExMessage = "";

/* Name validation function */
function validate_name() {
    errEn = document.getElementById("error-name-en");
    errNo = document.getElementById("error-name-no");
    errSr = document.getElementById("error-name-sr");
    accept = regExName.test(document.contactForm.name.value);
    
    // Cheks if name validation not accepted and if document contains en-lang error message div
    if(!accept && errEn !== null) {
        // Error message for name input added (English)
        errEn.innerHTML = "First name must be between 2 and 20 characters long and include only letters";
        return false;
    } else {
        // Otherwise, name validation accepted, no error message shown
        errEn.innerHTML = "";
        return true;
    }
    
    // Cheks if name validation not accepted and if document contains no-lang error message div
    if(!accept && errNo !== null) {
        // Error message for name input added (Norwegian)
        errNo.innerHTML = "Fornavnet må være mellom 2 og 20 tegn langt og kun inneholde bokstaver";
        return false;
    } else {
        // Otherwise, name validation accepted, no error message shown
        errNo.innerHTML = "";
        return true;
    }
    
    // Cheks if name validation not accepted and if document contains sr-lang error message div   
    if(!accept && errSr !== null) {
        // Error message for name input added (Serbian)
        errSr.innerHTML = "Ime mora biti dugačko između 2 i 20 znakova i sadržati samo slova";
        return false;
    } else {
        // Otherwise, name validation accepted, no error message shown
        errSr.innerHTML = "";
        return true;
    }
}

/* Surname validation function */
function validate_surname() {
    errEn = document.getElementById("error-surname-en");
    errNo = document.getElementById("error-surname-no");
    errSr = document.getElementById("error-surname-sr");
    accept = regExName.test(document.contactForm.surname.value);
    
    // Cheks if surname validation not accepted and if document contains en-lang error message div
    if(!accept && errEn !== null) {
        // Error message for name input added (English)
        errEn.innerHTML = "Last name must be between 2 and 20 characters long and include only letters";
        return false;
    } else {
        // Otherwise, name validation accepted, no error message shown
        errEn.innerHTML = "";
        return true;
    }
    
    // Cheks if surname validation not accepted and if document contains no-lang error message div
    if(!accept && errNo !== null) {
        // Error message for name input added (Norwegian)
        errNo.innerHTML = "Etternavnet må være mellom 2 og 20 tegn langt og kun inneholde bokstaver";
        return false;
    } else {
        // Otherwise, name validation accepted, no error message shown
        errNo.innerHTML = "";
        return true;
    }
    
    // Cheks if surname validation not accepted and if document contains sr-lang error message div   
    if(!accept && errSr !== null) {
        // Error message for name input added (Serbian)
        errSr.innerHTML = "Prezime mora biti dugačko između 2 i 20 znakova i sadržati samo slova";
        return false;
    } else {
        // Otherwise, name validation accepted, no error message shown
        errSr.innerHTML = "";
        return true;
    }
}

/* Function that Checks if all fields are validated */
function validate_all() {
    nameAccept = validate_name();
    surnameAccept = validate_surname();
    
    if(nameAccept && surnameAccept) {
        return true;
    }
    
    return false;
}
