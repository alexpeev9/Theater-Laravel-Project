@extends('layouts.navigation.template')
@section('content')
<head>
    <style>
        .active{
            background-color: green;
            display: inline-block;
            padding: 1rem;
            outline: none;
        }
        .element{
            background-color: red;
            display: inline-block;
            padding: 1rem;
            padding-top: 1rem;
            outline: none;
        }
        .locationButton{
            background-color: blue;
            display: inline-block;
            padding: 1rem;
            color: white;
        }
        .searchWrapper{
            border: 1px solid green;
            background-color: green;
            padding: 2rem;
            width: 45rem;
            height: 10rem;
        }
        .button:focus{
            outline: none;
        }
    </style>
</head>
<div id="wrapper" class="container">
    <div id="page" class="row">
        <!-- Send Help -->
        <div id="content" class="8u skel-cell-important">
            <div class="offset-4">
                <div>
                    <button id="buttonTitle" class="active" onclick="showTitle()">Name of Performance</button>
                    <button id="buttonDate" class="element" onclick="showDate()">Date</button>
                    <button id="buttonLocation" class="element" onclick="showLocation()">Location</button>
                </div>
                <div class="searchWrapper" id="searchTitle">
                    <form action="{{ route('search-title') }}" method="GET" class="d-inline align-items-start">
                        <label class="text-white">Search by Title</label>
                        <input class="input-group-text d-inline" style="width: 40rem" type="text" name="search-title" required/>
                        <button  class="btn btn-primary" type="submit" >Search</button>
                    </form>
                </div>

                <div class="searchWrapper" id="searchDate" style="display: none">
                    <form action="{{ route('search-date') }}" method="GET" class="d-inline align-items-start">
                        <label class="text-white">Search by Date</label>
                        <input class="input-group-text d-inline" style="width: 40rem" type="date" name="search-date" required/>
                        <button  class="btn btn-primary" type="submit" >Search</button>
                    </form>
                </div>

                <div class="searchWrapper" id="searchLocation" style="display: none">
                    @foreach($locations as $location)
                        <a class="locationButton" href="{{ url('locations/'.$location->id) }}" > {{$location->name}}</a>
                    @endforeach
                </div>
            </div>
        </div>
	</div>
</div>
    <script>
        // show next step and hides current
        function showTitle(){
            //change color of button
            document.getElementById("buttonTitle").style.backgroundColor = "green";
            document.getElementById("buttonDate").style.backgroundColor = "red";
            document.getElementById("buttonLocation").style.backgroundColor = "red";

            //hide others and show only title
            document.getElementById("searchTitle").style.display = "block";
            document.getElementById("searchDate").style.display = "none";
            document.getElementById("searchLocation").style.display = "none";
        }
        function showDate(){
            //change color of button
            document.getElementById("buttonTitle").style.backgroundColor = "red";
            document.getElementById("buttonDate").style.backgroundColor = "green";
            document.getElementById("buttonLocation").style.backgroundColor = "red";

            //hide others and show only date
            document.getElementById("searchTitle").style.display = "none";
            document.getElementById("searchDate").style.display = "block";
            document.getElementById("searchLocation").style.display = "none";
        }
        function showLocation(){
            //change color of button
            document.getElementById("buttonTitle").style.backgroundColor = "red";
            document.getElementById("buttonDate").style.backgroundColor = "red";
            document.getElementById("buttonLocation").style.backgroundColor = "green";

            //hide others and show only date
            document.getElementById("searchTitle").style.display = "none";
            document.getElementById("searchDate").style.display = "none";
            document.getElementById("searchLocation").style.display = "block";
        }
    </script>
@endsection
