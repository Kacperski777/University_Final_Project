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

  <div class="center">
    <a class="center" href="../buildings/jenny-lind.html"><i class="fas fa-arrow-left"></i></a>
</div>


</div>
    <div class="container-fluid main ">

     

      <div class="center">
        <img src="../img/ground-floor-jenny-lind.png" usemap="#image-map" id="ground-floor-jenny-lind" alt="" class="map">
      </div>

      <map name="image-map">
    <area target="" alt="JL G008" title="JL G008" href="#JLG008" coords="480,145,549,132,588,268,513,286,513,286" shape="poly">
    <area target="" alt="JL G010" title="JL G010" href="#JLG010" coords="480,297,587,268,606,338,599,342,613,404,515,432" shape="poly">
    <area target="" alt="JL G012" title="JL G012" href="#JLG012" coords="516,433,632,404,655,477,536,505" shape="poly">
    <area target="" alt="JL G013" title="JL G013" href="#JLG013" coords="535,508,551,567,650,540,637,482" shape="poly">
    <area target="" alt="JL G014" title="JL G014" href="#JLG014" coords="552,572,659,541,696,682,588,711" shape="poly">
    <area target="" alt="JL G015" title="JL G015" href="#JLG015" coords="663,727,671,766,719,756,706,717" shape="poly">
    <area target="" alt="JL G017" title="JL G017" href="#JLG017" coords="438,786,515,763,532,837,445,860,437,860" shape="poly">
    <area target="" alt="JL G018" title="JL G018" href="#JLG018" coords="198,598,398,678,357,781,182,708,189,686,168,677" shape="poly">
    </map>


    <!--_ ------------------------ -->

      <!--POP UPS-->
<div class="popup " id="JLG008">
  <h1>JL G008</h1>
  <p>Capacity: 20</p>
  <p> <span class="ava response-content"></span></p>
  <button id="23" class="btn btn-primary">Book Now</button>
  <a class="close" href="#">X</a>
</div>
<div class="popup  " id="JLG010">
  <h1>JL G010</h1>
  <p>Capacity: 30</p>
  <p> <span class="ava response-content"></span></p>
  <button  id="24" class="btn btn-primary">Book Now</button>
  <a class="close" href="#">X</a>
</div>
<div class="popup  " id="JLG012">
  <h1>JL G012</h1>
  <p>Capacity: 15</p>
  <p> <span class="ava response-content"></span></p>
  <button  id="25" class="btn btn-primary">Book Now</button>
  <a class="close" href="#">X</a>
</div>
<div class="popup  " id="JLG013">
  <h1>JL G013</h1>
  <p>Capacity: 11</p>
  <p> <span class="ava response-content"></span></p>
  <button  id="26" class="btn btn-primary">Book Now</button>
  <a class="close" href="#">X</a>
</div>
<div class="popup  " id="JLG014">
  <h1>JL G014</h1>
  <p>Capacity: 30 </p>
  <p> <span class="ava response-content"></span></p>
  <button  id="27" class="btn btn-primary">Book Now</button>
  <a class="close" href="#">X</a>
</div>
<div class="popup  " id="JLG015">
  <h1>JL G015</h1>
  <p>Capacity: 48</p>
  <p> <span class="ava response-content"></span></p>
  <button  id="28" class="btn btn-primary">Book Now</button>
  <a class="close" href="#">X</a>
</div>
<div class="popup  " id="JLG017">
  <h1>JL G017</h1>
  <p>Capacity: 2</p>
  <p> <span class="ava response-content"></span></p>
  <button  id="29" class="btn btn-primary">Book Now</button>
  <a class="close" href="#">X</a>
</div>
<div class="popup   " id="JLG018">
  <h1>JL G018</h1>
  <p>Capacity: 42</p>
  <p> <span class="ava response-content"></span></p>
  <button  id="30" class="btn btn-primary">Book Now</button>
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
