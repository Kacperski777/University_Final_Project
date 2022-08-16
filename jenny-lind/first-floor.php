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
        <a class="center" href="../buildings/jenny-lind.html"><i class="fas fa-arrow-left"></i></a>
    </div>
    </div>
    <div class="container-fluid main">

      

      <div class="col-lg-12 center">
        <img id="first-floor-jenny-lind" usemap="#image-map" src="../img/first-floor-jenny-lind.png" class="map"  alt="">
      </div>

      <map name="image-map">
        <area target="" alt="JL 1002" title="JL 1002" href="#JL1002" coords="59,100,205,65,231,166,199,177,217,247,108,275" shape="poly">
        <area target="" alt="JL 1001" title="JL 1001" href="#JL1001" coords="216,101,241,93,252,133,225,139" shape="poly">
        <area target="" alt="JL 1003" title="JL 1003" href="#JL1003" coords="201,178,304,147,325,222,221,248" shape="poly">
        <area target="" alt="JL 1004" title="JL 1004" href="#JL1004" coords="305,148,373,132,391,202,324,221" shape="poly">
        <area target="" alt="JL 1005" title="JL 1005" href="#JL1005" coords="373,131,481,102,538,321,428,350" shape="poly">
        <area target="" alt="JL 1006" title="JL 1006" href="#JL1006" coords="508,94,551,83,565,144,525,154" shape="poly">
        <area target="" alt="JL 1007" title="JL 1007" href="#JL1007" coords="525,158,567,145,584,214,543,225" shape="poly">
        <area target="" alt="JL 1008" title="JL 1008" href="#JL1008" coords="544,226,586,215,606,295,563,306" shape="poly">
        <area target="" alt="JL 1009" title="JL 1009" href="#JL1009" coords="567,310,598,302,616,364,573,375,562,341,573,334" shape="poly">
        <area target="" alt="JL 1012" title="JL 1012" href="#JL1012" coords="513,394,553,383,566,425,523,435" shape="poly">
        <area target="" alt="JL 1013" title="JL 1013" href="#JL1013" coords="555,380,634,362,652,433,573,451" shape="poly">
        <area target="" alt="JL 1014" title="JL 1014" href="#JL1014" coords="474,515,537,500,546,534,483,551" shape="poly">
        <area target="" alt="JL 1015" title="JL 1015" href="#JL1015" coords="484,553,547,534,556,568,493,585" shape="poly">
        <area target="" alt="JL 1016" title="JL 1016" href="#JL1016" coords="493,588,557,573,578,647,503,664,491,619,502,617" shape="poly">
        <area target="" alt="JL 1017" title="JL 1017" href="#JL1017" coords="665,651,699,641,718,712,683,720" shape="poly">
        <area target="" alt="JL 1021" title="JL 1021" href="#JL1021" coords="407,639,488,621,503,677,432,695,419,691" shape="poly">
        <area target="" alt="JL 1029" title="JL 1029" href="#JL1029" coords="279,784,308,720,337,731,334,804" shape="poly">
        <area target="" alt="JL 1027" title="JL 1027" href="#JL1027" coords="201,554,232,566,204,634,173,621" shape="poly">
        <area target="" alt="JL 1026" title="JL 1026" href="#JL1026" coords="234,570,263,583,239,645,207,634" shape="poly">
        <area target="" alt="JL 1025" title="JL 1025" href="#JL1025" coords="266,584,298,596,271,660,239,645" shape="poly">
        <area target="" alt="JL 1024" title="JL 1024" href="#JL1024" coords="300,594,334,609,308,671,274,659,291,617" shape="poly">
        <area target="" alt="JL 1023" title="JL 1023" href="#JL1023" coords="334,611,363,622,338,688,306,673" shape="poly">
    </map>


    <!--_ ------------------------ -->
          <!--POP UPS-->
<div class="popup " id="JL1002">
  <h1>JL 1002</h1>
  <p>Capacity: 40 </p>
  <p> <span class="ava response-content"></span></p>
  <button id="32" class="btn btn-primary">Book Now</button>
  <a class="close" href="#">X</a>
</div>
<div class="popup  " id="JL1001">
  <h1>JL 1001</h1>
  <p>Capacity: 2 </p>
  <p> <span class="ava response-content"></span></p>
  <button id="31" class="btn btn-primary">Book Now</button>
  <a class="close" href="#">X</a>
</div>
<div class="popup  " id="JL1003">
  <h1>JL 1003</h1>
  <p>Capacity: 15 </p>
  <p> <span class="ava response-content"></span></p>
  <button id="33" class="btn btn-primary">Book Now</button>
  <a class="close" href="#">X</a>
</div>
<div class="popup  " id="JL1004">
  <h1>JL 1004</h1>
  <p>Capacity: 10 </p>
  <p><span class="ava response-content"></span></p>
  <button id="34" class="btn btn-primary">Book Now</button>
  <a class="close" href="#">X</a>
</div>
<div class="popup  " id="JL1005">
  <h1>JL 1005</h1>
  <p>Capacity: 70 </p>
  <p><span class="ava response-content"></span></p>
  <button id="35" class="btn btn-primary">Book Now</button>
  <a class="close" href="#">X</a>
</div>
<div class="popup  " id="JL1006">
  <h1>JL 1006</h1>
  <p>Capacity: 2</p>
  <p><span class="ava response-content"></span></p>
  <button id="36" class="btn btn-primary">Book Now</button>
  <a class="close" href="#">X</a>
</div>
<div class="popup  " id="JL1007">
  <h1>JL 1007</h1>
  <p>Capacity: 2</p>
  <p><span class="ava response-content"></span></p>
  <button id="37" class="btn btn-primary">Book Now</button>
  <a class="close" href="#">X</a>
</div>
<div class="popup   " id="JL1008">
  <h1>JL 1008</h1>
  <p>Capacity: 2</p>
  <p><span class="ava response-content"></span></p>
  <button id="38" class="btn btn-primary">Book Now</button>
  <a class="close" href="#">X</a>
</div>
<div class="popup " id="JL1009">
  <h1>JL 1009</h1>
  <p>Capacity: 4</p>
  <p><span class="ava response-content"></span></p>
  <button id="39" class="btn btn-primary">Book Now</button>
  <a class="close" href="#">X</a>
</div>
<div class="popup  " id="JL1012">
  <h1>JL 1012</h1>
  <p>Capacity: 2</p>
  <p><span class="ava response-content">Available</span></p>
  <button id="40" class="btn btn-primary">Book Now</button>
  <a class="close" href="#">X</a>
</div>
<div class="popup  " id="JL1013">
  <h1>JL 1013</h1>
  <p>Capacity: 6</p>
  <p><span class="ava response-content"></span></p>
  <button id="41" class="btn btn-primary">Book Now</button>
  <a class="close" href="#">X</a>
</div>
<div class="popup  " id="JL1014">
  <h1>JL 1014</h1>
  <p>Capacity: 2</p>
  <p><span class="ava response-content"></span></p>
  <button id="42" class="btn btn-primary">Book Now</button>
  <a class="close" href="#">X</a>
</div>
<div class="popup  " id="JL1015">
  <h1>JL 1015</h1>
  <p>Capacity: 2</p>
  <p><span class="ava response-content"></span></p>
  <button id="43" class="btn btn-primary">Book Now</button>
  <a class="close" href="#">X</a>
</div>
<div class="popup   " id="JL1016">
  <h1>JL 1016</h1>
  <p>Capacity: 6</p>
  <p><span class="ava response-content"></span></p>
  <button id="44" class="btn btn-primary">Book Now</button>
  <a class="close" href="#">X</a>
</div>

<div class="popup " id="JL1017">
  <h1>JL 1017</h1>
  <p>Capacity: 2</p>
  <p> <span class="ava response-content"></span></p>
  <button id="45" class="btn btn-primary">Book Now</button>
  <a class="close" href="#">X</a>
</div>

<div class="popup  " id="JL1021">
  <h1>JL 1021</h1>
  <p>Capacity: 4</p>
  <p> <span class="ava response-content"></span></p>
  <button id="46" class="btn btn-primary">Book Now</button>
  <a class="close" href="#">X</a>
</div>

<div class="popup  " id="JL1023">
  <h1>JL 1023</h1>
  <p>Capacity: 2</p>
  <p> <span class="ava response-content"></span></p>
  <button id="47" class="btn btn-primary">Book Now</button>
  <a class="close" href="#">X</a>
</div>
<div class="popup   " id="JL1024">
  <h1>JL 1024</h1>
  <p>Capacity: 2</p>
  <p> <span class="ava response-content"></span></p>
  <button id="48" class="btn btn-primary">Book Now</button>
  <a class="close" href="#">X</a>
</div>
<div class="popup   " id="JL1025">
  <h1>JL 1025</h1>
  <p>Capacity: 2</p>
  <p><span class="ava response-content"></span></p>
  <button id="49" class="btn btn-primary">Book Now</button>
  <a class="close" href="#">X</a>
</div>
<div class="popup   " id="JL1026">
  <h1>JL 1026</h1>
  <p>Capacity: 2</p>
  <p> <span class="ava response-content"></span></p>
   <button id="50" class="btn btn-primary">Book Now</button>
  <a class="close" href="#">X</a>
</div>
<div class="popup   " id="JL1027">
  <h1>JL 1027</h1>
  <p>Capacity: 2</p>
  <p><span class="ava response-content"></span></p>
  <button id="51" class="btn btn-primary">Book Now</button>
  <a class="close" href="#">X</a>
</div>

<div class="popup   " id="JL1029">
  <h1>JL 1029</h1>
  <p>Capacity: 2</p>
  <p> <span class="ava response-content"></span></p>
  <button id="52" class="btn btn-primary">Book Now</button>
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
