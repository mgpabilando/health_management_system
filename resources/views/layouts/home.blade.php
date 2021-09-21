<!DOCTYPE html>
<html>
<head>
    <title>BMHMS</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="bootstrap/css/font-awesome/css/all.css">
    <link rel="stylesheet" href="css/dashboard_style.css">
    <link rel="icon" href="images\macawayan logo.png">
</head>

    <body>
        <div class="row">
            <div class="col-md-12 d-flex flex-row align-items-center justify-content-between header">
                <div class=" d-flex flex-row align-items-center title">
                <img src="images/macawayan logo.png" alt="irosin logo">
                <p class="navbar-brand">BMHMS</p>
                </div>
                <div class="d-flex position-relative align-items-center account">
                <p class="flex-shrink-1 user-name"><u>Juan Dela Cruz</u><br>NURSE</P>
                <img src="images/profile.jpeg" alt="">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 sidebar">
                <div class="d-grid flex-column menu-sidebar">
                <a class="active" href="dashboard.php"><i class="fas fa-home"></i>Dashboard</a>
                <a href="#"><i class="fas fa-map-marker-alt"></i>Purok</a>
                <a href="#"><i class="fas fa-child"></i>Family Numbering</a>
                <a href="#"><i class="fas fa-capsules"></i>Medicine Request</a>
                <a href="#"><i class="fas fa-file-alt"></i>Reports</a>
                <a href="#"><i class="fas fa-address-card"></i>Manage Account</a>
                </div>
                <div class="position-relative d-grid flex-column log-out">
                <a href="index.php" class="log-out"><i class="fas fa-sign-out-alt"></i>Log Out</a>
                </div>
            </div>
        </div>
        @yield('content')
        
        <script src="{{ asset('js/app.js') }}"></script>
        <script src="/js/bootstrap.js"></script>
        <script src="/js/jquery-341.min.js"></script>
        
    </body>

</html>

