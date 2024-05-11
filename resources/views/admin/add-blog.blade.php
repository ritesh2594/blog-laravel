<!DOCTYPE html>
<html lang="en">

<head>
    <title>Appna Store | Banner</title>
    @include('admin.partial.head')
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Custom style -->
    <link rel="stylesheet" href="{{ asset('assets/admin/dist/css/style.css') }}">
    <script src="https://cdn.ckeditor.com/ckeditor5/23.0.0/classic/ckeditor.js"></script>

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
                            <h1 class="m-0">Add Blog</h1>
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
                                        <form action="{{ route('blog-add-save') }}" method="POST"
                                            enctype="multipart/form-data">
                                            @csrf
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="title">Title</label>
                                                        <input type="text" class="form-control" id="title"
                                                            placeholder="Enter Title" name="title"
                                                            value="{{ old('title') }}">
                                                        <span class="text-danger">
                                                            @error('title')
                                                                {{ $message }}
                                                            @enderror
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="page-title">Page Title</label>
                                                        <input type="text" class="form-control" id="page-title"
                                                            name="page_title" placeholder="Enter Page Title"
                                                            value="{{ old('page_title') }}">
                                                        <span class="text-danger">
                                                            @error('page_title')
                                                                {{ $message }}
                                                            @enderror
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="blog-category">Select Blog Category
                                                        </label>

                                                        <select class="form-control" id="blog-category"
                                                            name="blogCategory">
                                                            @foreach ($categories as $category)
                                                                <option value="{{ $category->id }}">
                                                                    {{ $category->name }}</option>
                                                            @endforeach
                                                        </select>
                                                        <span class="text-danger">
                                                            @error('blogCategory')
                                                                {{ $message }}
                                                            @enderror
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="tag">Tag</label>
                                                        <select multiple class="form-control" name="tag[]"
                                                            id="tag">
                                                            @foreach ($tags as $tag)
                                                                <option value="{{ $tag->id }}">
                                                                    {{ $tag->name }}</option>
                                                            @endforeach
                                                        </select>
                                                        <span class="text-danger">
                                                            @error('tag')
                                                                {{ $message }}
                                                            @enderror
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label> Description </label>
                                                        <textarea class="form-control" id="content" placeholder="Enter the Description" rows="10" name="description">{{ old('description') }}</textarea>
                                                        <span class="text-danger">
                                                            @error('description')
                                                                {{ $message }}
                                                            @enderror
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="image">Image</label>
                                                        <input type="file" class="form-control-file" id="image"
                                                            name="image" id="image">
                                                        <span class="text-danger">
                                                            @error('image')
                                                                {{ $message }}
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="page-url">url</label>
                                                        <input type="text" class="form-control" id="page-title"
                                                            name="url" placeholder="Enter Page url"
                                                            value="{{ old('url') }}">
                                                        <span class="text-danger">
                                                            @error('url')
                                                                {{ $message }}
                                                            </span>
                                                        @enderror
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
    <script>
        ClassicEditor.create(document.querySelector('#content'))
            .catch(error => {
                console.error(error);
            });
    </script>
</body>

</html>
