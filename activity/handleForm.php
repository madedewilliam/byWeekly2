<html>
<body>
	<form name="form1" method="post" action="handleForm.php">
  <table width="230" height="194" border="1">
    <tr>
      <td>Number 1 </td>
      <td><input name="num1" type="text" id="num1"></td>
    </tr>
    <tr>
      <td>Number 2 </td>
      <td><input name="num2" type="text" id="num2"></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><p>
        <input type="submit" name="btnAdd" value="Add" id="btnAdd">
        <input type="submit" name="btnSubtract" value="Subtract" id="btnSubtract">
        </p>
        <p>
          <input type="submit" name="btnMultiply" value="Multiply" id="btnMultiply">
          <input type="submit" name="btnDivide" value="Divide" id="btnDivide">
      </p></td>
    </tr>
    <tr>
      <td><?php session_start();?>
	  <?php
			
			error_reporting(E_ERROR);
			$_SESSION["username"]=1;
			if(($_SESSION["username"]=="admin"))
			{
						header("Location:handleForm.php");
				}
				else
				{								
				
					$num1=$_POST['num1'];
					$num2=$_POST['num2'];	
					require('firstClass.class.php');
					$calc = new Calculator($num1,$num2);
	
					if(isset($_POST['btnAdd']))
					{					
						print $calc->add($num1,$num2).'<br/>';
					}
					elseif(isset($_POST['btnSubtract']))
					{
							print $calc->subtract($num1,$num2);
						}
						elseif(isset($_POST['btnMultiply']))
						{
								print $calc->multiply($num1,$num2);
							}
						else
						print $calc->divide($num1,$num2);											
				}
	?></td>
      <td>&nbsp;</td>
    </tr>
  </table>
</form>
	
	
</body>

</html>
