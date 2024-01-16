@extends('layouts.app')

@section('content')
    <style>
        .modal {
            display: none; /* Hidden by default */
            position: fixed; /* Stay in place */
            z-index: 1; /* Sit on top */
            left: 0;
            top: 0;
            width: 100%; /* Full width */
            height: 100%; /* Full height */
            overflow: auto; /* Enable scroll if needed */
            background-color: rgb(0,0,0); /* Fallback color */
            background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
        }

        /* Modal Content/Box */
        .modal-content {
            background-color: #fefefe;
            margin: 15% auto; /* 15% from the top and centered */
            padding: 20px;
            border: 1px solid #888;
            width: 80%; /* Could be more or less, depending on screen size */
        }

        /* The Close Button */
        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }</style>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <button id="myBtn" class="btn btn-light">Open Modal</button>
                <table class="table">
                    <tr>
                        <td>№</td>
                        <td>name</td>
                        <td>email</td>
                    </tr>
                    @foreach($users as $user)
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
    <div id="myModal" class="modal">

        <!-- Modal content -->
        <div class="modal-content">
            <span class="close">&times;</span>
            <form method="POST" action="{{ route('distirct.user.store') }}">
                @csrf
                <input type="hidden" name="role" value="4">
                <div class="form-group">
                    <label for="exampleInputEmail1">Viloyatni tanlang</label>
                    <select class="form-control form-control-sm" onchange="region(region_id)" id="region_id" name="region_id">
                        @foreach($regions as $item)<option value="{{$item->id}}">{{ $item->name }}</option>@endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Tumani tanlang</label>
                    <select class="form-control form-control-sm"  id="district_id" name="district_id">
                        <option value=""></option>
                    </select></div>
                <div class="form-group">
                    <label for="exampleInputEmail1">name</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="name" aria-describedby="emailHelp" placeholder="name">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">email</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp" placeholder="name">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>

    </div>
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script>
        var modal = document.getElementById("myModal");

        var btn = document.getElementById("myBtn");

        var span = document.getElementsByClassName("close")[0];

        btn.onclick = function() {
            modal.style.display = "block";
        }

        span.onclick = function() {
            modal.style.display = "none";
        }

        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
        function region(region) {
            region = region_id.value;

            $.ajax(
                "{{route('admin.region')}}",
                {
                    method: 'post',
                    headers: {
                        'X-CSRF-TOKEN': '{{csrf_token()}}'
                    },
                    data: {
                        region: region,
                    },
                    success: function (data) {
                        $('#district_id').empty()
                        for (let d in data) {
                            let option = '<option value=' + data[d].id + '>' + data[d].name + '</option>';
                            $('#district_id').append(option)
                        }
                    }
                });
        }
    </script>
@endsection
