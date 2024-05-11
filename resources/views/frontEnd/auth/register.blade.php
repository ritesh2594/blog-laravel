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

</head>

<body>
    <div class="login-wrap">
        <div class="login-bg">
            <a href="/" class="navbar-brand">
                <img class="logo-light" src="{{ asset('assets/frontEnd/img/logo-white.webp') }}" alt="Image">
                <img class="logo-dark" src="{{ asset('assets/frontEnd/img/logo-white.webp') }}" alt="Image">
            </a>
        </div>
        <div class="login-content">
            <a href="/" class="link-one"><i class="ri-arrow-left-s-line"></i>Back</a>
            <div class="login-form">
                <h3>SignUp</h3>
                <form id="registerForm">
                    @csrf
                    <div class="form-group">
                        <input type="text" class="form-control" id="name" placeholder="Full Name"
                            name="name">
                    </div>
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
                    <div class="form-group">
                        <input type="number" id="password_confirmation" name="password_confirmation"
                            class="form-control" placeholder="Confirm Password"
                            onkeyup="passwordLength(this,'#password_confirmation')">
                        <span class="text-danger">
                              @error('password')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <button type="submit" class="btn-two w-100 d-block" id="submitbtn">Register</button>
                    <p class="login-text">Already registered?<a href="{{ route('login') }}">Sign in here.</a></p>
                </form>
            </div>
        </div>
    </div>

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
            $('#registerForm').submit(function(e) {
                e.preventDefault();
                var error_count = 0;
                var email = $("#email").val().trim();
                $('.is-invalid').removeClass('is-invalid');
                if ($("#name").val().trim() == '') {
                    $('#name').addClass('is-invalid');
                    error_count++;
                }
                if ($("#email").val().trim() == '' || IsEmail(email) == false) {
                    $('#email').addClass('is-invalid');
                    error_count++;
                }
                if ($("#password").val().trim() == '') {
                    $('#password').addClass('is-invalid');
                    error_count++;
                }
                if ($("#password_confirmation").val().trim() == '') {
                    $('#password_confirmation').addClass('is-invalid');
                    error_count++;
                }
                if ($("#password_confirmation").val().trim() !== '') {
                    if ($("#password_confirmation").val().trim() !== $("#password").val().trim()) {
                        $('#password_confirmation').addClass('is-invalid');
                        $('#cnfpassword').text('Password and Confirm Password not Matched')
                        error_count++;
                    }
                }
                if (error_count > 0) {
                    $('#registerForm').prop('disabled', false);
                    return false;
                } else {
                $('#registerForm').prop('disabled', true);
                userRegister();
                }
            });

            $('#email').on('keyup change', function() {
                var email = $(this).val().trim();
                if (IsEmail(email)) {
                    $(this).removeClass('is-invalid').addClass('is-valid');
                } else {
                    $(this).removeClass('is-valid').addClass('is-invalid');
                }
            });
            $('#name').on('keyup change', function() {
                var name = $(this).val(); // Get the value of the name input
                if (validateNameLength(name)) {
                    $(this).removeClass('is-invalid').addClass('is-valid');
                } else {
                    $(this).removeClass('is-valid').addClass('is-invalid');
                }
            });
        });

        function validateNameLength(name) {
            // Trim the name to remove leading and trailing whitespace
            var trimmedName = name.trim();

            // Check if the trimmed name has more than two characters
            return trimmedName.length > 2;
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

        function userRegister() {
            var forms = $("#registerForm");
            $.ajax({
                type: 'POST',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: "{{ route('register') }}",
                data: forms.serialize(),
                beforeSend: function() {
                    $('#submitbtn').addClass('disabled');
                    $("#submitbtn").prop("disabled", true);
                    $("#spinners").show();
                },
                success: function(data) {
                    if (data.status) {
                        toastr.success(data.message);
                        document.getElementById("registerForm").reset();
                        $('#registerForm input').removeClass('is-valid');
                    }
                },
                error: function(err) {
                    if (err.status == 422) { // when status code is 422, it's a validation issue
                        $.each(err.responseJSON.errors, function(i, error) {
                            toastr.error(error);
                        });
                    }
                },
                complete: function() {
                    $("#submitbtn").removeAttr('disabled');
                }
            });
        }
    </script>
</body>

</html>
