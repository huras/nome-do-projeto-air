@extends('layouts.app')

@section('title', 'Cases - '.View::yieldContent('brand_title'))

@section('content')
    <section class="hero-section text-white bg-black pb-5">
        <div class="container-fluid pt-0 pb-5">
            <div class="row area-title-wrapper mt-3">
                <p class="text-muted area-title-label-3">Cases</p>
            </div>
        </div>
        <div class="container d-flex align-items-center">
            <div class="row w-100">
                <div class="col-lg-8 col-md-8 d-flex flex-column justify-content-center text-start mb-5">
                    <h3 class="fw-500"> @yield('brand_title') </h3>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row ">
                <div class="col-12">
                    <img src="{{ asset(View::yieldContent('brand_image')) }}" class="img-fluid hero-logo mb-3">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row ">
                <div class="col-12">
                    <h3 class="fw-500 pt-5 pb-2">Objetivo</h3>
                    <h5 class="fw-300 text-muted">@yield('objetivo')</h5>
                </div>
            </div>
        </div>
    </section>

    <section class="text-black bg-white pt-90">
        <div class="container">
            <div class="row ">
                <div class="col-12 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <h5> Desafio </h5>
                    <p class='text-muted mt-3'> @yield('desafio')</p>
                </div>
                <div class="col-12 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <h5> O que fizemos </h5>
                    <p class='text-muted mt-3'> @yield('o_que_fizemos')</p>
                </div>
            </div>
        </div>
    </section>

    <section class="text-black bg-white pt-5 pb-4">
        <div class="container">
            <!-- Métricas Inferiores -->
            <div class="row text-center gy-4">
                <div class="col-12 text-start">
                    <h3 class='fw-500'> Os resultados </h3>
                </div>
            </div>
        </div>
    </section>

    <section class="text-black bg-white pt-9 pb-5">
        <div class="container-fluid">
            <div class="row">
                <div class="col-10 mx-auto">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-3 py-sm-20px">
                                <h2 class="metric-title text-center w-100 fs-sm-96">@yield('total_impressions')</h2>
                                <div class="fw-bold text-center w-100 pt-sm-8px">@yield('total_impressions_title')</div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-3 py-sm-20px">
                                <h2 class="metric-title text-center w-100 fs-sm-96">@yield('accounts_reached')</h2>
                                <div class="fw-bold text-center w-100 pt-sm-8px">@yield('accounts_reached_title')</div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-3 py-sm-20px">
                                <h2 class="metric-title text-center w-100 fs-sm-96">@yield('interactions')</h2>
                                <div class="fw-bold text-center w-100 pt-sm-8px">@yield('interactions_title')</div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-3 py-sm-20px">
                                <h2 class="metric-title text-center w-100 fs-sm-96">@yield('effective_engagement')</h2>
                                <div class="fw-bold text-center w-100 pt-sm-8px px-3">@yield('effective_engagement_title')</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <div class="container display-sm-none">
        <div class="row mb-5 mt-80">
            <div class="col-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 me-auto">
                <h5 class='pb-4'> Diferencial Airfluencers </h5>
                <p class='text-muted'> @yield('differencial_influencers') </p>
            </div>
        </div>
    </section>

    {{-- <section class="text-black bg-white mt-90">
        <div class="container">
            <div class="row ">
                <div class="col-12 my-5"><h3> Veja os vídeos da campanha </h3></div>
                <div class="col-12">
                    <img src="{{ asset('images/wide-video-placeholder.png') }}" class="img-fluid hero-logo mb-3">
                </div>
            </div>
        </div>
    </section> --}}

    <section class="text-white bg-black mt-90 pt-5 pb-160 mt-sm-0 pb-sm-0">
        <div class="container-fluid">
            <div class="row">
                <p class="text-muted-b0 fw-300">Ver outros</p>
            </div>
        </div>
        <?php
            $curent_case = View::yieldContent('curent_case');
            $all_cases = [
                ['case' => 'airbnb',   'bg' => 'airbnb_bg.png',   'text' => 'airbnb_text.png'],
                ['case' => 'catarina', 'bg' => 'catarina_bg.png', 'text' => 'catarina_text.png'],
                ['case' => 'c6',       'bg' => 'c6_bg.png',       'text' => 'c6_text.png'],
                ['case' => 'fgv',      'bg' => 'fgv_bg.png',      'text' => 'fgv_text.png'],
                ['case' => 'swift',    'bg' => 'swift_bg.png',    'text' => 'swift_text.png'],
                ['case' => 'tiktok',   'bg' => 'tiktok_bg.png',   'text' => 'tiktok_text.png'],
            ];
            //pick 3 random except the current case
            $cases = [];
            $cases_count = 0;
            shuffle($all_cases);
            foreach ($all_cases as $case) {
                if ($case['case'] != $curent_case) {
                    $cases[] = $case;
                    $cases_count++;
                }
                if ($cases_count == 4) {
                    break;
                }
            }
        ?>
        <div class="container-fluid">
            <div class="row align-items-start">
                @foreach ($cases as $case)
                    <div class="col-lg-3 col-md-6 col-6 mt-32">
                        <a href="{{ route('cases-interna', ['case' => $case['case']]) }}" class='external_cases_slot text-decoration-none'>
                            <img src="{{ asset('images/cases_externa/' . $case['bg']) }}" class="img-fluid background">
                            <div class='overlay'></div>
                            <img src="{{ asset('images/cases_externa/' . $case['text']) }}" class="img-fluid logo">
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>


@endsection


@section('footer-bg-theme', 'bg-black')
@section('footer-text-theme', 'text-white')
@section('footer-svg-fill', 'white')
