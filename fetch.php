<?php

if(isset($_POST["id"]))
{
	$connect = mysqli_connect("localhost", "root", "", "test");
	$query = "Select * form employee where id = '".$_POST["id"]."'";
	$result=mysqli_query($connect,$query);
	while ($row=mysql_fetch_array($result))
	 {
		$data["name"]=$row["name"];
		$data["address"]=$row["address"];
		$data["gender"]=$row["gender"];
		$data["designation"]=$row["designation"];
		$data["age"]=$row["age"];

	}
	echo json_encode($data);
}

?>