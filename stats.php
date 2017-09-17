

<? php
$query = " SELECT * FROM signUp_Table" ; 
$result = mysqli_query($conn,$query);
		while($row = mysqli_fetch_array($result)){
		echo
			"<table>".
			"<tr>".
			"<td>".$row["name"]."</td>".
			"<td>".$row["address"]."</td>".
			"<td>"."$".$row["price"]."</td>".
			"</tr>".
			"</table>";


?>