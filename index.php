<html>
<head>
<title>QUERY REQUEST PORTAL</title>
<style>
.content{
margin:0 auto;
width: 800px;
height:0 auto;
}
</style>
<script type="text/javascript">

function validateUsrn1()
{
var a1=document.forms["myForm"]["usr"].value;
if (a1==null || a1=="")
  document.forms["myForm"]["usr"].style.borderColor="red";
}

function validateUsrn2()
{
  document.forms["myForm"]["usr"].style.borderColor="green";
}

function validateUsrn3()
{
var a2=document.forms["myForm"]["usr"].value;
if (a2==null || a2=="") 
  {
  document.forms["myForm"]["usr"].style.borderColor="red";
  alert("Username field cannot be empty. Please enter a Username.");
  }
else 
  document.forms["myForm"]["usr"].style.borderColor="white";
}



function validateId1()
{
var b1=document.forms["myForm"]["id"].value;
if (b1==null || b1=="")
    document.forms["myForm"]["id"].style.borderColor="red";
}

function validateId2()
{
var digit1=new RegExp("^[\\d]{4}$");
var b2=document.forms["myForm"]["id"].value;
if (b2.match(digit1))
   document.forms["myForm"]["id"].style.borderColor="green";
else
   document.forms["myForm"]["id"].style.borderColor="red";
}

function validateId3()
{
var digit2=new RegExp("^[\\d]{5}$");
var b3=document.forms["myForm"]["id"].value;
if (!b3.match(digit2))
  {
    document.forms["myForm"]["id"].style.borderColor="red";
    alert("Employee ID is invalid. Please enter a 5 digit number.");
  }
else 
  document.forms["myForm"]["id"].style.borderColor="white";
}



function validateSub1()
{
var c1=document.forms["myForm"]["sub"].value;
if (c1==null || c1=="")
  document.forms["myForm"]["sub"].style.borderColor="red";
}

function validateSub2()
{
  document.forms["myForm"]["sub"].style.borderColor="green";
}

function validateSub3()
{
var c2=document.forms["myForm"]["sub"].value;
if (c2==null || c2=="") 
  {
  document.forms["myForm"]["sub"].style.borderColor="red";
  alert("Subject field cannot be empty. Please enter the Subject.");
  }
else 
  document.forms["myForm"]["sub"].style.borderColor="white";
}



function validateDes1()
{
var d1=document.forms["myForm"]["comments"].value;
if (d1==null || d1=="")
  document.forms["myForm"]["comments"].style.borderColor="red";
}

function validateDes2()
{
  document.forms["myForm"]["comments"].style.borderColor="green";
}

function validateDes3()
{
var d2=document.forms["myForm"]["comments"].value;
if (d2==null || d2=="") 
  {
  document.forms["myForm"]["comments"].style.borderColor="red";
  alert("Description field cannot be empty. Please enter the Description.");
  }
else 
  document.forms["myForm"]["comments"].style.borderColor="white";
}


function validateForm()
{
var a=document.forms["myForm"]["usr"].value;
if (a==null || a=="") 
  {
  alert("Username field cannot be empty. Please enter a Username.");
  return false;
  }
var digit=new RegExp("^[\\d]{5}$");
var b=document.forms["myForm"]["id"].value;
if (b==null || b=="")
  {
    alert("Employee ID field cannot be empty.");
    return false;
  }
if (!b.match(digit))
  {
    alert("Employee ID is invalid. Please enter a 5 digit number.");
    return false;
  }
var c=document.forms["myForm"]["sub"].value;
if (c==null || c=="")
  {
  alert("Subject field cannot be empty. Please enter the Subject.");
  return false;
  }
var radios = document.getElementsByName("priority");
    var formValid = false;
    var i = 0;
    while (!formValid && i < radios.length) {
        if (radios[i].checked) formValid = true;
        i++;        
    }
    if (!formValid)
    {
    alert("Select a Priority.");
    return false;
    }
var d=document.forms["myForm"]["comments"].value;
if (d==null || d=="")
  {
  alert("Description field cannot be empty. Please enter the Description.");
  return false;
  }
}
</script>
</head>
<body background="http://172.16.1.10/portal/123.jpg">
<div class="header">
<br><center> <img src="http://www.accendotechnologies.com/images/logo.png"/> </center> 
</div>
<div class="wrapper">
<div class="content">
<br><font face="ARIAL" color="black"><center><h2>QUERY/REQUEST TICKET GENERATION</font></h2></center>
<font face="ARIAL" color="black">
<form name="myForm" action="http://172.16.1.10/portal/mail.php" onsubmit="return validateForm()" method="post" enctype="multipart/form-data">
<table align="center" border="0" width="65%" height="50%">
<tr><td><b>User Name: </b></td>
    <td><input type="text" name="usr" size="38" onfocus="validateUsrn1()" onkeypress="validateUsrn2()" onblur="validateUsrn3()"></td>
</tr>
<tr><td><b>Employee ID: </b></td>
    <td><input type="text" name="id" size="38" onfocus="validateId1()" onkeypress="validateId2()" onblur="validateId3()"></td>
</tr>
<tr><td><b>Subject: </b></td>
    <td><input type="text" name="sub" size="38" onfocus="validateSub1()" onkeypress="validateSub2()" onblur="validateSub3()"></td>
</tr>
<tr><td><b>Priority: </b></td><td><input type="radio" name="priority" value="High">High
                                  <input type="radio" name="priority" value="Moderate">Moderate
                                  <input type="radio" name="priority" value="Low">Low</td></tr>
<tr><td><b>Description: </b></td>
<td><textarea name="comments" rows="12" cols="54" onfocus="validateDes1()" onkeypress="validateDes2()" onblur="validateDes3()"></textarea></td></tr>
<tr><td><b>Screenshot: </b></td><td><input type="file" name="file" id="file"></td></tr>
<tr><td></td>
<td><pre><input type="reset" value="Reset">                <input type="submit" value="Submit"></pre></td></tr>
</table></form>
<h3><p align="right"><font face="ARIAL" color="black"> For Technical Support contact Network Admin <font/></p></h3>
</div>
</div>
</body>
</html>

