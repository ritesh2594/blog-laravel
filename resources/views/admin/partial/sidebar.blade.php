<a href="{{ route('dashboard') }}" class="{{-- brand-link --}}">
    <img src="{{ asset('assets/frontEnd/img/logo.png') }}" alt="Logo"
        class="brand-image" style="width:115px; margin-left:40px">
    {{-- <span class="brand-text font-weight-light">your logo</span> --}}
</a>
<div class="sidebar">
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
            @if (auth()->user()->profile_image != null)
                <img class="rounded-circle" src="{{ asset('storage/images/profile/' . auth()->user()->profile_image) }}"
                    style="max-width: 200px;">
            @else
                <img class="rounded-circle" src="{{ asset('assets/admin/dist/img/user.jpg') }}"
                    style="max-width: 200px;">
            @endif
            {{-- <img src="{{ asset('assets/admin/dist/img/avatar5.png') }}" class="img-circle elevation-2" alt="User Image"> --}}
        </div>
        <div class="info">
            <a href="{{-- {{ route('profile') }} --}}"
                class="d-block">{{ auth()->user() != null ? auth()->user()->name : null }}</a>
        </div>
    </div>
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item menu-open">
                <a class="nav-link active" href="{{ route('dashboard') }}">
                    <i class="nav-icon fas fa-tachometer-alt"></i>
                    <p>
                        Dashboard
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-edit"></i>
                    <p>
                        Blog
                        <i class="fas fa-angle-left right"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{ route('blog-category') }}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Blog Category</p>
                        </a>
                    </li>
                </ul>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{ route('blog-tag') }}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Blog Tags</p>
                        </a>
                    </li>
                </ul>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{ route('blog') }}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Blog</p>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="nav-icon fa fa-cog"></i>
                    <p>
                        Account Settings
                        <i class="fas fa-angle-left right"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    @php
                        
                        /* <li class="nav-item">
                            <a href="{{-- {{ route('profile') }} --}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Profile</p>
                            </a>
                        </li> */
                    @endphp
                    <li class="nav-item">
                        <a href="{{ route('logout') }}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Logout</p>
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
    </nav>
</div>
