@extends('frontEnd.layouts.default')
<style>
    .swiper-slide img {
        height: 406px;
        width: 600px;
    }
</style>
@section('content')
    <div class="hero-slider-wrap">
        <div class="hero-slider swiper">
            <div class="swiper-wrapper">
                @foreach ($blogsByCategory as $byCategory)
                    <div class="swiper-slide hero-news-card">
                        <img src="{{ asset('storage/temp/' . $byCategory['blogs'][0]->image) }}" alt="Iamge">

                        <div class="hero-news-info">
                            <a href="#" class="news-cat">{{ $byCategory['category']->name }}</a>
                            @foreach ($byCategory['blogs'] as $blog)
                                <h5><a href="#">{{ $blog->title }}</a></h5>
                            @endforeach
                            <div class="text-truncate">
                              
                               {{ $blog->page_title }}
                           </div>
                            <ul class="news-metainfo list-style">
                                <li><i class="fi fi-rr-calendar-minus"></i><a href="news-by-date.html">{{ date('M d, Y', strtotime($blog->created_at)) }}</a>
                                </li>
                                <li><i class="fi fi-rr-clock-three"></i>10 Min Read</li>
                            </ul>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="hero-prev"><i class="fi-rr-angle-left"></i></div>
            <div class="hero-next"><i class="fi-rr-angle-right"></i></div>
        </div>
    </div>
    <div class="pt-100">
        <div class="container-fluid">
            <div class="content-wrapper">
                <div class="left-content">
                    <div class="row align-items-end mb-20">
                        <div class="col-md-12 text-end">
                            <a href="business.html" class="link-one">View All News<i class="flaticon-right-arrow"></i></a>
                        </div>
                    </div>

                    <div class="row align-items-end mb-20 selected-wrap-two">
                        <div class="col-md-12">
                            <h2 class="section-title-three">Selected Posts</h2>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        @foreach ($datas as $data)
                            <div class="col-xxl-4 col-xl-4 col-lg-6 col-md-6">
                                <div class="news-card-thirteen">
                                    <div class="news-card-img">
                                        <img src="{{ asset('storage/temp/' . $data->image) }}" alt="Iamge">
                                        <a href="{{ route('blog-detail', ['url' => $data->url]) }}" class="news-cat">
                                            {{ $data->blogCategory->name }}
                                        </a>
                                    </div>
                                    <div class="news-card-info">
                                        <h3><a
                                                href="{{ route('blog-detail', ['url' => $data->url]) }}">{{ $data->title }}</a>
                                        </h3>
                                        <ul class="news-metainfo list-style">
                                            <li><i
                                                    class="fi fi-rr-calendar-minus"></i>{{ date('M d, Y', strtotime($data->created_at)) }}
                                            </li>
                                            <li><i class="fi fi-rr-clock-three"></i>15 Min Read</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="sidebar">
                    <div class="sidebar-widget">
                        <h3 class="sidebar-widget-title">Popular Tags</h3>
                        <ul class="tag-list list-style">
                            @foreach ($tags as $tag)
                                <li><a href="news-by-tags.html">{{ $tag->name }}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
