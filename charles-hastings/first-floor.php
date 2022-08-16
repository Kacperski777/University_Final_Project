


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
    $response = "<h4> Sorry Room Not Available </h4>";
    
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




<!-- HTML -->


<div class="container-fluid center">
    <div class=" center">
      <a class="center" href="../buildings/charles-hastings.html"><i class="fas fa-arrow-left"></i></a>
  </div>
</div>
    <div class="container-fluid main center">

    

      <div class="center">
        <img src="../img/first-floor-charlest-hastings.png" usemap="#image-map"  id="first-floor-charles-hastings"  class="map" alt="">
      </div>


        <map name="image-map">
      <area  target="" alt="CH 1001" title="CH 1001" href="#CH1001" coords="128,89,319,179" shape="rect">
      <area  target="" alt="CH 1012" title="CH 1012" href="#CH1012" coords="72,32,127,89" shape="rect">
      <area  target="" alt="CH 1003" title="CH 1003" href="#CH1003" coords="455,181,360,89" shape="rect">
      <area  target="" alt="CH 1010" title="CH 1010" href="#CH1010" coords="262,233,322,280" shape="rect">
      <area  target="" alt="CH 1004" title="CH 1004" href="#CH1004" coords="353,282,420,335" shape="rect">
      <area  target="" alt="CH 1008" title="CH 1008" href="#CH1008" coords="232,283,325,379" shape="rect">
      <area  target="" alt="CH 1005" title="CH 1005" href="#CH1005" coords="353,336,422,371" shape="rect">
      <area  target="" alt="CH 1006" title="CH 1006" href="#CH1006" coords="351,440,421,472" shape="rect">
      <area  target="" alt="CH 1007" title="CH 1007" href="#CH1007" coords="133,467,324,569" shape="rect">
      <area  target="" alt="CH 1009" title="CH 1009" href="#CH1009" coords="326,474,599,567" shape="rect">
      <area  target="" alt="CH 1011" title="CH 1011" href="#CH1011" coords="71,567,134,619" shape="rect">
  </map>
     




  <div class="popup  center" id="CH1001">
    <h1>CH 1001</h1>
    <p>Capacity: 31</p>
    <p> <span   class="ava response-content"></span></p>
    <button class="btn btn-primary" id="1"  >Book Now</button>
    <a class="close"   href="#">X</a>
  </div>
  <div class="popup   " id="CH1012">
    <h1>CH 1012</h1>
    <p>Capacity: 5</p>
    <p> <span class="ava response-content"></span></p>
    <button class="btn btn-primary" id="11"  id="1012" >Book Now</button>
    <a class="close" href="#">X</a>
  </div>
  <div class="popup  " id="CH1003">
    <h1>CH 1003</h1>
    <p>Capacity: 26</p>
    <p> <span class="ava response-content"></span></p>
     <button class="btn btn-primary" id="2"  id="1003" >Book Now</button>
    <a class="close" href="#">X</a>
  </div>
  <div class="popup   " id="CH1010">
    <h1>CH 1010</h1>
    <p>Capacity: 2</p>
    <p> <span class="ava response-content"></span></p>
    <button class="btn btn-primary" id="9"  >Book Now</button>
    <a class="close" href="#" >X</a>
  </div>
  <div class="popup  " id="CH1004">
    <h1>CH 1004</h1>
    <p>Capacity: 2</p>
    <p><span class="ava response-content"></span></p>
    <button class="btn btn-primary" id="3"  >Book Now</button>
    <a class="close" href="#">X</a>
  </div>
  <div class="popup   " id="CH1008">
    <h1>CH 1008</h1>
    <p>Capacity: 21</p>
    <p><span class="ava response-content"></span></p>
    <button class="btn btn-primary" id="7"  >Book Now</button>
    <a class="close" href="#">X</a>
  </div>
  <div class="popup  " id="CH1005">
    <h1>CH 1005</h1>
    <p>Capacity: 2</p>
    <p><span class="ava response-content"></span></p>
    <button class="btn btn-primary" id="4"  >Book Now</button>
    <a class="close" href="#">X</a>
  </div>
  <div class="popup   " id="CH1006">
    <h1>CH 1006</h1>
    <p>Capacity: 2</p>
    <p><span class="ava response-content"></span></p>
    <button class="btn btn-primary" id="5" id="1006" >Book Now</button>
    <a class="close" href="#">X</a>
  </div>
  <div class="popup  " id="CH1007">
    <h1>CH 1007</h1>
    <p>Capacity: 35</p>
    <p><span class="ava response-content"></span></p>
    <button class="btn btn-primary" id="6" id="1007" >Book Now</button>
    <a class="close" href="#">X</a>
  </div>
  <div class="popup   " id="CH1009">
    <h1>CH 1009</h1>
    <p>Capacity: 40</p>
    <p><span class="ava response-content"></span></p>
    <button class="btn btn-primary" id="8" id="1009" >Book Now</button>
    <a class="close" href="#">X</a>
  </div>
  <div class="popup   " id="CH1011">
    <h1>CH 1011</h1>
    <p>Capacity: 5</p>
    <p><span class="ava response-content"></span></p>
    <button class="btn btn-primary" id="10" id="1011" >Book Now</button>
    <a class="close" href="#">X</a>
  </div>
      
      
      
      


  <div id=''></div>

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
