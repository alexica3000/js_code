@if(!empty($photos) && count($photos))
    @foreach($photos as $photo)
        <li class="gallery__item">
            <a class="gallery__link" data-fancybox="gallery" href="{{ asset('/upfiles/galleryItems') }}/{{ $photo->img ?? '' }}">
                <img src="{{ asset('/upfiles/galleryItems') }}/{{ $photo->img ?? '' }}" alt="">
                <span class="button gallery__btn">test</span>
            </a>
        </li>
    @endforeach
@endif
