<html>
<head>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<title>CVS</title>
<link rel="stylesheet" type="text/css" href="styleApp.css">
</head>

<body>
	<script type="text/javascript"></script>
	<div class="wrapper">
		<div class="TopWrapper">
			<aside>
				<ul>
				<li><input type="Button" id="btn1" value ="SEARCH MEMBERS"></input></li>
				<li><input type="Button" id="btn2" value ="ADD MEMBERS"></input></li>
				<li><input type="Button" id="btn3" value ="DELET MEMBERS"></input></li>
				<li><input type="Button" id="btn4" value ="SALES & STAT"></input></li>
				<li><input type="Button" id="btn5" value ="CURRENT MEMBERS"></input></li> 	
				</ul>
			</aside><!--Top Aside -->


				<div class="Top_content"> 
					<div class="form_wrap">
						<form action="tablePost1.php" method="post">
						<p>Name:</p><input type="text" name="name" />
						<p>Address:</p><input type="text" name="address" />
						<p>price:</p><input type="text" name="price" />
						
						<br>
						<br>
						<input type="submit" ></input>
						</form>
					</div> 
				</div>   <!--Top_Content -->       

			<div class ="top_right">
				<?php
                  include "stats.php";

                 ?>
			</div>       
		</div><!-- topWrapper -->



		<div class="Bottom_Wrapper"> 

			<?php
			$host ='localhost';
			$user = 'root';
			$pass ='';
			$db ='sign_up';
			$conn = mysqli_connect($host,$user,$pass,$db) or die ("Error Connection");

			$query = "select * from signUp_Table"; 
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
			}
			?>
		</div><!-- Bottom Wrapper--> 
	</div> <!-- Wrapper -->
	<script type="text/javascript" src="js_Com.js"></script>  
</body>
</html>


