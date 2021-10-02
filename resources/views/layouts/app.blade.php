{{---LARAVEL LOGIN TEMPLATE-----}}

 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
     <link rel="stylesheet" href="bootstrap/bootstrap.css">
     <link rel="stylesheet" href="fonts/font-awesome/css/all.css">
     <link rel="stylesheet" href="css/mystyle_CSS.css">
     <link rel="icon" href="images/macawayan logo.png">
 
     <style>
         body{
             background-image: url(images/bmhms-background.jpg);
             background-size: cover;
         }
     </style>
 
 
 </head>
 <body>
    @yield('content')
    @yield('scripts')
    
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="/js/bootstrap.js"></script>
    <script src="/js/jquery-341.min.js"></script>    
 </body>
 </html>