<?php
	require "databaseClass.php";
	class User
	{
		public $username;
		public $email;
		public $password;
		function __constructor($username,$email)
		{
			$this->username=$username;
			$this->email=$email;
			
		}
		function setPassword($password)
		{
			$this->password =md5($password);
		}
		function dispalyUserInfo()
		{
			echo "The username is " + $this->username + "The email address is" + $this->email;
		}
		function save($username,$email,$password)
		{
			$database=new DataBase;
			$connect=$database->getConnect();
			$query="INSERT into registration(username,email,password)values('".$username."','".$email."','".$password."')";
	
			echo $database->execute($query);
		}
		
		
	}
	
	
?>