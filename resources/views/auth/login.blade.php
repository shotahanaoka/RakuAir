@extends('layouts.app')


@section('content')
<div class="icon-image">
    <img class="logo2" src="/images/RakuAirBlack.png"></img>
</div>

<div class="loginpage">
    <div class="login-title">
        <p>Log in</p>
    </div>

    <div class="row">
        <div class="col-md-6 col-md-offset-3">

            {!! Form::open(['route' => 'login.post']) !!}
                <div class="form-group">
                    <p class='sofia'>Nickname</p>
                    {!! Form::text('name', old('name'), ['class' => 'form-control', 'placeholder' => "Nickname"]) !!}
                </div>

                <div class="form-group">
                    <p class='sofia'>Password</p>
                    {!! Form::password('password', ['class' => 'form-control', 'placeholder' => "Password"]) !!}
                </div>

                {!! Form::submit('Log in', ['class' => 'btn btn-login btn-block']) !!}
                {!! Form::close() !!}

            <p class=loginhere>{!! link_to_route('signup.get', 'New user? Sign up now!') !!}</p>
        </div>
    </div>
</div>

@endsection