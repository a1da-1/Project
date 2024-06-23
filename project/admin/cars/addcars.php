<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="../css/admin.css">
    <title>Admin Dashboard</title>
</head>

<body>

    <!-- Sidebar -->
    <?php include('sidebar.php');?>

    <!-- Main Content -->
    <div class="content">
        
        <!-- Navbar -->
        <?php include('../navigation/navbar.php');?>


        <main>
            <div class="header">
                <div class="left">
                    <h1>Cars</h1>
                    <ul class="breadcrumb">
                        <li><a href="#">
                                Cars
                            </a></li>
                        /
                        <li><a href="#" class="active">Add Cars</a></li>
                    </ul>
                </div>
               
            </div>

            <!-- Insights -->
            <ul class="insights">
            <a href=acars/addcars.php>    
                <li>    
                    <i class='bx bx-car'></i>
                    <span class="info">
                        <h3>
                            Add Cars
                        </h3>
                    </span>
                </li>
            </a>
            <a href=cars/managecars.php>
                <li>
                    <i class='bx bx-car'></i>
                    <span class="info">
                        <h3>
                            Manage Cars
                        </h3>
                    </span>
                </li>
            </a>
            </ul>
            <!-- End of Insights -->
            </div>
        </main>

    </div>

    <script src="../js/AdminDashboard.js"></script>
</body>

</html>