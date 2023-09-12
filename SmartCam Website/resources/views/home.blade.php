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
            background-color: rgb(255, 255, 255);
            line-height: 70px;
            position: fixed;
        }
        h1 {
            color: rgb(0, 0, 0);
            text-align: center;
        }

        body {
            background-color: rgb(245, 245, 245);
        }

        .sidenav {
            height: 65%;
            min-width: 300px;
            width: 20%;
            z-index: 1;
            top: 0;
            left: 0;
            position: absolute;
            right: 25px;
            background-color: rgb(255, 255, 255);
            padding: 10px;
            margin: 15px;
            margin-top: 85px;
            text-align: center;
            border-radius: 30px;
            
        }

        .sidenav a {
            text-decoration: none;
            text-align: center;
            font-size: 20px;
            color: rgb(30, 30, 30);
            
        }

        .sidenav a:hover {
            color: #f1f1f1;
        }

        .events {
            font-size: 25px;
            padding: 10px;
        }

        .notification {
            background-color: rgb(247, 247, 247);
            border-radius: 30px;
            text-align: center;
            padding: 5px 5px 5px 5px;
            margin: 10px;
            cursor: pointer;
        }
    </style>
    <body>
        
        <nav>
            <h1>Dashboard</h1>
        </nav>
        <div id="sidenav" class="sidenav">
            <p class="events">Gebeurtenissen</p>
            <div class="notification">
                <p>datum:</p>
                <a href="#">11-09-2023</a>
            </div>
            <div class="notification">
                <p>datum:</p>
                <p>Hoi</p>
                <a href="#">11-09-2023</a>
            </div>
            <div class="notification">
                <p>datum:</p>
                <a href="#">11-09-2023</a>
            </div>
        </div>

    </body>
</html>
