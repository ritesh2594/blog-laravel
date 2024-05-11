<!DOCTYPE html>
<html lang="zxx">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="{{ asset('assets/frontEnd/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontEnd/css/remixicon.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontEnd/css/uicons-regular-rounded.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontEnd/css/flaticon_baxo.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontEnd/css/swiper.bundle.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontEnd/css/aos.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontEnd/css/header.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontEnd/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontEnd/css/footer.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontEnd/css/responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontEnd/css/dark-theme.css') }}">
    <title>Baxo - Responsive Blog HTML Template</title>
    <link rel="icon" type="image/png" href="{{ asset('assets/frontEnd/img/favicon.webp') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">


</head>

<body>
    <div class="login-wrap">
        <div class="login-bg">
            <a href="/" class="navbar-brand">
                <img class="logo-light" src="{{ asset('assets/frontEnd/img/logo.png') }}" style="width: 150px;margin-left:215px" alt="Image">
                <img class="logo-dark" src="{{ asset('assets/frontEnd/img/logo.png') }}"  style="width: 150px;margin-left:215px" alt="Image">
            </a>
        </div>
        <div class="login-content">
            <a href="/" class="link-one"><i class="ri-arrow-left-s-line"></i>Back</a>
            <div class="login-form">
                <h3>Login</h3>
                <form id="loginForm">
                    @csrf
                    <div class="form-group">
                        <input type="email" id="email" name="email" class="form-control"
                            placeholder="Email Address">
                        <span class="text-danger">
                            @error('email')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <div class="form-group">
                        <input type="number" id="password" name="password" class="form-control" placeholder="Password"
                            onkeyup="passwordLength(this,'#password')">
                        <span class="text-danger">
                            @error('password')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="form-check checkbox">
                                <input class="form-check-input" type="checkbox" id="test_2">
                                <label class="form-check-label" for="test_2">
                                    Stay Logged In?
                                </label>
                            </div>
                        </div>
                        <div class="col-6 text-end">
                            <a href="login.html">Forgot Password</a>
                        </div>
                    </div>
                    <button type="submit" class="btn-two w-100 d-block" id="submitbtn">Login</button>
                    <p class="login-text">Don't have an account?<a href="{{ route('register-view') }}">Sign Up</a></p>
                </form>
            </div>
        </div>
    </div>


    <button type="button" id="backtotop" class="position-fixed text-center border-0 p-0">
        <i class="ri-arrow-up-line"></i>
    </button>

    <script src="{{ asset('assets/frontEnd/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/frontEnd/js/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/frontEnd/js/fslightbox.js') }}"></script>
    <script src="{{ asset('assets/frontEnd/js/aos.min.js') }}"></script>
    <script src="{{ asset('assets/frontEnd/js/main.js') }}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script>
        $(".toggle-password").click(function() {
            $(this).toggleClass("fa-eye fa-eye-slash");
            var input = $($(this).attr("toggle"));
            if (input.attr("type") == "password") {
                input.attr("type", "text");
            } else {
                input.attr("type", "password");
            }
        });

        function IsEmail(email) {
            var regex = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
            if (regex.test(email)) {
                return true;
            } else {
                return false;
            }
        }

        toastr.options.progressBar = true;
        toastr.options.closeButton = true;

        $(document).ready(function() {
            $('#loginForm').submit(function(e) {
                e.preventDefault();
                var error_count = 0;
                var email = $("#email").val().trim();
                $('.is-invalid').removeClass('is-invalid');

                if ($("#email").val().trim() == '' || IsEmail(email) == false) {
                    $('#email').addClass('is-invalid');
                    error_count++;
                }
                if ($("#password").val().trim() == '') {
                    $('#password').addClass('is-invalid');
                    error_count++;
                }
                if (error_count > 0) {
                    $('#registerForm').prop('disabled', false);
                    return false;
                } else {
                    $('#registerForm').prop('disabled', true);
                    userLogin();
                }
            });
        });

        function userLogin() {
            var forms = $("#loginForm");
            $.ajax({
                type: 'POST',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: "{{ route('login') }}",
                data: forms.serialize(),
                beforeSend: function() {
                    $('#submitbtn').addClass('disabled');
                    $("#submitbtn").prop("disabled", true);
                },
                success: function(data) {
                    if (data.status) {
                        toastr.success(data.message);
                        window.location = data.redirect;
                    } else {
                        $.each(data.errors, function(key, val) {
                            toastr.error(val);
                        });
                    }
                },
                error: function(err) {
                    if (err.status == 422) { // when status code is 422, it's a validation issue
                        // console.log(err.responseJSON);
                        // $('#success_message').fadeIn().html(err.responseJSON.message);

                        // you can loop through the errors object and show it to the user
                        // console.warn(err.responseJSON.errors);
                        // display errors on each form field
                        // $(document).find('.errorMsg').remove();
                        $.each(err.responseJSON.errors, function(i, error) {
                            // var el = $(document).find('[name="' + i + '"]');
                            // el.after($('<span class="errorMsg" style="color: red;">' + error[0] + '</span>'));
                            toastr.error(error);
                        });
                    }
                },
                complete: function() {
                    $("#submitbtn").removeAttr('disabled');
                }
            });
        }

        function passwordLength(field) {
            var fieldValue = $(field).val().trim();
            var minLength = 5;
            var maxLength = 10;

            if (fieldValue.length >= minLength && fieldValue.length <= maxLength) {
                $(field).removeClass('is-invalid').addClass('is-valid');
            } else {
                $(field).removeClass('is-valid').addClass('is-invalid');
            }

            // Limit the password length to maxLength characters
            if (fieldValue.length > maxLength) {
                $(field).val(fieldValue.substring(0, maxLength));
            }
        }
        $(document).ready(function() {
            $('#email').on('keyup change', function() {
                var email = $(this).val().trim();
                if (IsEmail(email)) {
                    $(this).removeClass('is-invalid').addClass('is-valid');
                } else {
                    $(this).removeClass('is-valid').addClass('is-invalid');
                }
            });
        });
    </script>
</body>

</html>
