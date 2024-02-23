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
                <table class="table" id="table">
                    <thead>
                    <tr>
                        <td>№</td>
                        <td>region</td>
                        <td>name</td>
                        <td>-/-</td>
                        <td>-/-</td>
                        <td>-/-</td>
                        <td>-/-</td>
                        <td>-/-</td>

                    </tr>
                    </thead>
                    <tbody>
                    @foreach($tasks as $task)
                        <tr>
                            <td>{{ $task->id }}</td>
                            <td>{{ $task->user->name }}</td>
                            <td>{{ $task->stir }}</td>
                            <td>{{ $task->organization }}</td>
                            <td>{{ $task->task->name }}</td>
                            <td><img src="{{ asset('storage/galereya/'.$task->img1) }}" alt=""></td>
                            <td><img src="{{ asset('storage/galereya/'.$task->akt) }}" alt=""></td>
                            <td>
                                <form action="{{ route('task.destroy',$task ->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
{{--                                    <a class="btn btn-warning btn-sm m-1" href="{{ route('task.edit',$task->id) }}">--}}
{{--                                    <span class="btn-label">--}}
{{--                                        <i class="fa fa-pen"></i>--}}
{{--                                    </span>--}}

                                    </a>

                                    <button type="submit" class="btn btn-danger m-1 btn-sm"><span class="btn-label">
                                        <i class="fa fa-trash"></i>
                                    </span></button>
                                </form>
                            </td>

{{--                            <td><iframe src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d3351.5282592791264!2d'.{{ $office->lang }}.'!3d'.{{ $office->latt }}.'!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zNDHCsDE5JzA1LjMiTiA2McKwMDcnNTYuMyJF!5e1!3m2!1sru!2s!4v1705637503172!5m2!1sru!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></td>--}}
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script src="{{asset('/js/core/jquery.3.2.1.min.js')}}"></script>
    {{--    <script src="{{ asset('jquery.js')}}" ></script>--}}
    {{--    <link href="https://cdn.datatables.net/v/dt/dt-1.13.10/datatables.min.css" rel="stylesheet">--}}
    <script src="{{asset('/js/plugin/datatables/datatables.min.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.17.0/xlsx.full.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/FileSaver.js/2.0.5/FileSaver.min.js"></script>

    <script>

        $(document).ready( function () {
            $('#table').DataTable({
                dom: 'Bfrtip',
                "buttons": [
                    {
                        "extend": 'excel',
                        "text": ' Малумотларни excel форматда юклаб олиш',
                        "className": 'btn btn-primary btn-xm'
                    }
                ],
                "aLengthMenu": [200],
            });
        });
    </script>
@endsection
