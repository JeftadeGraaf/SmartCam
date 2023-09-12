<div id="sidenav" class="sidenav">
    <p class="events">Gebeurtenissen</p>
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
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

<script>
function openNav() {
  document.getElementById("Sidenav").style.width = "250px";
}

function closeNav() {
  document.getElementById("Sidenav").style.width = "0";
}
</script>
