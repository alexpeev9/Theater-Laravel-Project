<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    </head>
    <body class="d-flex justify-content-center">
        <div class="w-50 pt-3">
            <table class="table  table-striped table-primary align-middle">
                <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Name</th>
                    <th scope="col">City</th>
                    <th scope="col">Address</th>
                    @if(!empty($performances))
                        <th scope="col">Title</th>
                        <th scope="col">Date</th>
                    @endif
                </tr>
                </thead>
                <tbody>
                    <td>{{$location->id}}</td>
                    <td>{{$location->name}}</td>
                    <td>{{$location->city}}</td>
                    <td>{{$location->address}}</td>
                    @if(!empty($performances))
                    <td>
                        @foreach($performances as $performance)
                                @foreach($performance as $currentPerformance)
                                    {{$currentPerformance['title']}}
                                    <br>
                                @endforeach
                        @endforeach
                    </td>
                    <td>
                        @foreach($performances as $performance)
                                @foreach($performance as $currentPerformance)
                                    {{$currentPerformance['date']}}
                                    <br>
                                @endforeach
                        @endforeach
                    </td>
                    @endif
                </tbody>
            </table>
            <a class="btn btn-secondary" href="{{ url('/')}}" > Home</a>
        </div>
    </body>
</html>
