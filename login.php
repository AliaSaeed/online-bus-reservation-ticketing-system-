
     <?php
if (isset($_POST['submit'])) {
    // Perform some action when the form is submitted
    // You can add your login authentication logic here

    $index = true; // Placeholder for your authentication logic
    if ($index == true) {
        header("Location: reserve_ticket.php?error=1");
        exit();
    } else {
        // Redirect to some other page if authentication is successful
        header("Location: some_other_page.php");
        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login Page</title>
    <!-- Add your CSS and JavaScript links here -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
    <!--Stylesheet-->
    <style media="screen">
      *,
*:before,
*:after{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}
body{
    background-color: lightblue;
}

.video-container {
  position: relative;
  width: 100%;
  height: 100%;
  overflow: hidden;
}

#background-video {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: auto;
  z-index: -1;
}

.background{
    display: none;
    width: 430px;
    height: 520px;
    position: absolute;
    transform: translate(-50%,-50%);
    left: 50%;
    top: 50%;
}

.background .shape{
    display: none;
    height: 200px;
    width: 200px;
    position: absolute;
    border-radius: 50%;
}

.shape:first-child{
    background: linear-gradient(
        #1845ad,
        #23a2f6
    );
    left: -80px;
    top: -80px;
}

.shape:last-child{
    background: linear-gradient(
        to right,
        #ff512f,
        #f09819
    );
    right: -30px;
    bottom: -80px;
}

form{
    height: 520px;
    width: 400px;
    background-color: rgba(255,255,255,0.13);
    position: absolute;
    transform: translate(-50%,-50%);
    top: 50%;
    left: 50%;
    border-radius: 10px;
    backdrop-filter: blur(10px);
    border: 2px solid rgba(255,255,255,0.1);
    box-shadow: 0 0 40px rgba(8,7,16,0.6);
    padding: 50px 35px;
}

form *{
    font-family: 'Poppins',sans-serif;
    color: #ffffff;
    letter-spacing: 0.5px;
    outline: none;
    border: none;
}

form h3{
    font-size: 32px;
    font-weight: 500;
    line-height: 42px;
    text-align: center;
}

label{
    display: block;
    margin-top: 30px;
    font-size: 16px;
    font-weight: 600;
}

input{
    display: block;
    height: 50px;
    width: 100%;
    background-color: black
    border-radius: 3px;
    padding: 0 10px;
    margin-top: 8px;
    font-size: 14px;
    font-weight: 300;
}

::placeholder{
    color: #e5e5e5;
}

button{
    margin-top: 50px;
    margin-bottom: 34px;
    width: 100%;
    background-color: #ffffff;
    color: #080710;
    padding: 15px 0;
    font-size: 18px;
    font-weight: 600;
    border-radius: 5px;
    cursor: pointer;
}

.social{
  margin-top: 30px;
  display: flex;
}

.social div{
  background: red;
  width: 150px;
  border-radius: 3px;
  padding: 5px 10px 10px 5px;
  background-color: rgba(255,255,255,0.27);
  color: #eaf0fb;
  text-align: center;
}

.social div:hover{
  background-color: rgba(255,255,255,0.47);
}

.social .fb{
  margin-left: 25px;
}
.social i{
  margin-right: 4px;
}

.create{
    margin-top: 10px;
}

.sub-btn:hover{
    background-color:  #4ec3ff;;
    color: #ffffff;
  /*#0f3b57 */
}

    </style>

</head>
<body>
    <video autoplay muted loop id="background-video">
        <source src="{% static 'Graphics.mp4' %}" type="video/mp4">
        <!-- Add additional source elements for different video formats -->
    </video>
    
    <div class="background">
        <div class="shape"></div>
        <div class="shape"></div>
    </div>
    <form method="post">
        <h3>Login</h3>
      
        <label for="username">Username:</label>
        <input type="text" placeholder="Enter Username" id="username" name="username" required>

        <label for="password">Password:</label>
        <input type="password" placeholder="Password" id="password" name="pass" required>
        <button class="sub-btn" type="submit" name="submit">Log_in</button>
        <!-- <input type="button" value=""> -->
        <!-- <div class="social">
          <div class="go"><i class="fab fa-google"></i>  Google</div>
          <div class="fb"><i class="fab fa-facebook"></i>  Facebook</div>
        </div> -->
        <a class="create" href="{% url 'signup' %}">Create an account</a>
    </form>
</body>
</html>
