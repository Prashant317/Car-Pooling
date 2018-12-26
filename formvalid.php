<?php	

function validation()
{   
    $result=true;
	$i=document.getElementsByTagName("input");
	if(i[0].value.length==0)
	{
		alert("name not entered");
		$result=false;
	}
	if(i[1].value.length==0)
	{
		alert("last name not entered");
		$result=false;
	}
	if(i[2].value.length==0)
	{
		alert("invalid address");
		$result=false;
	}
	if(i[4].value.length==!10)
	{
		alert("invalid contact");
		$result=false;
	}
	if(i[6].value.length==0)
	{
		alert("mention destination");
		$result=false;
	}
	$e=document.getElementsByName("user_email")[0].value;
	$atindex=e.indexOf('@');
	$dotindex=e.lastIndexOf('.');
	if($atindex < 1 || dotindex >=e.length-2 || dotindex-atindex < 3)
	{
		alert("invalid email");
		$result=false;
	}
	return $result;	
}

?>