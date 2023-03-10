function validateForm() {
    let a = document.forms["addData"]["ftype"].value;
    let b = document.forms["addData"]["etype"].value;
    let c = document.forms["addData"]["lnum"].value;
    let d = document.forms["addData"]["vmodel"].value;

    if (a == "" || b == "" || c == "" || d == "") {
        alert("fields must be filled out");
        return false;
    }
}