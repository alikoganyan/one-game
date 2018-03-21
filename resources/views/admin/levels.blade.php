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
        <li class="active"> Levels </li>
    </ul>

    <table class="table table-striped table-bordered">
        <thead>
        <tr>
            <th>ID</th>
            <th>level</th>
            <th>label_1_step</th>
            <th>label_2_step</th>


            <!-- <th>bal</th> -->


            <th></th>


            <th>&nbsp;Delete</th>
            <th>Update</th>

        </tr>
        <tr id="w0-filters" class="filters">
            <form action="/adminlevelsearch">
                {{ csrf_field() }}
            <td><input type="text" name="searchlevelsid" class="search-field" data-name="id" placeholder="Search.."></td>
            <td>
                {{--<form action="/">--}}
            </td>
            <td>



            <td></td>

            </td></td>


            <td></td>
            <td></td>
            <td>
                {{--&nbsp;--}}
            </td>
            </form>
        </tr>
        </thead>
        </form>
        <tbody>
               
        @foreach($levels as $level
)
            <form action="/adminupdatelevels" method="post">
                {{ csrf_field() }}
                <tr data-key="1">
                    <td data-name="id" data-value="{{$level->id}}">{{$level->id}}</td>
                    <td><input type="text" name="level" class="form-control" value="{{$level->level}}"></td>
                    <td><input type="text" name="lable_1_step" class="form-control" value="{{$level->lable_1_step}}"></td>
                    <td><input type="text" name="lable_2_step" class="form-control" value="{{$level->lable_2_step}}"></td>
                    {{--<td><input type="text" name="count_of_steps" class="form-control" value="{{$level->count_of_steps}}"></td>
                    <td><input type="text" name="time" class="form-control" value="{{$level->time}}"></td>
                    <!-- <td><input type="text" name="bal" class="form-control" value="{{$level->bal}}"></td> -->
                    <td><input type="text" name="score" class="form-control" value="{{$level->score}}"></td>
                    <td><input type="text" name="level" class="form-control" value="{{$level->level}}"></td>--}}
                    <td><input type="hidden" name="id" class="form-control" value="{{$level->id}}"></td> 
                   {{-- <td><select name="on_off">
                            @foreach($levels as $level)
                                <option value="{{$level->on_off}}" >{{$level->on_off}}</option>
                            @endforeach
                        </select></td>--}}

                    <td><a class="btn btn-danger" href="/admindeletelevels/{{$level->id}}">Delete</a></td>
                    <td><input type="submit" class="btn btn-warning" name="Update" value="Update"></td>
                </tr>
            </form>@endforeach
            

        </tbody>
        <!-- <tbody>
        <tr>
            <form action="/adminaddlevels" method="post">
                {{ csrf_field() }}
                <td></td>
                <td><input type="text" name="lable_1" class="form-control " placeholder="lable_1"></td>
                <td><input type="text" name="lable_2" class="form-control " placeholder="lable_2"></td>
                <td><input type="text" name="count_of_steps" class="form-control " placeholder="count_of_steps"></td>
                <td><input type="text" name="time" class="form-control " placeholder="time"></td>
                <td><input type="text" name="bal" class="form-control " placeholder="bal"></td>
                <td><input type="text" name="score" class="form-control " placeholder="score"></td>
                <td><input type="text" name="level" class="form-control " placeholder="level"></td>
                <td></td>
                <td><select name="on_off">
                    @foreach($levels as $level)
                        <option value="{{$level->on_off}}">{{$level->on_off}}</option>
                    @endforeach
                </select></td>
               {{-- <td>
                    <select name="level">
                        @foreach($levels as $level)
                            <option value="{{$level->id}}">{{$level->id}}</option>
                        @endforeach
                    </select>
                </td>--}}
                <td><input type="submit" class="btn btn-primary" name="addlevels" value="Add"></td>
            </form>
        </tr>

        </tbody> -->
    </table>
</div>
{{--<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <!-- Brand -->
    <div class="container">
    <a class="navbar-brand" href="/admin">Dragula</a>

    <!-- Links -->
    <ul class="navbar-nav navbar-right">
        <li class="nav-item navbar-right">
            <a class="nav-link" href="/admingamers">Gamers</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/adminlevels">Levels</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Logout</a>
        </li>


    </ul></div>
</nav>
<div class="container"><ul class="breadcrumb"><li><a href="/admin"> Home /</a></li>
        <li class="active"> Levels</li>
    </ul>




<table class="table table-striped table-bordered">
    <thead>
    <tr>
        <th><a href="/clinic-invite?sort=id" data-sort="id">ID</a></th>
        <th>count_of_steps</th>
        <th>Time</th>
        <!-- <th>bal</th> -->
        <th>score</th>
        <th>level</th>
        <th><a href="/clinic-invite?sort=created_at" data-sort="created_at">Created At</a></th>
        <th class="action-column">&nbsp;</th>
    </tr>
    <tr id="w0-filters" class="filters"><td>
        <input type="text" class="form-control" name="ClinicInviteSearch[id]"></td>
        <td></td>

            
            <td></td>
            <td></td>
            <td><td>
                
            </td></td>
            <td>
                <input type="text" class="form-control" name="ClinicInviteSearch[created_at]"></td>
                <td></td>
                <td>&nbsp;</td>
                
            </tr>
    </thead>
    <tbody>
    
    @foreach($levels as $level)
    <tr data-key="1">
        <td>{{$level->id}}</td>
        <td>{{$level->count_of_steps}}</td>
        <td>{{$level->time}}</td>
        <!-- <td>{{$level->bal}}</td> -->
        <td>{{$level->score}}</td>
        <td>{{$level->level}}</td>
        <td>Feb 5, 2018, 8:54:42 AM</td>
        <td></td>
        <td><a href="/clinic-invite/1" title="View" aria-label="View" data-pjax="0"><span class="glyphicon glyphicon-eye-open"></span></a> <a href="/clinic-invite/1/update" title="Update" aria-label="Update" data-pjax="0"><span class="glyphicon glyphicon-pencil"></span></a> <a href="/clinic-invite/1/delete" title="Delete" aria-label="Delete" data-pjax="0" data-confirm="Are you sure you want to delete this item?" data-method="post"><span class="glyphicon glyphicon-trash"></span></a></td>
    </tr>
    @endforeach

    </tbody></table>
</div>--}}



<script type="text/javascript">
    $('.search-field').on('change input', function(){
        $('.table tbody tr:not(.search-row)').hide().filter(function(){
            var $this = $(this);

            var res = true;
            $('.search-field').each(function(){
                if($(this).val() != ''){
                    var data_name = $(this).data('name');
                    if(!$this.children('td[data-name="' + data_name + '"]').data('value').toString().includes($(this).val().toString())){
                        res = false;
                    }
                }
            });

            return res;
        }).show();
    });
</script>


</body>
</html>



{{--{{$level->lable_2}}--}}
