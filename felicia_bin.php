<!DOCTYPE html>

<link rel="stylesheet" href="felicia_services.css">
<link rel="stylesheet" href="felicia_menus.css">
<html lang="en">
<head>
<!-- added the meta viewpoint to make the website mobile friendly, and meta description to increase click rate -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="BDC Recycling service, eco-friendly, recycling bins, family owned.">
<title>Recycling Bins</title>
</head>
<body>
	
<nav onmouseout ="hide()">
<div class ="Navbar">

 		 <a href="felicia_BDCRecycling.php" onmouseover="show('m1')">Home</a>
		
		  <div class="DropDown">
 			 <button class="DropN">BDC Recycling Info</button>
			   <div class="Drop-Content" id="m2" onmouseover="show('m2')">
		 			 <a href="felicia_aboutUs.html">About Us</a>
					 
 				 </div>
 			</div>
		<div class="DropDown">
		 <button class="DropN">What We Recycle</button>
		 <div class="Drop-Content" id="m3" onmouseover="show('m3')">
		   <a href="felicia_materials.html">Materials</a>
		 </div>
		</div>
      <div class="DropDown">
		  <button class="DropN">Products</button>
      <div class="Drop-Content" id ="m4" onmouseover="show('m4')">
		    <a href="felicia_bin.php">Bin</a>
		    <a href="felicia_recyclingBags.php">Bags</a>
				<a href="felicia_recyclingFlags.php">Flags</a>
		 </div>
		</div> 
		<div class="DropDown">
		  <button class="DropN">Benefits</button>
      <div class="Drop-Content" id ="m5" onmouseover="show('m5')">
		    <a href="felicia_facts.html">Recycling Statistics</a>
		    
		 </div>
		</div> 
         <div class="DropDown">
		 <button class="DropN">Customer</button>
		 <div class="Drop-Content" id="m6" onmouseover="show('m6')">
		  <a href="felicia_newCustomerForm.html">New Customer</a>
			 <a href="felicia_returnCustomerForm.html">Returning Customer</a>
			 <a href="felicia_customerReview.html">Customer Feedback</a>
		 </div>
		</div>
</div>
</nav>
    <style>
		
		tr {float:left;}
		th{
		display: block;
		column-width:100px;}
		td{
		display:block;
		}
		table, th, td{
		border: 1px solid black;
		}
		img {
		padding: 10px
		}
		
		</style>


<body>
<p>Why our eco-friendly bins?</p> 
<ul>
   <li>Durable</li>
	 <li>Made of 50% recyclable material</li>
	 <li>We deliver</li>
	 <li>Convenient</li>
	 <li>Environmental friendly</li>
	 

</ul>
<div>
<form action="felicia_pay.php" method="post" name="binform">
<img src="recyclingBin.jpg" alt="Recycling Bin" width= "300" height= "300">
<p>How many bins would you like to purchase?</p>
<div class="RButton">
<input type="radio" id="1" name="item" value="7">
<label for="1">1 Bin</label>
<input type="radio" id="2" name="item" value="14">
<label for="2">2 Bins</label>
<input type="radio" id="3" name="item" value="21">
<label for="3">3 Bins</label>
<input type="radio" id="4" name="item" value="28">
<label for="4">4 Bins</label>
<input type="radio" id="5" name="item" value="35">
<label for="5">5 Bins</label>
<br><br>

<?php 
$servername= "localhost";
$username="root";
$password="root";

$link = new mysqli($servername, $username, $password, "customers");

if ($link->connect_error) {
die("Connection failed: ".$link->connect_error);
}

$sql ="SELECT * FROM product WHERE name='Bin'";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table>";
				
            echo "<tr>";
						
                echo "<th>ID:</th>" ;
                echo "<th>Name:</th>";
                echo "<th>Price:</th>";
								echo "<th>Size:</th>";
								echo "<th>Material:</th>";
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . $row['name'] . "</td>";
                echo "<td>" . "$".$row['price']." per bin". "</td>";
								echo "<td>" . $row['size'] . "</td>";
								echo "<td>" . $row['material'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        // Free result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>
<input type="submit" value="Submit" id="submit" name="submit">
<input type="reset" value="Reset Form">
</form>
</div>
<script src="felicia_reset.js">

</script>
</body>
</html