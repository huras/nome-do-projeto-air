@extends('layouts.app')

@section('title', 'Soluções')

@section('content')
    <section class="hero-section text-black bg-white">
        <div class="container-fluid pt-105">
            <div class="row area-title-wrapper mt-5">
                <p class="text-muted area-title-label">Soluções</p>
            </div>
        </div>
        <div class="container d-flex align-items-center">
            <div class="row ">
                <div class="col-lg-12 col-md-12 d-flex flex-column justify-content-center text-center home-hero-wrapper">
                    <h1 class="fw-300 home-hero-text text-sm-start">Marketing de</h1>
                    <h1 class="fw-300 home-hero-text text-sm-start">influência com</h1>
                    <h1 class="fw-300 home-hero-text text-sm-start">alma e</h1>
                    <h1 class="fw-300 home-hero-text text-sm-start">inteligência.</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5 text-black bg-white">
        <div class="container ">
            <!-- Texto Institucional -->
            <div class="row mb-5 ">
                <div class="col-11 me-auto">
                    <p class="text-muted-59 text-justify mb-0  fw-300">
                        Na Air, a gente vai além do óbvio. <br>
                        Usamos tecnologia de ponta associada a soluções personalizadas pra criar campanhas que geram resultados excepcionais. Tecnologia + Soluções únicas = Resultados incríveis! Não perca tempo. #VemPraAIR já!
                    </p>
                </div>
            </div>

            <!-- Três Colunas -->
            <div class="row g-4 mt-5">
                <!-- Coluna 1 -->
                <div class="col-11">
                    <h5 class="text-black fw-300">Porque criar impacto não é sorte, é método.</h5>
                    <p class="fw-300 lexend-text mt-2 mt-4 text-muted-59">
                        A gente equilibra dados e sensibilidade, combinando inteligência com criatividade para entregar
                        resultados que realmente fazem diferença.
                    </p>
                </div>

                <!-- Coluna 2 -->
                <div class="col-11 mt-5">
                    <h5 class="feature-title fw-300">Somos pioneiros. Somos inquietos.</h5>
                    <p class="fw-300 lexend-text mt-2 mt-4 mb-5 text-muted-59">
                        E para a gente, trazer os melhores resultados para nossas marcas, é tudo. Tudo mesmo!
                    </p>
                </div>

            </div>
        </div>
    </section>

    {{-- Plataforma --}}
    <section class="mt-5 text-white bg-black" id='plataforma-airsearch'>
        <div class="container">
            <!-- Bloco de introdução + comparação -->
            <div class="row align-items-center mb-5 mt-64 mb-sm-24" >

                <div class="col-lg-12 col-md-12 d-flex flex-column justify-content-center text-center align-items-sm-start">
                    <h1 class="fw-500 text-rainbow h2-sm">Plataforma</h1>
                    <h1 class="fw-500 text-rainbow h2-sm">AirSearch</h1>
                </div>

            </div>
        </div>

        <div class="container-fluid fs-sm-20">
            <div class="row mb-5 d-flex flex-row align-items-start justify-content-start plataforma">
                <div class="col-12 col-md-6 pe-0 px-sm-inherit">
                    <img src="{{ asset('images/notebook-1.png') }}" alt="Air Logo Stroke" class="img-fluid hero-logo">
                </div>

                <div class="col-md-6 col-sm-12 mb-5 mb-md-0 fw-300 align-items-start mt-sm-24">
                    <h5 class="fw-300 mb-5">Desbloqueie agora!<br>
                        Conexão direta com Creators que Transformam.</h5>
                    <ul class="list-unstyled text-muted mb-0 d-flex flex-column align-items-start justify-content-start">
                        {{-- list with bullet points and a dot for each --}}
                        <li class="fw-300 mb-2 text-muted li-paragraph">
                            <svg xmlns="http://www.w3.org/2000/svg" width="8" height="8" fill="currentColor"
                                class="bi bi-dot" viewBox="0 0 16 16">
                                <path d="M8 3a5 5 0 1 0 0 10 5 5 0 0 0 0-10z" />
                            </svg>
                            <b class="fw-600">Conexão Direta:</b> Construa e gerencie sua própria rede de
                            influenciadores, sem barreiras.
                        </li>
                        <li class="fw-300 mb-2 text-muted li-paragraph">
                            <svg xmlns="http://www.w3.org/2000/svg" width="8" height="8" fill="currentColor"
                                class="bi bi-dot" viewBox="0 0 16 16">
                                <path d="M8 3a5 5 0 1 0 0 10 5 5 0 0 0 0-10z" />
                            </svg>
                            <b class="fw-600">Dados em Tempo Real:</b> Domine o comportamento e o desempenho de cada
                            criador, para decisões estratégicas e precisas.
                        </li>
                        <li class="fw-300 mb-2 text-muted li-paragraph">
                            <svg xmlns="http://www.w3.org/2000/svg" width="8" height="8" fill="currentColor"
                                class="bi bi-dot" viewBox="0 0 16 16">
                                <path d="M8 3a5 5 0 1 0 0 10 5 5 0 0 0 0-10z" />
                            </svg>
                            <b class="fw-600">Relacionamentos Duradouros:</b> Cultive parcerias autênticas e construa
                            uma comunidade de influenciadores leais à sua marca.
                        </li>
                        <li class="fw-300 mb-2 text-muted li-paragraph">
                            <svg xmlns="http://www.w3.org/2000/svg" width="8" height="8" fill="currentColor"
                                class="bi bi-dot" viewBox="0 0 16 16">
                                <path d="M8 3a5 5 0 1 0 0 10 5 5 0 0 0 0-10z" />
                            </svg>
                            <b class="fw-600">Conteúdo Criativo Infinito:</b> Mantenha sua marca à frente da cultura,
                            com um fluxo constante de ideias e inovações.
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <x-rainbow-block-text
            title="Encontre o Creator certo para sua marca!"
            button-text="Assine agora"
            button-link="{{ route('contato') }}"
        />

        <div class="container" id='campanhas-customizadas'>
        </div>
        <div class="container">
            <!-- Bloco de introdução + comparação -->
            <div class="row align-items-center mb-5 mt-64 mb-sm-24">

                <div class="col-lg-12 col-md-12 d-flex flex-column justify-content-center text-center align-items-sm-start">
                    <h1 class="fw-500 h2-sm text-rainbow w-100 text-sm-start">Campanhas</h1>
                    <h1 class="fw-500 h2-sm text-rainbow w-100 text-sm-start">Customizadas</h1>
                </div>


            </div>
        </div>

        <div class="container-fluid fs-sm-20">
            <div class="row align-items-start mb-5 plataforma column-reverse-mobile">
                <!-- Texto Esquerda -->
                <div class="col-md-6 col-sm-12 mb-5 mb-md-0 fw-300 align-items-start mt-sm-24">
                    <h5 class="fw-300 mb-5">Gerenciamos todas as etapas da sua campanha para que você só precise se preocupar em compartilhar seus resultados.</h5>
                    <ul class="list-unstyled text-muted mb-0 d-flex flex-column align-items-start justify-content-start">
                        {{-- list with bullet points and a dot for each --}}
                        <li class="fw-300 mb-2 text-muted li-paragraph">
                            <svg xmlns="http://www.w3.org/2000/svg" width="8" height="8" fill="currentColor"
                                class="bi bi-dot" viewBox="0 0 16 16">
                                <path d="M8 3a5 5 0 1 0 0 10 5 5 0 0 0 0-10z" />
                            </svg>
                            Gestão completa de ponta a ponta.
                        </li>
                        <li class="fw-300 mb-2 text-muted li-paragraph">
                            <svg xmlns="http://www.w3.org/2000/svg" width="8" height="8" fill="currentColor"
                                class="bi bi-dot" viewBox="0 0 16 16">
                                <path d="M8 3a5 5 0 1 0 0 10 5 5 0 0 0 0-10z" />
                            </svg>
                            Planejamento estratégico sob medida e criação de conteúdo autêntico e engajador.
                        </li>
                        <li class="fw-300 mb-2 text-muted li-paragraph">
                            <svg xmlns="http://www.w3.org/2000/svg" width="8" height="8" fill="currentColor"
                                class="bi bi-dot" viewBox="0 0 16 16">
                                <path d="M8 3a5 5 0 1 0 0 10 5 5 0 0 0 0-10z" />
                            </svg>
                            Monitoramento e análises contínuas.
                        </li>
                        <li class="fw-300 mb-2 text-muted li-paragraph">
                            <svg xmlns="http://www.w3.org/2000/svg" width="8" height="8" fill="currentColor"
                                class="bi bi-dot" viewBox="0 0 16 16">
                                <path d="M8 3a5 5 0 1 0 0 10 5 5 0 0 0 0-10z" />
                            </svg>
                            Mensuração precisa e relatórios detalhados.
                        </li>
                        <li class="fw-300 mb-2 text-muted li-paragraph">
                            <svg xmlns="http://www.w3.org/2000/svg" width="8" height="8" fill="currentColor"
                                class="bi bi-dot" viewBox="0 0 16 16">
                                <path d="M8 3a5 5 0 1 0 0 10 5 5 0 0 0 0-10z" />
                            </svg>
                            Foco em resultados: Entregas mensuráveis e ROI positivo.
                        </li>
                        <li class="fw-300 mb-2 text-muted li-paragraph">
                            <svg xmlns="http://www.w3.org/2000/svg" width="8" height="8" fill="currentColor"
                                class="bi bi-dot" viewBox="0 0 16 16">
                                <path d="M8 3a5 5 0 1 0 0 10 5 5 0 0 0 0-10z" />
                            </svg>
                            Conformidade legal e segurança jurídica garantidas.
                        </li>
                    </ul>
                </div>

                <div class="col-md-6 col-sm-12 ps-0 px-sm-inherit">
                    <img src="{{ asset('images/slider-images/4473f44fa0aae8766915469bbc2263d8.jpeg') }}" alt="Air Logo Stroke" class="img-fluid hero-logo">
                </div>
            </div>
        </div>

        <section class="py-4 text-white" style="background: linear-gradient(90deg, #fd75fd, #8efff7);">
            <div class="container px-0 py-0 px-sm-inherit text-start" style="margin-top: -8px !important;">
                <div class="row">
                    <div class="col-12 mx-auto">
                        <h3 class="fw-500 mb-4 text-black rainbow-strip-h3 text-start">Monitore e celebre os dados da sua campanha!</h3>
                        <button data-bs-toggle="modal" data-bs-target="#contactModal" class="btn btn-light fw-semibold">
                            Fale com a gente
                        </button>
                    </div>
                </div>
            </div>
        </section>


        <div class="container" id='insights'>
        </div>
        <div class="container" >
            <!-- Bloco de introdução + comparação -->
            <div class="row align-items-center mb-5 mt-64 mb-sm-24">

                <div class="col-lg-12 col-md-12 d-flex flex-column justify-content-center text-center  align-items-sm-start">
                    <h1 class="fw-500 h2-sm text-rainbow line-height-1">Insights</h1>
                </div>

            </div>
        </div>

        <div class="container-fluid fs-sm-20">
            <div class="row align-items-start mb-5 plataforma">

                <div class="col-12 col-md-6 ps-0 px-sm-inherit">
                    <div id="heroCarousel2" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="6000">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="{{ asset('images/slider-images/2103a4b698365893c9c3434726b46688.jpeg') }}" alt="Air Logo Stroke" class="img-fluid hero-logo">
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Texto Esquerda -->
                <div class="col-12 col-md-6 mb-5 mb-md-0 fw-300 align-items-start justify-content-start mt-sm-24">
                    <h5 class="fw-300 mb-5">Que tal ter acesso em primeira mão, às tendências que ditarão os movimentos do seu segmento?
                        <br>Nós desenvolvemos:</h5>
                    <ul class="list-unstyled text-muted mb-0 d-flex flex-column align-items-start justify-content-start">
                        {{-- list with bullet points and a dot for each --}}
                        <li class="fw-300 mb-2 text-muted li-paragraph">
                            <svg xmlns="http://www.w3.org/2000/svg" width="8" height="8" fill="currentColor"
                                class="bi bi-dot" viewBox="0 0 16 16">
                                <path d="M8 3a5 5 0 1 0 0 10 5 5 0 0 0 0-10z" />
                            </svg>
                            Pesquisas exclusivas sobre comportamentos e percepções, com ênfase no estudo <b class="fw-600">Passion Point</b>.
                        </li>
                        <li class="fw-300 mb-2 text-muted li-paragraph">
                            <svg xmlns="http://www.w3.org/2000/svg" width="8" height="8" fill="currentColor"
                                class="bi bi-dot" viewBox="0 0 16 16">
                                <path d="M8 3a5 5 0 1 0 0 10 5 5 0 0 0 0-10z" />
                            </svg>
                            Avaliação da qualidade e interseção de públicos entre influenciadores e concorrentes.
                        </li>
                        <li class="fw-300 mb-2 text-muted li-paragraph">
                            <svg xmlns="http://www.w3.org/2000/svg" width="8" height="8" fill="currentColor"
                                class="bi bi-dot" viewBox="0 0 16 16">
                                <path d="M8 3a5 5 0 1 0 0 10 5 5 0 0 0 0-10z" />
                            </svg>
                            Estudos sobre padrões de comportamento e tendências da audiência.
                        </li>
                        <li class="fw-300 mb-2 text-muted li-paragraph">
                            <svg xmlns="http://www.w3.org/2000/svg" width="8" height="8" fill="currentColor"
                                class="bi bi-dot" viewBox="0 0 16 16">
                                <path d="M8 3a5 5 0 1 0 0 10 5 5 0 0 0 0-10z" />
                            </svg>
                            Insights sobre o mercado e monitoramento da concorrência.
                        </li>
                        <li class="fw-300 mb-2 text-muted li-paragraph">
                            <svg xmlns="http://www.w3.org/2000/svg" width="8" height="8" fill="currentColor"
                                class="bi bi-dot" viewBox="0 0 16 16">
                                <path d="M8 3a5 5 0 1 0 0 10 5 5 0 0 0 0-10z" />
                            </svg>
                            Análise de saúde da marca.
                        </li>
                        <li class="fw-300 mb-2 text-muted li-paragraph">
                            <svg xmlns="http://www.w3.org/2000/svg" width="8" height="8" fill="currentColor"
                                class="bi bi-dot" viewBox="0 0 16 16">
                                <path d="M8 3a5 5 0 1 0 0 10 5 5 0 0 0 0-10z" />
                            </svg>
                            Análise de fun base.
                        </li>
                    </ul>
                </div>


            </div>
        </div>

    </section>

    {{-- Campanhas customizadas --}}
    <section class="bg-black text-white" >

        <section class="py-4 text-white" style="background: linear-gradient(90deg, #fd75fd, #8efff7);">
            <div class="container px-0 py-0 px-sm-inherit text-start" style="margin-top: -8px !important;">
                <div class="row">
                    <div class="col-12 mx-auto">
                        <h3 class="fw-500 mb-4 text-black rainbow-strip-h3 text-start">
                            Transforme dados em insights estratégicos!
                        </h3>
                        <button data-bs-toggle="modal" data-bs-target="#contactModal" class="btn btn-light fw-semibold">
                            Fale com a gente
                        </button>
                    </div>
                </div>
            </div>
        </section>

        <div class="container" id="ai">
            <!-- Bloco de introdução + comparação -->
            <div class="row align-items-center mb-5 mt-64 mb-sm-24">

                <div class="col-lg-12 col-md-12 d-flex flex-column justify-content-center text-center align-items-sm-start">
                    <h1 class="fw-500 h2-sm text-rainbow line-height-1">IA Aira</h1>
                </div>

            </div>

        </div>

        <div class="container-fluid">
            <div class="row align-items-start mb-5 plataforma column-reverse-mobile ">
                <!-- Texto Esquerda -->
                <div class="col-12 col-md-6 mb-5 mb-md-0 fw-300 align-items-start mt-sm-24">
                    <h5 class="fw-300 mb-5">Aira chegou para revolucionar sua busca por influenciadores!</h5>
                    <p class="text-muted mb-4">
                        Diga olá à aira, sua nova assistente virtual de curadoria!
                        <br><br>
                        Encontrar o influenciador nunca foi tão fácil e rápido! Transforme seus pedidos em listas criteriosas de talentos, de forma intuitiva e personalizada!
                        <br><br>
                        Experimente o poder da aira e encontre o creator que dá match perfeito com a sua marca.
                     </p>
                </div>

                <div class="col-12 col-md-6 ps-0 px-sm-inherit">
                    <div id="heroCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="6000">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="{{ asset('images/slider-images/1da45aabab4f2e1eb7a444e7d29b593e.png') }}" alt="Air Logo Stroke" class="img-fluid hero-logo">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('images/slider-images/ca5c91ad28ee222e6966e58914e674db.png') }}" alt="Air Logo Stroke" class="img-fluid hero-logo">
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <section class="py-4 text-white" style="background: linear-gradient(90deg, #fd75fd, #8efff7);">
            <div class="container px-0 py-0 px-sm-inherit text-start" style="margin-top: -8px !important;">
                <div class="row">
                    <div class="col-12 mx-auto">
                        <h3 class="fw-500 mb-4 text-black rainbow-strip-h3 text-start">
                            Descubra o poder da IA!
                        </h3>
                        <button data-bs-toggle="modal" data-bs-target="#contactModal" class="btn btn-light fw-semibold">
                            Clique e conheça
                        </button>
                    </div>
                </div>
            </div>
        </section>

        <div class='mt-160'></div>

    </section>
@endsection
