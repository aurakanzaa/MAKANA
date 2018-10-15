@extends('auth.template')

@section('content')

<div class="container margin">
    <form action="">
        <input type="text" id="fname" name="name" placeholder="Name">
        <input type="text" id="fname" name="username" placeholder="Username">
        <input type="password" id="fname" name="password" placeholder="Password">
        <select id="role" name="role">
            <option value="australia">Customer</option>
            <option value="canada">Canada</option>
            <option value="usa">USA</option>
        </select>

        <input type="submit" value="Register">
    </form>

    <div class="inline">
        <p class="text-align:center">Already have an account?
        <a href="#" style="color:white">Log In</a></p>
    </div>
    
</div>

@endsection
