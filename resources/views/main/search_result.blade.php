@extends('layout.master')
@section('content')
        <!DOCTYPE html>
<html lang="en">
<head>
    <title>Table V04</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="{{asset('table/images/icons/favicon.ico')}}"/>
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('table/vendor/bootstrap/css/bootstrap.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('table/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('table/vendor/animate/animate.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('table/vendor/select2/select2.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('table/vendor/perfect-scrollbar/perfect-scrollbar.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('table/css/util.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('table/css/main.css')}}">
    <!--===============================================================================================-->
</head>
<body>


<div class="limiter">
    <a id="navbarDropdown" align="center" href="#" role="button"  aria-haspopup="true" aria-expanded="false" v-pre>
        <h4 style="text-color:red" >  Welcome, {{ Auth::user()->name }}  in our website </h4>   <span class="caret"></span>
    </a>
   
    <div class="wrap-table100">
        <div class="table100 ver1 m-b-110">
            <div class="table100-head">

                <table>

                    <thead>

                    <tr class="row100 head">
                        <th class="cell100 column1">Name</th>
                        <th class="cell100 column2">Id</th>
                        <th class="cell100 column3">Image</th>
                        <th class="cell100 column4">Description</th>
                        <th class="cell100 column5">Amount</th>
                        <th class="cell100 column6">Status</th>
                        

                    </tr>
                    </thead>
                </table>
            </div>

            <div class="table100-body js-pscroll">
                @if(isset($info[0]))
                    @foreach($info as $info1)
                        <table>
                            <tbody>
                            <tr class="row100 body">
                                <td class="cell100 column1">{{$info1->name}}</td>
                                <td class="cell100 column2">{{$info1->id}}</td>
                                <td class="cell100 column3">{{$info1->image}}</td>
                                <td class="cell100 column4">{{$info1->description}}</td>
                                <td class="cell100 column5">{{$info1->amount}}</td>
                                <td class="cell100 column6">{{$info1->status}}</td>
                                
                            </tr>
                            </tbody>

                    @endforeach
                @endif
                        </table>
            </div>
        </div>
    </div>
</div>
</div>

<!--===============================================================================================-->


</body>
</html>

@endsection