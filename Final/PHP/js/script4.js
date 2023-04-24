function validateForm() {
    let a = document.forms["addData"]["user"].value;
    let b = document.forms["addData"]["pass"].value;

    if (a == "" || b == "") {
        alert("fields must be filled out");
        return false;
    }
}