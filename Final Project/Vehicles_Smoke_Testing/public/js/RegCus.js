function validateCustomerReg() {
    let a = document.forms["CusReg"]["user"].value;
    let b = document.forms["CusReg"]["pass"].value;


    if (a == "" || b == "") {
        alert("fields must be filled out");
        return false;
    }
}