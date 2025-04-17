@extends('layouts.app')

@section('title', 'Soluções')

@section('content')
    <section class="hero-section text-white bg-black pb-5">
        <div class="container-fluid py-5">
            <div class="row area-title-wrapper mt-5">
                <p class="text-muted area-title-label-3">Cases</p>
            </div>
        </div>
        <div class="container d-flex align-items-center">
            <div class="row w-100">
                <div class="col-lg-8 col-md-8 d-flex flex-column justify-content-center text-start mb-5">
                    <h3 class="fw-500">C6 BANK</h3>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row ">
                <div class="col-12">
                    <img src="{{ asset('images/cases/c6bank-1.png') }}" class="img-fluid hero-logo mb-3">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row ">
                <div class="col-12">
                    <h3 class="fw-500 pt-5 pb-2">Objetivo</h3>
                    <h5 class="fw-300 text-muted">Construir uma comunicação autêntica com diferentes públicos e converter o engajamento da audiência em novas contas.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="text-black bg-white mt-90">
        <div class="container">
            <div class="row mb-5 ">
                <div class="col-12 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <h5> Desafio </h5>
                    <p class='text-muted'> O C6 Bank buscava ampliar sua presença digital e gerar maior awareness para seus
                        produtos financeiros, destacando serviços como C6 Carbon Mastercard Black, C6 Empresas, C6 Invest,
                        C6 Conta Global e C6 Assistant. O objetivo era construir uma comunicação autêntica com diferentes
                        públicos e converter o engajamento da audiência em novas contas.</p>
                </div>
                <div class="col-12 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <h5> O que fizemos </h5>
                    <p class='text-muted'> A estratégia Always On ativou +18 influenciadores, de perfis variados – de
                        finanças a lifestyle –, para garantir um conteúdo diversificado e atrativo. Com a criação de +230
                        conteúdos em formatos variados (Reels, TikTok, Stories e YouTube), conseguimos explorar o
                        storytelling de forma autêntica e impactante.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="text-black bg-white mt-166">
        <div class="container">
            <!-- Métricas Inferiores -->
            <div class="row text-center gy-4">
                <div class="col-12 text-start">
                    <h3 class='fw-500'> Os resultados </h3>
                </div>
            </div>
        </div>
    </section>

    <section class="text-black bg-white mt-90">
        <div class="container-fluid">
            <div class="row">
                <div class="col-10 mx-auto">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-3">
                                <h2 class="metric-title">12,1M</h2>
                                <span class="fw-bold">Impressões totais</span>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-3">
                                <h2 class="metric-title">6,9M</h2>
                                <div>
                                    <span class="fw-bold">Contas alcançadas</span>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-3">
                                <h2 class="metric-title">425k</h2>
                                <div>
                                    <span class="fw-bold">Interações</span>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-3">
                                <h2 class="metric-title">6,1%</h2>
                                <div class="fw-bold">Engajamento efetivo</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <div class="container">
        <div class="row mb-5 mt-80">
            <div class="col-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 me-auto">
                <h5> Diferencial Airfluencers </h5>
                <p class='text-muted'> Além de impulsionar o awareness da marca, o engajamento dos influenciadores converteu-se diretamente em novas contas abertas, validando a estratégia da Airfluencers como um dos principais motores de aquisição digital do C6 Bank. </p>
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

    <section class="text-white bg-black mt-90 pt-5">
        <div class="container-fluid">
            <div class="row">
                <p class="text-muted-b0 fw-300">VER OUTROS</p>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row align-items-start">
                <div class="col-3 mt-32">
                    <a href="{{ route('cases-interna', ['case' => 'airbnb']) }}" class='external_cases_slot text-decoration-none'>
                        <img src="{{ asset('images/cases_externa/airbnb_bg.png') }}" class="img-fluid background">
                        <div class='overlay'></div>
                        <img src="{{ asset('images/cases_externa/airbnb_text.png') }}" class="img-fluid logo">
                    </a>
                </div>

                <div class="col-3 mt-32">
                    <a href="{{ route('cases-interna', ['case' => 'catarina']) }}" class='external_cases_slot text-decoration-none'>
                        <img src="{{ asset('images/cases_externa/catarina_bg.png') }}" class="img-fluid background">
                        <div class='overlay'></div>
                        <img src="{{ asset('images/cases_externa/catarina_text.png') }}" class="img-fluid logo catarina">
                    </a>
                </div>

                <div class="col-3 mt-32">
                    <a href="{{ route('cases-interna', ['case' => 'fgv']) }}" class='external_cases_slot text-decoration-none'>
                        <img src="{{ asset('images/cases_externa/fgv_bg.png') }}" class="img-fluid background">
                        <div class='overlay'></div>
                        <img src="{{ asset('images/cases_externa/fgv_text.png') }}" class="img-fluid logo">
                    </a>
                </div>
            </div>
        </div>
    </section>


@endsection


@section('footer-bg-theme', 'bg-black')
@section('footer-text-theme', 'text-white')
@section('footer-svg-fill', 'white')