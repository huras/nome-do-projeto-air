@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <section class="hero-section text-white bg-black pt-5">
        <div class="container">
            <div class="row w-100">
                <div
                    class="col-lg-5 col-md-12 d-flex flex-column justify-content-center text-center home-hero-wrapper mx-auto">
                    <h1 class="fw-light home-hero-text text-sm-start">Nós</h1>
                    <h1 class="fw-light home-hero-text-secondary text-sm-start">somos a</h1>
                </div>
                <div class="col-lg-7 col-md-12 px-0 d-flex justify-content-center align-items-center home-hero-wrapper">
                    <img src="{{ asset('images/air_animado_home.gif') }}" alt="Air Logo Stroke" class="img-fluid hero-logo">
                </div>
            </div>
        </div>

        <section class="text-white bg-black d-flex justify-content-center align-items-center flex-column">
            <p class='fs-16 fw-300'>Respire</p>
            <svg width="25" height="13" viewBox="0 0 25 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M23.2647 0.291459L12.4989 10.6523L1.73306 0.291459C1.54071 0.105971 1.2825 0.00212646 1.01361 0.00212646C0.744732 0.00212646 0.486518 0.105971 0.294168 0.291459C0.201033 0.381551 0.127042 0.489085 0.0765298 0.607763C0.0260178 0.726441 0 0.853878 0 0.982608C0 1.11134 0.0260178 1.23877 0.0765298 1.35745C0.127042 1.47613 0.201033 1.58366 0.294168 1.67376L11.7471 12.6981C11.9483 12.8917 12.218 13 12.4989 13C12.7798 13 13.0495 12.8917 13.2507 12.6981L24.7036 1.67588C24.7974 1.58572 24.872 1.47793 24.9229 1.35885C24.9738 1.23978 25 1.11185 25 0.982608C25 0.853365 24.9738 0.725432 24.9229 0.60636C24.872 0.487289 24.7974 0.379491 24.7036 0.289331C24.5113 0.103843 24.2531 0 23.9842 0C23.7153 0 23.4571 0.103843 23.2647 0.289331V0.291459Z" fill="white"/>
            </svg>
        </section>
    </section>

    <section class=" text-white bg-black mt-56">
        <div class="container">
            <div class="row w-100">
                <div class="d-flex flex-column justify-content-center text-start half-below-text">
                    <h1 class="fw-300 my-0 py-0">Respiramos</h1>
                    <h1 class="fw-300 my-0 py-0">influência.</h1>
                </div>
            </div>
        </div>
        <div class="container-fluid px-0 ">

            <div class="row w-100">
                <img src="{{ asset('images/bumba.png') }}" alt="Air Logo Stroke" class="img-fluid w-100 hero-imgs-1">
            </div>
            {{-- <img src="{{ asset('images/home_bg_2.png') }}" alt="Air Logo Stroke" class="img-fluid pe-4 w-100 hero-imgs-2"> --}}

        </div>
    </section>

    <section class="hero-section text-white bg-black py-5">
        <div class="container">
            <div class="row text-center gy-4 home-hero-metrics align-items-start">
                <div class="col d-flex flex-column align-items-center justify-content-start">
                    <img src="{{ asset('images/tiktok_marketing_partners.png') }}" alt="Air Logo Stroke" class="img-fluid mt-5">
                    <span class="metric-sub">Somos um dos principais parceiros de negócios da plataforma, provando que <span class="fw-800 text-white">criatividade não tem limites anos de mercado</span> </span>
                </div>
                <div class="col d-flex flex-column align-items-center justify-content-center">
                    <div class="metric-title">15</div>
                    <span class="fw-bold">anos de mercado</span>
                    <span class="metric-sub">Pioneira em<br>Marketing de Influência</span>
                </div>
                <div class="col d-flex flex-column align-items-center justify-content-center">
                    <div class="metric-title">+1000</div>
                    <div>
                        <span class="fw-bold">campanhas</span>
                        <span class="metric-sub">transformadas<br>em conversas personalizadas</span>
                    </div>
                </div>
                <div class="col d-flex flex-column align-items-center justify-content-center">
                    <div class="metric-title">+50</div>
                    <div>
                        <span class="fw-bold">marcas</span>
                        <span class="metric-sub">atendidas<br>simultaneamente</span>
                    </div>
                </div>
                <div class="col d-flex flex-column align-items-center justify-content-center">
                    <div class="metric-title">80%</div>
                    <div class="fw-bold">taxa de retenção</div>
                    <div class="metric-sub">de clientes</div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5 text-black bg-white">
        <div class="container ">
            <!-- Texto Institucional -->
            <div class="row">
                <div class="col-12 col-md-12 col-sm-12 mx-auto my-5">
                    <h5 class="fw-300 text-justify mb-0 px-sm-5">
                        Nascemos para transformar a relação entre pessoas e marcas.
                        <br>
                        Unimos empatia, criatividade e tecnologia para transformar diálogos em campanhas memoráveis; campanhas que geram conversas e impacto de verdade.
                    </h5>
                </div>
            </div>
    </section>

    <section class="text-black bg-white">
        <div class="container-fluid pb-5">
            <!-- Três Colunas -->
            <div class="row g-4 pb-5">
                <!-- Coluna 1 -->
                <div class="col-12 col-lg-4 col-md-6 col-sm-12 px-4">
                    <h5 class="fw-600">A gente cria. Ouve. <br> Estuda. Analisa. <br> Mede. Conecta.</h5>
                    <p class="text-muted-59 mt-3 fw-300 mt-sm-8">
                        Fazemos com que marcas se conectem diretamente aos seus consumidores, trazendo para essa conversa, os criadores que mais transformam em conversão para as marcas.
                    </p>
                </div>

                <!-- Coluna 2 -->
                <div class="col-12 col-lg-4 col-md-6 col-sm-12 px-4">
                    <h5 class="fw-600">Aqui na AIR a gente acredita que criar impacto não é sorte: <br>é método.</h5>
                    <p class="text-muted-59 mt-3 fw-300 mt-sm-8">
                        A gente combina inteligência com criatividade. O resultado: Impacto garantido!
                    </p>
                </div>

                <!-- Coluna 3 -->
                <div class="col-12 col-lg-4 col-md-6 col-sm-12 px-4 mx-auto">
                    <h5 class="fw-600">Somos pioneiros. <br>Somos inquietos.</h5>
                    <p class="text-muted-59 mt-5 mt-sm-8 fw-300">
                        E para a gente, trazer os melhores resultados para nossas marcas, é tudo. Tudo mesmo.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="pb-5 pt-122 bg-black text-white">
        <div class="container pb-5 px-sm-5 pb-sm-0">
            <h3> Nossas soluções </h3>
            <p class="text-muted mt-3">
                Reunimos especialistas para oferecer  criatividade disruptiva. Entregando integração com especialização profunda. É assim que nós fazemos.
            </p>
        </div>
        <div class="container-fluid mb-5 pt-80 px-4">
            <!-- Bloco de introdução + comparação -->
            <div class="row">

                <!-- Comparação Direita -->
                <div class="col-12 col-lg-4 col-md-6 col-sm-12  mb-4">
                    <div class="d-flex flex-column justify-content-start align-items-start">
                        <h3 class='text-rainbow h2-sm'>Plataforma</h3>
                        <h3 class='text-rainbow h2-sm'>AirSearch</h3>
                        <div class="d-flex justify-content-start align-items-end mt-3">
                            <div class='text-white fw-300 me-2' style="line-height: 1;">BY</div>
                            <div>
                                <img src="{{ asset('images/air.png') }}" alt="Air" class="img-fluid" style="width: 51px">
                            </div>
                        </div>

                        <div class='my-5'>
                            <h5 class='fw-300 text-white'>Tecnologia</h5>
                            <p class='text-muted-b0b0b0 my-0'>Desbloqueie a influência que gera impacto e</p>
                            <p class='text-muted-b0b0b0 my-0'>conecte-se já!</p>
                        </div>

                        <div class='mb-5 mt-4'>
                            <button type="button" class="btn btn-light">
                                <span class="fw-600">Assine já!</span>
                            </button>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-lg-4 col-md-6 col-sm-12  mb-4">
                    <div class="d-flex flex-column justify-content-start align-items-start">
                        <h3 class='text-rainbow h2-sm'>Campanhas Customizadas</h3>
                        <div class="d-flex justify-content-start align-items-end mt-3">
                            <div class='text-white fw-300 me-2' style="line-height: 1;">BY</div>
                            <div>
                                <img src="{{ asset('images/air.png') }}" alt="Air" class="img-fluid" style="width: 51px">
                            </div>
                        </div>

                        <div class='my-5'>
                            <h5 class='fw-300 text-white'>Agência</h5>
                            <p class='text-muted-b0b0b0 my-0'>Lance sua campanha agora e veja seus</p>
                            <p class='text-muted-b0b0b0 my-0'>resultados imediatos! Gerenciamento completo</p>
                            <p class='text-muted-b0b0b0 my-0'>para você focar só no sucesso!</p>
                        </div>

                        <div class='mb-5'>
                            <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#contactModal">
                                <span class="fw-600">Fale com a gente</span>
                            </button>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-lg-4 col-md-6 col-sm-12  mb-4">
                    <div class="d-flex flex-column justify-content-start align-items-start">
                        <h3 class='text-rainbow h2-sm'>Insights</h3>
                        <div class="d-flex justify-content-start align-items-end mt-3">
                            <div class='text-white fw-300 me-2' style="line-height: 1;">BY</div>
                            <div>
                                <img src="{{ asset('images/air.png') }}" alt="Air" class="img-fluid" style="width: 51px">
                            </div>
                        </div>

                        <div class='mb-2' style="margin-top: 32px">
                            <h5 class='fw-300 text-white'>Insights</h5>
                            <p class='text-muted-b0b0b0 my-0'>Deciframos oportunidades, analisamos a saúde</p>
                            <p class='text-muted-b0b0b0 my-0'>da sua marca, qualificamos sua fun base.</p>
                        </div>

                        <div class='my-2' style="margin-top: 107px !important;">
                            <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#contactModal">
                                <span class="fw-600">Fale com a gente</span>
                            </button>
                        </div>
                    </div>
                </div>


                <!-- Comparação Direita -->
                <div class="col-12 col-lg-4 col-md-6 col-sm-12  mb-4">
                    <div class="d-flex flex-column justify-content-start align-items-start">
                        <h3 class='text-rainbow h2-sm'>IA Aira</h3>
                        <div class="d-flex justify-content-start align-items-end mt-3">
                            <div class='text-white fw-300 me-2' style="line-height: 1;">BY</div>
                            <div>
                                <img src="{{ asset('images/air.png') }}" alt="Air" class="img-fluid" style="width: 51px">
                            </div>
                        </div>

                        <div class='mb-5' style="margin-top: 60px">
                            <h5 class='fw-300 text-white'>Inteligência Artificial</h5>
                            <p class='text-muted-b0b0b0 my-0'>Aira: Sua IA exclusiva para curadoria</p>
                            <p class='text-muted-b0b0b0 my-0'>inteligente e eficiente de influenciadores.</p>
                        </div>

                        <div class='mb-5' style="margin-top: 45px">
                            <a href="/solucoes#ai" type="button" class="btn btn-light">
                                <span class="fw-600">Descubra o poder da IA</span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-lg-4 col-md-6 col-sm-12  mb-4">
                    <div class="d-flex flex-column justify-content-start align-items-start">
                        <h3 class='text-rainbow h2-sm'>Sou <br>Creator</h3>
                        <div class="d-flex justify-content-start align-items-end mt-3">
                            <div class='text-white fw-300 me-2' style="line-height: 1;">BY</div>
                            <div>
                                <img src="{{ asset('images/air.png') }}" alt="Air" class="img-fluid" style="width: 51px">
                            </div>
                        </div>

                        <div class='my-5'>
                            <h5 class='fw-300 text-white'>Redes Sociais</h5>
                            <p class='text-muted-b0b0b0 my-0'>Conecte suas redes sociais e descubra o poder da sua influência. Sua voz merece ser ouvida pelas marcas! </p>
                        </div>

                        <div class='my-2'>
                            <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#contactModal">
                                <span class="fw-600">Fale com a gente</span>
                            </button>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-4  mb-5">
                </div>

            </div>
        </div>
    </section>

    {{-- Raindom Block Text --}}
    <x-rainbow-block-text
        title="Quer se conectar com a gente?"
        button-text="Entre em contato"
        button-link="{{ route('contato') }}"
    />

@endsection
