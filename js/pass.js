function CheckPasswordStrength(password) {
    var password_strength = document.getElementById("password_strength");
    var className;
    var classWidth="width:0%;";
    var progvalue;
    //TextBox left blank.
    if (password.length == 0) {
        password_strength.innerHTML = "";
        $("#prog").attr("style",classWidth);

        return;
    }

    //Regular Expressions.
    var regex = new Array();
    regex.push("[A-Z]"); //Uppercase Alphabet.
    regex.push("[a-z]"); //Lowercase Alphabet.
    regex.push("[0-9]"); //Digit.
    regex.push("[$@$!%*#?&]"); //Special Character.

    var passed = 0;

    //Validate for each Regular Expression.
    for (var i = 0; i < regex.length; i++) {
        if (new RegExp(regex[i]).test(password)) {
            passed++;
        }
    }

    //Validate for length of Password.
    if (passed > 2 && password.length > 8) {
        passed++;
    }

    //Display status.
    var color = "";
    var strength = "";
    switch (passed) {
        case 0:
        case 1:
            strength = "Weak";
            color = "White";
            className="progress-bar progress-bar-danger";
            progvalue="20";
            classWidth="width:20%;";
            break;
        case 2:
            strength = "Good";
            color = "white";
            className="progress-bar progress-bar-warning";
            progvalue="40";
            classWidth="width:40%;";
            break;
        case 3:
        case 4:
            strength = "Strong";
            color = "white";
            className="progress-bar progress-bar-info";
            progvalue="70";
            classWidth="width:70%;";
            break;
        case 5:
            strength = "Very Strong";
            color = "white";
            className="progress-bar progress-bar-success";
            progvalue="100";
            classWidth="width:100%;";
            break;
    }
    password_strength.innerHTML = strength;
    password_strength.style.color = color;
    $("#prog").attr("aria-valuenow", progvalue);
    $("#prog").attr("class",className);
    $("#prog").attr("style",classWidth);
}