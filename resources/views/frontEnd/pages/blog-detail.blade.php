@extends('frontEnd.layouts.default')

@section('content')
    <div class="breadcrumb-wrap">
        <div class="container">
            <h2 class="breadcrumb-title">{{ $blog->blogCategory->name }} Article Details</h2>
        </div>
    </div>
    <div class="news-details-wrap ptb-100">
        <div class="container">
            <div class="row gx-55 gx-5">
                <div class="col-lg-8">
                    <article>
                        <div class="news-img">
                            <img src="{{ asset('storage/temp/' . $blog->image) }}" alt="Image">
                            <a href="business.html" class="news-cat">{{ $blog->blogCategory->name }}</a>
                        </div>
                        <ul class="news-metainfo list-style">
                            <li class="author">
                                <span class="author-img">
                                    <img src="{{ asset('assets/frontEnd/img/author/author-thumb-1.webp') }}" alt="Image">
                                </span>
                                <a href="author.html">{{ $blog->user->name }}</a>
                            </li>
                            <li><i class="fi fi-rr-calendar-minus"></i>{{ date('M d, Y', strtotime($blog->created_at)) }}
                            </li>
                            <li><i class="fi fi-rr-clock-three"></i>15 Min Read</li>
                        </ul>
                        <div class="news-para">
                            <h1>{{ $blog->title }}</h1>
                        </div>
                        {!! html_entity_decode($blog->description) !!}
                    </article>
                    <hr>
                    <h3 class="comment-box-title">3 Comments</h3>
                    <div class="comment-item-wrap">
                        <div class="comment-item">
                            <div class="comment-author-img">
                                <img src="assets/img/author/author-thumb-1.webp" alt="Image">
                            </div>
                            <div class="comment-author-wrap">
                                <div class="comment-author-info">
                                    <div class="row align-items-start">
                                        <div class="col-md-9 col-sm-12 col-12 order-md-1 order-sm-1 order-1">
                                            <div class="comment-author-name">
                                                <h5>Killian Mider</h5>
                                                <span class="comment-date">Jul 22, 2024 | 7:10 PM</span>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-sm-12 col-12 text-md-end order-md-2 order-sm-3 order-3">
                                            <a href="#cmt-form" class="reply-btn">Reply</a>
                                        </div>
                                        <div class="col-md-12 col-sm-12 col-12 order-md-3 order-sm-2 order-2">
                                            <div class="comment-text">
                                                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr,
                                                    sed diam nonumy eirmod tempor invidunt ut labore et dolore
                                                    magna aliquyam.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="comment-item reply">
                            <div class="comment-author-img">
                                <img src="assets/img/author/author-thumb-2.webp" alt="Image">
                            </div>
                            <div class="comment-author-wrap">
                                <div class="comment-author-info">
                                    <div class="row align-items-start">
                                        <div class="col-md-9 col-sm-12 col-12 order-md-1 order-sm-1 order-1">
                                            <div class="comment-author-name">
                                                <h5>Everly Leah </h5>
                                                <span class="comment-date">Jul 23, 2024 | 7:10 PM</span>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-sm-12 col-12 text-md-end order-md-2 order-sm-3 order-3">
                                            <a href="#cmt-form" class="reply-btn">Reply</a>
                                        </div>
                                        <div class="col-md-12 col-sm-12 col-12 order-md-3 order-sm-2 order-2">
                                            <div class="comment-text">
                                                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr,
                                                    sed diam nonumy eirmod tempor invidunt ut labore et dolore
                                                    magna aliquyam erat.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="comment-item">
                            <div class="comment-author-img">
                                <img src="assets/img/author/author-thumb-3.webp" alt="Image">
                            </div>
                            <div class="comment-author-wrap">
                                <div class="comment-author-info">
                                    <div class="row align-items-start">
                                        <div class="col-md-9 col-sm-12 col-12 order-md-1 order-sm-1 order-1">
                                            <div class="comment-author-name">
                                                <h5>Michel Ohio</h5>
                                                <span class="comment-date">Jun 14, 2024 | 7:10 PM</span>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-sm-12 col-12 text-md-end order-md-2 order-sm-3 order-3">
                                            <a href="#cmt-form" class="reply-btn">Reply</a>
                                        </div>
                                        <div class="col-md-12 col-sm-12 col-12 order-md-3 order-sm-2 order-2">
                                            <div class="comment-text">
                                                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr,
                                                    sed diam nonumy eirmod tempor invidunt ut labore et dolore
                                                    magna aliquyam.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="cmt-form">
                        <div class="mb-30">
                            <h3 class="comment-box-title">Leave A Comment</h3>
                            <p>Your email address will not be published. Required fields are marked.</p>
                        </div>
                        <form action="#" class="comment-form">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="name" id="name" required=""
                                            placeholder="Name*">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="email" name="email" id="email" required=""
                                            placeholder="Email Address*">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <textarea name="messages" id="messages" cols="30" rows="10" placeholder="Please Enter Your Comment Here"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-check checkbox">
                                        <input class="form-check-input" type="checkbox" id="test_2">
                                        <label class="form-check-label" for="test_2">
                                            Save my info for the next time I commnet.
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-12 mt-3">
                                    <button class="btn-two">Post A Comment<i class="flaticon-right-arrow"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="sidebar">
                        <div class="sidebar-widget">
                            <h3 class="sidebar-widget-title">Popular Tags</h3>
                            <ul class="tag-list list-style">
                                <li><a href="news-by-tags.html">BUSINESS</a></li>
                                <li><a href="news-by-tags.html">FOOD</a></li>
                                <li><a href="news-by-tags.html">SCIENCE</a></li>
                                <li><a href="news-by-tags.html">LIFESTYLE</a></li>
                                <li><a href="news-by-tags.html">SPORTS</a></li>
                                <li><a href="news-by-tags.html">PHOTO</a></li>
                                <li><a href="news-by-tags.html">TECHNOLOGY</a></li>
                                <li><a href="news-by-tags.html">CONTENT</a></li>
                                <li><a href="news-by-tags.html">FEATURED</a></li>
                                <li><a href="news-by-tags.html">AUDIO</a></li>
                                <li><a href="news-by-tags.html">FASHION</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
