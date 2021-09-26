<!DOCTYPE html>
<html>
<head>
    <title>BMHMS</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="font-awesome/css/all.css">
    <link rel="stylesheet" href="css/mine.css">
    <link rel="icon" href="images\macawayan logo.png">
</head>
<body>
    <div id="sidebar">
        <div class="toggle-btn" onclick="toggleSidebar()">
            <span></span>    
            <span></span>  
            <span></span>  
        </div>
        <ul> 
            <li>Dashboard</li> 
            <li>Purok</li> 
            <li>Family Numbering</li>
            <li>Medicine Request</li>
            <li>Reports</li>
            <li>Manage Account</li>
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

