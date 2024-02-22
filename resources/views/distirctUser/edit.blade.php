@extends('layouts.app')

@section('content')
<div class="modal-content">

    <form method="POST" action="{{ route('user.update', $user->id) }}">
        @method('PUT')
        @csrf
        <input type="hidden" name="role" value="4">
        <div class="form-group">
            <label for="exampleInputEmail1">Viloyatni tanlang</label>
            <select class="form-control form-control-sm" onchange="region(region_id)" id="region_id" name="region_id">
                <option  value="{{$user->region_id}}"></option>
                @foreach($regions as $item)<option value="{{$item->id}}">{{ $item->name }}</option>@endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Tumani tanlang</label>
            <select class="form-control form-control-sm"  id="district_id" name="district_id">
                <option  value="{{$user->district_id}}"></option>
            </select></div>
        <div class="form-group">
            <label for="exampleInputEmail1">name</label>
            <input type="text" class="form-control" id="exampleInputEmail1" value="{{$user->name}}" name="name" aria-describedby="emailHelp" placeholder="name">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">email</label>
            <input type="email" class="form-control"  value="{{$user->email}}" id="exampleInputEmail1" name="email" aria-describedby="emailHelp" placeholder="name">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" name="password" value="{{$user->password}}" class="form-control" id="exampleInputPassword1" placeholder="Password">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
<script src="{{asset('/js/core/jquery.3.2.1.min.js')}}"></script>
{{--    <script src="{{ asset('jquery.js')}}" ></script>--}}
{{--    <link href="https://cdn.datatables.net/v/dt/dt-1.13.10/datatables.min.css" rel="stylesheet">--}}
<script src="{{asset('/js/plugin/datatables/datatables.min.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.17.0/xlsx.full.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/FileSaver.js/2.0.5/FileSaver.min.js"></script>

<script>

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
