@foreach($locations as $location)
    @foreach($location as $currentLocation)
        Name: {{$currentLocation['name']}} City: {{$currentLocation['city']}}<br>
    @endforeach
@endforeach
