@extends('layouts.app')

@section('title', 'Soluções')

@section('content')
    <section class="hero-section text-white bg-black">
        <div class="container-fluid py-5">
            <div class="row area-title-wrapper mt-5">
                <p class="text-muted area-title-label-3">Cases</p>
            </div>
        </div>
        <div class="container d-flex align-items-center">
            <div class="row w-100">
                <div class="col-lg-12 col-md-12 d-flex flex-column justify-content-center text-start">
                    <h1 class="fw-300">Respire nossas histórias:</h1>
                </div>
            </div>
        </div>
        <div class="container mt-3">
            <div class="row my-5 ">
                <div class="col-12">
                    <h5 class="mb-0 fw-300">
                        Criação com Propósito e Resultados Reais.
                    </h5>
                </div>
            </div>
            <div class="row pb-5">
                <div class="col-10">
                    <p class="text-muted fw-300">
                        Descubra como a AIR transforma narrativas em conversas que emocionam e geram impacto real. Explore nossos cases e inspire-se para construir o futuro da sua marca, com histórias que conectam e transformam.
                    </p>
                </div>
            </div>
        </div>
    </section>

    {{-- <section class="text-black bg-white">
        <div class="container-fluid bg-black pt-90 ">
        </div>
        <div class="container ">
            <div class="row ">
                <div class="col-11 me-auto mt_-134">
                    <img src="{{ asset('images/cases/c6bank.png') }}" class="img-fluid hero-logo mb-3">
                    <a href="{{ route('cases-interna') }}" class="text-decoration-none  text-black">
                        <h3 class="mb-0 fw-500">
                            <b>Always On</b>
                        </h3>
                    </a>
                </div>
            </div>
        </div>
    </section> --}}

    {{-- <section class="text-black bg-white mt-166"> --}}
        {{-- <div class="container-fluid">
            <div class="row mb-5 ">
                <div class="col-7">
                    <a href="{{ route('cases-interna') }}" class="text-decoration-none">
                        <img src="{{ asset('images/cases/tiktok.png') }}" class="img-fluid hero-logo mb-3">
                    </a>
                </div>
                <div class="col-3 me-auto">
                    <a href="{{ route('cases-interna') }}" class="text-decoration-none  text-black">
                        <h3 class="mb-0 fw-500">
                            TikTok Promover
                        </h3>
                    </a>
                </div>
            </div>
        </div> --}}

        {{-- <div class="container-fluid">
            <div class="row mb-5 ">
                <div class="col-3 ms-auto">
                    <a href="{{ route('cases-interna') }}" class="text-decoration-none">
                        <h3 class="mb-0 fw-500 text-black">
                            TikTok Promover
                        </h3>
                    </a>
                </div>
                <div class="col-7">
                    <a href="{{ route('cases-interna') }}"> <img src="{{ asset('images/cases/airb&b.png') }}" class="img-fluid hero-logo mb-3"> </a>
                </div>
            </div>
        </div> --}}
    {{-- </section> --}}

    <section class="text-white bg-black pt-215">
        <div class="container">
            <div class="row">
                <div class="col-4 mt-32">
                    <a href="{{ route('cases-interna', ['case' => 'airbnb']) }}" class='external_cases_slot text-decoration-none'>
                        <img src="{{ asset('images/cases_externa/airbnb_bg.png') }}" class="img-fluid background">
                        <div class='overlay'>
                        </div>
                        <img src="{{ asset('images/cases_externa/airbnb_text.png') }}" class="img-fluid logo">
                    </a>
                </div>

                <div class="col-4 mt-32">
                    <a href="{{ route('cases-interna', ['case' => 'catarina']) }}" class='external_cases_slot text-decoration-none'>
                        <img src="{{ asset('images/cases_externa/catarina_bg.png') }}" class="img-fluid background">
                        <div class='overlay'></div>
                        <img src="{{ asset('images/cases_externa/catarina_text.png') }}" class="img-fluid logo catarina">
                    </a>
                </div>

                <div class="col-4 mt-32">
                    <a href="{{ route('cases-interna', ['case' => 'c6']) }}" class='external_cases_slot text-decoration-none'>
                        <img src="{{ asset('images/cases_externa/c6_bg.png') }}" class="img-fluid background">
                        <div class='overlay'>
                        </div>
                        <img src="{{ asset('images/cases_externa/c6_text.png') }}" class="img-fluid logo">
                    </a>
                </div>

                <div class="col-4 mt-32">
                    <a href="{{ route('cases-interna', ['case' => 'fgv']) }}" class='external_cases_slot text-decoration-none'>
                        <img src="{{ asset('images/cases_externa/fgv_bg.png') }}" class="img-fluid background">
                        <div class='overlay'>
                        </div>
                        <img src="{{ asset('images/cases_externa/fgv_text.png') }}" class="img-fluid logo">
                    </a>
                </div>

                <div class="col-4 mt-32">
                    <a href="{{ route('cases-interna', ['case' => 'swift']) }}" class='external_cases_slot text-decoration-none'>
                        <img src="{{ asset('images/cases_externa/swift_bg.png') }}" class="img-fluid background">
                        <div class='overlay'>
                        </div>
                        <img src="{{ asset('images/cases_externa/swift_text.png') }}" class="img-fluid logo">
                    </a>
                </div>

                <div class="col-4 mt-32">
                    <a href="{{ route('cases-interna', ['case' => 'tiktok']) }}" class='external_cases_slot text-decoration-none'>
                        <img src="{{ asset('images/cases_externa/tiktok_bg.png') }}" class="img-fluid background">
                        <div class='overlay'>
                        </div>
                        <img src="{{ asset('images/cases_externa/tiktok_text.png') }}" class="img-fluid logo">
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="text-white bg-black pt-90">
    </section>
@endsection


@section('footer-bg-theme', 'bg-black')
@section('footer-text-theme', 'text-white')
@section('footer-svg-fill', 'white')
