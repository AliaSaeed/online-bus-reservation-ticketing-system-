<!DOCTYPE html>
<html>
    <head>
        <title>Booking Ticket System</title>
        <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!----icons faimly link-->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">                                                                
  <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
   <!----fonts faimly link-->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
</head>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        h1 {
            text-align: center;
        }

        form {
            max-width: 400px;
            margin: 0 auto;
        }

        label {
            display: block;
            margin-bottom: 10px;
        }

        input, select, button {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
        }

        button {
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
        }

        button:hover {
            background-color: #45a049;
        }
        /* About page in index style */
  .heading1{
    text-align: center;
    padding: .5rem 0;
  }
  /* background image in home page style */
  .heading1{
   background-size: cover !important;
   background-position: center !important;
   padding-top: 4rem;
   padding-bottom: 4rem;
   display: flex;
   align-items: center;
   justify-content: center;
   box-shadow: white;
     /* Add the blur effect */
  filter: blur(2px);
  -webkit-filter: blur(2px);


  }
  /* Footer style in index page style */

.footer{
      background: url(./images/foo.jpg) no-repeat;
      background-size: cover;
      background-position: center;
      height: 70%;
   }
.footer .box-container{
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(20rem, 1fr));
      gap: 2.5rem;
   }
.footer .box-container .box h5{
      color: rgb(240, 229, 229);
      font-size: 2rem;
      padding-bottom: 1.5rem;
   }
 .footer .box-container .box a {
      color: rgb(196, 140, 224);
      font-size: 1rem;
      padding-bottom: .5rem;
      display: block;
      margin-left: 2rem;
   }
.footer .box-container .box a i{
      color: rgb(224, 219, 224);
      padding-right: .5rem;
      transition: .1s linear;
   }
.footer .box-container .box a:hover i{
      padding-right: 1rem;
      
   }
.footer .credit{
   text-align: center;
   padding-top: 1rem;
   margin-top: 2rem;
   border-top: .1rem solid var(--white);
   font-size: 1.5rem;
   color: white;
}
.footer .credit span{
   color: darkorchid;
}


.white-text{
   color: white !important;
}
    </style>

<body>
  <!-- navbar--->  
<?php include 'menu.php'; ?>
<!-- about us page--->
<div class ="heading1" style="background:url(images/T.png) no-repeat">
<h1 class="text-center">Online Ticket Book </h1>

    </div><br><br>
    <div  class=" w-50 container" style='background-color:lightgray'>
    

    <h1>Ticket Reservation System</h1>
    <form id="reservationForm" class="" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br>

        <label for="gender">Gender:</label>
        <select id="gender" name="gender" required>
            <option value="">Select Gender</option>
            <option value="Male">Male</option>
            <option value="Female">Female</option>
        </select><br>

        <label for="departure">Departure:</label>
        <select id="departure" name="departure" required>
            <option value="">Select Departure</option>
            <option value="Islamabad to China">Islamabad to China</option>
            <option value="Islamabad to Ucj sharif">Islamabad to Ucj sharif</option>
            <option value="Islamabad to Lahore">Islamabad to Lahore</option>
            <option value="Islamabad to Bhawalpur">Islamabad to Bhawalpur</option>
            <option value="Islamabad to Karachi">Islamabad to Karachi</option>
            <option value="Multan to Rawalpindi">Multan to Rawalpindi</option>
        </select><br>

        <label for="time_of_travel">Time of Travel:</label>
        <select id="time_of_travel" name="time_of_travel" required>
            <option value="">Select Time</option>
            <option value="6 AM">6 AM</option>
            <option value="7 PM">7 PM</option>
            <option value="8 PM">8 PM</option>
            <option value="9 PM">9 PM</option>
        </select><br>

        <label for="seats">Seats:</label>
        <input type="number" id="seats" name="seats" required><br>

        <label for="bus_type">Bus Type:</label>
        <select id="bus_type" name="bus_type" required>
            <option value="">Select Bus Type</option>
            <option value="Executive Class">Executive Class</option>
            <option value="Business Class">Business Class</option>
        </select><br>

        <button type="submit">Reserve Ticket</button>
    </form>
   </div>
    <div id="statusMessage"></div> <!-- This will show reservation status -->

    <script>
        document.getElementById("reservationForm").addEventListener("submit", function (event) {
            event.preventDefault(); // Prevent form submission for now

            var name = document.getElementById("name").value;
            var gender = document.getElementById("gender").value;
            var departure = document.getElementById("departure").value;
            var timeOfTravel = document.getElementById("time_of_travel").value;
            var seats = document.getElementById("seats").value;
            var busType = document.getElementById("bus_type").value;

            // Check if the user entered all required information
            if (!name || !gender || !departure || !timeOfTravel || !seats || !busType) {
                alert("Please fill in all required fields.");
                return;
            }

            // Calculate a random price between 2000 and 3000 for the selected departure
            var price = Math.floor(Math.random() * 1001) + 2000;

            // You can implement AJAX to check if the seats for the selected time and departure are available in the backend
            // For simplicity, let's assume the seat is not reserved and proceed with reservation.
            var formattedPrice = new Intl.NumberFormat('en-US', { style: 'currency', currency: 'PKR' }).format(price);
            var reservationDetails = `
                Name: ${name}<br>
                Gender: ${gender}<br>
                Departure: ${departure}<br>
                Ticket Price: ${formattedPrice}<br>
                Time: ${timeOfTravel}<br>
                Seats: ${seats}<br>
                Bus Type: ${busType}
            `;

            // Redirect to the success section on the same page with reservation details
            var statusMessage = document.getElementById("statusMessage");
            statusMessage.innerHTML = `
                <h3><br>Deposit your Payment on this #HBL Bank Account 11727901361603 we will confirm you about Reserve Successfully!<br></h3>
                <br>
                <h4>Your Book Ticket: </h4>
                <p>${reservationDetails}</p>
            `;
        });
    </script>

    <?php
    // Connect to your MySQL database
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "ticket_reservation_db";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Handle form submission
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $name = $_POST["name"];
        $gender = $_POST["gender"];
        $departure = $_POST["departure"];
        $time_of_travel = $_POST["time_of_travel"];
        $seats = $_POST["seats"];
        $bus_type = $_POST["bus_type"];
        $price = rand(2000, 3000);

        // Insert data into the database
        $sql = "INSERT INTO ticket_reservation (name, gender, departure, time_of_travel, seats, bus_type, price) VALUES ('$name', '$gender', '$departure', '$time_of_travel', '$seats', '$bus_type', '$price')";

        if ($conn->query($sql) === TRUE) {
            // Do nothing, JavaScript handles the reservation display
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        $conn->close();
    }
    ?><br><br>
    <!-- section Footer Page -->
<section class="footer">
  <div class="box-container">
    <div class="box">
      <h5>Quick link</h5>
   <a  href="index.php"><i class="fa fa-angle-right"></i>Home <span class="sr-only">(current)</span></a>
      <a  href="about.php"><i class="fa fa-angle-right"></i>About us</a>
      <a  href="pakcges.php"><i class="fa fa-angle-right"></i>pakcges</a>
      <a  href="services.php"><i class="fa fa-angle-right"></i>Services</a>
    <a  href="contect.php"><i class="fa fa-angle-right"></i>Contect us</a>
      <a  href="otr.php"><i class="fa fa-angle-right"></i>online ticket booking</a>
    </div>
    <div class="box">
      <h5>contect info</h5>
      <a  href="#"><i class="fa fa-phone" aria-hidden="true"></i>+92-42-37506432,37506433</a>
      <a href="#"><i class="fa fa-envelope-o" aria-hidden="true"></i>operations@faisalmovers.com</a>
      <a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i>pakistan, ISLAMABAD</a>
    </div>
    <div class="box">
      <h5>folow us</h5>
      <a  href="https://web.facebook.com/FaisalMovers/?_rdc=1&_rdr"><i class="fa fa-facebook-square" aria-hidden="true"></i>facebook</a>
      <a href="https://www.instagram.com/faisal_movers/?hl=en"><i class="fa fa-instagram" aria-hidden="true"></i>Instagram</a>
      <a href="https://play.google.com/store/apps/details?id=com.faisalmovers.travels.bus&hl=en&gl=US"><i class="fa fa-google" aria-hidden="true"></i>googel</a>
    </div>
  </div>
		           <div class="credit">created by<span> Alia web developer</span>
                | all rights reserved.</div>
</section>
              </footer>
  
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

 <!-- script file link-->
 <script src="js/script.js"></script>
 <!-- swiper js link-->
<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
</body>
</html>
