<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Travel Me</title>
</head>
<body>
      <!-- Start Navbar -->
            
    <div class="navbar" style="position: fixed;overflow: hidden;background-color: rgb(0, 0, 0);position: fixed;top: 0;width: 100%;">
        <div class="container">
            <a href="index.php">
                <h2 class="logo fl-left">Travel<span>Me</span></h2>
            </a>
            <ul>
                <li><a href="index.php" class="active">Home</a></li>
                <li class="dropdown">
                    <a href="aboutus.php">About Us</a>
                    <div class="dropdown-content">
                        <a style="color:black;" href="aboutus.php">About Us</a>
                        <a style="color:black;" href="aboutus.php">Pricing</a>
                    </div>
                </li>
                <li><a href="visit.html">Visit</a></li>
                <li><a href="contactus.php">Contact Us</a></li>

            </ul>
        </div>
    </div>

    
    
    <!-- End Navbar -->
    <div class="contact-me" id="contactMe">
        <div class="container">
            <div class="container" style="margin-top: 10px;text-align: center;color:white;">
                <h1 id="header">Contact Us</h1>
            </div>
            <div class="info fl-left">
                <p>You can contact TRAVELME by simply sending an email with the required fields.</p>
                <p>123 Street Name<br>Tiaret<br>Saudi Arabia</p>
                <p><strong>Email:</strong> travelme@gmail.com</p>
                <p><strong>Phone:</strong>213711112222</p>
            </div>
            <div class="form fl-left">
                <form action="code.php" method="POST">
                    <label>Name <sup>*</sup></label>
                    <input type="text" name="name">
                    <label>Email Address <sup>*</sup></label>
                    <input type="text" name="email">
                    <label>Phone <sup>*</sup></label>
                    <input type="text" name="phone">
                    <label>Message</label>
                    <textarea name="message"></textarea>
                    <input type="submit" name="adddetails" value="Contact Us">
                </form>
            </div>
        </div>
    </div>

    <!-- Start Footer -->

    <div class="footer">
        <div class="container">
            <p>Copyright &copy; 2021 TraveMe Co.</p>
        </div>
    </div>

    <!-- End Footer -->
</body>
</html>