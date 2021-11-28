<?php
include('connection.php');
?>
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
    <div class="container" style="margin-top: 70px;text-align: center;">
        <h1 id="header" >About Us</h1>
        
    </div>

    <!-- Start About Us -->

    <div class="about-me" id="aboutMe" style="margin-top:50px;">
        <div class="container">
            <div>
                <div class="image">
                    <img src="images/about/bg-3.jpg" style="width: 500px;height:400px;margin-top:10px; padding: 10px 10px 10px 10px;">
                </div>
                <div class="info fl-left" >
                    <p>In 1966, the Government decided to develop tourism in a planned and a systematic manner, after identifying 
                        the need to set up an institutional framework. The Ceylon Tourist Board (created by the Ceylon Tourist Board
                        Act No. 10 of 1966) and the Ceylon Hotels Corporation (created by Ceylon Hotels Corporation Act of 1966) were 
                        set up duly.Created to promote rapid economic development, through the development of foreign tourism, the 
                        Ceylon Tourist Board (CTB) was a statutory body that allowed greater freedom in decision making and flexibility 
                        in financial management..Created to promote rapid economic development, through the development of foreign tourism, the 
                        Ceylon Tourist Board (CTB) was a statutory body that allowed greater freedom in decision making and flexibility 
                        in financial management.Tourist Board (CTB) was a statutory body that allowed greater freedom in decision making and flexibility 
                        in financial management..Created to promote rapid economic development, through the development of foreign tourism, the 
                        Ceylon Tourist Board (CTB) was a statutory body that allowed greater freedom 
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- End About Us -->

    <!-- Start Pricing -->
    <div class="pricing">
        <div class="container">
            <h1 class="princing-header">Pricing</h1>
            <p class="pricing-info">With Fabulous Facilities Both In And Outside Our Hotels, Find Your Perfect Stay With
                Us. We'll Match Any Price. Book Direct For Free Wi-Fi & Exclusive Offers! Simple Refund Policy.</p>
            <div class="pricing-table">
            <?php

                $query = "SELECT * FROM pricing";
                $query_run = mysqli_query($con, $query);

                if (mysqli_num_rows($query_run) > 0) {
                foreach ($query_run as $uni) {
            ?>
                <table>
                    <tr>
                        <th>Hotel</th>
                        <th>Location</th>
                        <th>Pricing (per night)</th>
                        <th>Availability</th>
                        <th>Rating</th>
                    </tr>
                    <tr>
                        <td><?php echo $uni['hotel']; ?></td>
                        <td><?php echo $uni['location']; ?></td>
                        <td><?php echo $uni['pricing']; ?></td>
                        <td><?php echo $uni['availability']; ?></td>
                        <td><?php echo $uni['rating']; ?></td>
                    </tr>
                </table>
                <?php
                }
              } 
              else {
                ?>
                <P>No Record Found</p>
              <?php
              }
              ?>
            </div>
        </div>

    </div>

    <!-- End Pricing -->
    <br>




    <!-- Start Footer -->

    <div class="footer">
        <div class="container">
            <p>Copyright &copy; 2021 TraveMe Co.</p>
        </div>
    </div>

    <!-- End Footer -->


</body>
</html>