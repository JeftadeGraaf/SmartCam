<!DOCTYPE html>
<html>
    <head>
        @include('template.headTag')
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
                        {{ $latest->created_at }}
                    </p>
                </div>
            </div>
        </div>



    </body>
</html>
