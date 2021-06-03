<!DOCTYPE html>
<html>
<head>
	<title></title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
	<h1> Suraj Hotel</h1>
	<img src="pexels1.jpg" height="500px" width="100%">
	<br>

    <h2><i>Description</i></h2>
    <p>Did you know that we’ve got 2.5 Crore bookings since March 2020? And this is all thanks to the sanitisation & safety measures followed at our properties, from disinfecting surfaces with high-quality cleaning products and maintaining social distance to using protective gear and more.
</p>
<button class="btn btn-success" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
   Show More
  </button>

<div class="collapse" id="collapseExample">
  <div class="card card-body">
<b>Location</b>
Hotel The Orient Tree is a stunning stay option situated on Shilpgram Road in Prateek Enclave 2, Taj East Gate Road, Taj Nageri Phase 1, Telipara, Tajganj in Basai. The closest bus stand is Agra Local Bus Stand, just a few minutes away. Agra city Railway Station and Pandit Deen Dayal Upadhyay Airport, are both a few minutes away and can be reached by local conveyance. Places of interest nearby are Taj Nature Walk, Baan Wali Bagichi, Taj Museum, Taj Mahal, Taj Yamuna View Point, Great Gate and more<br>

<b>Special Features</b>
The hotel is located in the heart of the city with many attractions in close proximity. The rooms are refined and stylishly adorned with bright walls and complementing drapes. The wooden furniture is tasteful and comfortable.<br>

<b>Amenities</b>
Room Ventilation, Complimentary Breakfast, Wooden Floors, AC, Spa, Curtains, Laundry service, Parking Facility, Room Service, Free Wifi, Geyser, Iron, Wheelchair Accessible, Modern Wardrobe, TV, Bath Tub, Card Payment, Wifi Dongle, Power backup, Fan, Mirror, CCTV Cameras are some of the amenities available at this property.<br>

<b>What's Nearby</b>
Famous Restaurants such as Cafe coffee Day, Bon Barbecue, Kebeb-E-Que, Shri Ji Misthan Bhandar and MoMo 2 Go are located nearby. The local market and TDI Mall are the closest shopping options.
  </div>
</div>
<br>
	
<h3>Form details</h3>
<div class="row">
<div class="col-sm-8">
<form method="POST">
  <div class="form-row" >
    <div class="col">
    	First Name:
      <input type="text" class="form-control" placeholder="First name" name="fname">
    </div>
    <div class="col">
    	Last Name:
      <input type="text" class="form-control" placeholder="Last name" name="lname">
    </div>
<br>
  </div>
   <div class="form-row" >
    <div class="col">
    	Date Check IN:
      <input type="date" class="form-control" placeholder="Date of check-In" name="checkin">
    </div>
    <div class="col">
      Date Check OUT:
      <input type="date" class="form-control" placeholder="Date of check-OUT" name="checkout">
    </div>
  </div>
 <div class="form-row">
 	<div class="col">
      Mobile Number:
      <input type="number" class="form-control" placeholder="Mobile Number" name="mobile">
    </div>
  <div class="col">
    Select No of Rooms 
    <select class="form-control" name="room">
      <option>Select  no of rooms</option>
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
    </select>
    </div>
</div><br>
   <button type="submit" name="submit" value="submit">Submit</button>
</div>
</form>
</div>
</body>
</html>

<?php include 'conn.php';

if(isset($_POST['submit'])){

     $a = $_POST['fname'];
     $b = $_POST['lname'];
     $c = $_POST['checkin'];
     $d = $_POST['checkout'];
     $e = $_POST['mobile'];
     $f = $_POST['room'];

  $in1 = "insert into form_details(fname,lname,checkin,checkout,mobile,room)
           values('$a','$b','$c','$d','$e','$f')";

   $q1= mysqli_query($con,$in1);

   if ($q1) {
   	echo "success";
   }
   else{
   	echo "not success";
   }

}
?>