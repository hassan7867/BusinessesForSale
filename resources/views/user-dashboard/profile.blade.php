@extends('user-dashboard.layout')
@section('dashboard-content')

    {{--<section class="full-height relative no-top no-bottom vertical-center" data-bgimage="url(images/background/subheader.jpg) top" data-stellar-background-ratio=".5">--}}
    <div class="container-fluid" style="margin-top: 25px">
        <div class="row">
            <div class="col-lg-12 wow fadeIn" data-wow-delay=".5s">
                <div class="box-rounded padding40" data-bgcolor="#ffffff">
                    <h3 class="mb10">Change Password</h3>
                    <p>Login using an existing account or create a new account <a href="register.html">here<span></span></a>.
                    </p>
                    <div class="form-border">

                        <div class="field-set">
                            <input type='password' name='password' id='new-password' class="form-control"
                                   placeholder="New Password">
                        </div>
                        <div class="field-set">
                            <input type='password' name='password' id='confirm-password' class="form-control"
                                   placeholder="Confirm Password">
                        </div>

                        <div class="field-set text-center">
                            <input type='button' onclick="changePassword()" value='Submit'
                                   class="btn btn-main color-2">
                        </div>

                        <div class="clearfix"></div>

                        <div class="spacer-single"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{--</section>--}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

    <script>
        function changePassword() {
            let newPassword = document.getElementById('new-password').value;
            let confirmPassword = document.getElementById('confirm-password').value;
            if (newPassword === "" || newPassword === null) {
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'New Password is required!',
                });
                return false;
            }
            if (confirmPassword === "" || confirmPassword === null) {
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Confirm Password field is required!',
                });
                return false;
            }
            if (confirmPassword !== newPassword) {
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'New & Confirm Password are not matching!',
                });
                return false;
            }
            $.ajax({
                url: `{{env('APP_URL')}}/change/password`,
                type: 'POST',
                dataType: "JSON",
                data: {newPassword: newPassword, "_token": "{{ csrf_token() }}"},
                success: function (result) {
                    if (result.status === true) {
                        swal.fire({
                            icon: 'Success',
                            title: 'Success',
                            text: 'Password Changed Successfully!',
                            "onClose": function (e) {
                                window.location.href = `{{env('APP_URL')}}/user-dashboard`
                            }
                        });
                    } else {
                        Swal.fire({
                            icon: 'Error',
                            title: 'Error',
                            text: result.message,
                        });
                    }
                },
            });
        }
    </script>
@endsection
