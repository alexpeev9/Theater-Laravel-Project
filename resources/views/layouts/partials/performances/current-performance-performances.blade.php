@foreach($performances as $performance)
    @foreach($performance as $currentPerformance)
        <div class="px-1 bg-white text-danger mx-1">
        <p class="d-flex">Title: {{$currentPerformance['title']}}</P>
        <p class="d-flex">Date: {{$currentPerformance['date']}}</P>
        <img style="width:15rem;height:15rem" src="{{$currentPerformance['image']}}" alt="Image">
        </div>
    @endforeach
@endforeach
