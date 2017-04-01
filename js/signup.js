/**
 * Created by Nikhil on 3/30/2017.
 */
$(document).ready(function(){

    $("input").keydown(function(){

        if(validateName()&&validateUserName()){
            $("Button").removeClass("btn-default");
            $("Button").addClass("btn-success");


        }
        else {
            $("Button").removeClass("btn-success");
            $("Button").addClass("btn-default");

        }

    });

});
function validateUserName(){
var uname = document.forms["nameForm"]["uname"].value;
if(uname==""||uname.length<3)
{
    return false;
}
else
    return true;
    
}
function validateName()
{
    var flag=false;
    var fname = document.forms["nameForm"]["fname"].value;
    var lname = document.forms["nameForm"]["lname"].value;
    if(fname=="")
    {
        flag=false;
    }
    else
    {
        var patt1 = /[0-9]/i;
        var result1 = patt1.test(fname);
        var result2 = patt1.test(lname);

        if(result1&&result2)
        {
            flag=false;
            document.getElementById("demo").innerHTML = "success";
        }
        else
        {
            flag=true;
            document.getElementById("demo").innerHTML = "Fail";
        }
    }
    return flag;
}

