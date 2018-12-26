<?php
$conn=mysqli_connect("localhost","root","root","transport");
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$query = "SELECT * FROM `user_info`";
mysqli_query($conn,$query);
mysqli_close($conn);

if(@$is_query_run==@mysqli_query($conn,$query))
{
	echo "query executed <br>";
	while (@$query_execute=mysqli_fetch_assoc($is_query_run))
	{
		echo $query_execute['first name'].'<br>';
	}
}
else
{
	echo "query not executed";
}
?>