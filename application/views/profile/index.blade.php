@extends('baru')
@section('content')

<!-- ini buat ngatur content dr kiri WAJIB ADA INI -->
<div class="w3-main" style="margin-left:250px; margin-top:200px">
    <!-- Push down content on small screens -->
    <div class="w3-hide-large" style="margin-top:100px"></div>
    
    
    <div class="container">
        <div>
            <center>
                <div>
                    <label for="file_input_id">
                        <img id="blah" src="{{base_url('/assets/images/user.png')}}" style="width:20%">
                    </label>
                    <input type="file" id="file_input_id" onchange="readURL(this);">
                </div>
                <div>
                    <label for="file_input_id">Change Photo</label>
                    <input type="file" id="file_input_id" onchange="readURL(this);">
                </div>
                <!-- buat img preview -->
                <script>
                    function readURL(input) {
                        if (input.files && input.files[0]) {
                            var reader = new FileReader();

                            reader.onload = function (e) {
                                $('#blah')
                                    .attr('src', e.target.result);
                            };

                            reader.readAsDataURL(input.files[0]);
                        }
                    }
                </script>
                    
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

                <div class="w3-center">
                    <input type="submit" value="Save" class="btn btn-success">
                    &nbsp;&nbsp;&nbsp;
                    <input type="button" value="Cancel" class="btn btn-danger">
                </div>
            </form>
        </div>
    </div>
    
</div>

<script>

</script>

@endsection
