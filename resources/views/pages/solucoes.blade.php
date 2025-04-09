@extends('layouts.app')

@section('title', 'Soluções')

@section('content')
    <section class="hero-section text-white bg-black">
        <div class="container-fluid pt-5">
            <div class="row area-title-wrapper mt-5">
                <p class="text-muted area-title-label">Soluções</p>
            </div>
        </div>
        <div class="container d-flex align-items-center">
            <div class="row w-100 ">
                <div class="col-lg-12 col-md-12 d-flex flex-column justify-content-center text-center home-hero-wrapper">
                    <h1 class="fw-300 home-hero-text">Escalabilidade e resultados em Marketing de Influência.</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5 text-white bg-black">
        <div class="container ">
            <!-- Texto Institucional -->
            <div class="row mb-5 ">
                <div class="col-11 me-auto">
                    <p class="highlight-text text-justify mb-0 call-4 fw-300">
                        O segredo pra conquistar o consumidor moderno? Marketing de influência com alma e inteligência. Na
                        Air, a gente vai além do óbvio. Usamos tecnologia de ponta e soluções personalizadas pra criar
                        campanhas que geram resultados excepcionais. Se você busca o comum, não é com a gente.Mas se quer
                        resultados que fazem a diferença, vem com a gente!
                    </p>
                </div>
            </div>

            <!-- Três Colunas -->
            <div class="row g-4 mt-5">
                <!-- Coluna 1 -->
                <div class="col-11">
                    <h5 class="feature-title fw-300">Porque criar impacto não é sorte, é método.</h5>
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
    <section class="py-5 mt-5">
        <div class="container">
            <!-- Bloco de introdução + comparação -->
            <div class="row align-items-center mb-5 mt-5">

                <div class="col-lg-12 col-md-12 d-flex flex-column justify-content-center text-center home-hero-wrapper">
                    <h1 class="fw-300 home-hero-text text-dark">Plataforma</h1>
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

            <div class="row align-items-center mb-5 plataforma column-reverse-mobile">
                <!-- Texto Esquerda -->
                <div class="col-12 col-md-6 mt-3 mb-5 mb-md-0 fw-300 align-items-start">
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
                    <img src="{{ asset('images/notebook-2.png') }}" alt="Air Logo Stroke" class="img-fluid hero-logo">
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row align-items-center mb-5 mt-5 plataforma">
                <div class="col-12 mx-auto mt-3">
                    <h3 class="fw-500 my-5"> Pronto para redefinir o futuro da influência? Descubra como a Air Search pode transformar sua marca em um ícone cultural. </h2>
                    <div class="w-100 d-flex justify-content-center">
                        <a class="btn btn-dark text-white mt-5" href="#">Vamos juntos?</a>
                    </div>
                </div>
            </div>
        </div>

    </section>

    {{-- Campanhas customizadas --}}
    <section class="py-5 mt-5">
        <div class="container">
            <!-- Bloco de introdução + comparação -->
            <div class="row align-items-center mb-5 mt-5">

                <div class="col-lg-12 col-md-12 d-flex flex-column justify-content-center text-center home-hero-wrapper">
                    <h1 class="fw-300 home-hero-text text-dark">Campanhas customizadas</h1>
                </div>

            </div>
        </div>

        <div class="container-fluid">
            <div class="row mb-5 d-flex flex-row align-items-start justify-content-start plataforma">
                <div class="col-12 col-md-6 pe-0">
                    <img src="{{ asset('images/black-girl-glasses.png') }}" alt="Air Logo Stroke" class="img-fluid hero-logo">
                </div>

                <!-- Texto Esquerda -->
                <div class="col-12 col-md-6 mb-5 mb-md-0 fw-300 align-items-start">
                    <h5 class="mb-3 fw-300">Gerenciamos todas as etapas da sua campanha para que você só precise se preocupar em compartilhar seus resultados.</h5>
                    <p class="text-muted mb-4">
                        Transforme sua Marca em uma Potência Digital: Deixe o comum para trás.

                        Somos a agência que redefine o Marketing de Influência, transformando marcas em líderes digitais. Nossa equipe de especialistas combina estratégia, criação e performance para conectar sua marca ao público certo e gerar impacto real.

                        Insights, criatividade e inovação: a fórmula para o seu sucesso.
                    </p>
                </div>
            </div>

            <div class="row align-items-center mb-5 plataforma column-reverse-mobile">
                <!-- Texto Esquerda -->
                <div class="col-12 col-md-6 mt-3 mb-5 mb-md-0 fw-300 align-items-start">
                        <ul class="list-unstyled text-muted mb-0 d-flex flex-column align-items-start justify-content-start">
                            {{-- list with bullet points and a dot for each --}}
                            <li class="fw-300 mb-2 text-muted li-paragraph">
                                <svg xmlns="http://www.w3.org/2000/svg" width="8" height="8" fill="currentColor"
                                    class="bi bi-dot" viewBox="0 0 16 16">
                                    <path d="M8 3a5 5 0 1 0 0 10 5 5 0 0 0 0-10z" />
                                </svg>
                                <b class="fw-600">Gestão Completa:</b> De ponta a ponta.
                            </li>
                            <li class="fw-300 mb-2 text-muted li-paragraph">
                                <svg xmlns="http://www.w3.org/2000/svg" width="8" height="8" fill="currentColor"
                                    class="bi bi-dot" viewBox="0 0 16 16">
                                    <path d="M8 3a5 5 0 1 0 0 10 5 5 0 0 0 0-10z" />
                                </svg>
                                <b class="fw-600">Planejamento Estratégico:</b> Sob medida para sua marca.
                            </li>
                            <li class="fw-300 mb-2 text-muted li-paragraph">
                                <svg xmlns="http://www.w3.org/2000/svg" width="8" height="8" fill="currentColor"
                                    class="bi bi-dot" viewBox="0 0 16 16">
                                    <path d="M8 3a5 5 0 1 0 0 10 5 5 0 0 0 0-10z" />
                                </svg>
                                <b class="fw-600">Conteúdo Autêntico e Engajador:</b> Desenvolvemos campanhas criativas e personalizadas, que impulsionam resultados reais para o seu negócio.
                            </li>
                            <li class="fw-300 mb-2 text-muted li-paragraph">
                                <svg xmlns="http://www.w3.org/2000/svg" width="8" height="8" fill="currentColor"
                                    class="bi bi-dot" viewBox="0 0 16 16">
                                    <path d="M8 3a5 5 0 1 0 0 10 5 5 0 0 0 0-10z" />
                                </svg>
                                <b class="fw-600">Monitoramento Contínuo:</b> Acompanhamos cada passo das campanhas em tempo real.
                            </li>
                            <li class="fw-300 mb-2 text-muted li-paragraph">
                                <svg xmlns="http://www.w3.org/2000/svg" width="8" height="8" fill="currentColor"
                                    class="bi bi-dot" viewBox="0 0 16 16">
                                    <path d="M8 3a5 5 0 1 0 0 10 5 5 0 0 0 0-10z" />
                                </svg>
                                <b class="fw-600">Mensuração Precisa:</b> Relatórios detalhados e insights estratégicos sobre o impacto do Marketing de Influência.
                            </li>
                            <li class="fw-300 mb-2 text-muted li-paragraph">
                                <svg xmlns="http://www.w3.org/2000/svg" width="8" height="8" fill="currentColor"
                                    class="bi bi-dot" viewBox="0 0 16 16">
                                    <path d="M8 3a5 5 0 1 0 0 10 5 5 0 0 0 0-10z" />
                                </svg>
                                <b class="fw-600">Foco em Resultados:</b> Entregas mensuráveis e ROI positivo.
                            </li>
                            <li class="fw-300 mb-2 text-muted li-paragraph">
                                <svg xmlns="http://www.w3.org/2000/svg" width="8" height="8" fill="currentColor"
                                    class="bi bi-dot" viewBox="0 0 16 16">
                                    <path d="M8 3a5 5 0 1 0 0 10 5 5 0 0 0 0-10z" />
                                </svg>
                                <b class="fw-600">Segurança Jurídica:</b> Garantia de conformidade legal em todas as etapas.
                            </li>
                        </ul>

                </div>

                <div class="col-12 col-md-6 ps-0">
                    <img src="{{ asset('images/asian-man-looking-up.png') }}" alt="Air Logo Stroke" class="img-fluid hero-logo">
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row align-items-center mb-5 mt-5 plataforma">
                <div class="col-12 mx-auto mt-3">
                    <h3 class="fw-500 my-5"> Desperte o potencial da sua marca: vamos construir o sucesso juntos! Fale conosco e descubra como. </h2>
                    <div class="w-100 d-flex justify-content-center">
                        <a class="btn btn-dark text-white mt-5" href="#">Vamos juntos?</a>
                    </div>
                </div>
            </div>
        </div>

    </section>

    {{-- Insights --}}
    <section class="py-5 mt-5">
        <div class="container">
            <!-- Bloco de introdução + comparação -->
            <div class="row align-items-center mb-5 mt-5">

                <div class="col-lg-12 col-md-12 d-flex flex-column justify-content-center text-center home-hero-wrapper">
                    <h1 class="fw-300 home-hero-text text-dark">Insights</h1>
                </div>

            </div>
        </div>

        <div class="container-fluid">
            <div class="row mb-5 d-flex flex-row align-items-start justify-content-start plataforma">
                <div class="col-12 col-md-6 pe-0">
                    <img src="{{ asset('images/pexels-googledeepmind-17484975.png') }}" alt="Air Logo Stroke" class="img-fluid hero-logo">
                </div>

                <!-- Texto Esquerda -->
                <div class="col-12 col-md-6 mb-5 mb-md-0 fw-300 align-items-start">
                    <h5 class="mb-3 fw-300">Decifrando o Futuro da Influência: Insights que Transformam.</h5>
                    <p class="text-muted mb-4">
                        Na Air, a informação se transforma em estratégia. Nossa área de Insights é especializada em decodificar o universo do marketing de influência, oferecendo uma visão personalizada sobre audiências, tendências e comportamentos que impactam sua marca. Combinamos inteligência de dados e análises precisas para otimizar suas parcerias com creators e te posicionar como líder de mercado. Revelamos os verdadeiros interesses e motivações dos consumidores, permitindo campanhas autênticas e de alta performance.
                    </p>
                </div>
            </div>

            <div class="row align-items-center mb-5 plataforma column-reverse-mobile">
                <!-- Texto Esquerda -->
                <div class="col-12 col-md-6 mt-3 mb-5 mb-md-0 fw-300 align-items-start">
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

                <div class="col-12 col-md-6 ps-0">
                    <img src="{{ asset('images/pexels-kindelmedia-7688360.png') }}" alt="Air Logo Stroke" class="img-fluid hero-logo">
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row align-items-center mb-5 mt-5 plataforma">
                <div class="col-12 mx-auto mt-3">
                    <h3 class="fw-500 my-5"> Conquiste o protagonismo no universo da influência: transforme dados em insights estratégicos e leve sua marca ao topo. </h2>
                    <div class="w-100 d-flex justify-content-center">
                        <a class="btn btn-dark text-white mt-5" href="#">Vamos juntos?</a>
                    </div>
                </div>
            </div>
        </div>

    </section>

@endsection
