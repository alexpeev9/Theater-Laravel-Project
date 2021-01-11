<section id="box2">
    <h2>Performances</h2>
    <ul class="style2">
        @foreach($performances->reverse() as $performance)
        <li class="first">
            <p>
                <a href="{{ url('performances/'.$performance->id) }}">
                    <img style="width:2rem;height:3rem" src="{{$performance->image}}" alt="Perfomance"> {{$performance->title}} {{$performance->date}}
                </a>
            </p>
        </li>
        @endforeach
    </ul>
    <p><a href="{{ url('performances') }}" class="button"><span>View All Performances</span></a></p>
</section>
