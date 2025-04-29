@extends('layouts.app')

@section('title', 'Cases')

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
            <div class="row mt-5 mb-2">
                <div class="col-12">
                    <h5 class="mb-0 fw-300 text-white">
                        Criação com Propósito e Resultados Reais.
                    </h5>
                </div>
            </div>
            <div class="row pb-5 pb-sm-0">
                <div class="col-10 w-sm-100">
                    <p class="text-muted-c3 fw-300">
                        Descubra como a AIR transforma narrativas em conversas que emocionam e geram impacto real. Explore nossos cases e inspire-se para construir o futuro da sua marca, com histórias que conectam e transformam.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="text-white bg-black pt-140">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-6 mt-32">
                    <a href="{{ route('cases-interna', ['case' => 'airbnb']) }}" class='external_cases_slot text-decoration-none'>
                        <img src="{{ asset('images/cases_externa/airbnb_bg.png') }}" class="img-fluid background">
                        <div class='overlay'>
                        </div>
                        <img src="{{ asset('images/cases_externa/airbnb_text.png') }}" class="img-fluid logo">
                    </a>
                </div>

                <div class="col-lg-4 col-md-6 col-6 mt-32">
                    <a href="{{ route('cases-interna', ['case' => 'catarina']) }}" class='external_cases_slot text-decoration-none'>
                        <img src="{{ asset('images/cases_externa/catarina_bg.png') }}" class="img-fluid background">
                        <div class='overlay'></div>
                        <img src="{{ asset('images/cases_externa/catarina_text.png') }}" class="img-fluid logo catarina">
                    </a>
                </div>

                <div class="col-lg-4 col-md-6 col-6 mt-32">
                    <a href="{{ route('cases-interna', ['case' => 'c6']) }}" class='external_cases_slot text-decoration-none'>
                        <img src="{{ asset('images/cases_externa/c6_bg.png') }}" class="img-fluid background">
                        <div class='overlay'>
                        </div>
                        <img src="{{ asset('images/cases_externa/c6_text.png') }}" class="img-fluid logo">
                    </a>
                </div>

                <div class="col-lg-4 col-md-6 col-6 mt-32">
                    <a href="{{ route('cases-interna', ['case' => 'fgv']) }}" class='external_cases_slot text-decoration-none'>
                        <img src="{{ asset('images/cases_externa/fgv_bg.png') }}" class="img-fluid background">
                        <div class='overlay'>
                        </div>
                        <img src="{{ asset('images/cases_externa/fgv_text.png') }}" class="img-fluid logo">
                    </a>
                </div>

                <div class="col-lg-4 col-md-6 col-6 mt-32">
                    <a href="{{ route('cases-interna', ['case' => 'swift']) }}" class='external_cases_slot text-decoration-none'>
                        <img src="{{ asset('images/cases_externa/swift_bg.png') }}" class="img-fluid background">
                        <div class='overlay'>
                        </div>
                        <img src="{{ asset('images/cases_externa/swift_text.png') }}" class="img-fluid logo">
                    </a>
                </div>

                <div class="col-lg-4 col-md-6 col-6 mt-32">
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
