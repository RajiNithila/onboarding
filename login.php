<?php
    include "db.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>
        label{
            font-weight: 600;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-7 mx-auto mt-5">                
                <div class="card">
                    <?php if(isset($_SESSION['created'])): ?>
                    <div class="alert alert-success">
                        <?php echo $_SESSION['created']; ?>
                    </div>
                <?php endif; ?>
                <?php unset($_SESSION['created']); ?>
                    <div class="card-header">
                        <h3>Login</h3>
                    </div>
                    <div class="card-body">
                        <form action="">
                            <div class="form-group">
                                <label for="">Email ID</label>
                                <input type="email" id="email" class="form-control email" >
                                <div class="invalid-feedback emailError" style="font-size: 16px;">Email is requied</div>
                            </div>
                            <div class="form-group">
                                <label for="">Password</label>
                                <input type="password" id="password" class="form-control password">
                                <div class="invalid-feedback passwordError" style="font-size: 16px;">Password is requied</div>
                                <span><input type='checkbox' id='logtoggle' >&nbsp; <span id='logtoggleText'>Show Password</span></span>
                            </div>
                            <div class="form-group d-flex justify-content-between" style="margin-top: 2%;">
                                <a href="forget-pass.php" class="text-decoration-none">Forgot a password?</a>
                                <p>Not a member ?<a href="register.php"  class="text-decoration-none">Sign up Now</a></p>
                            </div>
                            <div class="form-group">
                                <button type="button" id="login" class="btn btn-info">Login</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="app.js"></script>
    <script>
        $(window).bind("pageshow", function() {
    var form = $('form'); 
    // let the browser natively reset defaults
    form[0].reset();
});
    </script>
    <script>
        $(document).ready(function() {
            $("#logtoggle").change(function() {
                if ($(this).is(':checked')) {
                    $("#password").attr("type", "text");
                    $("#logtoggleText").text("Hide");
                } else {
                    $("#password").attr("type", "password");
                    $("#logtoggleText").text("Show");
                }

            });
        });
    </script>
</body>

</html>


