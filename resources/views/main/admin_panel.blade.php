@extends('layout.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                        <a id="navbarDropdown"  href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                      {{ Auth::user()->name }} <span class="caret"></span>
                        </a>
                        You are logged in!
                        <div class="card-header"><a class="nav-link" href="{{ route('register') }}">{{ __('Registration') }}</a>
                            <p>((If you change your account information)) </p></div>



                </div>
            </div>
        </div>
    </div>
</div>
@endsection
