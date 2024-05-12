<!DOCTYPE html>
<html lang="en">

<head>
    <title>Blog Category</title>
    @include('admin.partial.head')
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Custom style -->
    <link rel="stylesheet" href="{{ asset('assets/admin/dist/css/style.css') }}">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            @include('admin.partial.navbar')
        </nav>
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            @include('admin.partial.sidebar')
        </aside>
        <div class="content-wrapper">
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Add Blog Category</h1>
                        </div>
                    </div>
                </div>
            </div>
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <section class="col-lg-12 connectedSortable">
                            <div id="accordion">
                                <div class="card" style="min-height: 400px;">
                                    <div class="m-2">
                                        @if (session()->has('success'))
                                            <div class="alert alert-success fw-bold" role="alert">
                                                {{ session()->get('success') }}
                                                <button type="button" class="close" data-dismiss="alert"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                        @endif
                                    </div>
                                    <div class="card-body">
                                        <form action="{{ route('blog-category-save') }}" method="POST">
                                            @isset($data->id)
                                                <input type="hidden" name="id" value="{{ $data->id }}">
                                            @endisset
                                            @csrf
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="name">Name</label>
                                                        <input type="text" class="form-control" id="name"
                                                            placeholder="Enter category name" name="name"
                                                            value="{{ old('name',isset($data) ? $data->name : '') }}">
                                                        <span class="text-danger">
                                                            @error('name')
                                                                {{ $message }}
                                                            @enderror
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label> Description </label>
                                                        <textarea class="form-control" id="content" placeholder="Enter Description" rows="10" name="description">{{ old('description',isset($data) ? $data->description : '') }}</textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12 text-right">
                                                    <button type="submit" class="btn btn-success">Submit</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </section>
        </div>
        <footer class="main-footer">
            @include('admin.partial.footer')
        </footer>
        <aside class="control-sidebar control-sidebar-dark">
        </aside>
    </div>
    @include('admin.partial.foot')
</body>

</html>
