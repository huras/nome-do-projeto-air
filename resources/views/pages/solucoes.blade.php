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
            <div class="row w-100 ">
                <div class="col-lg-12 col-md-12 d-flex flex-column justify-content-center text-center home-hero-wrapper">
                    <h1 class="fw-300 home-hero-text">Marketing de</h1>
                    <h1 class="fw-300 home-hero-text">influência com</h1>
                    <h1 class="fw-300 home-hero-text">alma e</h1>
                    <h1 class="fw-300 home-hero-text">inteligência.</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5 text-black bg-white">
        <div class="container ">
            <!-- Texto Institucional -->
            <div class="row mb-5 ">
                <div class="col-11 me-auto">
                    <p class="text-muted text-justify mb-0 call-4 fw-300">
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
                    <p class="fs-4 fw-300 lexend-text lh-1 mt-2 call-solucoes-1 mt-4">
                        A gente equilibra dados e sensibilidade, combinando inteligência com criatividade para entregar
                        resultados que realmente fazem diferença.
                    </p>
                </div>

                <!-- Coluna 2 -->
                <div class="col-11 my-5">
                    <h5 class="feature-title fw-300">Somos pioneiros. Somos inquietos.</h5>
                    <p class="fs-4 fw-300 lexend-text lh-1 mt-2 call-solucoes-1 mt-4 mb-5">
                        Com leveza e precisão, criamos conexões autênticas que respiram influência.
                    </p>
                </div>

            </div>
        </div>
    </section>

    {{-- Plataforma --}}
    <section class="py-5 mt-5 text-white bg-black" id='plataforma-airsearch'>
        <div class="container">
            <!-- Bloco de introdução + comparação -->
            <div class="row align-items-center mb-5 mt-160" >

                <div class="col-lg-12 col-md-12 d-flex flex-column justify-content-center text-center home-hero-wrapper">
                    <h1 class="fw-500 home-hero-text text-rainbow">Plataforma</h1>
                    <h1 class="fw-500 home-hero-text text-rainbow">AirSearch</h1>
                </div>

            </div>
        </div>

        <div class="container-fluid">
            <div class="row mb-5 d-flex flex-row align-items-start justify-content-start plataforma">
                <div class="col-12 col-md-6 pe-0">
                    <img src="{{ asset('images/notebook-1.png') }}" alt="Air Logo Stroke" class="img-fluid hero-logo">
                </div>

                <!-- Texto Esquerda -->
                <div class="col-12 col-md-6 mb-5 mb-md-0 fw-300 align-items-start">
                    <h5 class="mb-3 fw-300">Liberte o Potencial da sua Marca: Conecte-se Diretamente com a Influência
                        que faz a diferença.</h5>
                    <p class="text-muted mb-4">
                        Imagine um universo onde sua marca não apenas participa da cultura, mas a define. Um lugar onde
                        a conexão com criadores de conteúdo é direta, autêntica e infinitamente poderosa. Esse universo
                        existe, e nós o construímos para você.
                    </p>
                    <p class="text-muted mb-0">
                        Conheça a plataforma proprietária da Air: a chave para desbloquear o futuro da influência. Com
                        ela, você não apenas encontra criadores, mas constrói uma rede de talentos que ressoam com a
                        essência da sua marca. Mergulhe em dados de comportamento e desempenho em tempo real, cultive
                        relacionamentos duradouros e alimente sua marca com um fluxo constante de conteúdo criativo e
                        inovador.
                    </p>
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
            <div class="row align-items-center mb-5 mt-160">

                <div class="col-lg-12 col-md-12 d-flex flex-column justify-content-center text-center home-hero-wrapper">
                    <h1 class="fw-500 home-hero-text text-rainbow">Campanhas</h1>
                    <h1 class="fw-500 home-hero-text text-rainbow">Customizadas</h1>
                </div>

            </div>
        </div>

        <div class="container-fluid">
            <div class="row align-items-start mb-5 plataforma column-reverse-mobile">
                <!-- Texto Esquerda -->
                <div class="col-12 col-md-6 mb-5 mb-md-0 fw-300 align-items-start">
                    <h5 class="fw-300 mb-5">Esqueça as limitações. Diga adeus aos intermediários. Com a Air Search, a
                        liberdade é total:</h5>
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

                <div class="col-12 col-md-6 ps-0">
                    <img src="{{ asset('images/slider-images/4473f44fa0aae8766915469bbc2263d8.jpeg') }}" alt="Air Logo Stroke" class="img-fluid hero-logo">
                </div>
            </div>
        </div>

        <section class="py-5 text-white" style="background: linear-gradient(90deg, #fd75fd, #8efff7);">
            <div class="container text-start">
                <div class="row">
                    <div class="col-12 mx-auto">
                        <h3 class="fw-500 mb-4 text-black rainbow-strip-h3">Monitore e celebre os dados da sua campanha!</h3>
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
            <div class="row align-items-center mb-5 mt-160">

                <div class="col-lg-12 col-md-12 d-flex flex-column justify-content-center text-center home-hero-wrapper">
                    <h1 class="fw-500 home-hero-text text-rainbow line-height-1">Insights</h1>
                </div>

            </div>
        </div>

        <div class="container-fluid">
            <div class="row align-items-start mb-5 plataforma column-reverse-mobile">

                <div class="col-12 col-md-6 ps-0">
                    <div id="heroCarousel2" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="6000">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="{{ asset('images/slider-images/2103a4b698365893c9c3434726b46688.jpeg') }}" alt="Air Logo Stroke" class="img-fluid hero-logo">
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Texto Esquerda -->
                <div class="col-12 col-md-6 mb-5 mb-md-0 fw-300 align-items-start justify-content-start">
                    <h5 class="fw-300 mb-5">Desenvolvemos:</h5>
                    <ul class="list-unstyled text-muted mb-0 d-flex flex-column align-items-start justify-content-start">
                        {{-- list with bullet points and a dot for each --}}
                        <li class="fw-300 mb-2 text-muted li-paragraph">
                            <svg xmlns="http://www.w3.org/2000/svg" width="8" height="8" fill="currentColor"
                                class="bi bi-dot" viewBox="0 0 16 16">
                                <path d="M8 3a5 5 0 1 0 0 10 5 5 0 0 0 0-10z" />
                            </svg>
                            <b class="fw-600">Pesquisas Exclusivas:</b> Comportamentos, percepções e foco no estudo "Passion Points".
                        </li>
                        <li class="fw-300 mb-2 text-muted li-paragraph">
                            <svg xmlns="http://www.w3.org/2000/svg" width="8" height="8" fill="currentColor"
                                class="bi bi-dot" viewBox="0 0 16 16">
                                <path d="M8 3a5 5 0 1 0 0 10 5 5 0 0 0 0-10z" />
                            </svg>
                            <b class="fw-600">Avaliação de Públicos:</b> Qualidade e interseção entre audiências de influenciadores e concorrentes.
                        </li>
                        <li class="fw-300 mb-2 text-muted li-paragraph">
                            <svg xmlns="http://www.w3.org/2000/svg" width="8" height="8" fill="currentColor"
                                class="bi bi-dot" viewBox="0 0 16 16">
                                <path d="M8 3a5 5 0 1 0 0 10 5 5 0 0 0 0-10z" />
                            </svg>
                            <b class="fw-600">Análise Comportamental:</b> Padrões de comportamento e tendências da audiência.
                        </li>
                        <li class="fw-300 mb-2 text-muted li-paragraph">
                            <svg xmlns="http://www.w3.org/2000/svg" width="8" height="8" fill="currentColor"
                                class="bi bi-dot" viewBox="0 0 16 16">
                                <path d="M8 3a5 5 0 1 0 0 10 5 5 0 0 0 0-10z" />
                            </svg>
                            <b class="fw-600">Insights de Mercado:</b> Estudo competitivo e monitoramento da concorrência.
                        </li>
                    </ul>
                </div>


            </div>
        </div>

    </section>

    {{-- Campanhas customizadas --}}
    <section class="py-5 bg-black text-white" >

        <section class="py-5 text-white" style="background: linear-gradient(90deg, #fd75fd, #8efff7);">
            <div class="container-fluid text-start">
                <div class="row">
                    <div class="col-10 mx-auto">
                        <h3 class="fw-500 mb-4 text-black rainbow-strip-h3">
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
            <div class="row align-items-center mb-5 mt-160">

                <div class="col-lg-12 col-md-12 d-flex flex-column justify-content-center text-center home-hero-wrapper">
                    <h1 class="fw-500 home-hero-text text-rainbow line-height-1">IA Aira</h1>
                </div>

            </div>

        </div>

        <div class="container-fluid">
            <div class="row align-items-start mb-5 plataforma column-reverse-mobile">
                <!-- Texto Esquerda -->
                <div class="col-12 col-md-6 mb-5 mb-md-0 fw-300 align-items-start">
                    <h5 class="fw-300 mb-5">Esqueça as limitações. Diga adeus aos intermediários. Com a Air Search, a
                        liberdade é total:</h5>
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

                <div class="col-12 col-md-6 ps-0">
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

        <section class="py-5 text-white" style="background: linear-gradient(90deg, #fd75fd, #8efff7);">
            <div class="container text-start">
                <div class="row">
                    <div class="col-12 mx-auto">
                        <h3 class="fw-500 mb-4 text-black rainbow-strip-h3">
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
