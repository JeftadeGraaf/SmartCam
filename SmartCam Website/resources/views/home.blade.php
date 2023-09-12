<!DOCTYPE html>
<html>
    <head>
        <title>Bewakingscamera</title>
        <link rel="stylesheet" href="styles.css">
        <link rel="preconnect" href="https://fonts.googleapis.com"> 
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> 
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    </head>
    <style>
        * {
            margin: 0;
            padding: 0;
            font-family: 'Inter', sans-serif;
        }

        .flex-container {
            display: flex;
            justify-content: right;
            flex-wrap: wrap;
            margin-right: 50px;
            animation: backInDown; /* referring directly to the animation's @keyframe declaration */
            animation-duration: 1.5s; /* don't forget to set a duration! */
        }

        .flex-container > .snapshot-preview{
            height: 400px;
            width: 600px;
            /*box-shadow: rgba(100, 100, 100, 0.35) 0px 5px 15px;*/
            margin: 100px 0px 0px 30px;
            border-radius: 30px;
            background-color: rgb(255, 255, 255);
            cursor: pointer;
        }

        .snapshot-photo > img, iframe{
            height: 300px;
            width: 600px;
            border-radius: 30px 30px 0px 0px;
            cursor: pointer;
        }

        .snapshot-info{
            height: 50px;
            width: 550px;
            
            font-weight: bold;
            text-align: center;
        }

        .snapshot-date{
            height: 50px;
            width: 550px;
            display: inline-block;
            text-align: center;

            font-size: 18px;
            color: rgb(100, 100, 100);

        }
        
        nav {
            width: 100%;
            height: 70px;
            background-color: rgb(255, 255, 255);
            line-height: 70px;
            position: fixed;
            z-index: 999;
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
            width: 17%;
            z-index: 1;
            top: 0;
            left: 0;
            position: absolute;
            right: 25px;
            background-color: rgb(255, 255, 255);
            padding: 10px;
            margin: 15px;
            margin-top: 85px;
            border-radius: 30px;
            text-align: center;
        }

        .stop {

        }

        .stopBtn {
            color: rgb(255, 255, 255);
            font-size: 30px;
            border: none;
            background-color: rgb(230, 0, 0);
            border-radius: 30px;
            height: 100px;
            text-align: center;
            padding: 20px;
            width: 90%;
            transition: all 350ms ease;
            cursor: pointer;
            bottom: 0;
            position: absolute;
            margin: 0;
            opacity: 0.6;
            bottom: 20px;
            left: 50%;
            transform: translateX(-50%);
            transition: all 300ms ease;
        }

        .stopBtn:hover {
            opacity: 1;
        }

        .link {
            text-decoration: none;
            color: rgb(100, 100, 100)

        }

        .sidenav .link:hover {
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
            transition: all 350ms ease;
            cursor: pointer;
            
        }

        .notification:hover {
            transform: translateY(-5px);    
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
                <a href="#" class="link">11-09-2023</a>
            </div>
            <div class="notification">
                <p>datum:</p>
                <p>Hoi</p>
                <a href="#" class="link">11-09-2023</a>
            </div>
            <div class="notification">
                <p>datum:</p>
                <a href="#" class="link">11-09-2023</a>
            </div>
            <div class="stop">
                <button class="stopBtn">Stop Detectie</button>
            </div>
        </div>



        <div class="flex-container">
            <div class="snapshot-preview">
                <div class="snapshot-photo">
                <iframe src="https://www.youtube.com/embed/coCS7TDqVII" title="AI Generated Family Guy (Parody)" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                <!--<video controls>
                    <source src="movie.mp4" type="video/mp4">
                </video>-->
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
            <div class="snapshot-preview">
                <div class="snapshot-photo">
                    <img src="https://www.cctvcamerapros.com/v/180/180-camera-IR-night-vision.jpg">
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
        </div>



    </body>
</html>
