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
    <?php include('navigation/sidebarmodel.php');?>

    <!-- Main Content -->
    <div class="content">
        
        <!-- Navbar -->
        <?php include('navigation/navbar.php');?>


        <main>
            <div class="header">
                <div class="left">
                    <h1>Model</h1>
                    <ul class="breadcrumb">
                        <li><a href="#">
                                Model
                            </a></li>
                    </ul>
                </div>
               
            </div>

            <!-- Insights -->
            <ul class="insights">
            <a href=model/addmodel.php>    
                <li>    
                    <i class='bx bx-car'></i>
                    <span class="info">
                        <h3>
                        Add Model
                        </h3>
                       
                    </span>
                </li>
            </a>
            <a href=model/managemodel.php>
                <li>
                    <i class='bx bx-car'></i>
                    <span class="info">
                        <h3>
                            Manage Model
                        </h3>
    
                    </span>
                </li>
            </a>
            </ul>
            <!-- End of Insights -->

            </div>

        </main>

    </div>

    <script src="js/AdminDashboard.js"></script>
</body>

</html>