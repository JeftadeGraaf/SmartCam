<!DOCTYPE html>
<html>
    <head>
        <title>Bewakingscamera</title>
        <link rel="stylesheet" href="styles.css">
        <link rel="preconnect" href="https://fonts.googleapis.com"> 
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> 
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300&display=swap" rel="stylesheet">
    </head>
    <style>
        * {
            margin: 0;
            padding: 0;
            font-family: 'Inter', sans-serif;
        }
        
        nav {
            width: 100%;
            height: 70px;
            background-color: rgb(240, 240, 240);
            line-height: 70px;
            position: fixed;
        }
        h1 {
            color: rgb(0, 0, 0);
            text-align: center;
        }

        .sidenav {
            height: 100%;
            width: 20%;
            z-index: 1;
            top: 0;
            left: 0;
            position: absolute;
            right: 25px;
            font-size: 36px;
            background-color: rgb(240, 240, 240);
            overflow-x: hidden;
            transition: 0.5s;
            
        }

        .sidenav a {
            padding: 8px 8px 8px 32px;
            text-decoration: none;
            font-size: 25px;
            color: rgb(200, 200, 200);
            
        }

        .sidenav a:hover {
            color: #f1f1f1;
        }
    </style>
    <body>
        
        <nav>
            <h1>Dashboard</h1>
        </nav>
        <div id="mySidenav" class="sidenav">
            <p>Gebeurtenissen</p>
            <a href="#">About</a>
            <a href="#">Services</a>
            <a href="#">Clients</a>
            <a href="#">Contact</a>
        </div>

    </body>
</html>
