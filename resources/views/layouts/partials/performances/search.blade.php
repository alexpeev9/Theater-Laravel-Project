{{-- <form action="{{ route('search') }}" method="GET">
    <input type="text" name="search" required/>
    <button type="submit">Search</button>
</form>
@if($performances->isNotEmpty())
    @foreach ($performances as $performance)
        <div class="post-list">
            <p>{{ $performance->title }}</p>
        </div>
    @endforeach
@else
    <div>
        <h2>No posts found</h2>
    </div>
@endif --}}
<form action="{{ route('search') }}" method="GET">
    <input type="date" name="search" required/>
    <button type="submit">Search</button>
</form>
@if($performances->isNotEmpty())
    @foreach ($performances as $performance)
        <div class="post-list">
            <a>{{ $performance->title }}</a>
            <a>{{ $performance->date }}</a>
            <br>
        </div>
    @endforeach
@else
    <div>
        <h2>No posts found</h2>
    </div>
@endif
