<?php
	class DataBase
	{
		public $localhost = "localhost";
		public $user ="root";
		public $dbconn ="db_connection";
		public $password='';
		
		function getConnect()
		{
			$connection = mysql_connect($this->localhost,$this->registration,$this->password);
			mysql_select_db($this->dbconn);
			return $connection;
		}
		function execute($query)
		{
			$myQuery =mysql_query($query);
			
			if($row = mysql_affected_rows()==1)
			{
				return 'Data entered on the database <br>';
			}else
			{
				return 'ERROR...could not add data <br>';
			}

		}
		
	}
?>