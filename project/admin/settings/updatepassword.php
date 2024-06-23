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
                    <h1>Settings</h1>
                    <ul class="breadcrumb">
                        <li><a href="#">
                                Settings
                            </a></li>
                        /
                        <li><a href="#" class="active">Update Password</a></li>
                    </ul>
                </div>
            </div>

            <!-- Insights -->
            <ul class="insights">
            <a href=adminmodel.php>    
                <li>    
                    <i class='bx bx-car'></i>
                    <span class="info">
                        <h3>
                            Contact Info
                        </h3>
                    </span>
                </li>
            </a>
            <a href=admincars.php>
                <li>
                    <i class='bx bx-car'></i>
                    <span class="info">
                        <h3>
                            Update Password
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