<?php
session_start();
include('config.php');?>

<!DOCTYPE html>
<div class="sidebar">
    <a href="#" class="user">
        <i class='bx bx-user-circle'></i>
        <div class="user-name">
        <?php
        $username=$_SESSION['alogin'];
        $sql ="SELECT username FROM admin WHERE UserName=:username ";
        $query= $dbh -> prepare($sql);
        $query-> bindParam(':username', $username, PDO::PARAM_STR);
        $query-> execute();
        $results=$query->fetchAll(PDO::FETCH_OBJ);
        if($query->rowCount() > 0)
        {
        foreach($results as $result)
	        {

	        echo htmlentities($result->username); }}?>
        </div>
    </a>
    <ul class="side-menu">
        <li><a href="dashboard.php"><i class='bx bxs-dashboard'></i>Dashboard</a></li>
        <li><a href="model.php"><i class='bx bx-car'></i></i>Model</a></li>
        <li><a href="cars.php"><i class='bx bx-car'></i></i>Cars</a></li>
        <li><a href="user.php"><i class='bx bx-group'></i>User</a></li>
        <li><a href="testimonials.php"><i class='bx bx-message-square-dots'></i></i>Testimonials</a></li>
        <li><a href="bookings.php"><i class='bx bx-analyse'></i>Bookings</a></li>
        <li><a href="transactions.php"><i class='bx bx-analyse'></i>Transactions</a></li>
        <li class="active"><a href="settings.php"><i class='bx bx-cog'></i>Settings</a></li>
    </ul>
    <ul class="side-menu">
        <li>
            <a href="logout.php" class="logout">
                <i class='bx bx-log-out-circle'></i>
                Logout
            </a>
        </li>
    </ul>
</div>
</html>