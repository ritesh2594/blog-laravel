@extends('frontEnd.layouts.default')
@section('title', 'Blogs Lists')

@section('content')
    <div class="breadcrumb-wrap">
        <div class="container">
            <h2 class="breadcrumb-title">Blogs</h2>
        </div>
    </div>


    <div class="sports-wrap ptb-100">
        <div class="container">
            <div class="row gx-55 gx-5">
                <div class="col-lg-8">
                    @if (!$datas->isEmpty())
                        @php
                            $serial = ($datas->currentPage() - 1) * $datas->perPage() + 1;
                        @endphp
                        <div class="row justify-content-center">
                            @foreach ($datas as $data)
                                <div class="col-md-6">
                                    <div class="news-card-thirteen">
                                        <div class="news-card-img">
                                            <img src="{{ asset('storage/temp/' . $data->image) }}" alt="No Iamge">
                                            <a href="{{ route('blog-list-category', ['category_id' => $data->blogCategory->id]) }}"
                                                class="news-cat">{{ $data->blogCategory->name }}</a>
                                        </div>
                                        <div class="news-card-info">
                                            <h3><a
                                                    href="{{ route('blog-detail', ['url' => $data->url]) }}">{{ $data->title }}</a>
                                            </h3>
                                            <ul class="news-metainfo list-style">
                                                <li><i class="fi fi-rr-calendar-minus"></i>{{ date('M d, Y', strtotime($data->created_at)) }}
                                                </li>
                                                <li><i class="fi fi-rr-clock-three"></i>15 Min Read</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="page-nav list-style text-center mt-20 text-center">
                            {!! $datas->withQueryString()->links('pagination::bootstrap-5') !!}
                        </div>
                    @else
                        <p class="text-danger fw-bold">No data available
                        </p>
                    @endif
                </div>
                <div class="col-lg-4">
                    <div class="sidebar">
                        <div class="sidebar-widget">
                            <h3 class="sidebar-widget-title">Categories</h3>
                            <ul class="category-widget list-style">
                                @if (!$blogsByCategory->isEmpty())
                                    @foreach ($blogsByCategory as $category)
                                        <li><a href="{{ route('blog-list-category', ['category_id' => $category->id]) }}"><img
                                                    src="{{ asset('assets/frontEnd/img/icons/arrow-right.svg') }}"
                                                    alt="Image">{{ $category->name }}
                                                <span>({{ $category->blogs_count }})</span></a></li>
                                    @endforeach
                                @else
                                    <li class="text-danger"> No category found </li>
                                @endif
                            </ul>
                        </div>
                        <div class="sidebar-widget">
                            <h3 class="sidebar-widget-title">Recent Posts</h3>
                            <div class="pp-post-wrap">
                                @if (!$recentPosts->isEmpty())
                                @foreach ($recentPosts as $recentPost)
                                    <div class="news-card-one">
                                        <div class="news-card-img">
                                            <img src="{{ asset('storage/temp/' . $recentPost->image) }}" alt="Image">
                                        </div>
                                        <div class="news-card-info">
                                            <h3><a href="{{ route('blog-detail', ['url' => $recentPost->url]) }}">{{ $recentPost->title }}</a>
                                            </h3>
                                            <ul class="news-metainfo list-style">
                                                <li><i class="fi fi-rr-calendar-minus"></i>{{ date('M d, Y', strtotime($recentPost->created_at)) }}</li>
                                            </ul>
                                        </div>
                                    </div>
                                    @endforeach
                                @else
                                    <p class="text-danger fw-bold">No Recent Posts
                                        Available
                                    </p>
                                @endif
                            </div>
                        </div>
                        <div class="sidebar-widget">
                            <h3 class="sidebar-widget-title">Popular Tags</h3>
                            <ul class="tag-list list-style">
                                @if (!$recentPosts->isEmpty())
                                @foreach ($tags as $tag )
                                <li><a href="{{ route('blog-list-tag',['tag_name'=>Str::slug($tag->name, '-')]) }}">{{ $tag->name }}</a></li>
                                @endforeach
                                @else
                                <li class="text-danger">No Tags Found</li>
                                @endif
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
