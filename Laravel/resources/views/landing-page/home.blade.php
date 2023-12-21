@extends('layouts.landing-page')

@section('content')
{{-- Banner --}}
<section class="banner-area banner-bg" data-background="{{ asset('dist/img/banner/bg.png') }}">
    <div class="container custom-container">
        <div class="row">
            <div class="col-xl-6 col-lg-8">
                <div class="banner-content">
                    <h6 class="sub-title wow fadeInUp" data-wow-delay=".2s" data-wow-duration="1.8s">TellTale</h6>
                    <h2 class="title wow fadeInUp" data-wow-delay=".4s" data-wow-duration="1.8s">Books
                        <span>Reviews, Recommendations</span>, Community and More.</h2>
                    <div class="banner-meta wow fadeInUp" data-wow-delay=".6s" data-wow-duration="1.8s">

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Books Recomendations --}}
<section class="ucm-area ucm-bg" data-background="{{ asset('dist/img/bg/ucm_bg.jpg') }}">
    <div class="ucm-bg-shape" data-background="{{ asset('dist/img/bg/ucm_bg_shape.png') }}"></div>
    <div class="container">
        <div class="row align-items-end mb-55">
            <div class="col-lg-6">
                <div class="section-title text-center text-lg-left">
                    <span class="sub-title">Our Collection</span>
                    <h2 class="title">Recommendation Books for You</h2>
                </div>
            </div>
        </div>
        <div class="tab-content" id="myTabContent">
            <div class="row tr-movie-active">
                @foreach ($predicts as $predict)
                <div class="col-xl-3 col-lg-4 col-sm-6 grid-item grid-sizer cat-two" style="min-height: 634px">
                    <div class="movie-item mb-50">
                        <div class="movie-poster">
                            <a href="{{ route('book.detail', $predict['ISBN']) }}">
                                <div>
                                    <img id="predict-book-image-{{ $loop->iteration }}" src="{{ $predict['Image-URL-L'] }}" alt="{{ $predict['Book-Title'] }}">
                                </div>
                            </a>
                        </div>
                        <div class="movie-content">
                            <div class="top">
                                <h5 class="title"><a href="{{ route('book.detail', $predict['ISBN']) }}">{{
                                        $predict['Book-Title'] }}</a></h5>
                            </div>
                            <div class="author mt-2 d-flex justify-content-between">
                                <h6 style="font-weight: 300; color: #e4d804;">{{ $predict['Book-Author'] }}</h6>
                                <h6 style="font-weight: 300;">{{ $predict['Year-Of-Publication'] }}</h6>
                            </div>
                            <div class="bottom">
                                <ul>
                                    <li>
                                        <span class="rating" style="font-size: 0.9rem">
                                            <i class="fas fa-star"></i> {{ $predict['rating'] == 0 ? '-' : round($predict['rating'], 2) }}
                                            • {{ $predict['count_rating'] }} Ratings
                                            </span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

{{-- Top Rated Movie --}}
<section class="top-rated-movie tr-movie-bg" data-background="{{ asset('dist/img/bg/tr_movies_bg.jpg') }}">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="section-title text-center mb-50">
                    <span class="sub-title">ONLINE STREAMING</span>
                    <h2 class="title">Top Rated Movies</h2>
                </div>
            </div>
        </div>
        <div class="row tr-movie-active">
            @foreach ($top_book as $book)
            <div class="col-xl-3 col-lg-4 col-sm-6 grid-item grid-sizer cat-two" style="min-height: 634px">
                <div class="movie-item mb-60">
                    <div class="movie-poster">
                        <a href="{{ route('book.detail', $book['ISBN']) }}"><img id="top-book-image-{{ $loop->iteration }}"
                                src="{{ $book['Image-URL-L'] }}" alt=""></a>
                    </div>
                    <div class="movie-content">
                        <div class="top">
                            <h5 class="title"><a href="{{ route('book.detail', $book['ISBN']) }}">{{ $book['Book-Title']
                                    }}</a></h5>
                        </div>
                        <div class="author mt-2 d-flex justify-content-between">
                            <h6 style="font-weight: 300; color: #e4d804;">{{ $book['Book-Author']}}</h6>
                            <h6 style="font-weight: 300">{{ $book['Year-Of-Publication'] }}</h6>
                        </div>
                        <div class="bottom">
                            <ul>
                                <li>
                                    <span class="rating" style="font-size: 0.9rem">
                                    <i class="fas fa-star"></i> {{ $book['rating'] == 0 ? '-' : round($book['rating'], 2) }}
                                    • {{ $book['count_rating'] }} Ratings
                                    </span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- Live --}}
<section class="live-area live-bg fix" data-background="{{ asset('dist/img/bg/live_bg.jpg') }}">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-5 col-lg-6">
                <div class="section-title title-style-two mb-25">
                    <span class="sub-title">TELLTALE COMMUNITY</span>
                    <h2 class="title">Let's Join TellTale Community</h2>
                </div>
                <div class="live-movie-content">
                    <p>Chances are your friends are discussing their favorite (and least favorite) books on TellTale</p>
                    <a href="{{ route('login') }}" class="btn popup-video mt-4" style="margin-left: -10px">Join Now</a>
                </div>
            </div>
            <div class="col-xl-7 col-lg-6">
                <div class="live-movie-img wow fadeInRight" data-wow-delay=".2s" data-wow-duration="1.8s">
                    <img src="{{ asset('dist/img/images/book-community.jpg') }}" alt="">
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('script')
var predictBooks = [
    "predict-book-image-1",
    "predict-book-image-2",
    "predict-book-image-3",
    "predict-book-image-4",
    "predict-book-image-5",
    "predict-book-image-6",
    "predict-book-image-7",
    "predict-book-image-8",
];

document.addEventListener('DOMContentLoaded', function() {
    setTimeout(function() {
        predictBooks.forEach(element => {
            height = document.getElementById(element).clientHeight;
            if(height < 10) {
                document.getElementById(element).src = "https://placehold.co/302x454?text=Book+Cover+\nMissing";
            }
            document.getElementById(element).style.height = '455px';
            document.getElementById(element).style.width = '302.5px';
        });
    }, 1500);
});

// ===========================================================

var topBooks = [
    "top-book-image-1",
    "top-book-image-2",
    "top-book-image-3",
    "top-book-image-4",
    "top-book-image-5",
    "top-book-image-6",
    "top-book-image-7",
    "top-book-image-8",
];

document.addEventListener('DOMContentLoaded', function() {
    setTimeout(function() {
        topBooks.forEach(element => {
            height = document.getElementById(element).clientHeight;
            if(height < 10) {
                document.getElementById(element).src = "https://placehold.co/302x454?text=Book+Cover+\nMissing";
            }
            document.getElementById(element).style.height = '455px';
            document.getElementById(element).style.width = '302.5px';
        });
    }, 1500);
});
@endsection