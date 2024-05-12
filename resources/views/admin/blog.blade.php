<!DOCTYPE html>
<html lang="en">

<head>
    <title>Blog</title>
    @include('admin.partial.head')
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Custom style -->
    <link rel="stylesheet" href="{{ asset('assets/admin/dist/css/style.css') }}">
</head>
<style>
    .sort a {
        color: black;
        text-decoration: none;
    }
</style>

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
                            <h1 class="m-0">Blog</h1>
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
                                    <div class="card-header">
                                        <div class="row d-flex">
                                            <div class="col-lg-6">
                                                <form class="form-inline my-2 my-lg-0">
                                                    <input class="form-control mr-sm-2" type="search"
                                                        placeholder="Search" aria-label="Search" name="search">
                                                    <button class="btn btn-outline-warning text-dark my-2 my-sm-0"
                                                        type="submit">Search</button>
                                                    <a class="btn btn-outline-danger text-dark my-2 my-sm-0 ml-1"
                                                        href="{{ route('blog') }}">Clear</a>
                                                </form>
                                            </div>
                                            <div class="col-lg-6 text-right">
                                                <a class="btn btn-success" href="{{ route('blog-add') }}"> <i
                                                        class="fa fa-plus"></i> Add Blog</a>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
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
                                        <table class="table">
                                            <thead>
                                                <tr class="sort">
                                                    <th scope="col"><span>S.No</span></th>
                                                    <th scope="col"><span>Image</span></th>
                                                    <th scope="col"><span>@sortablelink('title')</span></th>
                                                    <th scope="col"><span>@sortablelink('category')</span></th>
                                                    <th scope="col"><span>@sortablelink('url')</span></th>
                                                    <th scope="col"><span>@sortablelink('page_title')</span></th>
                                                    <th scope="col"><span>@sortablelink('created_at', 'Date')</span></th>
                                                    <th scope="col">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @if (!$datas->isEmpty())
                                                    @php
                                                        $serial = ($datas->currentPage() - 1) * $datas->perPage() + 1;
                                                    @endphp
                                                    @foreach ($datas as $key => $data)
                                                        <tr>
                                                            <th scope="row">{{ $serial++ }}</th>
                                                            <td><img src="{{ asset('storage/temp/' . $data->image) }}"
                                                                    alt="{{ $data->image }}" class="img-thumbnail"
                                                                    width="40" height="36">
                                                            </td>
                                                            <td>{{ $data->title }}</td>

                                                            <td>
                                                                {{ $data->blogCategory->name }}
                                                            </td>
                                                            <td>{{ $data->url }}</td>
                                                            <td>{{ $data->page_title }}</td>
                                                            <td>{{ date('d-m-Y', strtotime($data->created_at)) }}</td>
                                                            <td>
                                                                <div class="dropdown">
                                                                    <button class="btn btn-info dropdown-toggle btn-sm"
                                                                        type="button" data-toggle="dropdown"
                                                                        aria-expanded="false">
                                                                        Action
                                                                    </button>
                                                                    <div class="dropdown-menu">
                                                                        <a class="dropdown-item"
                                                                            href="{{ route('blog-edit', ['id' => $data->id]) }}">
                                                                            <i class='fas fa-edit'></i> Edit</a>
                                                                        <a class="dropdown-item"
                                                                            href="{{ route('delete-blog', ['id' => $data->id]) }}"
                                                                            onclick="confirm('Are You sure want to delete this record?')"><i
                                                                                class='fas fa-trash-alt'></i> Delete</a>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                @else
                                                    <tr class="text-center">
                                                        <td colspan="8" class="text-danger fw-bold">No data available
                                                            in table
                                                        </td>
                                                    </tr>
                                                @endif
                                            </tbody>
                                        </table>
                                        <div class="float-right">
                                            {!! $datas->withQueryString()->links('pagination::bootstrap-5') !!}
                                        </div>
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
