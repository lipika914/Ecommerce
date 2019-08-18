
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
   
   <div class="col-12 table-responsive">
        <table class="table table-condensed">

            <tr>
                <td>Name</td>
                <td>Image</td>
                <td>Descriotion</td>
                <td>Amount</td>
              
                <td>Add to Cart</td>

                
            </tr>


            @if(isset($info[0]))
                @foreach($info as $info1)

                    <tr>
                        <td>{{$info1->name}}</td>

                        <td> <img width="80" src="{{asset('admin/uploads/'.$info1->image)}}" alt=""></td>
                        <td>{{$info1->description}}</td>
                        <td>{{$info1->price}}</td>




                       <td>
                            <a href="{{url('//').'?id='.$info1->id}}">Add to cart</a>
                        </td>
                    </tr>

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

