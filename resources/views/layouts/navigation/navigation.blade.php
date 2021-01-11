<div id="header-wrapper">
    <div class="container">
        <div id="header">
            <div id="logo">
                <h1>
                <a href="{{ url('/') }}">
                    <img src="{{ ('images/logo.png') }}" style="width:4rem;height:2rem" class="margin-bottom:1rem" alt="logo">
                    Theather Project
                </a>
                </h1>
            </div>
            <nav id="nav">
                <ul>
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li><a href="{{ url('search') }}" >Search</a></li>
                    <li><a href="{{ url('performances') }}" >Performances</a></li>
                    <li><a href="{{ url('tickets')}}" >Tickets</a></li>
                    <li><a href="{{ url('locations')}}" >Locations</a></li>
                    <li><a href="{{ url('extended-search') }}">Search</a></li>

                    <li class="current_page_item"><a>
                        <form action="{{ route('search') }}" method="GET" class="d-inline align-items-start">
                            <input class="d-inline py-1" type="text" name="search" required/>
                            <button  class="d-inline bg-white py-2" type="submit">Search</button>
                        </form>
                    </a></li>
                </ul>
            </nav>
        </div>
    </div>
</div>
