@extends('layout')

@section('content')
  <nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="#">Contact Management Application</a>
      </div>
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Ouassima BNYAICHE</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div>
  </nav>
  
@endsection
<!------------------------------------------------------------------------------------------------------------------------>
@section('btns')

<button type="button" href="#" class="btn btn-dark">Home</button>
<button type="button" href="#" class="btn btn-info">Contacts List</button>
<button type="button" href="{{ Route::get('AddContact') }}" class="btn btn-success">Add Contacts</button>
<button type="button" class="btn btn-danger">Modify Contact</button>
<button type="button" class="btn btn-warning">Afficher Contact</button>

  
@endsection
@section('Espace')
  <div>
    <h2>Add Contact</h2>
    <img src="" alt="">
    <Form action="{{ url('liste')}}" Method="POST">
      <div>
             <h5>Fill out the following form<h5>
             <b><h6>All required fields * <h6> </b>
      </div>  
         <br>
      {{csrf_field()}} 
      @error('name')<div class="text-danger"><ul><li>{{$message}}</li></ul></div>@enderror
      @error('pre')<div class="text-danger"><ul><li>{{$message}}</li></ul></div>@enderror
      @error('tel')<div class="text-danger"><ul><li>{{$message}}</li></ul></div>@enderror
      @error('mail')<div class="text-danger"><ul><li>{{$message}}</li></ul></div> @enderror
      @error('debut')<div class="text-danger"><ul><li>{{$message}}</li></ul></div>@enderror 
      @error('fin')<div class="text-danger"><ul><li>{{$message}}</li></ul></div>@enderror
      <div class="input-group"> 
          <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span><div>&nbsp &nbsp  
          <input type="text" name="name" placeholder="First Name" value="{{old('name')}}" class="@error('name') is-invalid @enderror" >&nbsp &nbsp
          <input type="text" name="pre" placeholder="Last Name"  value="{{old('pre')}}" class="@error('pre') is-invalid @enderror" ></div>
      </div> <br>

      <div class="input-group">    
          <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span><div>&nbsp &nbsp  
          <input type="text" name="mail" placeholder="E-mail" value="{{old('mail')}}" class="@error('mail') is-invalid @enderror"></div>
      </div><br>
      
      <div class="input-group">
          <span class="input-group-addon"><i 	class="glyphicon glyphicon-earphone"></i></span><div>&nbsp &nbsp 
          <input type="tel" name="tel" placeholder="Phone" value="{{old('tel')}}" class="@error('tel') is-invalid @enderror"></div>
      </div><br>
      
      <div class="input-group">
           <span class="input-group-addon">
             <i class="glyphicon glyphicon-map-marker"></i></span>&nbsp&nbsp
             <input type="loca" name="loca" placeholder="Loaction" value="{{old('loca')}}" class="@error('loca') is-invalid @enderror"></div>
      </div>  <br>
      <div class="input-group">
        <span class="input-group-addon">
          <i class="glyphicon glyphicon-picture"></i></span>&nbsp&nbsp
          <input type="pic" name="pic" placeholder="Photo" value="{{old('pic')}}" class="@error('pic') is-invalid @enderror"></div>
   </div>  <br><br>
      
   <button type="button" class="btn btn-info">Save</button>
      
      </Form>
  </div>
@endsection




