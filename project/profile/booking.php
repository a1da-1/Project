<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="../css/index.css">
    <title>Cars</title>
</head>

<body>

<?php include('../includes/newheader.php');?>

</br></br></br></br></br>

    <div id="Vehicles">
    <h2 class="separator">
        Profile
    </h2>

    <div class="car-select">
        <div class="category">
            <a href="../profile.php#">User Info</a>
            <a class="active" href="booking.php#">My Booking</a>
            <a href="posttestimonial.php#">Post a Testimonial</a>
            <a href="mytestimonial.php#">My Testimonial</a>
            <a href="updatepassword.php#">Update Password</a>
        </div>
            <?php include('includes/bookingcar.php');?>
    </div>
    </div>s



    <footer>
    <?php include('../includes/newfooter.php');?>
    </footer>

</body>

</html>