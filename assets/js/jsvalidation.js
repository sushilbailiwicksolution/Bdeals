function ContactUs(){
	
	 var Name=document.getElementById("Name").value;
	    if(Name=='' || Name==null){			
			 document.getElementById("Name-val").innerHTML='Please enter your name';
			 document.getElementById("Name").style.border='1px #FF8080 solid';
			 document.getElementById("Name-val").style.color='#FF8080';			 
			document.getElementById("Name").focus();
			return false;
			}else{
				document.getElementById("Name-val").innerHTML='';
			
				
				}
		 var email=document.getElementById("email").value;
	    if(email=='' || email==null){	
		     document.getElementById("email-val").innerHTML='Please enter a valid e-mail address';
			document.getElementById("email").style.border='1px #FF8080 solid';
			document.getElementById("email-val").style.color='#FF8080';
			document.getElementById("email").focus();
			return false;
			}else{
				document.getElementById("email-val").innerHTML='';				
				}
		var atpos=email.indexOf("@");
		var dotpos=email.lastIndexOf(".");
		if (atpos<1 || dotpos<atpos+2 || dotpos+2>=email.length)
		  { 
					document.getElementById("email-val").innerHTML='Not a valid e-mail address';
					document.getElementById("email-val").style.color='#FF8080';
					document.getElementById("email").focus();
		  return false;
		  }else{
			  document.getElementById("email-val").innerHTML='';
			
			  }	
			  
			  
	var Mobile=document.getElementById("Mobile").value;
	    if(Mobile=='' || Mobile==null){			
			 document.getElementById("Mobile-val").innerHTML='Please enter mobile number';
			 document.getElementById("Mobile").style.border='1px #FF8080 solid';
			 document.getElementById("Mobile-val").style.color='#FF8080';			 
			document.getElementById("Mobile").focus();
			return false;
			}
	var pattern = /^[\s()+-]*([0-9][\s()+-]*){10}$/;
            if (pattern.test(Mobile)) {		
			
			 //return true;
			}
			if (!pattern.test(Mobile)) {		
			 document.getElementById("Mobile-val").innerHTML='Please enter valid mobile number';
			 document.getElementById("Mobile").style.border='1px #FF8080 solid';
			 document.getElementById("Mobile-val").style.color='#FF8080';			 
			document.getElementById("Mobile").focus();
			 return false;
			}
	else{
				document.getElementById("Mobile-val").innerHTML='';
			
				
				}
	
	var Address=document.getElementById("Address").value;
	    if(Address=='' || Address==null){			
			 document.getElementById("Address-val").innerHTML='Please enter your address';
			 document.getElementById("Address").style.border='1px #FF8080 solid';
			 document.getElementById("Address-val").style.color='#FF8080';			 
			document.getElementById("Address").focus();
			return false;
			}else{
				document.getElementById("Address-val").innerHTML='';
			
				
				}
	var City=document.getElementById("City").value;
	    if(City=='' || City==null){			
			 document.getElementById("City-val").innerHTML='Please enter your city';
			 document.getElementById("City").style.border='1px #FF8080 solid';
			 document.getElementById("City-val").style.color='#FF8080';			 
			document.getElementById("City").focus();
			return false;
			}else{
				document.getElementById("City-val").innerHTML='';
			
				
				}

	var Purpose=document.getElementById("Purpose").value;
	    if(Purpose=='' || Purpose==null){			
			 document.getElementById("Purpose-val").innerHTML='Please select your purpose';
			 document.getElementById("Purpose").style.border='1px #FF8080 solid';
			 document.getElementById("Purpose-val").style.color='#FF8080';			 
			document.getElementById("Purpose").focus();
			return false;
			}else{
				document.getElementById("Purpose-val").innerHTML='';
			
				
				}
	var Message=document.getElementById("Message").value;
	    if(Message=='' || Message==null){			
			 document.getElementById("Message-val").innerHTML='Please enter your message';
			 document.getElementById("Message").style.border='1px #FF8080 solid';
			 document.getElementById("Message-val").style.color='#FF8080';			 
			document.getElementById("Message").focus();
			return false;
			}else{
				document.getElementById("Message-val").innerHTML='';
			
				
				}			
	
}