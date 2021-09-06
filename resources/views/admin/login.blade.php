<!DOCTYPE html>
<html>

<meta http-equiv="content-type" content="text/html;charset=UTF-8"/>
<head>
    <title>Login 2 | Admire</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="shortcut icon" href="{{url('')}}/admin/img/logo1.ico"/>

    <link type="text/css" rel="stylesheet" href="{{url('')}}/admin/css/components.css"/>
    <link type="text/css" rel="stylesheet" href="{{url('')}}/admin/css/custom.css"/>


    <link type="text/css" rel="stylesheet" href="{{url('')}}/admin/vendors/bootstrapvalidator/css/bootstrapValidator.min.css"/>
    <link type="text/css" rel="stylesheet" href="{{url('')}}/admin/vendors/wow/css/animate.css"/>

    <link type="text/css" rel="stylesheet" href="{{url('')}}/admin/css/pages/login2.css"/>
</head>
<body class="login_background">
<div class="preloader" style=" position: fixed;
  width: 100%;
  height: 100%;
  top: 0;
  left: 0;
  z-index: 100000;
  backface-visibility: hidden;
  background: #ffffff;">
    <div class="preloader_img" style="width: 200px;
  height: 200px;
  position: absolute;
  left: 48%;
  top: 48%;
  background-position: center;
z-index: 999999">
        <img src="{{url('')}}/admin/img/loader.gif" style=" width: 40px;" alt="loading...">
    </div>
</div>
<div class="container wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.5s">
    <div class="row">
        <div class="col-10 mx-auto">
            <div class="row">
                <div class="col-lg-4  col-md-8 col-sm-12  mx-auto login_image login_section login_section_top">
                    <div class="login_logo login_border_radius1">
                        <h3 class="text-center text-white">
                            <img src="{{url('')}}/admin/img/logow2.png" alt="josh logo" class="admire_logo">
                        </h3>
                    </div>
                    <div class="row m-t-20">
                        <div class="col-12">
                            <a class="text-success m-r-20 font_18">LOG IN</a>
                        </div>
                    </div>
                    <div class="m-t-15">
                        <div id="login_validator">
                            <div class="form-group">
                                <label for="email" class="col-form-label text-white"> E-mail</label>
                                <input type="text" class="form-control b_r_20" id="email" name="email"
                                       placeholder="E-mail">
                            </div>
                            <div class="form-group">
                                <label for="password" class="col-form-label text-white">Password</label>
                                <input type="password" class="form-control b_r_20" id="password" name="password"
                                       placeholder="Password">
                            </div>
                            <div class="text-center login_bottom mt-3">
                                <button type="button" class="btn btn-mint btn-block b_r_20 m-t-10 m-r-20" onclick="adminLogin()">LOG IN
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript" src="{{url('')}}/admin/js/jquery.min.js"></script>
<script type="text/javascript" src="{{url('')}}/admin/js/popper.js"></script>
<script type="text/javascript" src="{{url('')}}/admin/js/bootstrap.min.js"></script>


<script type="text/javascript" src="{{url('')}}/admin/vendors/bootstrapvalidator/js/bootstrapValidator.min.js"></script>
<script type="text/javascript" src="{{url('')}}/admin/vendors/wow/js/wow.min.js"></script>
<script type="text/javascript" src="{{url('')}}/admin/vendors/jquery.backstretch/js/jquery.backstretch.js"></script>

<script type="text/javascript" src="{{url('')}}/admin/js/pages/login2.js"></script>
</body>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
<script>
    function adminLogin() {
        let email = document.getElementById('email').value;
        let password = document.getElementById('password').value;
        $.ajax({
            url: `{{env('APP_URL')}}/admin-authenticate`,
            type: 'POST',
            dataType: "JSON",
            data: {email: email, password: password, "_token": "{{ csrf_token() }}"},
            success: function (result) {
                document.getElementById('password').value = '';
                if (result.status === true) {
                    swal.fire({
                        "title": "",
                        "text": "Admin SignIn Successfully!",
                        "type": "success",
                        "showConfirmButton": true,
                        "onClose": function (e) {
                            window.location.href = `{{env('APP_URL')}}/admin-dashboard`
                        }
                    })
                } else {
                    alert("Invalid Email or Password")
                    setTimeout(function () {
                        document.getElementById('loginError').style.display = 'none';
                    }, 5000);
                }
            },
        });
    }
    function backHome() {
        window.location.href = `{{env('APP_URL')}}/`
    }
</script>

</html>
