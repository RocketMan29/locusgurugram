<header style="background-color:#222; color:#fff; text-align:center; font-size:20px; font-family:tahoma; text-decoration:none; padding:10px 10px 10px 10px;">
<p><a href="prime.php" style="color:#fff; text-decoration:none;">Q-1</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="validate.php" style="color:#fff; text-decoration:none;">Q-2</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="index.php" style="color:#fff; text-decoration:none;">Q-3</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="palin.php" style="color:#fff; text-decoration:none;">Q-4</a></p>
</header>

<br><br><br><br><br>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<h1 style="text-align:center; font-size:30px; color:#222; font-family:tahoma;">Small PHP Applications for Validating password</h1><br><br><br><br><br>

  <form action="#" onsubmit="return passwordvalidation();" name="validationform">
  
    <label>Password</label>
  <input type="password" name="psw" style="width:100%; padding:20px 20px 20px 20px; text-align:center;" required>

    <input type="submit" value="Submit" style="background-color:#000; color:#fff; width:100%; padding:20px 20px 20px 20px;text-align:center; cursor:pointer;">
  </form>


<div>
<p id="sampleoutput"></p>
<p id="explanation"></p>

</div>

<script type="text/javascript">

  function passwordvalidation()
  {
    var password = document.forms["validationform"]["psw"].value;
	
	var passlength= password.length;
	var required=8;
	var requiredlength= required-passlength;
      if(passlength < required) {
       document.getElementById("sampleoutput").innerHTML = passlength;
	   var explanation= "Atleast  "+requiredlength+"  more character is needed to complete it.";
	    document.getElementById("explanation").innerHTML = explanation;
        return false;
      }
	 
     
	  passwordfilter = /[A-Z]/;
      if(!passwordfilter.test(password)) {
        alert("Password must contain at least one uppercase letter.");
     return false;
      }
	  
     passwordfilter = /[a-z]/;
      if(!passwordfilter.test(password)) {
        alert("Password must contain at least one lowercase letter.");
		return false;
      }
      
	  passwordfilter = /[0-9]/;
      if(!passwordfilter.test(password)) {
        alert("Password must contain at least one number.");
        return false;
      }
	  
	  passwordfilter= /[!@#\$%\^&\*]/;
	   if(!passwordfilter.test(password)) {
        alert("Password must contain at least one special character.");
		return false;
      }
   
  }

</script>
