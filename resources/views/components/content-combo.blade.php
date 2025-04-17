@php
    $isDark = $theme === 'dark';
    $textColor = $isDark ? 'text-white' : 'text-dark';
    $bgColor = $isDark ? 'bg-black' : 'bg-white';
@endphp

<section class="py-5 mt-5 {{ $bgColor }}">
    <div class="container">
        <div class="row align-items-center mb-5 mt-5">
            <div class="col-lg-12 col-md-12 d-flex flex-column justify-content-center text-center home-hero-wrapper">
                <h1 class="fw-300 home-hero-text {{ $textColor }}">{{ $title }}</h1>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row mb-5 d-flex flex-row align-items-start justify-content-start plataforma">
            <div class="col-12 col-md-6 pe-0">
                <img src="{{ asset($firstImage) }}" alt="First Image" class="img-fluid hero-logo">
            </div>

            <div class="col-12 col-md-6 mb-5 mb-md-0 fw-300 align-items-start">
                @if ($firstTextType === 'text')
                    @foreach ((array) $firstTextContent as $paragraph)
                        <p class="text-muted mb-4">{{ $paragraph }}</p>
                    @endforeach
                @elseif ($firstTextType === 'list')
                    <ul class="list-unstyled text-muted mb-0 d-flex flex-column align-items-start justify-content-start">
                        @foreach ($firstTextContent as $item)
                            <li class="fw-300 mb-2 text-muted li-paragraph">
                                <svg xmlns="http://www.w3.org/2000/svg" width="8" height="8" fill="currentColor"
                                     class="bi bi-dot" viewBox="0 0 16 16">
                                    <path d="M8 3a5 5 0 1 0 0 10 5 5 0 0 0 0-10z" />
                                </svg>
                                {!! $item !!}
                            </li>
                        @endforeach
                    </ul>
                @endif
            </div>
        </div>

        <div class="row align-items-center mb-5 plataforma column-reverse-mobile">
            <div class="col-12 col-md-6 mt-3 mb-5 mb-md-0 fw-300 align-items-start">
                @if ($secondTextType === 'text')
                    @foreach ((array) $secondTextContent as $paragraph)
                        <p class="text-muted mb-4">{{ $paragraph }}</p>
                    @endforeach
                @elseif ($secondTextType === 'list')
                    <ul class="list-unstyled text-muted mb-0 d-flex flex-column align-items-start justify-content-start">
                        @foreach ($secondTextContent as $item)
                            <li class="fw-300 mb-2 text-muted li-paragraph">
                                <svg xmlns="http://www.w3.org/2000/svg" width="8" height="8" fill="currentColor"
                                     class="bi bi-dot" viewBox="0 0 16 16">
                                    <path d="M8 3a5 5 0 1 0 0 10 5 5 0 0 0 0-10z" />
                                </svg>
                                {!! $item !!}
                            </li>
                        @endforeach
                    </ul>
                @endif
            </div>

            <div class="col-12 col-md-6 ps-0">
                <img src="{{ asset($secondImage) }}" alt="Second Image" class="img-fluid hero-logo">
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row align-items-center mb-5 mt-5 plataforma">
            <div class="col-12 mx-auto mt-3">
                @if (!empty($footerText))
                    <h3 class="fw-500 my-5 {{ $textColor }}">{{ $footerText }}</h3>
                @endif
                <div class="w-100 d-flex justify-content-center">
                    <a class="btn {{ $isDark ? 'btn-light text-dark' : 'btn-dark text-white' }} mt-5" href="{{ $buttonLink }}">
                        {{ $buttonLabel }}
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
