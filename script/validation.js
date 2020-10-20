document.getElementById("main2").addEventListener("submit", validate);

function validate(e) {
    let validFName = validateInputField("ffname", "errffname");
    let validLName = validateInputField("flname", "errflname");
    let validAge = validateAge("age","errAge");
    let validGender = validateSelectList("gender", "errGender")
    let validGym = validateSelectList("gym", "errGym")
    /*let validInput = validFName && validLName && validOrg && validTitle &&
        validEmail && validSymbols && validIndustry && validTerms && validServices && validHear;*/
    let validInput = validFName && validLName && validAge;

    if(validInput === false) {
        e.preventDefault();
    }
}

//Validates Name, email and password Fields to make sure they are not empty
function validateInputField(id, errorId) {

    let txtField = document.getElementById(id).value;
    let errField = document.getElementById(errorId);
    if(txtField === "") {
        errField.className = "err";
        return false;
    }
    errField.className = "hidden";
    return true;
}

function validateSelectList(id, errorId) {
    let index = document.getElementById(id).selectedIndex;
    let errField = document.getElementById(errorId);
    if(index === 0) {
        errField.className = "err";
        return false;
    }
    errField.className = "hidden";
    return true;
}

function validateAge(id, errorId) {

    let txtField = document.getElementById(id).value;
    let errField = document.getElementById(errorId);
    if(txtField === "" || txtField < 13) {
        errField.className = "err";
        return false;
    }
    errField.className = "hidden";
    return true;
}



