<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="../css/cars.css">
    <title>Cars - Honda</title>
</head>

<body>

    <?php include('../includes/newheader.php');?>

</br></br></br></br></br>

    <div id="Vehicles">
    <h2 class="separator">
        Cars  
    </h2>
 
    <p>

    <div class="car-select">
        <div class="category">
            <a href="carshonda.php#">Honda</a>
            <a class="active" href="carstoyota.php">Toyota</a>
            <a href="carsproton.php">Proton</a>
            <a href="carsperodua.php">Perodua</a>
        </div>
            <?php include('includes/toyotacar.php');?>
    </div>
    </div>


    <footer>
        <?php include('../includes/newfooter.php');?>
    </footer>

</body>

</html>