@extends('layouts.app')

@section('title', 'Soluções')

@section('content')
    <section class="hero-section text-white bg-black pt-215">
    </section>

    <section class="hero-section text-white bg-black">
        <div class="container-fluid py-5">
            <div class="row area-title-wrapper mt-5">
                <p class="text-muted area-title-label-2">Nossos Clientes</p>
            </div>
        </div>
        <div class="container d-flex align-items-center half-into-bottom-image">
            <div class="row w-100">
                <div class="col-lg-12 col-md-12 d-flex flex-column justify-content-center text-center">
                    <h1 class="fw-300 home-hero-text">Credibilidade<br>
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

    <section class="py-5 text-white" style="background: linear-gradient(90deg, #fd75fd, #8efff7);">
        <div class="container-fluid px-0 text-start">
            <div class="row">
                <div class="col-10 mx-auto">
                    <h3 class="fw-500 mb-0 text-black">Descubra como a Air transforma</h3>
                    <h3 class="fw-500 mb-5 text-black">conexões em impacto real.</h3>
                    <button data-bs-toggle="modal" data-bs-target="#contactModal" class="btn btn-light fw-semibold">
                        Fale com a gente
                    </button>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-black text-white">
        <div class="container pt-160">
            <div class="row">
                <h4 class="text-white fw-500">O que eles falam da Air:</h4>
            </div>
        </div>
        <div class="container-fluid pt-64">
            <div class="row">
                <div class="col-3 text-muted-b0 mt-660">
                    <h5 class="mb-0 fw-300">
                        <b> Plataforma </b>
                    </h5>
                    <h5 class="mb-0 fw-300">
                        <b> AirSearch </b>
                    </h5>

                    <h5 class='text-rainbow fw-600 mt-48'>“É uma ferramenta que permite uma hipersegmentação, facilitando o trabalho no dia a dia.”</h5>

                    <p class='text-muted'> Agência Bold </p>
                </div>

                <div class="col-3 text-muted-b0 mt-370">
                    <h5 class="mb-0 fw-300">
                        <b> Campanhas </b>
                    </h5>
                    <h5 class="mb-4 mt-0 fw-300">
                        <b> customizadas </b>
                    </h5>
                    {{-- <p class="text-muted fw-300 mt-2">Empresa</p> --}}
                    <img src="{{ asset('images/suit-man-video.png') }}" class="img-fluid">
                </div>

                <div class="col-3 text-muted-b0 mt-215">
                    <h5 class="mb-4 fw-300">
                        <b> Insights </b>
                    </h5>
                    {{-- <p class="text-muted fw-300 mt-2">Empresa</p> --}}
                    <img src="{{ asset('images/woman-video-1.png') }}" class="img-fluid">
                </div>

                <div class="col-3 text-muted-b0 mt-0">
                    <h5 class="mb-0 fw-300">
                        <b> Sou </b>
                    </h5>
                    <h5 class="mb-4 mt-0 fw-300">
                        <b> Creator </b>
                    </h5>
                    {{-- <p class="text-muted fw-300 mt-2">Empresa</p> --}}
                    <img src="{{ asset('images/woman-40s-video.png') }}" class="img-fluid">
                </div>
            </div>
        </div>
    </section>

    <section class="pb-7 pt-180 bg-black text-white">
        <div class="container ">
            <div class="row mb-5 ">
                <div class="col-12">
                    <h5 class="mb-0 fw-300">
                        Alguns de nossos clientes:
                    </h5>
                </div>
            </div>

            <!-- Texto Institucional -->
            <div class="row pb-5 pt-80 nossos-clientes align-items-center justify-content-center">
                <div class="col-3 col-lg-3 col-md-4 col-sm-12 col-xs-12">
                    <div class="d-flex align-items-center justify-content-center">
                        <img src="{{ asset('images/clientes/airb&b.png') }}" class="img-fluid">
                    </div>
                </div>
                <div class="col-3 col-lg-3 col-md-4 col-sm-12 col-xs-12">
                    <div class="d-flex align-items-center justify-content-center">
                        <img src="{{ asset('images/clientes/allianz.png') }}" class="img-fluid">
                    </div>
                </div>
                <div class="col-3 col-lg-3 col-md-4 col-sm-12 col-xs-12">
                    <div class="d-flex align-items-center justify-content-center">
                        <img src="{{ asset('images/clientes/c6bank.png') }}" class="img-fluid">
                    </div>
                </div>
                <div class="col-3 col-lg-3 col-md-4 col-sm-12 col-xs-12">
                    <div class="d-flex align-items-center justify-content-center">
                        <img src="{{ asset('images/clientes/catarina.png') }}" class="img-fluid">
                    </div>
                </div>
                <div class="col-3 col-lg-3 col-md-4 col-sm-12 col-xs-12">
                    <div class="d-flex align-items-center justify-content-center">
                        <img src="{{ asset('images/clientes/downy.png') }}" class="img-fluid">
                    </div>
                </div>

                <div class="col-3 col-lg-3 col-md-4 col-sm-12 col-xs-12">
                    <div class="d-flex align-items-center justify-content-center">
                        <img src="{{ asset('images/clientes/energizer.png') }}" class="img-fluid">
                    </div>
                </div>
                <div class="col-3 col-lg-3 col-md-4 col-sm-12 col-xs-12">
                    <div class="d-flex align-items-center justify-content-center">
                        <img src="{{ asset('images/clientes/epson.png') }}" class="img-fluid">
                    </div>
                </div>
                <div class="col-3 col-lg-3 col-md-4 col-sm-12 col-xs-12">
                    <div class="d-flex align-items-center justify-content-center">
                        <img src="{{ asset('images/clientes/estrela-bet.png') }}" class="img-fluid">
                    </div>
                </div>
                <div class="col-3 col-lg-3 col-md-4 col-sm-12 col-xs-12">
                    <div class="d-flex align-items-center justify-content-center">
                        <img src="{{ asset('images/clientes/fgv.png') }}" class="img-fluid">
                    </div>
                </div>
                <div class="col-3 col-lg-3 col-md-4 col-sm-12 col-xs-12">
                    <div class="d-flex align-items-center justify-content-center">
                        <img src="{{ asset('images/clientes/jbs.png') }}" class="img-fluid">
                    </div>
                </div>
                <div class="col-3 col-lg-3 col-md-4 col-sm-12 col-xs-12">
                    <div class="d-flex align-items-center justify-content-center">
                        <img src="{{ asset('images/clientes/p&g.png') }}" class="img-fluid">
                    </div>
                </div>
                <div class="col-3 col-lg-3 col-md-4 col-sm-12 col-xs-12">
                    <div class="d-flex align-items-center justify-content-center">
                        <img src="{{ asset('images/clientes/pilar.png') }}" class="img-fluid">
                    </div>
                </div>
                <div class="col-3 col-lg-3 col-md-4 col-sm-12 col-xs-12">
                    <div class="d-flex align-items-center justify-content-center">
                        <img src="{{ asset('images/clientes/polenghui.png') }}" class="img-fluid">
                    </div>
                </div>
                <div class="col-3 col-lg-3 col-md-4 col-sm-12 col-xs-12">
                    <div class="d-flex align-items-center justify-content-center">
                        <img src="{{ asset('images/clientes/puig.png') }}" class="img-fluid">
                    </div>
                </div>
                <div class="col-3 col-lg-3 col-md-4 col-sm-12 col-xs-12">
                    <div class="d-flex align-items-center justify-content-center">
                        <img src="{{ asset('images/clientes/rayovac.png') }}" class="img-fluid">
                    </div>
                </div>
                <div class="col-3 col-lg-3 col-md-4 col-sm-12 col-xs-12">
                    <div class="d-flex align-items-center justify-content-center">
                        <img src="{{ asset('images/clientes/sankhya.png') }}" class="img-fluid">
                    </div>
                </div>
                <div class="col-3 col-lg-3 col-md-4 col-sm-12 col-xs-12">
                    <div class="d-flex align-items-center justify-content-center">
                        <img src="{{ asset('images/clientes/somos-juntos.png') }}" class="img-fluid">
                    </div>
                </div>
                <div class="col-3 col-lg-3 col-md-4 col-sm-12 col-xs-12">
                    <div class="d-flex align-items-center justify-content-center">
                        <img src="{{ asset('images/clientes/swift.png') }}" class="img-fluid">
                    </div>
                </div>
                <div class="col-3 col-lg-3 col-md-4 col-sm-12 col-xs-12">
                    <div class="d-flex align-items-center justify-content-center">
                        <img src="{{ asset('images/clientes/telecine.png') }}" class="img-fluid">
                    </div>
                </div>
                <div class="col-3 col-lg-3 col-md-4 col-sm-12 col-xs-12">
                    <div class="d-flex align-items-center justify-content-center">
                        <img src="{{ asset('images/clientes/tiktok.png') }}" class="img-fluid">
                    </div>
                </div>
            </div>


        </div>
    </section>



@endsection


@section('footer-bg-theme', 'bg-white')
@section('footer-text-theme', 'text-black')
@section('footer-svg-fill', 'white')