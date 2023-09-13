<!DOCTYPE html>
<html>
    <head>
        <title>Bewakingscamera</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300&display=swap" rel="stylesheet">
        <link href="{{ asset('app.css') }}" rel="stylesheet">

    </head>



    <body>
        @include('template.nav')

        @include('template.sidenav')

        <div class="flex-container">
            <div class="snapshot-preview">
                <div class="snapshot-photo">
                    <img src="{{ $event->path }}">
                </div>
                <div class="snapshot-info">
                    <p>
                        Live camera feed
                    </p>
                </div>
                <div class="snapshot-date">
                    <p>
                        {{ $event->created_at }}
                    </p>
                </div>
            </div>
        </div>
    </body>
</html>
