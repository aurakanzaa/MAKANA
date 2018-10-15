@extends('auth.template')

@section('content')

<div class="container margin">
    <img src="{{base_url('/assets/images/logo.png')}}" alt="" class="logo">
    <form action="">
        <input type="text" id="fname" name="name" placeholder="Name">
        <input type="text" id="fname" name="username" placeholder="Username">
        <input type="password" id="fname" name="password" placeholder="Password">
        <select id="role" name="role">
            <option value="australia">Customer</option>
            <option value="canada">Canada</option>
            <option value="usa">USA</option>
        </select>
        <br><br>

        <input type="submit" value="Register">
    </form>
<br><br><br>
    <div class="inline">
        <p class="text-align:center">Already have an account?
        <a href="#" style="color:white">Log In</a></p>
    </div>
    
</div>

@endsection
