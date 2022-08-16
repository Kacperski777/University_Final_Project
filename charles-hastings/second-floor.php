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


















    <img id="first-floor-jenny-lind" alt="" style="display:none">
<img id="ground-floor-jenny-lind" alt="" style="display:none">
<img id="second-floor-jenny-lind" alt="" style="display:none">
<img id="first-floor-mulberry-house" alt="" style="display:none">
  <img id="ground-floor-mulberry-house"alt="" style="display:none">
        <img id="second-floor-mulberry-house"alt="" style="display:none">
        <img id="first-floor-charles-hastings" alt="" style="display:none">
          <img id="ground-floor-charles-hastings"alt="" style="display:none">
                <img id="lower-ground-floor-charles-hastings"alt="" style="display:none">
    <!--CONTAINER with Three Options -->








    <div class="container-fluid center"></div>
    <div class="center">
      <a class="center" href="../buildings/charles-hastings.html"><i class="fas fa-arrow-left"></i></a>
  </div>
</div>

    <div class="container-fluid main">

    

      <div class="center">
        <img src="../img/second-floor-charles-hastings.png"  usemap="#image-map" id="second-floor-charles-hastings" class="map" alt="">
      </div>

      <map name="image-map">
    <area target="" alt="CH 2013" title="" href="#CH2013" coords="55,16,109,71" shape="rect">
    <area target="" alt="CH 2001" title="" href="#CH2001" coords="302,164,111,73" shape="rect">
    <area target="" alt="CH 2003" title="" href="#CH2003" coords="342,72,438,161" shape="rect">
    <area target="" alt="CH 2011" title="" href="#CH2011" coords="238,216,308,261" shape="rect">
    <area target="" alt="CH 2010" title="" href="#CH2010" coords="239,263,309,311" shape="rect">
    <area target="" alt="CH 2009" title="" href="#CH2009" coords="240,313,308,361" shape="rect">
    <area target="" alt="CH 2004" title="" href="#CH2004" coords="334,263,404,355" shape="rect">
    <area target="" alt="CH 2012" title="" href="#CH2012" coords="52,547,117,603" shape="rect">
    <area target="" alt="CH 2008" title="" href="#CH2008" coords="115,456,294,551" shape="rect">
    <area target="" alt="CH 2005" title="" href="#CH2005" coords="334,420,403,455" shape="rect">
    <area target="" alt="CH 2006" title="" href="#CH2006" coords="581,443,393,550" shape="rect">
</map>


    <!--_ ------------------------ -->
    <div class="popup  " id="CH2013">
      <h1>CH 2013</h1>
      <p>Capacity: 5</p>
      <p><span class="response-content ava"></span></p>
      <button id="22"  class="btn btn-primary">Book Now</button>
      <a class="close" href="#">X</a>
    </div>
    <div class="popup   " id="CH2001">
      <h1>CH 2001</h1>
      <p>Capacity: 48</p>
      <p> <span   class="ava response-content" ></span></p>
      <button id="12" class="btn btn-primary">Book Now</button>
      <a class="close" href="#">X</a>
    </div>
    <div class="popup  " id="CH2003">
      <h1>CH 2003</h1>
      <p>Capacity: 26</p>
      <p> <span   class="ava response-content"></span></p>
      <button  id="13" class="btn btn-primary">Book Now</button>
      <a class="close" href="#">X</a>
    </div>
    <div class="popup   " id="CH2011">
      <h1>CH 2011</h1>
      <p>Capacity: 2</p>
      <p> <span  class="ava response-content"></span></p>
      <button id="20" class="btn btn-primary">Book Now</button>
      <a class="close" href="#">X</a>
    </div>
    <div class="popup  " id="CH2010">
      <h1>CH 2010</h1>
      <p>Capacity: 2</p>
      <p> <span  class="ava response-content"></span> </p>
      <button id="19" class="btn btn-primary">Book Now</button>
      <a class="close" href="#">X</a>
    </div>
    <div class="popup   " id="CH2009">
      <h1>CH 2009</h1>
      <p>Capacity: 2</p>
      <p> <span  class="ava response-content"></span></p>
      <button id="18" class="btn btn-primary">Book Now</button>
      <a class="close" href="#">X</a>
    </div>
    <div class="popup  " id="CH2004">
      <h1>CH 2004</h1>
      <p>Capacity: 6</p>
      <p><span  class="ava response-content"></span></p>
      <button id="14" class="btn btn-primary">Book Now</button>
      <a class="close" href="#">X</a>
    </div>
    <div class="popup" id="CH2012">
      <h1>CH 2012</h1>
      <p>Capacity: 5</p>
      <p> <span  class="ava response-content"></span></p>
      <button id="21" class="btn btn-primary">Book Now</button>
      <a class="close" href="#">X</a>
    </div>
    <div class="popup  " id="CH2008">
      <h1>CH 2008</h1>
      <p>Capacity: 53</p>
      <p> <span class="ava response-content"></span></p>
      <button id="17"  class="btn btn-primary">Book Now</button>
      <a class="close" href="#">X</a>
    </div>
    <div class="popup   " id="CH2005">
      <h1>CH 2005</h1>
      <p>Capacity: 2</p>
      <p> <span  class="ava response-content"></span></p>
      <button id="15" class="btn btn-primary">Book Now</button>
      <a class="close" href="#">X</a>
    </div>
    <div class="popup   " id="CH2006">
      <h1>CH 2006</h1>
      <p>Capacity: 53</p>
      <p><span  class="ava response-content"></span></p>
      <button id="16" class="btn btn-primary">Book Now</button>
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
