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
                        <td>region</td>
                        <td>district</td>
                        <td>lat</td>
                        <td>lang</td>
                        <td>-/-</td>
                    </tr>
                    @foreach($offices as $office)
                        <tr>
                            <td>{{ $office->id }}</td>
                            <td>{{ $office->district->region->name }}</td>
                            <td>{{ $office->district->name }}</td>
                            <td>{{ $office->latt }}</td>
                            <td>{{ $office->lang }}</td>


                            <td><iframe src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d3351.5282592791264!2d'.{{ $office->lang }}.'!3d'.{{ $office->latt }}.'!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zNDHCsDE5JzA1LjMiTiA2McKwMDcnNTYuMyJF!5e1!3m2!1sru!2s!4v1705637503172!5m2!1sru!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></td>
                            <td>
                                <form action="{{ route('location.destroy',$office ->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')

                                    <button type="submit" class="btn btn-danger m-1 btn-sm"><span class="btn-label">
                                        <i class="fa fa-trash"></i>
                                    </span></button>
                                </form>
                            </td>
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
            <form method="POST" action="{{ route('location.store') }}">
                @csrf

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
                    <label for="exampleInputEmail1">latt</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="latt"  placeholder="latt">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">lang</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="lang"  placeholder="lang">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
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
