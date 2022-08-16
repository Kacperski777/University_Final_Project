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
        <a class="center" href="../buildings/jenny-lind.html"><i class="fas fa-arrow-left"></i></a>
    </div>

    </div>
    <div class="container-fluid main">

     
      <div class="col-lg-12 center">
        <img src="../img/second-floor-jenny-lind.png" usemap="#image-map" id="second-floor-jenny-lind" class="map" alt="">
      </div>

      <map name="image-map">
    <area target="" alt="JL 2001" title="JL 2001" href="#JL2001" coords="61,122,207,88,224,163,210,193,200,200,220,269,108,296" shape="poly">
    <area target="" alt="JL 2002" title="JL 2002" href="#JL2002" coords="203,199,372,152,390,226,222,269" shape="poly">
    <area target="" alt="JL 2003" title="JL 2003" href="#JL2003" coords="375,153,481,125,538,342,431,373" shape="poly">
    <area target="" alt="JL 2004" title="JL 2004" href="#JL2004" coords="511,116,551,105,568,168,525,178" shape="poly">
    <area target="" alt="JL 2005" title="JL 2005" href="#JL2005" coords="527,179,565,168,587,239,543,251" shape="poly">
    <area target="" alt="JL 2006" title="JL 2006" href="#JL2006" coords="547,252,584,241,608,318,564,328" shape="poly">
    <area target="" alt="JL 2007" title="JL 2007" href="#JL2007" coords="564,329,599,323,618,381,572,396,562,364,572,357" shape="poly">
    <area target="" alt="JL 2012" title="JL 2012" href="#JL2012" coords="518,410,554,401,565,438,528,448" shape="poly">
    <area target="" alt="JL 2013" title="JL 2013" href="#JL2013" coords="554,401,594,391,603,428,564,440" shape="poly">
    <area target="" alt="JL 2014" title="JL 2014" href="#JL2014" coords="595,391,631,381,653,454,614,461" shape="poly">
    <area target="" alt="JL 2016" title="JL 2016" href="#JL2016" coords="490,639,558,623,572,675,505,693" shape="poly">
    <area target="" alt="JL 2023" title="JL 2023" href="#JL2023" coords="457,648,489,640,504,703,471,708" shape="poly">
    <area target="" alt="JL 2024" title="JL 2024" href="#JL2024" coords="417,660,455,648,468,700,430,711" shape="poly">
    <area target="" alt="JL 2021" title="JL 2021" href="#JL2021" coords="479,744,515,733,524,781,490,793" shape="poly">
    <area target="" alt="JL 2022" title="JL 2022" href="#JL2022" coords="439,753,474,744,488,796,410,820,412,792,419,790,417,776,433,778" shape="poly">
    <area target="" alt="JL 2027" title="JL 2027" href="#JL2027" coords="134,548,192,570,174,617,111,592" shape="poly">
</map>


    <!--_ ------------------------ -->

        <!--POP UPS-->
<div class="popup " id="JL2001">
  <h1>JL 2001</h1>
  <p>Capacity: 54</p>
  <p> <span class="ava response-content"></span></p>
  <button id="53" class="btn btn-primary">Book Now</button>
  <a class="close" href="#">X</a>
</div>
<div class="popup  " id="JL2002">
  <h1>JL 2002</h1>
  <p>Capacity: 24</p>
  <p> <span class="ava response-content"></span></p>
  <button id="54" class="btn btn-primary">Book Now</button>
  <a class="close" href="#">X</a>
</div>
<div class="popup  " id="JL2003">
  <h1>JL 2003</h1>
  <p>Capacity: 48</p>
  <p> <span class="ava response-content"></span></p>
  <button id="55" class="btn btn-primary">Book Now</button>
  <a class="close" href="#">X</a>
</div>
<div class="popup  " id="JL2004">
  <h1>JL 2004</h1>
  <p>Capacity: 2</p>
  <p> <span class="ava response-content"></span></p>
  <button id="56" class="btn btn-primary">Book Now</button>
  <a class="close" href="#">X</a>
</div>
<div class="popup  " id="JL2005">
  <h1>JL 2005</h1>
  <p>Capacity: 2</p>
  <p> <span class="ava response-content"></span></p>
  <button id="57" class="btn btn-primary">Book Now</button>
  <a class="close" href="#">X</a>
</div>
<div class="popup  " id="JL2006">
  <h1>JL 2006</h1>
  <p>Capacity: 2</p>
  <p> <span class="ava response-content"></span></p>
  <button id="58" class="btn btn-primary">Book Now</button>
  <a class="close" href="#">X</a>
</div>
<div class="popup  " id="JL2007">
  <h1>JL 2007</h1>
   <p>Capacity: 2</p>
   <p> <span class="ava response-content"></span></p>
   <button id="59" class="btn btn-primary">Book Now</button>
  <a class="close" href="#">X</a>
</div>
<div class="popup   " id="JL2012">
  <h1>JL 2012</h1>
  <p>Capacity: 2</p>
  <p> <span class="ava response-content"></span></p>
  <button id="60" class="btn btn-primary">Book Now</button>
  <a class="close" href="#">X</a>
</div>
<div class="popup  " id="JL2013">
  <h1>JL 2013</h1>
  <p>Capacity: 2</p>
  <p> <span class="ava response-content"></span> </p>
  <button id="61" class="btn btn-primary">Book Now</button>
  <a class="close" href="#">X</a>
</div>
<div class="popup   " id="JL2014">
  <h1>JL 2014</h1>
   <p>Capacity: 2</p>
   <p> <span class="ava response-content"></span></p>
   <button id="62" class="btn btn-primary">Book Now</button>
  <a class="close" href="#">X</a>
</div>
<div class="popup  " id="JL2016">
  <h1>JL 2016</h1>
  <p>Capacity: 4</p>
  <p> <span class="ava response-content"></span></p>
  <button id="63" class="btn btn-primary">Book Now</button>
  <a class="close" href="#">X</a>
</div>
<div class="popup   " id="JL2023">
  <h1>JL 2023</h1>
  <p>Capacity: 2</p>
  <span class="ava response-content"></span></p>
  <button id="66" class="btn btn-primary">Book Now</button>
  <a class="close" href="#">X</a>
</div>
<div class="popup  " id="JL2024">
  <h1>JL 2024</h1>
  <p>Capacity: 2</p>
  <p> <span class="ava response-content"></span></p>
  <button id="67" class="btn btn-primary">Book Now</button>
  <a class="close" href="#">X</a>
</div>
<div class="popup   " id="JL2021">
  <h1>JL 2021</h1>
  <p>Capacity: 2</p>
  <p> <span class="ava response-content"></span></p>
  <button id="64" class="btn btn-primary">Book Now</button>
  <a class="close" href="#">X</a>
</div>
<div class="popup  " id="JL2022">
  <h1>JL 2022</h1>
  <p>Capacity: 2</p>
  <p> <span class="ava response-content"></span></p>
  <button id="65" class="btn btn-primary">Book Now</button>
  <a class="close" href="#">X</a>
</div>
<div class="popup   " id="JL2027">
  <h1>JL 2027</h1>
  <p>Capacity: 2</p>
  <p> <span class="ava response-content"></span></p>
  <button id="78" class="btn btn-primary">Book Now</button>
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
