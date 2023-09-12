<!DOCTYPE html>
<html>
    <head>
        <title>Bewakingscamera</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300&display=swap" rel="stylesheet">
        <link href="{{ asset('app.css') }}" rel="stylesheet">
    </head>
    <style>

    </style>
    <body>
        @include('template.nav')

        @include('template.sidenav')

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
                    <img src="{{ $latest->path }}">
                </div>
                <div class="snapshot-info">
                    <p>
                        Most recent snapshot
                    </p>
                </div>
                <div class="snapshot-date">
                    <p>
                        {{ $latest->date }}
                    </p>
                </div>
            </div>
        </div>



    </body>
</html>
