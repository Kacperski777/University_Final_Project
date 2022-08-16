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
    <title>FIRST FLOOR</title>
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

     

      <div class="col-lg-12 center">
      <h1 id="active-booking"></h1>
        <img id="first-floor-mulberry-house" usemap="#image-map" src="../img/first-floor-mulberry-house.png" class="map" alt="">
      </div>

      <map name="image-map">
    <area target="" alt="MH 1001" title="MH 1001" href="#MH1001" coords="650,353,861,352,860,469,649,468" shape="poly">
    <area target="" alt="MH 1002" title="MH 1002" href="#MH1002" coords="707,137,861,137,862,243,707,241" shape="poly">
    <area target="" alt="MH 1003" title="MH 1003" href="#MH1003" coords="650,28,861,26,861,134,649,134" shape="poly">
    <area target="" alt="MH 1004" title="MH 1004" href="#MH1004" coords="237,64,648,65,648,243,239,242" shape="poly">
    <area target="" alt="MH 1005" title="MH 1005" href="#MH1005" coords="24,29,236,28,237,174,26,175" shape="poly">
    <area target="" alt="MH 1006" title="MH 1006" href="#MH1006" coords="26,176,179,177,181,320,26,322" shape="poly">
    <area target="" alt="MH 1007" title="MH 1007" href="#MH1007" coords="24,322,180,323,180,386,236,387,238,469,22,469" shape="poly">
    <area target="" alt="MH 1008" title="MH 1008" href="#MH1008" coords="286,308,385,308,386,429,286,430" shape="poly">
</map>

<!--POP UPS-->
<div class="popup " id="MH1001">
  <h1>MH 1OO1</h1>
  <p>Capacity: 10</p>
  <p> <span class="ava response-content"></span></p>
  <button onclick="set()" id="77" class="btn btn-primary">Book Now</button>
  <a class="close" href="#">X</a>
</div>
<div class="popup  " id="MH1002">
  <h1>MH 1OO2</h1>
  <p>Capacity: 8</p>
  <p> <span class="ava response-content"></span></p>
  <button onclick="set()" id="78" class="btn btn-primary">Book Now</button>
  <a class="close" href="#">X</a>
</div>
<div class="popup  " id="MH1003">
  <h1>MH 1OO3</h1>
  <p>Capacity: 8  </p>
  <p> <span class="ava response-content"></span></p>
  <button onclick="set()" id="79" class="btn btn-primary">Book Now</button>
  <a class="close" href="#">X</a>
</div>
<div class="popup  " id="MH1004">
  <h1>MH 1OO4</h1>
  <p>Capacity: 24</p>
  <p> <span class="ava response-content"></span></p>
  <button onclick="set()" id="80" class="btn btn-primary">Book Now</button>
  <a class="close" href="#">X</a>
</div>
<div class="popup  " id="MH1005">
  <h1>MH 1OO5</h1>
  <p>Capacity: 10</p>
  <p> <span class="ava response-content"></span></p>
  <button onclick="set()" id="81" class="btn btn-primary">Book Now</button>
  <a class="close" href="#">X</a>
</div>
<div class="popup  " id="MH1006">
  <h1>MH 1OO6</h1>
  <p>Capacity: 6</p>
  <p> <span class="ava response-content"></span></p>
  <button onclick="set()" id="82" class="btn btn-primary">Book Now</button>
  <a class="close" href="#">X</a>
</div>
<div class="popup  " id="MH1007">
  <h1>MH 1OO7</h1>
  <p>Capacity: 8</p>
  <p> <span class="ava response-content"></span></p>
  <button onclick="set()" id="83" class="btn btn-primary">Book Now</button>
  <a class="close" href="#">X</a>
</div>
<div class="popup   " id="MH1008">
  <h1>MH 1OO8</h1>
  <p>Capacity: 4</p>
  <p> <span class="ava response-content"></span></p>
  <button onclick="set()" id="84" class="btn btn-primary">Book Now</button>
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
