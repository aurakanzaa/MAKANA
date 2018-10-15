@extends('template')

@section('content')

<div class="container">
    <form action="">
        <input type="text" id="fname" name="username" placeholder="Username">
        <input type="password" id="fname" name="password" placeholder="Password">
        <select id="role" name="role">
            <option value="australia">Customer</option>
            <option value="canada">Canada</option>
            <option value="usa">USA</option>
        </select>

        <input type="submit" value="Log In">
    </form>
</div>

@endsection
