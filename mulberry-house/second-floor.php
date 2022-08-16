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
    <title>SECOND FLOOR</title>
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
        <img src="../img/second-floor-mulberry-house.png" usemap="#image-map" id="second-floor-mulberry-house" class="map" alt="">
      </div>

      <map name="image-map">
    <area target="" alt="MH 2001" title="MH 2001" href="#MH2001" coords="646,339,856,339,857,456,646,453" shape="poly">
    <area target="" alt="MH 2002" title="MH 2002" href="#MH2002" coords="703,230,855,230,855,337,700,336" shape="poly">
    <area target="" alt="MH 2003" title="MH 2003" href="#MH2003" coords="703,122,855,123,855,227,704,226" shape="poly">
    <area target="" alt="MH 2004" title="MH 2004" href="#MH2004" coords="645,15,855,13,858,123,648,122" shape="poly">
    <area target="" alt="MH 2005" title="MH 2005" href="#MH2005" coords="438,52,645,50,643,226,440,225" shape="poly">
    <area target="" alt="MH 2006" title="MH 2006" href="#MH2006" coords="234,50,438,52,436,225,233,227" shape="poly">
    <area target="" alt="MH 2007" title="MH 2007" href="#MH2007" coords="20,14,230,13,230,159,20,156,20,162" shape="poly">
    <area target="" alt="MH 2008" title="MH 2008" href="#MH2008" coords="24,163,176,163,174,304,22,307" shape="poly">
    <area target="" alt="MH 2009" title="MH 2009" href="#MH2009" coords="19,310,174,308,175,372,230,373,230,452,22,453" shape="poly">
    <area target="" alt="MH 2010" title="MH 2010" href="#MH2010" coords="279,292,378,290,379,413,283,415" shape="poly">
    <area target="" alt="MH 2011" title="MH 2011" href="#MH2011" coords="381,297,511,294,511,416,381,416" shape="poly">
</map>


    <!--_ ------------------------ -->

  <!--POP UPS-->
<div class="popup " id="MH2001">
  <h1>MH 2OO1</h1>
  <p>Capacity: 8</p>
  <p> <span class="ava response-content"></span></p>
  <button onclick="set()" id="85" class="btn btn-primary">Book Now</button>
  <a  class="close" href="#">X</a>
</div>
<div class="popup  " id="MH2002">
  <h1>MH 2OO2</h1>
  <p>Capacity: 6</p>
  <p> <span class="ava response-content"></span></p>
  <button onclick="set()" id="86" class="btn btn-primary">Book Now</button>
  <a class="close" href="#">X</a>
</div>
<div class="popup  " id="MH2003">
  <h1>MH 2OO3</h1>
  <p>Capacity: 6</p>
  <p> <span class="ava response-content"></span></p>
  <button onclick="set()" id="87" class="btn btn-primary">Book Now</button>
  <a class="close" href="#">X</a>
</div>
<div class="popup  " id="MH2004">
  <h1>MH 2OO4</h1>
  <p>Capacity: 8</p>
  <p> <span class="ava response-content"></span></p>
  <button onclick="set()" id="88" class="btn btn-primary">Book Now</button>
  <a class="close" href="#">X</a>
</div>
<div class="popup  " id="MH2005">
  <h1>MH 2OO5</h1>
  <p>Capacity: 12</p>
  <p> <span class="ava response-content"></span></p>
  <button onclick="set()" id="89" class="btn btn-primary">Book Now</button>
  <a class="close" href="#">X</a>
</div>
<div class="popup  " id="MH2006">
  <h1>MH 2OO6</h1>
  <p>Capacity: 12</p>
  <p> <span class="ava response-content"></span></p>
  <button onclick="set()" id="90" class="btn btn-primary">Book Now</button>
  <a class="close" href="#">X</a>
</div>
<div class="popup  " id="MH2007">
  <h1>MH 2OO7</h1>
  <p>Capacity: 8</p>
  <p> <span class="ava response-content"></span></p>
  <button onclick="set()" id="91" class="btn btn-primary">Book Now</button>
  <a class="close" href="#">X</a>
</div>
<div class="popup   " id="MH2008">
  <h1>MH 2OO8</h1>
  <p>Capacity: 6</p>
  <p> <span class="ava response-content"></span></p>
  <button onclick="set()" id="92" class="btn btn-primary">Book Now</button>
  <a class="close" href="#">X</a>
</div>
<div class="popup   " id="MH2009">
  <h1>MH 2OO9</h1>
  <p>Capacity: 6</p>
  <p> <span class="ava response-content"></span></p>
  <button onclick="set()" id="93" class="btn btn-primary">Book Now</button>
  <a class="close" href="#">X</a>
</div>
<div class="popup   " id="MH2010">
  <h1>MH 2O10</h1>
  <p>Capacity: 3</p>
  <p> <span class="ava response-content"></span></p>
  <button onclick="set()" id="94" class="btn btn-primary">Book Now</button>
  <a class="close" href="#">X</a>
</div>
<div class="popup   " id="MH2011">
  <h1>MH 2O11</h1>
  <p>Capacity: 3</p>
  <p> <span class="ava response-content"></span></p>
  <button onclick="set()" id="95" class="btn btn-primary">Book Now</button>
  <a class="close" href="#">X</a>
</div>






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
