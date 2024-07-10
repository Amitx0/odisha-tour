<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="booking.css" />
  </head>
  <body>
    <div class="booking">
      <div class="container">
        <!-- navbar-starting -->
        <div class="navbar">
          <h1>CAPMER</h1>
          <div class="a-tag">
            <a href="home.php">Home</a>
            <a href="">Travel Map</a>
            <a href="aboutus.php">About us</a>
            <a href="booking.php">Booking</a>
            <a href="contact.php">Contact us</a>
          </div>
          <div class="but">
            <button id="openpopup">Sign In</button>
            <button>Log In</button>
          </div>
        </div>
        <!-- navbar-ending -->
        <!-- bookingform-start -->
         

        <div class="container">
          <div class="box">
            <div class="need">
              <p>What do you need?</p>

              <button class="btn" id="hotel">
                <ion-icon name="home"></ion-icon>
              </button>
              <button class="btn" id="flight">
                <ion-icon name="airplane"></ion-icon>
              </button>
              <button class="btn" id="train">
                <ion-icon name="train"></ion-icon>
              </button>
            </div>
            
            <!-- hotel-start -->
             <form action="booking.php" method= "post">
            <div class="area" id="hotel-area-popup">
              <div class="left">
                <p>Name</p>
                <input type="text" name ="name" />
                <p>City, Property Name Or Location</p>
                <input type="text" name ="location" />
                <p>Children(0-17)</p>
                <input type="number" name ="children" />
              </div>
              <div class="right">
                <p>Check-In</p>
                <input type="date" id="dateInput" name="checkin" />
                <p>Check-Out</p>
                <input type="date" id="dateInput" name="checkout" />
                <p>ADULTS (18y +)</p>
                <input type="number" name ="adults" />
                <button class="submit">Submit</button>
              </div>
            </div>
            </form>
            <!-- hotel-end -->
            <!-- flight-start -->
             <form action="index.php" method= "post">
            <div class="area" id="flight-popup">
              <div class="left">
                <p>From</p>
                <input type="text" />
                <p>Date</p>
                <input type="date" id="dateInput" name="dateInput" />
                <p>Children(0-17)</p>
                <input type="number" />
              </div>
              <div class="right">
                <p>To</p>
                <input type="text" />
                <p>ADULTS (18y +)</p>
                <input type="text" />
                <p>INFANTS (below 2y)</p>
                <input type="number" />
                <button class="submit">Submit</button>
              </div>
            </div>
            </form>
            <!-- flight-end -->
            <!-- train-start -->
             <form action="">
            <div class="area" id="train-popup">
              <div class="left">
                <p>From</p>
                <input type="text" />
                <p>Date</p>
                <input type="date" id="dateInput" name="dateInput" />
                <p>Children(0-17)</p>
                <input type="number" />
              </div>
              <div class="right">
                <p>To</p>
                <input type="text" />
                <p>ADULTS (18y +)</p>
                <input type="text" />
                <p>INFANTS (below 2y)</p>
                <input type="number" />
                <button class="submit">Submit</button>
              </div>
            </div>
            </form>
            <!-- train-end -->
          </div>
        </div>
        <!-- bookingform-end -->
      </div>
    </div>

    <!-- iconicicon-script -->
    <script
      type="module"
      src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"
    ></script>
    <script
      nomodule
      src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"
    ></script>

    <!-- custom js -->
    <script src="script.js"></script>
  </body>
</html>










<!-- php-start -->

<?php
if (isset($_POST['name'])) {
    $server = "localhost";
    $username = "root";
    $password = "";
    $database = "trip"; // Add your database name here

    $con = mysqli_connect($server, $username, $password, $database);

    if (!$con) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $name = $_POST['name'];
    $location = $_POST['location'];
    $checkin = $_POST['checkin'];
    $checkout = $_POST['checkout'];
    $children = $_POST['children'];
    $adults = $_POST['adults'];

    $sql = "INSERT INTO `hotel1` (`name`, `location`, `checkin`, `checkout`, `children`, `adults`, `date`) VALUES ('$name', '$location', '$checkin', '$checkout', '$children', '$adults', NOW());";

    // echo $sql;

    if (mysqli_query($con, $sql)) {
        // echo "Successfully inserted";
    } else {
        echo "ERROR: " . $sql . "<br>" . mysqli_error($con);
    }

    mysqli_close($con);
}
?>

<!-- php-end -->