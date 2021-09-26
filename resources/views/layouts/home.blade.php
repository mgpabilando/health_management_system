<!DOCTYPE html>
<html>
<head>
    <title>BMHMS</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap/bootstrap.css">
    <link rel="stylesheet" href="fonts/font-awesome/css/all.css">
    <link rel="stylesheet" href="css/mine.css">
    <link rel="icon" href="images\macawayan logo.png">
</head>
<body>
    
    <div id="sidebar">
        <div class="sidebar-header">
            <img src="images/HMS.png" alt="" width="155px" height="155px">
        </div>
        <div class="toggle-btn" onclick="toggleSidebar()">
        <span></span>
        <span></span>
        <span></span>
        </div>
        <ul> 
            <li class="active">
                <a href="#"><i class="fa fa-home"></i>Dashboard</a>
            </li>
            <li>
                <a href="#"><i class="fa fa-map-marker-alt"></i>Purok</a>
            </li>
            <li>
                <a href="#"><i class="fa fa-child"></i>Family Numbering</a>
            </li>
            <li>
                <a href="#"><i class="fa fa-capsules"></i>Medicine Request</a>
            </li>
            <li>
                <a href="#"><i class="fa fa-file-alt"></i>Reports</a></li>
            <li>
                <a href="#"><i class="fa fa-address-card"></i>Manage Account</a>
            </li>
        </ul>  
        
        
          
    </div>
        @yield('content')  
        @yield('script')
        <script src="{{ asset('js/app.js') }}"></script>
        <script src="/js/bootstrap.js"></script>
        <script src="/js/jquery-341.min.js"></script>

        

<script>
    function toggleSidebar()
    {
        document.getElementById("sidebar").classList.toggle('active');
    }
</script>
</html>

