function validateOfficerReg() {
    let a = document.forms["OfficerReg"]["user"].value;
    let b = document.forms["OfficerReg"]["pass"].value;


    if (a == "" || b == "") {
        alert("fields must be filled out");
        return false;
    }
}