@extends('layout.master')
@section('content')


        <!DOCTYPE html>
<html lang="en">
<head>
    <title>Contact V16</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="{{asset('form/images/icons/favicon.ico')}}"/>
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('form/vendor/bootstrap/css/bootstrap.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('form/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('form/fonts/iconic/css/material-design-iconic-font.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('form/fonts/Linearicons-Free-v1.0.0/icon-font.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('form/vendor/animate/animate.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('form/vendor/css-hamburgers/hamburgers.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('form/vendor/animsition/css/animsition.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('form/vendor/select2/select2.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('form/vendor/daterangepicker/daterangepicker.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('form/css/util.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('form/css/main.css')}}">
    <!--===============================================================================================-->
</head>




<div class="container-contact100">
    <div class="wrap-contact100">
        <button class="btn-hide-contact100">
            <i class="zmdi zmdi-close"></i>
        </button>




        <div class="contact100-form-title" style="background-image: url({{asset('form/images/bg-02.jpg')}})">
            <span>Add Book</span>
        </div>
        @include('layout.error_message')


        {!! Form::open(['url' => 'save','files'=>true ,'class'=>"contact100-form validate-form"])!!}

        @if(!empty($info))
            <input type="hidden" name="id" value="{{$info->id}}">
        @endif

            <label>
                Book's Name
            </label>
            <div class="wrap-input100 validate-input">
                <input id="name" class="input100" type="text" name="name" value="@if(!empty($info)) {{$info->name}} @endif" placeholder="Full name">
                <span class="focus-input100"></span>
            </div>

			<label>
                Image
            </label>
            <div class="wrap-input100 validate-input">
                <input class="input100" type="file" name="image"   placeholder="Image">
			@if(!empty($info))
                            <img width="80" src="{{asset('admin/uploads/'.$info->image )}}" alt="">
                        @endif
                <span class="focus-input100"></span>
            </div>
            
            

            <label>
                  Description
            </label>
        <div class="wrap-input100 validate-input">
            <input id="description" class="input100" type="text" name="description" value="@if(!empty($info)) {{$info->description}} @endif" placeholder="Description">

        </div>
			
			            <label>
						Price
                        </label>
            <div class="wrap-input100 validate-input">
                <input id="price" class="input100" type="text" name="price" value="@if(!empty($info)) {{$info->price}} @endif" placeholder="Price">
                <span class="focus-input100"></span>
            </div>


            
            <label>
                Status
            </label>
            <div class="wrap-input100 validate-input">
               <select  name="status" class="form-control">
                            @if(!empty($info))
                                <option @if($info->status == 1) selected @endif value = 1>Available</option>
                                <option  @if($info->status == 0) selected @endif  value = 0>Unavailable</option>
                            @else
                                <option value = 1>Available</option>
                                <option value = 0>Unavailable</option>
                            @endif


                        </select>
                <span class="focus-input100"></span>
            </div>

            <div class="container-contact100-form-btn">
            <button class="contact100-form-btn">
                Submit
            </button>
    </div>
        {!! Form::close() !!}
</div>
</div>






</html>
@endsection