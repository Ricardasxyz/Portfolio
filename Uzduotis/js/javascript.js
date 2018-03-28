function validateFormJs() {
    var vardas = document.forms["validacija"]["name"].value;
    var pavarde = document.forms["validacija"]["lastname"].value;
    var message = document.forms["validacija"]["message"].value;
    if (vardas == "" || pavarde == "" || message == "") {
        alert("Irasykite duomenis");
        return false;
    }
    else{
    	alert("duomenys sekmingai ivesti! ");
    }
}