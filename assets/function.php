<?php

function setBalance($amount,$process,$accountNo)
{
	$con = new mysqli('localhost','root','','spark_bank');
	$array = $con->query("select * from useraccounts where accountNo='$accountNo'");
	$row = $array->fetch_assoc();
	
	if($process=="debit")
	{
		$balance = $row['balance'] - $amount;
		if($balance<0)
		{
				return $balance;
		}
		else
		{
		  return $con->query("update useraccounts set balance = '$balance' where accountNo = '$accountNo'");
		}
	}
	else if ($process == 'credit')
	{

		$balance = $row['balance'] + $amount;
		return $con->query("update useraccounts set balance = '$balance' where accountNo = '$accountNo'");
	    
     }
 }
 ?>
