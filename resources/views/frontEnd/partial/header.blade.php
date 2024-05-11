<style>
    .logo-light {
        width: 115px;
        height: 100px;
    }
</style>
<div class="navbar-area header-two" id="navbar">
    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg">

            <a class="navbar-brand" href="index.html">
                <img class="logo-light" src="{{ asset('assets/frontEnd/img/logo.png') }}" alt="logo">
            </a>

            <a class="navbar-toggler" data-bs-toggle="offcanvas" href="#navbarOffcanvas" role="button"
                aria-controls="navbarOffcanvas">
                <span class="burger-menu">
                    <span class="top-bar"></span>
                    <span class="middle-bar"></span>
                    <span class="bottom-bar"></span>
                </span>
            </a>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a href="javascript:void(0)" class="nav-link active">
                            Home
                        </a>

                    </li>
                    <li class="nav-item">
                        <a href="javascript:void(0)" class="nav-link">
                            About Us
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="javascript:void(0)" class="nav-link">
                            Contact Us
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="javascript:void(0)" class="nav-link dropdown-toggle">
                            Account
                        </a>
                        <ul class="dropdown-menu">
                            <li class="nav-item">
                                <a href="{{ route('login-view') }}" class="nav-link">
                                    Login
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('register-view') }}" class="nav-link">
                                    Sign Up
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>

            </div>
            <a class="sidebar-toggler md-none" data-bs-toggle="offcanvas" href="#navbarOffcanvas" role="button"
                aria-controls="navbarOffcanvas">
                <img src="{{ asset('assets/frontEnd/img/icons/menubar-black.svg') }}" alt="Image">
            </a>
        </nav>
    </div>
</div>


<div class="responsive-navbar offcanvas offcanvas-end" data-bs-backdrop="static" tabindex="-1" id="navbarOffcanvas">
    <div class="offcanvas-header">
        <a href="index.html" class="logo d-inline-block">
            <img class="logo-light" src="{{ asset('assets/frontEnd/img/logo.png') }}" alt="logo">
        </a>
        <button type="button" class="close-btn" data-bs-dismiss="offcanvas" aria-label="Close">
            <i class="ri-close-line"></i>
        </button>
    </div>
    <div class="offcanvas-body">
        <div class="accordion" id="navbarAccordion">
            <div class="accordion-item">
                <a href="{{ url('/') }}" class="accordion-button collapsed active" aria-expanded="false"
                    aria-controls="collapseOne">
                    Home
                </a>
            </div>
            <div class="accordion-item">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapbaxour" aria-expanded="false" aria-controls="collapbaxour">
                    Pages
                </button>
                <div id="collapbaxour" class="accordion-collapse collapse" data-bs-parent="#navbarAccordion">
                    <div class="accordion-body">
                        <div class="accordion" id="navbarAccordion45">
                            <div class="accordion-item">
                                <a class="accordion-link" href="about.html">
                                    About Us
                                </a>
                            </div>
                            <div class="accordion-item">
                                <a class="accordion-link" href="contact.html">
                                    Contact Us
                                </a>
                            </div>

                            <div class="accordion-item">
                                <a href="#" class="accordion-link">
                                    Privacy Policy
                                </a>
                            </div>
                            <div class="accordion-item">
                                <a href="#" class="accordion-link">
                                    Terms & Conditions
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                    Login
                </button>
                <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#navbarAccordion">
                    <div class="accordion-body">
                        <div class="accordion" id="navbarAccordion70">
                            <div class="accordion-item">
                                <a href="{{ route('login-view') }}" class="accordion-link">
                                    Login
                                </a>
                            </div>
                            <div class="accordion-item">
                                <a href="{{ route('register-view') }}" class="accordion-link">
                                    Sign Up
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="others-option d-flex d-lg-none align-items-center">
            <div class="option-item">
                <a href="login.html" class="btn-two">Sign In</a>
            </div>
        </div>
    </div>
</div>
