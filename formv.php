<!DOCTYPE html>
<html>
  <head>
   <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Register</title>
<script src="http://code.jquery.com/jquery.js"></script>
  <script type="text/javascript">
  function checkform()
  {	

	var name=document.getElementById("regname").value;
    var place=document.getElementById("regplace").value;
    var sports=document.getElementById("regsports").value;
	var captain=document.getElementById("regcaptain").value;
	var number1=document.getElementById("regnumber1").value;
	var number2=document.getElementById("regnumber2").value;
    var email=document.getElementById("regemail").value;
		if(!name||!place||!sports||!captain||!number1||!number2||!email)
    {
      //alert("Form Not Complete");
      
	  var formajax=document.getElementById("formajax").value;
    document.getElementById("regformajaxtext").innerHTML="<p class=text-error>Please Fill the empty fields</p>";
    return false;
	}
    else 
    {	alert("You have registered successfully.");
      //var formajax=document.getElementById("formajax").value;
      //document.getElementById("regformajaxtext").innerHTML="<p class=text-error>You have registered successfully</p>";
   	  return true;
	  }
  }
  /*function checkname()
  { 
    var name=document.getElementById("regname").value;
    if(!name)
    {
      document.getElementById("regnametext").innerHTML="<p class=text-error>Cannot be left Blank</p>";
    }
  }
  /*function checksports()
  { 
    var sports=document.getElementById("regsports").value;
    if(!sports)
    {
      document.getElementById("regsportstext").innerHTML="<p class=text-error>Cannot be left Blank</p>";
    }
  }
  
  function checkplace()
  {
    var place=document.getElementById("regplace").value;
    if(!place)
    {
      document.getElementById("regplacetext").innerHTML="<p class=text-error>Cannot be left Blank</p>";
    }
  }
  function checkcaptain()
  {
    var captain=document.getElementById("regcaptain").value;
    if(!captain)
    {
      document.getElementById("regcaptaintext").innerHTML="<p class=text-error>Cannot be left Blank</p>";
    }
  }
  function checkcontact1()
  {
    var contact1=document.getElementById("regnumber1").value;
    if(!contact1)
    {
      document.getElementById("regnumber1text").innerHTML="<p class=text-error>Cannot be left Blank</p>";
    }
  }
  
  function checkcontact2()
  {
	var contact2=document.getElementById("regnumber2").value;
    if(!contact2)
    {
      document.getElementById("regnumber2text").innerHTML="<p class=text-error>Cannot be left Blank</p>";
    }

  }
  function checkemail()
  {
    var email=document.getElementById("regemail").value;
    if(!email)
    {
      document.getElementById("regemailtext").innerHTML="<p class=text-error>Cannot be left Blank</p>";
    }
  }
  
 function checkpass1()
  {
    var pass1=document.getElementById("regpass1").value;
    if(!pass1)
    {
      document.getElementById("regpass1text").innerHTML="<p class=text-error>Cannot be left Blank</p>";
    }
  }
 function checkpass()
  {
    var pass2=document.getElementById("regpass2").value;
    var pass1=document.getElementById("regpass1").value;
    if(pass1!=pass2)
    {
      document.getElementById("regpass2text").innerHTML="<p class=text-error>Passwords Mismatch!!</p>";
    }
  }
 */
  </script>
    
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
  </head>
<body align="center">
<form name="reg" onsubmit="return checkform()" method="post" action="register.jsp">
<h3><font face="Cambria">Welcome to the Registration Page</font></h3>

<table align="center" style="position:absolute;top:70px; left:125px;">
<tr>
  <td><input name="regname" id="regname" placeholder="College"  onBlur="checkname()" type="text" size"50">
  </input>
</td>
<td>
  <div id="regnametext">
</div>
</td>
</tr>
<tr>
	
  <td><textarea rows="5" name="regplace" id="regplace" type="text" placeholder="Postal Address" size"50"></textarea></td>

<td>
  <div id="regplacetext">
</div>
</td>
</tr>

<tr>
<td>
<label>
<select id="regsports" name="regsports">
          <option value="Athletics" selected="selected">Athletics(Men)</option>
          <option value="Badminton">Badminton(Men)</option>
          <option value="Basketball">Basketball(Men)</option>
          <option value="Chess">Chess(Men)</option>
          <option value="Cricket">Cricket(Men)</option>
          <option value="Football">Football(Men)</option>
          <option value="Tennis">Tennis(Men)</option>
          <option value="TableTennis">Table Tennis(Men)</option>
          <option value="Volleyball">Volleyball(Men)</option>
           <option value="Squash">Squash(Men)</option>
          <option value="Weightlifting">Weightlifting(Men)</option>
         <option value="Athleticswomen">Athletics(Women)</option>
          <option value="ttwomen">Table Tennis(Women)</option>
          <option value="Badmintonwomen">Badminton(Women)</option>
          <option value="Basketballwomen">Basketball(Women)</option>
             <option value="volleywomen">Volley(Women)</option>
          
</select>
</label>
</td>

	
  <div id="regsportstext">
</div>
</td>
</tr>
<tr>
	<td><input name="regcaptain"  id="regcaptain" placeholder="Captain" type="text" size="50"></input>
  </td></br></br>
<td>
  <div id="regcaptaintext">
</div>
</td>
</tr>

<tr>
	
  <td><input name="regnumber1" id="regnumber1" placeholder="Contact Number 1" type="text" size="50">
  </input></td></br></br>
<td>
  <div id="regnumber1text">
</div>
</td>
</tr>

<tr>
	
  <td><input name="regnumber2" placeholder="Contact Number 2" id="regnumber2" type="text" size="50"></input></td></br></br>
<td>
  <div id="regnumber2text">
</div>
</td>
</tr>

<tr>
	
  <td><input name="regemail" id="regemail" type="text" size="50" placeholder="Email"></input></td>

<td>
  <div id="regemailtext">
</div>
</td>
</tr>
<tr>
<td>
<input id="formajax" type="submit" class="btn btn-primary" value="Register" ></input>
</td>
<tr>
<td>
 <div id="regformajaxtext">
</div>
</td>
</tr>
	
</tr>
</table>
</FORM>



    <script src="js/bootstrap.min.js"></script>
  </body>

</html>