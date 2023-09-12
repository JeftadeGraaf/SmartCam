<div id="sidenav" class="sidenav">
    <p class="events">Gebeurtenissen</p>
    @foreach($events as $event)
    <div class="notification">
        <p>datum:</p>
        <a href="{{route('viewSnapshot', ['id' => $event->id])}}" class="link">{{$event->date}}</a>
    </div>
    @endforeach
    <div class="stop">
        <button class="stopBtn">Stop Detectie</button>
    </div>
</div>

