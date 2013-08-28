<?php
session_start();
class Calculator
 {
	 
 	private $number1;
	private $number2;
	private $numb1,$numb2;
	
	function __construct($number1,$number2)
	{
		$this->number1 = $number1;
		$this->number2 = $number2;
	}
	
	function add($numb1,$numb2)
	{
		
		return ($numb1+$numb2);
	}
	
	function subtract($numb1,$numb2)
	{
		
		return ($numb1-$numb2);
	}
	
	function divide($numb1,$numb2)
	{
		
		return ($numb1 / $numb2);
	}
	
	function multiply($numb1,$numb2)
	{
		return $numb1 * $numb2;
	}
 }

?>