function validate(){


	var arrivaldate=document.getElementById("date").value;
	var enteredyear=Number(arrivaldate.substring(0,4));
	var actualyear=new Date().getFullYear();
	if(enteredyear<actualyear){
		document.getElementById("errordate").innerHTML="Invalid year";
	}

	var nights=document.getElementById("nights").value;
	regex=/^[0-9]+$/;
	if(regex.test(nights))
	{
	document.write("corret");
	}
	else{
	document.getElementById("errornight").innerHTML="Nights must be a number";
	}


	var a=document.getElementById("name").value;
	if(a==""){
	document.getElementById("errorname").innerHTML="Name is required";
	}
	var email=document.getElementById('emailid').value;
	if(email==""){
		document.getElementById('erroremail').innerHTML="empty email";		
	}
	else{
		var erroremailmsg="email is invalid"
		var a=document.getElementById('emailid').value;
		var l=a.indexOf("@");
		var l1=a.lastIndexOf(".");
		var s=a.substring(l1+1,a.length);
		if(l==-1 || l1==-1 || l<2 || (l+2)>=l1 || s.length<2)
		document.getElementById('erroremail').innerHTML=erroremailmsg;
		}	
	var errortelephonemsg="Phone number is invalid";
	var tele=document.getElementById('telephone').value;
	var reg=/^[0-9]+$/;
	if(reg.test(tele)){
	document.getElementById('errortelephone').innerHTML=tele;
	}
	else{
	document.getElementById('errortelephone').innerHTML=errortelephonemsg;	
	}

}


