
<!DOCTYPE html>
<html lang="en">
<head>
<!-- added the meta viewpoint to make the website mobile friendly, and meta description to increase click rate -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="BDC Recycling home page, eco-friendly service, recycling bins, bags, flags, family owned. ">
<title>BDC Recycling</title>
<link rel="stylesheet" href="felicia_BDCRecycling.css">
<link rel="stylesheet" href="felicia_menus.css">

</head>

<body onload="slideImg()">
		<div class="Logo">
	<!--#include file="//vmctxfile.ad.ccu.edu/vdiprofiles$/0519651/Desktop/htmlDocs/document_logo.html"-->
		<img src="recycling.png" class="Border" alt="BDC Recycling Logo" width= "300" height= "300">
		</div>
		<div class="Information">
		1955 Gumm Spring Rd
		<br>Summerville,42782
		<br>Tel: 502-650-5635
		<br>Fax: 502-650-5693
		</div>

		<h2>Welcome!</h2>
		<div id="datetime">
				
		</div>
		
	
<div class="Company">

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
	 
		
		<h6>Felicia Williamson, CIT-415A</h6>
		<h3><span style="font-family:monospace;">Welcome to a family owned Recycling pickup service- Helping families create a brighter future one community at a time!</span></h3>
		<p>We all think about the future and what it might be like, but how often do we think about what the Earth will 
		look like in the future? Will our chldren or grandchildren be able to enjoy the be beauty this Earth offers?
		We all love someone and want the best for them. What if we can do something as simple as recycling to
		improve their chances of that bright we want so bad for them. As an eco-friendly company that offers not only recycling service
		I know recycling can be intimidating but we can take the intimidation out and make a brighter and cleaner future together.</p>
		
		<br><p>We simplify the recycling process by providing the recycling bins and pickup the materials. All you have to do is 
		throw it in the right bin, simple right? We all should want to protect this planet and now you can. </p>
		
		<br><p>Established in 2020 on family values. My 3 amazing children are a huge part of this company and why it exsit. We want to do our part to 
		protect this Earth and by helping families like yours we can.</p>
	
	
				
       <h3><span style="font-family:'cursive';color:#0B5345">Making a difference together.</span><h3>
      
		
<style>
.Right{
float:right;
}
</style>		
<!-- added the alt attribute for SEO -->
<img id="placeholder" class="Right" alt="recycling images" src="rImage5.jpg" width="256" height="256">

</div>
<script type="text/javascript">
window.onload = startInterval;
function startInterval()
{
setInterval("startTime()",1000);
}
function startTime()
{
document.getElementById('datetime').innerHTML = Date();
}
</script>
 


  <script>
 var image=["rImage1.jpg",
"rImage2.jpg",
"rImage3.jpg",
"rImage4.jpg",
"rImage5.jpg"];

var index =0;

setInterval (function(){
if (index===image.length){
index=0;
}
document.getElementById("placeholder").src=image[index];
index++;
}, 2000);</script>
<script src="felicia_menus.js" >

</body>
</html>