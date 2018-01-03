function validateForm() 
{
    var x = document.forms["form"]["email"].value;
    var at = x.indexOf("@");
    var dot = x.lastIndexOf(".");
	var a=document.forms["form"]["pass"].value;
	if(a.length<8)
    alert("Password is very short");
    if (at<1 || dot<at+2 || dot+2>=x.length)
        alert("Not a valid e-mail address");
	var d=document.forms["form"]["day"].value;
	var m=document.forms["form"]["month"].value;
	if(m=="feb" && d>28)
	{alert("Invalid date");
	return false;}
	return true;
}
