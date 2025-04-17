@extends('layouts.app')

@section('title', 'Soluções')

@section('content')
    <section class="hero-section text-black bg-white">
        <div class="container-fluid pt-105">
            <div class="row area-title-wrapper mt-5">
                <p class="text-muted area-title-label">Sobre nós</p>
            </div>
        </div>
        <div class="container d-flex align-items-center">
            <div class="row w-100">
                <div class="col-lg-12 col-md-12 d-flex flex-column justify-content-center text-center">
                    <h1 class="fw-300 home-hero-text">Se você busca</h1>
                    <h1 class="fw-300 home-hero-text">relevância,</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="hero-section text-white bg-black">
        <div class="container d-flex align-items-center">
            <div class="row w-100">
                <div class="col-lg-12 col-md-12 d-flex flex-column justify-content-center text-center">
                    <h1 class="fw-300 home-hero-text">disrupção,</h1>
                    <h1 class="fw-300 home-hero-text">e inovação,</h1>
                    <h1 class="fw-300 home-hero-text">junte-se a nós.</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="hero-section text-white bg-black sobre-nos-bars pb-5 pt-5">
        <img src="{{ asset('images/sobre-nos-bars-with-bg.png') }}" class="img-fluid hero-logo mb-3">
    </section>

    <section class="py-7 text-black bg-white">
        <div class="container-fluid py-5">
            <div class="row area-title-wrapper">
                <p class="text-muted area-title-label">Valorizamos...</p>
            </div>
        </div>
        <div class="container ">
            <!-- Texto Institucional -->
            <div class="row d-flex justify-content-center align-items-center left-topic-right-text">
                <div class="coluna-1 col-12 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 mx-auto">
                    <h3> Transparência <br> sem atalhos </h3>
                </div>
                <div class="coluna-2 col-12 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 mx-auto">
                    <p class="text-muted fw-300"> Somos claros, diretos e imparciais — desde a escolha dos criadores até os
                        resultados entregues. Sem jogo duplo, sem promessas vazias. </p>
                </div>
            </div>

            <!-- Texto Institucional -->
            <div class="row pt-122 d-flex justify-content-center align-items-center left-topic-right-text">
                <div class="coluna-1 col-12 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 mx-auto">
                    <h3> Criatividade <br> com propósito </h3>
                </div>
                <div class="coluna-2 col-12 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 mx-auto">
                    <p class="text-muted fw-300"> Mais do que campanhas, criamos impacto. Nossas soluções são criativas
                        porque têm um objetivo claro: fazer a diferença para marcas e consumidores. </p>
                </div>
            </div>

            <!-- Texto Institucional -->
            <div class="row pt-122 d-flex justify-content-center align-items-center left-topic-right-text">
                <div class="coluna-1 col-12 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 mx-auto">
                    <h3> Colaboração <br> que constrói </h3>
                </div>
                <div class="coluna-2 col-12 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 mx-auto">
                    <p class="text-muted fw-300"> Somos parceiros dos nossos clientes e criadores em cada etapa, construindo
                        juntos. Conexão verdadeira é aquela que fortalece e gera valor para todos os lados. </p>
                </div>
            </div>

            <!-- Texto Institucional -->
            <div class="row pt-122 d-flex justify-content-center align-items-center left-topic-right-text">
                <div class="coluna-1 col-12 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 mx-auto">
                    <h3> Ousadia <br> com precisão </h3>
                </div>
                <div class="coluna-2 col-12 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 mx-auto">
                    <p class="text-muted fw-300"> Desafiamos o óbvio com coragem, sem perder o foco. Arriscamos com
                        inteligência, porque sabemos exatamente onde queremos chegar. </p>
                </div>
            </div>

            <!-- Texto Institucional -->
            <div class="row pt-122 d-flex justify-content-center align-items-center left-topic-right-text">
                <div class="coluna-1 col-12 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 mx-auto">
                    <h3> Encantamento <br> em cada entrega </h3>
                </div>
                <div class="coluna-2 col-12 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 mx-auto">
                    <p class="text-muted fw-300"> Foco em gerar o fator UAU. Criamos experiências memoráveis, que ficam na
                        mente e na conversa das pessoas. Campanhas que conectam, emocionam e deixam uma marca. </p>
                </div>
            </div>

            <!-- Texto Institucional -->
            <div class="row pt-122 d-flex justify-content-center align-items-center left-topic-right-text">
                <div class="coluna-1 col-12 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 mx-auto">
                    <h3> Comprometimento <br> com resultados </h3>
                </div>
                <div class="coluna-2 col-12 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 mx-auto">
                    <p class="text-muted fw-300"> Não basta criar campanhas bonitas — buscamos impacto real. Medimos,
                        ajustamos e entregamos resultados que fazem diferença para o negócio. </p>
                </div>
            </div>
        </div>
    </section>

    <section class="text-black bg-white mt-3">
        <div class="container-fluid my-4">
            <div class="row area-title-wrapper">
                <p class="text-muted area-title-label">Equipe</p>
            </div>
        </div>
        <div class="container ">
            <div class="row">
                <div class="col-12 me-auto pe-5">
                    <h5 class="fw-300"> Resultados extraordinários sem estresse! Deixe a complexidade <br>com a gente! 🚀
                    </h5>
                    <p class="text-muted fw-300 mt-5"> Pare de se preocupar! <br>
                        Nossa equipe de especialistas em mídia e marketing digital gerencia tudo para você! Desde o início <br>ao fim, cuidamos de cada detalhe: KPIs, narrativas, execução e relatórios de campanha!
                    </p>
                    <p class="text-black fw-700 mt-2">
                        Sua marca merece o extraordinário com total tranquilidade! </p>
                </div>
            </div>
        </div>
    </section>

    <section class="pb-7 pt-5 text-black bg-white">
        <div class="container">
            <div class="row text-center mb-4">
                <div class="col-lg-4 col-md-6 col-sm-12 mt-56 p-5">
                    <div class="mb-2 bg-light d-flex align-items-center justify-content-center">
                        <img src="{{ asset('images/equipe/rodrigo-soriano.png') }}" class="img-fluid">
                    </div>
                    <div class="fs-24 fw-400 mt-24">Rodrigo Soriano</div>
                    <p class="text-muted mt-16">CEO & Founder</p>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 mt-56 p-5">
                    <div class="mb-2 bg-light d-flex align-items-center justify-content-center">
                        <img src="{{ asset('images/equipe/fred.png') }}" class="img-fluid">
                    </div>
                    <div class="fs-24 fw-400 mt-24">Fred Muller</div>
                    <p class="text-muted mt-16">CRO</p>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 mt-56 p-5">
                    <div class="mb-2 bg-light d-flex align-items-center justify-content-center">
                        <img src="{{ asset('images/equipe/cassia-pascheto.png') }}" class="img-fluid">
                    </div>
                    <div class="fs-24 fw-400 mt-24">Cassia Pascheto</div>
                    <p class="text-muted mt-16">Comercial & CS</p>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-12 mt-56 p-5">
                    <div class="mb-2 bg-light d-flex align-items-center justify-content-center">
                        <img src="{{ asset('images/equipe/cristiane-stuart.png') }}" class="img-fluid">
                    </div>
                    <div class="fs-24 fw-400 mt-24">Cristiane Stuart</div>
                    <p class="text-muted mt-16">Marketing</p>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 mt-56 p-5">
                    <div class="mb-2 bg-light d-flex align-items-center justify-content-center">
                        <img src="{{ asset('images/equipe/guilherme.png') }}" class="img-fluid">
                    </div>
                    <div class="fs-24 fw-400 mt-24">Guilherme Ferraz</div>
                    <p class="text-muted mt-16">CTO & PM</p>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 mt-56 p-5">
                    <div class="mb-2 bg-light d-flex align-items-center justify-content-center">
                        <img src="{{ asset('images/equipe/viviane.png') }}" class="img-fluid">
                    </div>
                    <div class="fs-24 fw-400 mt-24">Viviane Santos</div>
                    <p class="text-muted mt-16">Planejamento</p>
                </div>
            </div>
        </div>
    </section>

    <section class="hero-section text-black bg-white mt-56">
        <div class="container-fluid">
            <div class="row area-title-wrapper">
                <p class="text-muted area-title-label">Blog</p>
            </div>
        </div>
        <div class="container">
            <div class="row w-100 px-0">
                <div class="col-lg-12 col-md-12 d-flex flex-column justify-content-center text-start">
                    <h1 class="fw-300 fs-120"> Air Blog: Sua biblioteca de Marketing de Influência. </h1>
                </div>
            </div>
            <div class="row w-100">
                <div class="col-lg-11 col-md-11 d-flex flex-column justify-content-center text-start mt-4">
                    <p class="text-muted-4b mt-16 fw-300 line-height-1">
                        <b class='fw-700'> Creators e Marcas, desvendem os segredos do sucesso agora! </b><br>
                        Insights, tendências e tudo que você precisa saber sobre o universo da influência! Não fique desatualizado! O futuro do Marketing de Influência passa por aqui!
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="hero-section text-black bg-white mt-80">
        <div class="container-fluid">
            <div class="row text-start mt-56 w-100">
                <div class="col">
                    <div class="mb-2 bg-light d-flex align-items-center justify-content-center">
                        <img src="{{ asset('images/teenager-black-girls.png') }}" class="img-fluid">
                    </div>
                    <div class="fs-24 fw-700 line-height-1 mt-24">Como a geração Z está influenciando as estratégias de marketing em 2025</div>
                    <div class="mt-16">
                        <a class="article-link" href="https://airfluencers.com/" >Ir para o artigo ></a>
                    </div>
                </div>
                <div class="col">
                    <div class="mb-2 bg-light d-flex align-items-center justify-content-center">
                        <img src="{{ asset('images/mosaic-blode-girl-with-red-clothes.png') }}" class="img-fluid">
                    </div>
                    <div class="fs-24 fw-700 line-height-1 mt-24">Como os dados estão moldando as decisões de marketing</div>
                    <div class="mt-16">
                        <a class="article-link" href="https://airfluencers.com/" >Ir para o artigo ></a>
                    </div>
                </div>
                <div class="col">
                    <div class="mb-2 bg-light d-flex align-items-center justify-content-center">
                        <img src="{{ asset('images/white-woman-charts-on-monitor.png') }}" class="img-fluid">
                    </div>
                    <div class="fs-24 fw-700 line-height-1 mt-24">O futuro das redes sociais: quais plataformas ganharão destaque em 2025</div>
                    <div class="mt-16">
                        <a class="article-link" href="https://airfluencers.com/" >Ir para o artigo ></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="text-black bg-white mt-56 mb-56">
        <div class="container">
            <div class="row text-start w-100">
                <div class="w-100 d-flex justify-content-start">
                    <a class="btn btn-dark text-white mt-5" href="https://airfluencers.com/">Ir para o blog</a>
                </div>
            </div>
        </div>
    </section>

    <section class="hero-section text-black bg-white mt-215 mb-156">
        <div class="container-fluid">
            <div class="row area-title-wrapper">
                <p class="text-muted area-title-label">Imprensa</p>
            </div>
        </div>
        <div class="container">
            <div class="row w-100">
                <div class="col-12 d-flex flex-column justify-content-center text-start">
                    <h1 class="fw-300"> Air na Mídia: </h1>
                </div>
                <div class="mt-80 col-12 d-flex flex-column justify-content-center text-start">
                    <h5 class="fw-300"> Junte-se à AIR e Lidere o Futuro! 🚀 </h5>
                </div>
                <div class="mt-24 col-lg-11 col-md-11 d-flex flex-column justify-content-center text-start">
                    <p class="text-muted mt-16 fw-300">Nascemos para transformar a relação entre marcas e pessoas! Combinamos empatia, criatividade e tecnologia para gerar impacto real e conexões autênticas. A Air não segue tendências, nós as criamos! Nossa visão pioneira e inquietude nos tornaram referência em inovação, dados e estratégia no marketing de influência. Não acredite em nós, veja! Confira as reportagens, artigos e menções que comprovam nossa liderança e como construímos conexões que respiram influência!</p>
                </div>
            </div>

            <div class="row w-100 mt-80">
                <div class="col">
                    <div class="mb-2 bg-light d-flex align-items-center justify-content-center">
                        <img src="{{ asset('images/air-2025-screenshot.png') }}" class="img-fluid">
                    </div>
                    <div class="fs-24 fw-700 line-height-1 mt-24">Link 1 para matérias em veículos de mídia, imprensa, menções etc.</div>
                    <div class="mt-16">
                        <a class="article-link" href="https://airfluencers.com/" >Ir para a matéria ></a>
                    </div>
                </div>

                <div class="col">
                    <div class="mb-2 bg-light d-flex align-items-center justify-content-center">
                        <img src="{{ asset('images/clipe-de-baile-de-favela.png') }}" class="img-fluid">
                    </div>
                    <div class="fs-24 fw-700 line-height-1 mt-24">Link 2 para matérias em veículos de mídia, imprensa, menções etc.</div>
                    <div class="mt-16">
                        <a class="article-link" href="https://airfluencers.com/" >Ir para a matéria ></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
