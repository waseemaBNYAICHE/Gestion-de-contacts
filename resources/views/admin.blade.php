@extends('layout')

@section('content')
  <nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="#">Ouassima BNYAICHE</a>
      </div>
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
        <li><a href="#">Add Contact</a></li>
        <li><a href="#">Page 2</a></li>
        <li><a href="#">Page 3</a></li>
        <li><a href="#">Page 4</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div>
  </nav>
  
@endsection
@section('admin')

<h1>welcome admin {{$message}} </h1>
<div>
    <h2>Admin area</h2>
    <img src="" alt="">
    <Form action="{{ url('admin')}}" Method="POST">
     
         <br>
      {{csrf_field()}} 
      @error('email')<div class="text-danger"><ul><li>{{$message}}</li></ul></div>@enderror
      @error('pass')<div class="text-danger"><ul><li>{{$message}}</li></ul></div>@enderror
      <div class="input-group"> 
          <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span><div>&nbsp &nbsp  
          <input type="email" name="email" placeholder="E-mail" value="{{old('email')}}" class="@error('email') is-invalid @enderror" ></div>
      </div> <br>
      <div class="input-group"> 
        <span class="input-group-addon"><i class=" glyphicon glyphicon-lock"></i></span><div>&nbsp &nbsp  
        <input type="password" name="pass" placeholder="Password" value="{{old('pass')}}" class="@error('pass') is-invalid @enderror" ></div>
      </div><br><br>
      <button type="submit" id="btn">Entry</button>
      </Form>
      
  </div>



@endsection

