@extends('layouts.app')

@section('title', 'Soluções')

@section('content')
    <section class="hero-section text-white bg-black pt-215">
    </section>

    <section class="hero-section text-white bg-black">
        <div class="container-fluid py-5">
            <div class="row area-title-wrapper mt-5 mt-sm-0">
                <p class="text-muted area-title-label-2" style="transform: translateY(-250%);">Nossos Clientes</p>
            </div>
        </div>
        <div class="container d-flex align-items-center half-into-bottom-image half-into-bottom-image-sm-none">
            <div class="row w-100">
                <div class="col-lg-12 col-md-12 d-flex flex-column justify-content-center text-center">
                    <h1 class="fw-300 home-hero-text text-sm-start">Credibilidade<br>
                    reconhecida por<br>
                    quem importa<br>
                    nossos Clientes!</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="hero-section text-white bg-black px-2 pb-5 pt-5">
        <img src="{{ asset('images/nossos-clientes.png') }}" class="img-fluid hero-logo mb-3">
    </section>

    <section class="py-5 text-white bg-black">
        <div class="container ">
            <div class="row mb-5 ">
                <div class="col-11 me-auto">
                    <h5 class="mb-0 fw-300">
                        Acreditamos que o sucesso é construído em conjunto. Nossos clientes são parceiros estratégicos, que confiam em nossa expertise para impulsionar suas campanhas de marketing de influência. Cada depoimento é uma prova dos resultados que entregamos e da confiança que construímos. Descubra como a AIR transforma conexões em impacto real.
                    </h5>
                </div>
            </div>
        </div>
    </section>

    <section class="py-3 text-white" style="background: linear-gradient(90deg, #fd75fd, #8efff7);">
        <div class="container px-0 py-0 px-sm-inherit text-start" style="margin-top: -8px !important;">
            <div class="row">
                <div class="col-12 mx-auto">
                    <h3 class="fw-500 mb-4 mt-0 text-black rainbow-strip-h3">Descubra como a Air transforma conexões em impacto real.</h3>
                    <button data-bs-toggle="modal" data-bs-target="#contactModal" class="btn btn-light fw-semibold">
                        Fale com a gente
                    </button>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-black text-white display-sm-none">
        <div class="container pt-160">
            <div class="row">
                <h4 class="text-white fw-500">O que eles falam da Air:</h4>
            </div>
        </div>
        <div class="container-fluid pt-64">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-12 text-muted-b0 mt-660 mt-mobile-64">
                    <h5 class="mb-0 fw-300">
                        <b> Plataforma </b>
                    </h5>
                    <h5 class="mb-0 fw-300">
                        <b> AirSearch </b>
                    </h5>

                    <h5 class='text-rainbow fw-600 mt-48 normal-spacing'>“É uma ferramenta que permite uma hipersegmentação, facilitando o trabalho no dia a dia.”</h5>

                    <p class='text-muted fw-300'> Agência Bold </p>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-12 text-muted-b0 mt-370 mt-mobile-64">
                    <h5 class="mb-0 fw-300">
                        <b> Campanhas </b>
                    </h5>
                    <h5 class="mb-4 mt-0 fw-300">
                        <b> customizadas </b>
                    </h5>
                    {{-- <p class="text-muted fw-300 mt-2">Empresa</p> --}}

                    <iframe
                    src="https://www.youtube.com/embed/6a7X4Otd-so?autoplay=0&mute=0&controls=0&modestbranding=1&rel=0&playsinline=1"
                    frameborder="0"
                    allow="autoplay; encrypted-media"
                    allowfullscreen
                    style="width: 442px; height: 785px; border: none;"
                    class="my-video"
                    >
                    </iframe>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-12 text-muted-b0 mt-215 mt-mobile-64">
                    <h5 class="mb-4 fw-300">
                        <b> Insights </b>
                    </h5>
                    {{-- <p class="text-muted fw-300 mt-2">Empresa</p> --}}
                    <iframe
                    src="https://www.youtube.com/embed/wy6PvWsoWQs?autoplay=0&mute=0&controls=0&modestbranding=1&rel=0&playsinline=1"
                    frameborder="0"
                    allow="autoplay; encrypted-media"
                    allowfullscreen
                    style="width: 442px; height: 785px; border: none;"
                    class="my-video"
                    >
                    </iframe>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-12 text-muted-b0 mt-0 mt-mobile-32">
                    <h5 class="mb-0 fw-300">
                        <b> Sou </b>
                    </h5>
                    <h5 class="mb-4 mt-0 fw-300">
                        <b> Creator </b>
                    </h5>
                    {{-- <p class="text-muted fw-300 mt-2">Empresa</p> --}}
                    <iframe
                    src="https://www.youtube.com/embed/BSbXyb0PEjk?autoplay=0&mute=0&controls=0&modestbranding=1&rel=0&playsinline=1"
                    frameborder="0"
                    allow="autoplay; encrypted-media"
                    allowfullscreen
                    style="width: 442px; height: 785px; border: none;"
                    class="my-video"
                    >
                    </iframe>
                </div>
            </div>
        </div>
    </section>

    <section class="pb-7 pt-180 bg-black text-white">
        <div class="container ">
            <div class="row mb-5">
                <div class="col-12">
                    <h5 class="mb-0 fw-300">
                        Alguns de nossos clientes:
                    </h5>
                </div>
            </div>

            <!-- Texto Institucional -->
            <div class="row pb-5 pt-80 nossos-clientes pt-sm-0 align-items-start justify-content-start">
                <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                    <div class="d-flex align-items-center justify-content-center">
                        <img src="{{ asset('images/clientes2/airb&b.png') }}" class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                    <div class="d-flex align-items-center justify-content-center">
                        <img src="{{ asset('images/clientes2/allianz.png') }}" class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                    <div class="d-flex align-items-center justify-content-center">
                        <img src="{{ asset('images/clientes2/c6bank.png') }}" class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                    <div class="d-flex align-items-center justify-content-center">
                        <img src="{{ asset('images/clientes2/catarina.png') }}" class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                    <div class="d-flex align-items-center justify-content-center">
                        <img src="{{ asset('images/clientes2/downy.png') }}" class="img-fluid">
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                    <div class="d-flex align-items-center justify-content-center">
                        <img src="{{ asset('images/clientes2/energizer.png') }}" class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                    <div class="d-flex align-items-center justify-content-center">
                        <img src="{{ asset('images/clientes2/epson.png') }}" class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                    <div class="d-flex align-items-center justify-content-center">
                        <img src="{{ asset('images/clientes2/estrela-bet.png') }}" class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                    <div class="d-flex align-items-center justify-content-center">
                        <img src="{{ asset('images/clientes2/fgv.png') }}" class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                    <div class="d-flex align-items-center justify-content-center">
                        <img src="{{ asset('images/clientes2/jbs.png') }}" class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                    <div class="d-flex align-items-center justify-content-center">
                        <img src="{{ asset('images/clientes2/somos-juntos.png') }}" class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                    <div class="d-flex align-items-center justify-content-center">
                        <img src="{{ asset('images/clientes2/p&g.png') }}" class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                    <div class="d-flex align-items-center justify-content-center">
                        <img src="{{ asset('images/clientes2/pilar.png') }}" class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                    <div class="d-flex align-items-center justify-content-center">
                        <img src="{{ asset('images/clientes2/polenghi.png') }}" class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                    <div class="d-flex align-items-center justify-content-center">
                        <img src="{{ asset('images/clientes2/puig.png') }}" class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                    <div class="d-flex align-items-center justify-content-center">
                        <img src="{{ asset('images/clientes2/rayovac.png') }}" class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                    <div class="d-flex align-items-center justify-content-center">
                        <img src="{{ asset('images/clientes2/sankhya.png') }}" class="img-fluid">
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                    <div class="d-flex align-items-center justify-content-center">
                        <img src="{{ asset('images/clientes2/swift.png') }}" class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                    <div class="d-flex align-items-center justify-content-center">
                        <img src="{{ asset('images/clientes2/tiktok.png') }}" class="img-fluid">
                    </div>
                </div>
            </div>


        </div>
    </section>



@endsection


@section('footer-bg-theme', 'bg-white')
@section('footer-text-theme', 'text-black')
@section('footer-svg-fill', 'white')
