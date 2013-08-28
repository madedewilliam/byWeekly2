<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="style.css" />
<title>Registration</title>
<style type="text/css">
#form1 #container #content #content_main blockquote blockquote blockquote blockquote blockquote table tr td {
	color: #F00;
}
</style>
</head>

<body>
<form id="form1" name="form1" method="post" action="register.php">
<div id="container">
		<div id="header">
       	  <h2><span class="off"></span></h2>
            <h2>Designed by William Madede</h2>
          <li> <a href="index.html" ><h1>Madede's Digital Media</h1></a></li>
  </div>   
        
        <div id="menu">
        	<ul>
            	<li class="menuitem"><a href="index.html">Home</a></li>
                <li class="menuitem"><a href="about.html">About Us</a></li>
                <li class="menuitem"><a href="products.html">Products</a></li>
                <li class="menuitem"><a href="contacts.html">Contact Us</a></li>
            </ul>
        </div>
        
        <div id="leftmenu">

        <div id="leftmenu_top"></div>

				<div id="leftmenu_main">    
                
                <h3>Register or Login</h3>
                        
                <ul>
                    <li><a href="login.html">Log in</a></li>
                    <li><a href="register.html">Register</a></li>
                    <li></li>
                </ul>
</div>
                
                
              <div id="leftmenu_bottom"></div>
        </div>
        
        
        
        
		<div id="content">
		  <div id="content_main">
        	<blockquote>
        	  <blockquote>
        	    <blockquote>
        	      <blockquote>
        	        <blockquote>
        	          <h1>Register here	 </h1>
        	          <p>(Red asterik = Field mandatory)<table bgcolor="#CCFFCC" width="453" height="223" border="1" align="center">
    <tr>
      <td colspan="2"><h3 align="center" class="ddd">&nbsp;</h3></td>
    </tr>
    <tr>
      <td width="117"><strong>Name</strong></td>
      <td width="167"><input type="text" name="name" id="name" /> 
        *</td>
    </tr>
    <tr>
      <td class="ddd"><strong>Surname</strong></td>
      <td><input type="text" name="surname" id="surname" /> 
        *</td>
    </tr>
    <tr>
      <td class="ddd"><strong>Cell Number</strong></td>
      <td><input type="text" name="cellNumber" id="cellNumber" /> 
        * </td>
    </tr>
    <tr>
      <td class="ddd"><strong>Postal Address</strong></td>
      <td class="ddd"><input type="text" name="address" id="address" /></td>
    </tr>
    <tr>
      <td class="ddd"><strong>Nickname</strong></td>
      <td class="ddd"><input type="text" name="nickname" id="nickname" /></td>
    </tr>
    <tr>
      <td colspan="2" class="ddd"><p>&nbsp;</p>
        <blockquote>
          <blockquote>
            <blockquote>
              <h2 align="center"> <strong>Login Details </strong></h2>
            </blockquote>
          </blockquote>
        </blockquote></td>
      </tr>
    <tr>
      <td class="ddd"><strong>E-mail</strong></td>
      <td><input type="text" name="email" id="email" /> 
        *</td>
    </tr>
    <tr>
      <td class="ddd"><strong>Password</strong></td>
      <td><input type="text" name="password" id="password" /> 
         *(at least 8 characters)</td>
    </tr>
    <tr>
      <td class="ddd"><input type="submit" name="btnSubmit" id="btnSubmit" value="Submit" /></td>
      <td><input type="reset" name="btnReset" id="btnReset" value="Reset" /></td>
    </tr>
  </table></p>
      	            </blockquote>
      	          </blockquote>
      	        </blockquote>
      	      </blockquote>
      	    </blockquote>
<h3>&nbsp;</h3>
<p></p>
<p>&nbsp;</p>
        </div>
        <div id="content_bottom">
          <p>&nbsp;</p>
          <p>
          
       	<?php
		require "registerClass.class.php";
		if(isset($_POST['username'])&&isset($_POST['email'])&&isset($_POST['password'])&&isset($_POST['password1']))
		{		
			$name=trim($_POST['name']);
			$surname=trim($_POST['surname']);
			$cellNumber=trim($_POST['cellNumber']);
			$address=trim($_POST['address']);
			$nickname=trim($_POST['nickname']);
			$email=trim($_POST['email']);
			$password=trim($_POST['password']);
	
			  if (!$name||!$surname||!$cellNumber||!$address||!$nickname||!$email||!$password) 
			  {
				 echo "You have not entered all the required details.<br />"
				  ."Please go back and try again.";
				  exit;
			  }
			  elseif(strlen($password)< 8)
			  {
				 echo "Password is too short".'<br/>'; 
				 exit;
			  }
			  
			  if(preg_match("/^\(?[0-9]{3}\)?[0-9]{3}[-.]?[0-9]{4}$/",$cellNumber))
			  {
					echo"Number is valid".'<br/>';
				  }
				  else
				  {
						echo"Number is invalid".'<br/>';
					  }
			  
			 if(preg_match("/^[a-zA-Z0-9_\-.]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-.]+$/",$email))
			 {
					echo" Email address is correct".'<br/>';	
			 }
			 else
			 {
				echo "Email is incorrect... Try again".'<br/>';
			 }
		
			 if(strlen($password)>20)
			 {
				echo "Password is too long".'<br/>';
			 }
			
			if(preg_match('/^(?=.*\d)(?=.*[A-Za-z])[0-9A-Za-z!@#$%&^*()]{8,20}$/',$password))
			{
				echo "Password is strong".'<br/>'."Password is valid".'<br/>';	
			}
			else
			{
				echo "Password is invalid".'<br/>';
			}
		}
?>
          
          </p>
        </div>
            
            <div id="footer">
              <h3 align="right">&nbsp;</h3>
              <h3 align="right">@copyright 211089121	Madede's Digital Media... All rights reserved...<a href="conditions.html"> Terms and Conditions</a></h3>
            </div>
      </div>
   </div>
</form>
</body>
</html>
