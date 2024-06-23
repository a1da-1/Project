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
    <?php include('navigation/sidebartransactions.php');?>

    <!-- Main Content -->
    <div class="content">
        
        <!-- Navbar -->
        <?php include('navigation/navbar.php');?>


        <main>
            <div class="header">
                <div class="left">
                    <h1>Transactions</h1>
                    <ul class="breadcrumb">
                        <li><a href="#">
                                Transactions
                            </a></li>
                    </ul>
                </div>
                <a href="#" class="report">
                    <i class='bx bx-cloud-download'></i>
                    <span>Download CSV</span>
                </a>
            </div>

            <div class="bottom-data">
                <div class="orders">
                    <div class="header">
                        <i class='bx bx-receipt'></i>
                        <h3>Recent Lease</h3>
                        <i class='bx bx-filter'></i>
                        <i class='bx bx-search'></i>
                    </div>
                    <table>
                        <thead>
                            <tr>
                                <th>User</th>
                                <th>Lease Start Date</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <i class='bx bx-user-circle'></i>
                                    <p>Daniel Kim</p>
                                </td>
                                <td>14-08-2023</td>
                                <td><span class="status completed">Completed</span></td>
                            </tr>
                            <tr>
                                <td>
                                    <i class='bx bx-user-circle'></i>
                                    <p>Stephanie</p>
                                </td>
                                <td>14-08-2023</td>
                                <td><span class="status pending">Pending</span></td>
                            </tr>
                            <tr>
                                <td>
                                    <i class='bx bx-user-circle'></i>
                                    <p>Park Jay</p>
                                </td>
                                <td>14-08-2023</td>
                                <td><span class="status process">Processing</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>

            </div>

        </main>

    </div>

    <script src="js/AdminDashboard.js"></script>
</body>

</html>