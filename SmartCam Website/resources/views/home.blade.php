<!DOCTYPE html>
<html>
    <head>
        <title>Bewakingscamera</title>
        <link rel="stylesheet" href="styles.css">
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

        .snapshot-preview{
            height: 400px;
            width: 600px;
            box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
            /* display: flex;
            justify-content: center; 
            align-items: center; */

            display: inline-block;
            margin-left: 500px;
            margin-top: 100px;
        }

        .snapshot-photo{
            height: 300px;
            width: 600px;
            display: inline-block;
            cursor: pointer;
        }

        .snapshot-info{
            height: 50px;
            width: 600px;
            display: inline-block;
            font-weight: bold;
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
         /*19fb805336c5ce389adf98e7a5b0980158fa0a74*/
            text-align: center;
        }

        .snapshot-date{
            height: 50px;
            width: 600px;
            display: inline-block;
            text-align: center;

            font-size: 18px;
            color: rgb(100, 100, 100);

        }

        .sidenav a:hover {
            color: rgb(30, 30, 30);
        }

        .events {
            font-size: 23px;
            padding: 10px;
        }

        .notification {
            background-color: rgb(247, 247, 247);
            border-radius: 30px;
            text-align: center;
            padding: 5px 5px 5px 5px;
            margin: 10px;
            transition: all 300ms;
            cursor: pointer;
            
        }

        .notificaties:hover {
            top: -10px;
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
            <div class="snapshot-preview">
                <div class="snapshot-photo">
                    <img src="C:\Users\Jeffrey\Pictures\stray.jpg">
                </div>
                <div class="snapshot-info">
                    <p>
                        Live camera feed
                    </p>
                </div>
                <div class="snapshot-date">
                    <p>
                        11/09/2023 19:10
                    </p>
                </div>
            </div>

        </div>


            <div class="snapshot-preview">
                <div class="snapshot-photo">
                    <img src="C:\Users\Jeffrey\Pictures\stray.jpg">
                </div>
                <div class="snapshot-info">
                    <p>
                        Most recent snapshot
                    </p>
                </div>
                <div class="snapshot-date">
                    <p>
                        11/09/2023 18:57
                    </p>
                </div>
            </div>
    </body>
</html>
