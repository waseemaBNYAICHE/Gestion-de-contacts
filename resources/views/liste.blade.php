@extends('layout')
@section('content')
  <nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="#">Ouassima BNYAICHE</a>
      </div>
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
        <li><a href="#">Page 1</a></li>
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



@section('table')

    <table border='1'style="margin-top:100px;">
    
    <thead>
     <th style="width:150px;height:40px;">Id</th>
     <th style="width:150px;height:40px;">First Name</th>
     <th style="width:150px;height:40px;">Last Name</th>
     <th style="width:150px;height:40px;">Email</th>
     <th style="width:150px;height:40px;">Phone</th>
     <th style="width:150px;height:40px;">Location</th>
     <th style="width:150px;height:40px;">Photo</th>
    </thead>
    
    <tr>
        <td>1</td>
        <td>2</td>
        <td>3</td>
    </tr>
    <tr>
        <td>1</td>
        <td>2</td>
        <td>3</td>
    </tr>
    
    </table>
  
@endsection