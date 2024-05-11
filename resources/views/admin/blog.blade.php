<!DOCTYPE html>
<html lang="en">

<head>
    <title>Appna Store | Banner</title>
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
                                                    {{-- <th scope="col"><span>@sortablelink('tags')</span></th> --}}
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
                                                            <td><img src="{{ asset('storage/temp/' . $data->image) }}" alt="{{ $data->image }}"
                                                                    class="img-thumbnail" width="40" height="36">
                                                            </td>
                                                            <td>{{ $data->title }}</td>

                                                            <td>
                                                               {{ $data->blogCategory->name}}
                                                            </td>
                                                            @php
                                                            /* <td>
                                                                @if($data->multipleBlogTags)
                                                                @foreach($data->multipleBlogTags as $tag)
                                                                    {{ $tag->blogTag->name }}
                                                                    @if(!$loop->last)
                                                                        ,
                                                                    @endif
                                                                @endforeach
                                                            @endif
                                                            </td> */
                                                            @endphp
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
                                                                        <a class="dropdown-item" href="#"> <i
                                                                                class='fas fa-edit'></i> Edit</a>
                                                                        <a class="dropdown-item" href="#"><i
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
        <!-- Add Banner Modal -->
        <?php
        /*  <div class="modal fade" id="bannerModal" tabindex="-1" role="dialog" aria-labelledby="bannerModalLabel"
            aria-hidden="true">

            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="bannerModalLabel">Slider</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ route('slider.register') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" class="form-control" id="title" placeholder="Enter Title"
                                    name="title" value="{{ old('title') }}" required>
                            </div>
                            <div class="form-group">
                                <label for="subTitle">Sub-Title</label>
                                <input type="text" class="form-control" id="subTitle"
                                    placeholder="Enter Sub-Title" name="sub_title" value="{{ old('sub_title') }}"
                                    required>
                            </div>
                            <div class="form-group">
                                <label for="buttonUrl">Button-Url</label>
                                <input type="text" class="form-control" id="buttonUrl" name="button_url"
                                    placeholder="Enter Button-Url" value="{{ old('button_url') }}" required>
                            </div>
                            <div class="form-group">
                                <label for="buttonText">Button-Text</label>
                                <input type="text" class="form-control" id="buttonText" name="button_text"
                                    placeholder="Enter Button-Text" value="{{ old('button_text') }}" required>
                            </div>
                            <div class="form-group">
                                <label>Images</label>
                                <div class="dropzone dz-clickable" id="dropzone">
                                    <div class="dz-message d-flex flex-column">
                                        <i class='fas fa-cloud-upload-alt' style="font-size:60px"></i>
                                        Drag &amp; Drop here or click
                                    </div>
                                    <input type="hidden" name="file" id="file" value="">
                                </div>

                            </div>
                            <div class="modal-footer" style="border-top: 0px;">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-danger">Add</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Update Banner Modal -->
        <div class="modal fade" id="bannerUpdateModal" tabindex="-1" role="dialog"
            aria-labelledby="bannerUpdateModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="bannerUpdateModalLabel">Slider Update</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ route('slider.register') }}" method="POST"
                            id="formEdit"enctype="multipart/form-data">
                            @csrf
                            <input name="id" type="hidden" value="" id="idEdit" />
                            <div class="form-group">
                                <label for="titleEdit">Title</label>
                                <input type="text" class="form-control" placeholder="Enter Title" name="title"
                                    id="titleEdit" value="" required>
                            </div>
                            <div class="form-group">
                                <label for="sub_titleEdit">Sub-Title</label>
                                <input type="text" class="form-control" id="sub_titleEdit"
                                    placeholder="Enter Sub-Title" name="sub_title" value="" required>
                            </div>
                            <div class="form-group">
                                <label for="button_urlEdit">Button-Url</label>
                                <input type="text" class="form-control" id="button_urlEdit" name="button_url"
                                    placeholder="Enter Button-Url" value="" required>
                            </div>
                            <div class="form-group">
                                <label for="button_textEdit">Button-Text</label>
                                <input type="text" class="form-control" id="button_textEdit" name="button_text"
                                    placeholder="Enter Button-Text" value="" required>
                            </div>
                            <div class="form-group">
                                <label>Images</label>
                                <div class="dropzone dz-clickable" id="dropzone-edit">
                                    <div class="dz-message d-flex flex-column">
                                        <i class='fas fa-cloud-upload-alt' style="font-size:60px"></i>
                                        Drag &amp; Drop here or click
                                    </div>
                                    <input type="hidden" name="file" id="file-edit" value="">
                                </div>
                            </div>
                            <div class="modal-footer" style="border-top: 0px;">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-danger">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div> */
        ?>
        <footer class="main-footer">
            @include('admin.partial.footer')
        </footer>
        <aside class="control-sidebar control-sidebar-dark">
        </aside>
    </div>
    @include('admin.partial.foot')
    <script type="text/javascript">
        $('.delete').click(function(e) {
            if (!confirm('Are you sure you want to delete this?')) {
                e.preventDefault();
            }
        });
    </script>
    <script type="text/javascript">
        /*  Update modal open with there datas and response start Here */
        var dropzoneFile;

        function bannerModal(e, id) {
            $('#bannerUpdateModal').modal('show');
            dropzoneFile.removeAllFiles(true);
            dropzoneFile.emit("resetFiles");
            dropzoneFile.emit('reset');
            var base_url = window.location.origin;
            url = base_url + "/admin/slideredit/" + id;
            $.ajax({
                type: "GET",
                dataType: "json",
                url: url,
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function(response) {
                    if (response.formdata) {
                        $('#idEdit').val(response.formdata.id);
                        $('#titleEdit').val(response.formdata.title);
                        $('#sub_titleEdit').val(response.formdata.sub_title);
                        $('#button_urlEdit').val(response.formdata.button_url);
                        $('#button_textEdit').val(response.formdata.button_text);
                        $('.dz-image-preview').hide();
                        var fileName = [];
                        var images = response.formdata.image.split(',');
                        $.each(images, function(i, image) {
                            fileName.push(image);
                            var mockFile = {
                                name: image,
                                size: 20008
                            };
                            $('#file-edit').val(fileName);
                            dropzoneFile.emit("addedfile", mockFile);
                            dropzoneFile.options.thumbnail.call(dropzoneFile, mockFile,
                                '/storage/temp/' + image);
                            dropzoneFile.emit("complete", mockFile);
                        });
                    }
                }
            });

        }
        /*  Update modal open with there datas and response start Here */
    </script>

    <script>
        /* Status Change Start*/
        $(function() {
            $('.custom-control-input ').change(function() {
                var status = $(this).prop('checked') == true ? 1 : 0;
                var id = $(this).data('id');
                <?php
                /*  url = '{{ route('slider.changeStatus') }}'; */
                ?>
                $.ajax({
                    type: "GET",
                    dataType: "json",
                    url: url,
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    data: {
                        'status': status,
                        'id': id
                    },
                    success: function(data) {
                        location.reload();
                    }
                });
            })
        })
        /* Status Change End */
    </script>
    <script>
        /*    Add product dropzone works Start here */
        $(function() {
            $("#dropzone").dropzone({
                parallelUploads: 1,
                maxFiles: 1,
                maxFilesize: 2,
                addRemoveLinks: true,
                acceptedFiles: '.png,.jpg,.jpeg',
                <?php
                /*  url: " route('store.image') , */
                ?>
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                init: function() {
                    this.on('success', function(file, response) {
                        var fileName = [];
                        fileName.push(response);
                        if ($('#file').val() != '') {
                            fileName.push($('#file').val());
                        }
                        $("#file").val(fileName.toString());
                    });

                    // this.on('addedfile', function(file) {});

                    // this.on('drop', function(file) {});

                    this.on('removedfile', function(file) {
                        if (file.xhr.responseText.length > 0) {
                            var fileName = file.xhr.responseText;
                            $.ajax({
                                url: "/delete/image/" + fileName,
                                method: 'DELETE',
                                dataType: "json",
                                headers: {
                                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr(
                                        'content')
                                },
                                success: function(result) {
                                    if ($('#file').val() != '') {
                                        $file_arr = $('#file').val();
                                        $file_arr = $file_arr.split(',');
                                        $file_arr = removeArr($file_arr, fileName);
                                        $('#file').val($file_arr.toString());
                                    }
                                },
                                error: function() {
                                    $('#settlement_proof_status').text(
                                        'attachment_deletion_error').fadeIn();
                                }

                            });
                        }
                    });

                    // this.on('complete', function(file) {});

                    // this.on('error', function(file) {});

                    this.on('resetFiles', function() {
                        if (this.files.length != 0) {
                            for (i = 0; i < this.files.length; i++) {
                                this.files[i].previewElement.remove();
                            }
                            this.files.length = 0;
                        }
                    });
                }
            });
        });
        /*   Add product dropzone works End here */

        /*  Edit product dropzone works Start here */
        $(function() {
            $("#dropzone-edit").dropzone({
                parallelUploads: 1,
                maxFiles: 1,
                maxFilesize: 2,
                addRemoveLinks: true,
                acceptedFiles: '.png,.jpg,.jpeg',
                url: "route('storeproduct.image') ,
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                init: function() {
                    dropzoneFile = this;
                    this.on('success', function(file, response) {
                        var fileName = [];
                        fileName.push(response);
                        if ($('#file-edit').val() != '') {
                            fileName.push($('#file-edit').val());
                        }
                        $("#file-edit").val(fileName.toString());
                    });
                    this.on('removedfile', function(file) {
                        // console.log(file.xhr.responseText.length);
                        // if (file.xhr.responseText.length > 0) {

                        var fileName = file['name'];
                        console.log(fileName);
                        $.ajax({
                            url: "/deleteproduct/image/" + fileName,
                            method: 'DELETE',
                            dataType: "json",
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr(
                                    'content')
                            },
                            success: function(result) {
                                if ($('#file-edit').val() != '') {
                                    $file_arr = $('#file-edit').val();
                                    $file_arr = $file_arr.split(',');
                                    $file_arr = removeArr($file_arr, fileName);
                                    $('#file-edit').val($file_arr.toString());
                                    console.log($file_arr);
                                }
                            },
                            error: function() {
                                $('#settlement_proof_status').text(
                                    'attachment_deletion_error').fadeIn();
                            }

                        });
                        // }
                    });
                    this.on('resetFiles', function() {
                        if (this.files.length != 0) {
                            for (i = 0; i < this.files.length; i++) {
                                this.files[i].previewElement.remove();
                            }
                            this.files.length = 0;
                        }
                    });
                }
            });
        });
        /*   Edit product dropzone works End here */

        /*  this function is used to remove value of dropZone  */
        function removeArr(arr) {
            var what, a = arguments,
                L = a.length,
                ax;
            while (L > 1 && arr.length) {
                what = a[--L];
                while ((ax = arr.indexOf(what)) !== -1) {
                    arr.splice(ax, 1);
                }
            }
            return arr;
        }
        /*  this function is used to remove value of dropZone  */
    </script>

</body>

</html>
