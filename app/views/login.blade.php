@extends('layouts.main')

@section('content')
        {{ HTML::style('css/bootstrap.css') }}
        {{ HTML::style('css/bootstrap-theme.css') }}
<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
 <div class="container">
                 <div class="navbar-header">
<ul class="nav nav-pills">
  <li role="presentation" class="active"><a href="#">Home</a></li>
  <li role="presentation"><a href="#">Profile</a></li>
  <li role="presentation"><a href="#">Messages</a></li>
</ul>
<br>
@foreach($errors->all ()as $error)
<p class="errors">{{$error}}</p>
@endforeach
{{Form::open(array('autocomplete'=>'off'))}}
<input type=" text" name="username" placeholder="Username" class="form-control"/>
<br>
<input type=" text" name="password" placeholder="Password" class="form-control"/>
<br>
<input type="button" value="login" class="btn btn-default" >
{{Form::close()}}
{{ HTML::script('js/jquery-1.11.1.min.js') }}
        {{ HTML::script('js/bootstrap.min.js') }}
@stop