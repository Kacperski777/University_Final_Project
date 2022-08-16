<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="../img/icon.png">

    <!-- FONTS -->

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&family=Orbitron:wght@500&display=swap" rel="stylesheet">

    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>


    <!-- JQUERY -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://unpkg.com/maphilight@1.4.2/jquery.maphilight.min.js"  crossorigin="anonymous"></script>


    <!-- -->

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/index.css">
    <title>GROUND FLOOR</title>
  </head>
  <body>
  
  <style>
 
 h4{
          
 color:red;
 }
  
  
 </style>

  <?php 

$response = 'Available';
  if (isset($_POST['id'])) {
    $newID = $_POST['id']; 

  

 
  

$servername = "172.16.11.22:3306";
$username = "slik1_18_multiple_choice";
$password = "0A24_tlw";
$dbname = "slik1_18_multiple_choice";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "UPDATE rooms SET booked=true WHERE id= $newID";
  $test = mysqli_query($conn, "SELECT * FROM rooms WHERE id= $newID");

  if (mysqli_query($conn, $sql)) {
    while($row = mysqli_fetch_array($test))
  {
  if($row["booked"] == 1){
    $response = '<h4> Sorry Room Not Available! </h4>' ;
    
    }
  else{
    $response = 'Room Booked!';
  }
  }
    return print_r($response);

  } else {
    echo "Error updating record: " . mysqli_error($conn);
  }



mysqli_close($conn);

  }
?>


<script type='text/javascript'>
 


  $(document).ready(function() {
    $('.btn').click(function() {
      $.post(location.href, { id: $(this).attr('id') }, function(response) {
        $('.response-content').html(response); 
      });
    });
    $('.close').click(function() {
      $.post(location.href, { id: $(this).attr('id') }, function(response) {
        $('.response-content').html("")
      });
    });
  });


</script>


    


    <!--CONTAINER with Three Options -->
    <div class="container-fluid center">
      <div class="col-lg-12 center">
        <a class="center" href="../buildings/mulberry-house.html"><i class="fas fa-arrow-left"></i></a>
        
    </div>
    </div>
    <div class="container-fluid main">

      
    

      <div class="col-lg-12 center ">
      <h1 id="active-booking"></h1>
        <img src="../img/ground-floor-mulberry-house.png" usemap="#image-map" id="ground-floor-mulberry-house" class="map" alt="">
        
      </div>


<map name="image-map">
    <area target="" alt="MH G001" title="MH G001" href="#MHG001" coords="709,353,862,354,867,471,709,469" shape="poly">
    <area target="" alt="MH G002" title="MH G002" href="#MHG002" coords="710,22,864,21,863,132,710,133" shape="poly">
    <area target="" alt="MH G003" title="MH G003" href="#MHG003" coords="489,65,650,63,651,244,490,240" shape="poly">
    <area target="" alt="MH G004" title="MH G004" href="#MHG004" coords="237,64,487,63,489,239,235,242" shape="poly">
    <area target="" alt="MH G005" title="MH G005" href="#MHG005" coords="21,26,177,26,178,174,19,175" shape="poly">
    <area target="" alt="MH G006" title="MH G006" href="#MHG006" coords="20,173,175,174,177,318,18,318" shape="poly">
    <area target="" alt="MH G007" title="MH G007" href="#MHG007" coords="22,321,174,322,178,467,19,474" shape="poly">
    <area target="" alt="MH G008" title="MH G008" href="#MHG008" coords="283,305,384,306,384,378,361,381,362,433,284,430" shape="poly">
</map>



<!--POP UPS-->
<div class="popup " id="MHG001">
  <h1>MH GOO1</h1>
  <p>Capacity: 8</p>
  <p> <span class="ava response-content"></span></p>
  <button onclick="set()" id="69" class="btn btn-primary" >Book Now</button>
  <a class="close" href="#">X</a>
</div>
<div class="popup  " id="MHG002">
  <h1>MH GOO2</h1>
  <p>Capacity: 8</p>
  <p> <span class="ava response-content"></span></p>
  <button onclick="set()" id="70" class="btn btn-primary">Book Now</button>
  <a class="close" href="#">X</a>
</div>
<div class="popup  " id="MHG003">
  <h1>MH GOO3</h1>
  <p>Capacity: 12</p>
  <p> <span class="ava response-content"></span></p>
   <button onclick="set()" id="71" class="btn btn-primary">Book Now</button>
  <a class="close" href="#">X</a>
</div>
<div class="popup  " id="MHG004">
  <h1>MH GOO4</h1>
  <p>Capacity: 15</p>
  <p> <span class="ava response-content"></span></p>
  <button onclick="set()" id="72" class="btn btn-primary">Book Now</button>
  <a class="close" href="#">X</a>
</div>
<div class="popup  " id="MHG005">
  <h1>MH GOO5</h1>
  <p>Capacity: 10</p>
  <p> <span class="ava response-content"></span></p>
  <button onclick="set()" id="73" class="btn btn-primary">Book Now</button>
  <a class="close" href="#">X</a>
</div>
<div class="popup  " id="MHG006">
  <h1>MH GOO6</h1>
  <p>Capacity: 10</p>
  <p> <span class="ava response-content"></span></p>
   <button onclick="set()" id="74" class="btn btn-primary">Book Now</button>
  <a class="close" href="#">X</a>
</div>
<div class="popup  " id="MHG007">
  <h1>MH GOO7</h1>
  <p>Capacity: 10</p>
  <p> <span class="ava response-content"></span></p>
  <button onclick="set()" id="75" class="btn btn-primary">Book Now</button>
  <a class="close" href="#">X</a>
</div>
<div class="popup   " id="MHG008">
  <h1>MH GOO8</h1>
  <p>Capacity: 6</p>
  <p> <span class="ava response-content"></span></p>
  <button onclick="set()" id="76" class="btn btn-primary">Book Now</button>
  <a class="close" href="#">X</a>
</div>










    <!--_ ------------------------ -->

  



    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="../js/charles_hastings.js" charset="utf-8"></script>
        <script src="../js/index.js"></script>
    <script src="../js/settings.js" charset="utf-8"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
  </html>
