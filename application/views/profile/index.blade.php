@extends('baru')
@section('content')

<!-- ini buat ngatur content dr kiri WAJIB ADA INI -->
<div class="w3-main" style="margin-left:250px">
    <!-- Push down content on small screens -->
    <div class="w3-hide-large" style="margin-top:100px"></div>
    
    
    <div class="container">
        <div>
            <center>
                <div>
                    <img src="{{base_url('/assets/images/user.png')}}" style="width:20%">
                </div>
                <div>
                    <b><a href="#" class="change-photo">Change Photo</a></b>
                </div>
            </center>
            <form action="">
                <input type="text" id="fname" name="name" placeholder="Name">
                <input type="text" id="fname" name="username" placeholder="Username">
                <input type="password" id="fname" name="password" placeholder="Password">
                <input type="text" id="fname" name="address" placeholder="Address">
                <input type="number" id="fname" name="phone" placeholder="Phone number">
                <br>
                <select id="role" name="role">
                    <option value="australia">Customer</option>
                    <option value="canada">Canada</option>
                    <option value="usa">USA</option>
                </select>
                <br><br>

                <div class="w3-right">
                    <input type="submit" value="save" class="btn btn-success">
                    <input type="button" value="cancel" class="btn btn-danger">
                </div>
            </form>
        </div>
    </div>
    
</div>

@endsection
