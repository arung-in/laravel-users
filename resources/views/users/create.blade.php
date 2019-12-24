@extends('adminlte::page') 

@section('content')
    <h3 class="page-title">Create</h3>
    {!! Form::open(['method' => 'POST', 'files' => true, 'route' => ['users.store']]) !!}

    <div class="panel panel-default">
        <div class="panel-heading">
            users
        </div>
        
        <div class="panel-body">
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('name', 'Name*', ['class' => 'control-label']) !!}
                    {!! Form::text('name', old('name'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('name'))
                        <p class="help-block">
                            {{ $errors->first('name') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('email', 'Email*', ['class' => 'control-label']) !!}
                    {!! Form::email('email', old('email'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('email'))
                        <p class="help-block">
                            {{ $errors->first('email') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('password', 'Password*', ['class' => 'control-label']) !!}
                    {!! Form::password('password', ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('password'))
                        <p class="help-block">
                            {{ $errors->first('password') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group"> 
                    {!! Form::label('image','Profile Image' , ['class' => 'control-label']) !!}
                    {!! Form::file('image', ['id' => 'upload_image', 'accept' => 'image/*']); !!} 
                </div>
            </div> 
            
        </div>
    </div>

    {!! Form::submit('save', ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}
    <p>&nbsp;</p>

            <a href="{{ route('users.index') }}" class="btn btn-default">Back to list</a>
@stop


