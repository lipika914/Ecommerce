@extends('admin.layout.master')

@section('content')
    <div class="container-fluid">



        <!-- Icon Cards-->
        <div class="row">
            <div class="col-12">
                <a class="btn btn-default text-right" href="{{url('blog/add')}}">Add blog</a>
                <form action="{{url('blogs')}}" method="POST" role="search" class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
                    {{csrf_field()}}
                    <div class="input-group">
                        <input type="text" class="form-control" name="title"  value="@if(!empty($blog)) {{$blog->title}} @endif" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                        <div class="input-group-append">
                            <button class="btn btn-default" type="submit">

                                <i class="fas fa-search"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>

            <div class="col-12 table-responsive">
                <table class="table table-condensed">
                    <tr>
                        <td>ID</td>
                        <td>PHOTO</td>
                        <td>TITLE</td>
                        <td>DESCRIPTION</td>
                        <td>STATUS</td>
                        <td>ACTION</td>
                    </tr>
                    @if(isset($blogs[0]))
                        @foreach($blogs as $blog)

                    <tr>
                        <td>{{$blog->id}}</td>
                        <td> <img width="80" src="{{asset('admin/uploads/'.$blog->image)}}" alt=""></td>
                        <td>{{$blog->title}}</td>
                        <td>{{$blog->description}}</td>
                        <td>
                            @php
                            if($blog->status == 1)
                           echo 'Publish';
                            else
                           echo  'Unpublish';

                            @endphp
                        </td>
                        <td>
                            <a href="{{url('blog/edit')}}">Edit</a>~
                            <a href="{{url('blog/delete').'?id='.$blog->id}}">Delete</a>
                        </td>
                    </tr>
                        @endforeach
                        @endif
                </table>
            </div>

        </div>



    </div>

@endsection