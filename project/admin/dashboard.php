<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="css/admin.css">
    <title>Admin Dashboard</title>
</head>

<body>

    <!-- Sidebar -->
    <?php include('navigation/sidebar.php');?>

    <!-- Main Content -->
    <div class="content">
        
        <!-- Navbar -->
        <?php include('navigation/navbar.php');?>


        <main>
            <div class="header">
                <div class="left">
                    <h1>Dashboard</h1>
                    <ul class="breadcrumb">
                        <li><a href="#">
                                Dashboard
                            </a></li>
                        <li><a href="#" class="active"></a></li>
                    </ul>
                </div>
            </div>

            <!-- Insights -->
            <ul class="insights">
            <a href=model.php>    
                <li>    
                    <i class='bx bx-car'></i>
                    <span class="info">
                        <h3>
                            4
                        </h3>
                        <p>Manage Models</p>
                    </span>
                </li>
            </a>
            <a href=cars.php>
                <li>
                    <i class='bx bx-car'></i>
                    <span class="info">
                        <h3>
                            4
                        </h3>
                        <p>Manage Cars</p>
                    </span>
                </li>
            </a>
            <a href=user.php>
                <li><i class='bx bx-group'></i>
                    <span class="info">
                        <h3>
                            1
                        </h3>
                        <p>Manage User</p>
                    </span>
                </li>
            </a>
            <a href=testimonials.php>
                <li><i class='bx bx-show-alt'></i>
                    <span class="info">
                        <h3>
                            8
                        </h3>
                        <p>Testimonials</p>
                    </span>
                </li>
            </a>
            <a href=bookings.php>
                <li><i class='bx bx-analyse'></i>
                    <span class="info">
                        <h3>
                            2
                        </h3>
                        <p>Manage Bookings</p>
                    </span>
                </li>
            </a>
            <a href=transactions.php>
                <li><i class='bx bx-line-chart'></i>
                    <span class="info">
                        <h3>
                            2
                        </h3>
                        <p>Transactions</p>
                    </span>
                </li>
            </a>
            </ul>
            <!-- End of Insights -->


        </main>

    </div>

    <script src="js/AdminDashboard.js"></script>
</body>

</html>