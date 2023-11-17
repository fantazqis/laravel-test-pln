@extends('layouts.master_blank', ['title' => 'login'])

@section('css')
    <link rel="stylesheet" href="css/login.css">
@endsection

@section('content')
<section class="wrapper">
    <div class="content">
      <header>
        <h1>Welcome back</h1>
      </header>
      <section>

        <form class="form-horizontal" action="/login" method="POST">
          @csrf
          <div class="form-group">
              <label for="email" >Email</label>


              <input type="email" class="form-control" id="email" name="email" placeholder="email"
                  required>

          </div>

          <div class="form-group">
              <label for="password" >Password</label>


              <input type="password" class="password" id="password" name="password" placeholder="password"
                  required>

          </div>

          
  <div class="input-group"><button type="submit">Login</button></div>
      </form>
      </section>

    </div>
  </section>
  
  
@endsection

@section('script')
    
@endsection