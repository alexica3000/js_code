@extends('front.front-app')

@section('container')

    <main class="">
        <section class="projects container section">
            @if(!empty($photos))
                <ul class="gallery gallery--layout-2 wow fadeIn renderWorksList" data-wow-duration="1s" data-wow-delay="0.5s">
                    @foreach($photos as $photo)
                        <li class="gallery__item">
                            <a class="gallery__link" data-fancybox="gallery" href="{{ asset('/upfiles/galleryItems') }}/{{ $photo->img ?? '' }}">
                                <img src="{{ asset('/upfiles/galleryItems') }}/{{ $photo->img ?? '' }}" alt="">
                                <span class="button gallery__btn">test</span>
                            </a>
                        </li>
                    @endforeach
                </ul>
            @endif

            @if($photos && $photos->lastPage() > 1)
                <a class="button projects__btn show_more_works" href="" data-page="2"
                   data-typeproject="{{ request()->segment(3) == '' ? '0' : request()->segment(3) }}"
                >Show More</a>
            @endif

        </section>
    </main>

@stop
