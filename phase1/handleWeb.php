<html>
<head>
<title>Feedback</title>
</head>

<body>
<p>click <a href="register.html">here </a>to go back...</p>
<?php

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

?>
</body>
</html>
