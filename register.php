<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Onboarding</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <style>
        label {
            font-weight: 600;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-10 mx-auto mt-5">
                <div class="card">
                    <div class="card-header">
                        <h3 class="text-center">User Onboarding</h3>
                    </div>
                    <div class="card-body">
                        <form action="" method="POST" id="form">
                            <div class="row">
                                <div class="form-group col">
                                    <label for="">First Name</label>
                                    <input type="text" id="form_fname" name="fname" class="form-control fname" style="margin-bottom: 3%;" required value="<?php if (isset($_POST['fname'])) echo $_POST['fname']; ?>">
                                    <span class="error_form" id="fname_error_message" style="font-size: 16px; color:red;"></span>
                                </div>
                                <div class="form-group col">
                                    <label for="">Last Name</label>
                                    <input type="text" id="form_lname" name="lname" class="form-control lname" style="margin-bottom: 3%;" required value="<?php if (isset($_POST['lname'])) echo $_POST['lname']; ?>">
                                    <span class="error_form" id="lname_error_message" style="font-size: 16px; color:red;"></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="">Email ID</label>
                                <input type="email" id="form_email" name="email" class="form-control email" style="margin-bottom: 2%;" required value="<?php if (isset($_POST['email'])) echo $_POST['email']; ?>">
                                <div class="emailError" style="color: #F90A0A;"></div>
                                <span class="error_form" id="email_error_message" style="font-size: 16px; color:red;"></span>
                            </div>
                            <div class="form-group">
                                <label for="">Phone Number</label>
                                <input type="text" id="form_contact" name="contact" class="form-control contact" style="margin-bottom: 2%;" required value="<?php if (isset($_POST['contact'])) echo $_POST['contact']; ?>">
                                <span class="error_form" id="contact_error_message" style="font-size: 16px; color:red;"></span>
                            </div>
                            <div class="form-group">
                                <label for="">Date of Birth</label>
                                <input type="date" id="form_date" name="date" class="form-control date" style="margin-bottom: 2%;" required value="<?php if (isset($_POST['date'])) echo $_POST['date']; ?>">
                                <span class="error_form" id="date_error_message" style="font-size: 16px; color:red;"></span>
                            </div>
                            <div class="row">
                                <div class="form-group col">
                                    <label for="">Password</label>
                                    <input type="password" id="form_password" name="password" class="form-control password" style="margin-bottom: 3%;" required value="<?php if (isset($_POST['password'])) echo $_POST['password']; ?>">
                                    <span class="error_form" id="password_error_message" style="font-size: 16px; color:red;"></span>
                                    <span><input type='checkbox' id='toggle' >&nbsp; <span id='toggleText'>Show Password</span></span>
                                </div>
                                <div class="form-group col">
                                    <label for="">Confirm Password</label>
                                    <input type="password" id="form_cpassword" name="cpassword" class="form-control cpassword" style="margin-bottom: 3%;" required>
                                    <span class="error_form" id="cpassword_error_message" style="font-size: 16px; color:red;"></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <p><a href="login.php" class="text-decoration-none">Already have an account?</a></p>
                            </div>
                            <div class="form-group d-flex ">
                                <!--
                                <button type="sumbit" name="submit" id="submit" class="btn btn-info" style="margin-right: 2%;">CSV</button>-->
                                <button type="reset" class="btn btn-info" style="margin-right: 2%;">Reset</button>
                                <button type="button" id="signup" class="btn btn-info">Signup</button>
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
            $("#toggle").change(function() {
                if ($(this).is(':checked')) {
                    $("#form_password").attr("type", "text");
                    $("#toggleText").text("Hide");
                } else {
                    $("#form_password").attr("type", "password");
                    $("#toggleText").text("Show");
                }

            });
            
        });
    </script>

</body>

</html>