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

                <form action="{{route('district.update',$district->id)}}" method="POST" accept-charset="UTF-8"
                      enctype="multipart/form-data">
                @csrf
                @method('PUT')
                    <div class="form-group">
                        <label for="header_ru">name</label>
                        <input type="text" name="name" value="{{$district->name}}" class="form-control" id="header_ru" placeholder="имя">
                    </div>
                    <div class="form-group">
                        <label for="number">туман</label>
                        <select class="custom-select" id="price_id" name="region_id">
                            <option></option>
                            @foreach($regions as $region)
                                <option value="{{$region->id}}">{{$region->name}}</option>
                            @endforeach


                        </select>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
