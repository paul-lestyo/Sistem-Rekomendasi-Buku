@extends('layouts.landing-page')

@section('content')
    <!-- movie-details-area -->
<section class="movie-details-area" data-background="{{ asset('dist/img/bg/pencil-dark.jpg ') }}">
    <div class="container">
        <div class="row align-items-center position-relative">
            <div class="col-xl-3 col-lg-4 align-self-start">
                <div class="movie-details-img">
                    <img id="image-book-detail" src="{{ $book->get('Image-URL-L') }}" alt="{{ $book->get('Book-Title') }}">
                    {{-- <a href="https://www.youtube.com/watch?v=R2gbPxeNk2E" class="popup-video"><img src="{{ asset('dist/img/images/play_icon.png') }}" alt=""></a> --}}
                </div>
            </div>
            <div class="col-xl-8 col-lg-8">
                <div class="movie-details-content">
                    <h2>{{ $book->get('Book-Title') }}</h2>
                    <h5>{{ $book->get('Book-Author') }}</h5>
                    <div class="banner-meta">
                        <ul>
                            {{-- <li class="quality">
                                <span>Pg 18</span>
                                <span>hd</span>
                            </li> --}}
                            {{-- <li class="category">
                                <a href="#">Romance,</a>
                                <a href="#">Drama</a>
                            </li> --}}
                            <li class="release-time">
                                <span><i class="far fa-calendar-alt"></i> {{ $book->get('Year-Of-Publicati') }}</span>
                                <span><i class="far fa-building"></i> {{ $book->get('Publisher') }}</span>
                            </li>
                        </ul>
                        <h6>ISBN : {{ $book->get('ISBN') }}</h6>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consecetur adipiscing elseddo eiusmod tempor.There are many
                        variations of passages of lorem
                        Ipsum available, but the majority have suffered alteration in some injected humour.</p>
                    <div class="movie-details-prime">
                        <ul>
                            <li class="share"><a href="#"><i class="fas fa-star" style="font-size: 24px; color: #e4d804;"></i> Rating</a></li>
                            <li class="streaming">
                                <h3 style="letter-spacing: 2px">{{ $average == 0 ? '-' : round($average, 2) }} / 10</h3>
                            </li>
                            <li style="margin-top: 18px; margin-left: 10px;"> {{ $count }} Ratings</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Reviews Detail -->
{{-- <section class="episode-area episode-bg" data-background="{{ asset('dist/img/bg/episode_bg.jpg') }}">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="movie-episode-wrap">
                    <div class="episode-top-wrap">
                        <div class="section-title">
                            <span class="sub-title">Our Community</span>
                            <h2 class="title">Rating Community</h2>
                        </div>
                        <div class="total-views-count">
                            <p style="font-size: 28px">
                                <i style="color: #e4d804" class="fas fa-star"></i>
                                <span style="color: #e4d804;">{{ $average }}</span>
                                <span style="color: #fff">| {{ $count }} rating</span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-5">
                @for ($i = 10; $i > 5; $i--)
                @php
                    // $rating_count = $book->ratings->count();
                    // $per_rating_count = $book->ratings->where('rating',$i)->count();
                    // $rating_persentace = round($per_rating_count/$rating_count * 100, 2);
                    
                    $rating_count = 1;
                    $per_rating_count = 1;
                    $rating_persentace = 1;

                @endphp
                    <div class="d-flex flex-row mt-4">
                        <div style="flex-grow: 1; display: inline-block; min-width: 83.15px;">
                            <span>{{ $i }} stars</span>
                        </div>
                        <div class="mr-4" style="flex-grow: 12">
                            <div class="progress" style="height: 1.2rem; background-color: #aaa" role="progressbar" aria-label="Success example" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                <div class="progress-bar" style="width: {{ $rating_persentace }}%; background-color: #e4d804;"></div>
                            </div>
                        </div>
                        <div style="flex-grow: 2; display: inline-block; min-width: 140px;">
                            <span>{{ $per_rating_count }} ({{ $rating_persentace }}%)</span>
                        </div>
                    </div>
                @endfor
            </div>
            <div class="col-lg-5">
                @for ($i = 5; $i > 0; $i--)
                    @php
                    // $rating_count = $book->ratings->count();
                    // $per_rating_count = $book->ratings->where('rating',$i)->count();
                    // $rating_persentace = round($per_rating_count/$rating_count * 100, 2);

                    $rating_count = 1;
                    $per_rating_count = 1;
                    $rating_persentace = 1;
                @endphp
                <div class="d-flex flex-row mt-4">
                    <div style="flex-grow: 1; display: inline-block; min-width: 83.15px;">
                        <span>{{ $i }} stars</span>
                    </div>
                    <div class="mr-4" style="flex-grow: 12">
                        <div class="progress" style="height: 1.2rem; background-color: #aaa" role="progressbar" aria-label="Success example" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar" style="width: {{ $rating_persentace }}%; background-color: #e4d804;"></div>
                        </div>
                    </div>
                    <div style="flex-grow: 2; display: inline-block; min-width: 140px;">
                        <span>{{ $per_rating_count }} ({{ $rating_persentace }}%)</span>
                    </div>
                </div>
                @endfor
            </div>
        </div>
    </div>
</section> --}}

<!-- tv-series-area -->
<section class="tv-series-area tv-series-bg" data-background="{{ asset('dist/img/bg/tv_series_bg02.jpg') }}">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="section-title text-center mb-50">
                    <span class="sub-title">Our Collection</span>
                    <h2 class="title">Recommendation For You</h2>
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
<!-- tv-series-area-end -->
@endsection

@section('script')
    var imagebook = document.getElementById('image-book-detail');

    if(imagebook.clientHeight < 100) {
        imagebook.src = 'https://placehold.co/302x454?text=Book+Cover+\nMissing';
    }

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
@endsection