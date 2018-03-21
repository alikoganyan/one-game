<!doctype html>
<html lang="en">
<head>
    <link rel="stylesheet" href="./css/style.css">
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/css/style2.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <title>Document</title>
</head>
<body>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <!-- Brand -->
    <div class="container">
        <a class="navbar-brand" href="/admin">One</a>

        <!-- Links -->
        <ul class="navbar-nav navbar-right">
            <li class="nav-item navbar-right">
                <a class="nav-link" href="/admingamers">Gamers</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/adminlevels">Levels</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/adminvariants">Variants</a>
            </li>
            <li class="nav-item">
                <a href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                    <p style="padding-top:7px;">Logout</p>
                </a><form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
            </li>


        </ul></div>
</nav>

<div class="container"><ul class="breadcrumb"><li><a href="/admin"> Home /</a></li>
        <li class="active"> Variants </li>
    </ul>

    <table class="table table-striped table-bordered">
        <thead>
        <tr>
            <th>ID</th>
            <th>Level_id</th>
            <th>lable_1</th>
            <th>lable_2</th>

            <th></th>
            {{--<th>Created At</th>--}}
            <th>&nbsp;Delete</th>
            <th>Update</th>
        </tr>

        </thead>
        </form>
        <tbody>
        <tbody>
        <tr class="search-row">
            <form action='/adminsearch' method='post'>
                {{ csrf_field() }}
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                {{--<td></td>--}}
            </form>
        </tr>
        </tbody>
        @foreach($variants as $variant)
            <form action="/adminupdategamer" method="post">
                {{ csrf_field() }}
                <tr data-key="1">
                    <td data-name="id" data-value="{{$variant->id}}">{{$gamer->id}}</td>
                    <td data-name="name" data-value="{{$variant->level_id}}"><input type="text" name="name" class="form-control" value="{{$gamer->name}}"></td>
                    <td data-name="email" data-value="{{$gamer->email}}"><input type="text" name="email" class="form-control" value="{{$gamer->email}}"></td>
                    <td><input type="text" name="level_id" class="form-control" value="{{$gamer->level_id}}"></td>
                    <td><input type="text" name="social_id" class="form-control" value="{{$gamer->social_id}}"></td>
                    <td><input type="text" name="life" class="form-control" value="{{$gamer->life}}"></td>
                    <td><input type="text" name="timeout" class="form-control" value="{{$gamer->timeout}}"></td>
                    <td><input type="text" name="points" class="form-control" value="{{$gamer->points}}"></td>

                    <td><input type="hidden" name="id" class="form-control" value="{{$gamer->id}}"></td>

                    {{--<td>Feb 5, 2018, 8:54:42 AM</td>--}}
                    <td><a class="btn btn-danger" href="/admindeletegamer/{{$gamer->id}}">Delete</a></td>
                    <td><input type="submit" class="btn btn-warning" value="Update"></td>
                </tr>
            </form>
            @endforeach
            </tbody>

        <!-- <tbody>
            <tr>
                <form action="/adminaddgamer" method="post">
                    {{ csrf_field() }}
                <td><input type="text" name="name" class="form-control" placeholder="name"></td>
                <td><input type="email" name="email" class="form-control" placeholder="email"></td>
                <td>
                    <select name="level">
@foreach($levels as $level)
            <option value="{{$level->id}}">{{$level->id}}</option>
                            @endforeach
                </select>
            </td>
            <td><input type="submit" class="btn btn-primary" value="Add"></td>
        </form>
    </tr>
</tbody> -->

    </table>
</div>

</body>
</html>