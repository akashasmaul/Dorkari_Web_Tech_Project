<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Indoor</title>
<?php
include "header.php";                  
?>
</head>
<body>
<div class="w3-row-padding w3-padding-64 w3-container">
  <div class="w3-content">
    <div class="w3-twothird">    
     <center> <h1><b>House/Corporate Painting Services</b></h1> <br>  </center>
      <div class="w3-row-padding w3-padding-16 w3-center">
  
    <div class="w3-half">
      <img src="../images/hp1.jpg" alt="tv" style="width:100%" width="450" height="250">
    </div>    

    <div class="w3-half">
      <img src="../images/hp2.jpg" alt="tv" style="width:100%" width="450" height="250">
    </div>  

    <div class="w3-half">
      <img src="../images/hp3.jpg" alt="tv" style="width:100%" width="450" height="250">
    </div> 
    <div class="w3-half">
      <img src="../images/hp4.jpg" alt="tv" style="width:100%" width="450" height="250">
    </div>      
  </div>   
</div>


    <div class="w3-third w3-center">      
      <br><br><br><br><br><h3>What's Included?</h3>
  <ul>
		<li>Initial diagnosis and Painting</li>
		<li>Only Service Charge</li>
	</ul>
	<hr> <br><br><br><br>
  <h3>What's Excluded?</h3>
    <ul>
    	<li>Components & Parts (if used)</li>
    	<li>Transportation (if applicable)</li>
    </ul>
    <hr>
    
    </div>
  </div>
</div>

<div class="w3-row-padding w3-light-grey w3-padding-64 w3-container">
  <div class="w3-content">
    <div class="w3-third w3-center">
      <i class="fa fa-coffee w3-padding-64 w3-text-red w3-margin-right"></i>
    </div>

    <div class="w3-twothird">
      <h6>----- How to get service</h6>
      <h1>Easiest way to get a service</h1> <br>  
      <h4>Select the Service </h4>             
      <h6>Pick the service you are looking for. </h6> <br> 
      <h4>Pick your schedule </h4>             
      <h6>Select your convenient time slot.</h6> <br> 
      <h4>Place Order</h4>             
      <h6>Confirm your order by clicking 'Place order'.</h6> <br> 
            
    </div>
    <form action="../view/painting.php" method="get">
  <button type="submit" class="w3-button w3-red w3-padding-large w3-large w3-left">Go Back</button>
</form>
<form action="../view/comingsoon.php" method="get">
  <button type="submit" class="w3-button w3-red w3-padding-large w3-large w3-right">Place Order</button>
</form>
  </div>
  
</div>

<?php
include "footer.php";                
?>
</body>
</html>