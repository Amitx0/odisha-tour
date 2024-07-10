<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="contact.css" />
  </head>
  <body>
    <div class="container">
      <div class="main">
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
            <button >Sing In</button>
            <button>Log In</button>
          </div>
        </div>
        <div class="contact">
          <div class="contant">
            <div class="top">
              <h1>Contact us</h1>
              <h2>If You Have any Enqury?</h2>
            </div>
            <div class="lr">
              <div class="left" >
                <form onsubmit="sendEmail(); reset(); return false;">
                
                <p>What can i do for you?</p>
                <input class="name" type="text" placeholder="Your Name" />
                <input class="mail" id="email" type="email" placeholder="Your Emain" />

                <textarea name="" id="" placeholder="Write"></textarea>
                
                <button>Submit <ion-icon name="send"></ion-icon></button>
                </form>
              </div>

              <div class="right">
                <p>
                  Traveling offers endless adventures and discoveries. From
                  vibrant cities to serene landscapes, each journey brings new
                  experiences and unforgettable memories.
                </p>
                <a href=""><ion-icon name="logo-instagram"></ion-icon></a>
                <a href=""><ion-icon name="logo-facebook"></ion-icon></a>
                <a href=""><ion-icon name="logo-twitter"></ion-icon></a>
                <a href=""><ion-icon name="logo-youtube"></ion-icon></a>
              </div>
            </div>
          </div>
        </div>
        
      </div>
      
    </div>

    <script
      type="module"
      src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"
    ></script>
    <script
      nomodule
      src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"
    ></script>

    <script src="script.js"></script>


    <script>"https://smtpjs.com/v3/smtp.js"</script>
  </body>
</html>
