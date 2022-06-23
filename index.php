<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        header {
            background-color: #171e2e;
            padding: 12px;
            text-align: left;
            font-size: 35px;
            color: rgb(255, 255, 255);
            text-decoration: aqua;
        }
        
        div.container {
            width: 150px;
            border: 3px solid #171e2e;
            padding: 50px;
            margin: 50px;
            text-align: center;
            mask-repeat: repeat-x;
        }
        
        body {
            margin: 010px;
            font-family: Arial, Helvetica, sans-serif;
        }
        
        .topnav {
            overflow: hidden;
            background-color: #1d273f;
        }
        
        .topnav a.login {
            float: right;
            color: #f2f2f2;
            padding: 14px 16px;
        }
        
        .topnav a {
            float: left;
            color: #f2f2f2;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            font-size: 17px;
        }
        
        .topnav a:hover {
            background-color: #ddd;
            border-radius: 5px;
            color: #171e2e;
        }
        
        .topnav a.active {
            border-radius: 5px;
            background-color: #aa0452;
            margin-block-start: inherit;
            color: white;
        }
        
        * {
            box-sizing: border-box;
        }
        
        body {
            font-family: Arial, Helvetica, sans-serif;
        }
        /* Float four columns side by side */
        
        .column {
            float: left;
            width: 25%;
            padding: 010px 5px;
        }
        
        .row {
            margin: 0 -5px;
        }
        /* Clear floats after the columns */
        
        .row:after {
            content: "";
            display: table;
            clear: both;
        }
        /* Responsive columns */
        
        @media screen and (max-width: 600px) {
            .column {
                width: 100%;
                display: block;
                margin-bottom: 10px;
            }
        }
        /* Style the counter cards */
        
        .card {
            box-shadow: 0 4px 8px 0 rgba(107, 53, 53, 0.2);
            padding: 1px;
            text-align: center;
            background-color: #171e2e;
            color: white;
        }
    
        body{
            background-image: url("banner.png");
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size:100% 100% ;
		}
    
    </style>
</head>

<body>
    
    <header >CROP MANAGEMENT SYSTEM</header>

    <div class="topnav">
        <a class="FARMER LOGIN"href="loginfarmer/loginfarmer.php">FARMER LOGIN</a>
        <a class="CUSTOMER LOGIN"  href="logincustomer/logincustomer.php">CUSTOMER LOGIN</a>
        <a class="FEEDBACK" href="feedback/feedback.php">FEEDBACK</a>
        <a class="ABOUT US" href="aboutus/ABOUT US.php">ABOUT US</a>
        
    </div>

</body>

</html>