@extends('layout.admin')
@section('content')
        <!DOCTYPE html>
<html lang="en">
<head>
    <title>View Book List</title>
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







    <a class="btn btn-default text-right" href="{{url('add_book')}}">Add Book</a>


         <div class="row">


        @if(isset($info[0]))
        @foreach($info as $info1)

                         <div class="col-md-3 col-sm-6 col-xs-6">
                             <div class="product product-single">
                                 <div class="product-thumb">
                                     <div class="product-label">  <h2 class="product-name"><a href="#">{{$info1->name}}</a></h2>
                                     </div>
                                     <img width = "150" src="{{asset('admin/uploads/'.$info1->image)}}" alt="">
                                 </div>
                                 <div class="product-body">

                                     <p class="product-name"><a href="#">{{$info1->description}}</a></p>

                                     <h4 class="product-price">{{$info1->price}}tk</h4>


                                     <td>
                                         <a href="{{url('edit').'?id='.$info1->id}}">Edit</a>~
                                         <a href="{{url('delete').'?id='.$info1->id}}">Delete</a>
                                     </td>


                                 </div>

                             </div>
                         </div>
                                 @endforeach
                             @endif


                         </div>
</body>




</div>










<!--===============================================================================================-->


</body>
</html>

@endsection