@extends('layouts.app')

@section('title', 'Soluções')

@section('content')
    <section class="hero-section text-black bg-white">
        <div class="container-fluid pt-5">
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
            <div class="row py-5 d-flex justify-content-center align-items-center left-topic-right-text">
                <div class="coluna-1 col-12 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 mx-auto">
                    <h3> Criatividade <br> com propósito </h3>
                </div>
                <div class="coluna-2 col-12 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 mx-auto">
                    <p class="text-muted fw-300"> Mais do que campanhas, criamos impacto. Nossas soluções são criativas
                        porque têm um objetivo claro: fazer a diferença para marcas e consumidores. </p>
                </div>
            </div>

            <!-- Texto Institucional -->
            <div class="row py-5 d-flex justify-content-center align-items-center left-topic-right-text">
                <div class="coluna-1 col-12 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 mx-auto">
                    <h3> Colaboração <br> que constrói </h3>
                </div>
                <div class="coluna-2 col-12 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 mx-auto">
                    <p class="text-muted fw-300"> Somos parceiros dos nossos clientes e criadores em cada etapa, construindo
                        juntos. Conexão verdadeira é aquela que fortalece e gera valor para todos os lados. </p>
                </div>
            </div>

            <!-- Texto Institucional -->
            <div class="row py-5 d-flex justify-content-center align-items-center left-topic-right-text">
                <div class="coluna-1 col-12 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 mx-auto">
                    <h3> Ousadia <br> com precisão </h3>
                </div>
                <div class="coluna-2 col-12 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 mx-auto">
                    <p class="text-muted fw-300"> Desafiamos o óbvio com coragem, sem perder o foco. Arriscamos com
                        inteligência, porque sabemos exatamente onde queremos chegar. </p>
                </div>
            </div>

            <!-- Texto Institucional -->
            <div class="row py-5 d-flex justify-content-center align-items-center left-topic-right-text">
                <div class="coluna-1 col-12 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 mx-auto">
                    <h3> Encantamento <br> em cada entrega </h3>
                </div>
                <div class="coluna-2 col-12 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 mx-auto">
                    <p class="text-muted fw-300"> Foco em gerar o fator UAU. Criamos experiências memoráveis, que ficam na
                        mente e na conversa das pessoas. Campanhas que conectam, emocionam e deixam uma marca. </p>
                </div>
            </div>

            <!-- Texto Institucional -->
            <div class="row py-5 d-flex justify-content-center align-items-center left-topic-right-text">
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
                <div class="col-10 me-auto pe-5">
                    <h5 class="fw-300"> Prepare-se para o futuro da influência: somos a equipe que redefine o mercado.
                        Criativos, criadores e cientistas de dados, impulsionamos o crescimento acelerado de grandes marcas.
                    </h5>
                    <p class="text-muted fw-300 mt-3"> Deixe a complexidade conosco: nossa equipe de especialistas em mídia
                        e marketing digital cuida de cada etapa do seu projeto de Marketing de Influência. Desde a definição
                        de KPIs e narrativas até a execução e relatórios de campanha, garantimos que sua marca alcance
                        resultados extraordinários com total tranquilidade. </p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-7 text-black bg-white">
        <div class="container-fluid">
            <div class="row text-center mb-4">
                <div class="col">
                    <div class="mb-2 bg-light d-flex align-items-center justify-content-center">
                        <img src="{{ asset('images/foto-funcionario.png') }}" class="img-fluid">
                    </div>
                    <div class="fs-24 fw-400 mt-24">Rodrigo Soriano</div>
                    <p class="text-muted mt-16">CEO & Founder</p>
                </div>
                <div class="col">
                    <div class="mb-2 bg-light d-flex align-items-center justify-content-center">
                        <img src="{{ asset('images/foto-funcionario.png') }}" class="img-fluid">
                    </div>
                    <div class="fs-24 fw-400 mt-24">Fred Muller</div>
                    <p class="text-muted mt-16">CRO</p>
                </div>
                <div class="col">
                    <div class="mb-2 bg-light d-flex align-items-center justify-content-center">
                        <img src="{{ asset('images/foto-funcionario.png') }}" class="img-fluid">
                    </div>
                    <div class="fs-24 fw-400 mt-24">Guilherme Ferraz</div>
                    <p class="text-muted mt-16">CTO & PM</p>
                </div>
                <div class="col">
                    <div class="mb-2 bg-light d-flex align-items-center justify-content-center">
                        <img src="{{ asset('images/foto-funcionario.png') }}" class="img-fluid">
                    </div>
                    <div class="fs-24 fw-400 mt-24">Cassia Pascheto</div>
                    <p class="text-muted mt-16">Comercial & CS</p>
                </div>
                <div class="col">
                    <div class="mb-2 bg-light d-flex align-items-center justify-content-center">
                        <img src="{{ asset('images/foto-funcionario.png') }}" class="img-fluid">
                    </div>
                    <div class="fs-24 fw-400 mt-24">Cristiane Stuart</div>
                    <p class="text-muted mt-16">Marketing</p>
                </div>
            </div>

            <div class="row text-center mt-56">
                <div class="col">
                    <div class="mb-2 bg-light d-flex align-items-center justify-content-center">
                        <img src="{{ asset('images/foto-funcionario.png') }}" class="img-fluid">
                    </div>
                    <div class="fs-24 fw-400 mt-24">Viviane Santos</div>
                    <p class="text-muted mt-16">Planejamento</p>
                </div>
                <div class="col">
                    <div class="mb-2 bg-light d-flex align-items-center justify-content-center">
                        <img src="{{ asset('images/foto-funcionario.png') }}" class="img-fluid">
                    </div>
                    <div class="fs-24 fw-400 mt-24">Noemi Figueiredo</div>
                    <p class="text-muted mt-16">Financeiro</p>
                </div>
                <div class="col">
                    <div class="mb-2 bg-light d-flex align-items-center justify-content-center">
                        <img src="{{ asset('images/foto-funcionario.png') }}" class="img-fluid">
                    </div>
                    <div class="fs-24 fw-400 mt-24">Wanda Rosa</div>
                    <p class="text-muted mt-16">Administrativo</p>
                </div>
                <div class="col">
                    <div class="mb-2 bg-light d-flex align-items-center justify-content-center">
                        <img src="{{ asset('images/foto-funcionario.png') }}" class="img-fluid">
                    </div>
                    <div class="fs-24 fw-400 mt-24">Alexsandra Celeste</div>
                    <p class="text-muted mt-16">Insights</p>
                </div>
                <div class="col">
                    <div class="mb-2 bg-light d-flex align-items-center justify-content-center">
                        <img src="{{ asset('images/foto-funcionario.png') }}" class="img-fluid">
                    </div>
                    <div class="fs-24 fw-400 mt-24">Gabriel Paparelli</div>
                    <p class="text-muted mt-16">RH & BP</p>
                </div>
            </div>
        </div>
    </section>

    <section class="hero-section text-black bg-white">
        <div class="container-fluid">
            <div class="row area-title-wrapper">
                <p class="text-muted area-title-label">Blog</p>
            </div>
        </div>
        <div class="container">
            <div class="row w-100">
                <div class="col-lg-11 col-md-12 d-flex flex-column justify-content-center text-start">
                    <h1 class="fw-300"> Air Blog: Seu HUB de Marketing de Influência. </h1>
                </div>
            </div>
            <div class="row w-100">
                <div class="col-lg-11 col-md-11 d-flex flex-column justify-content-center text-start">
                    <p class="text-muted mt-16 fw-300">Mantenha-se atualizado e descubra novas oportunidades, tendências e estratégias para impulsionar marcas e criadores. Com a expertise da AIR, transformamos dados e experiências em conhecimento aplicável.</p>
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
                        <a class="article-link" href="#" >Ir para o artigo ></a>
                    </div>
                </div>
                <div class="col">
                    <div class="mb-2 bg-light d-flex align-items-center justify-content-center">
                        <img src="{{ asset('images/mosaic-blode-girl-with-red-clothes.png') }}" class="img-fluid">
                    </div>
                    <div class="fs-24 fw-700 line-height-1 mt-24">Como os dados estão moldando as decisões de marketing</div>
                    <div class="mt-16">
                        <a class="article-link" href="#" >Ir para o artigo ></a>
                    </div>
                </div>
                <div class="col">
                    <div class="mb-2 bg-light d-flex align-items-center justify-content-center">
                        <img src="{{ asset('images/white-woman-charts-on-monitor.png') }}" class="img-fluid">
                    </div>
                    <div class="fs-24 fw-700 line-height-1 mt-24">O futuro das redes sociais: quais plataformas ganharão destaque em 2025</div>
                    <div class="mt-16">
                        <a class="article-link" href="#" >Ir para o artigo ></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="text-black bg-white mt-90">
        <div class="container">
            <div class="row text-start w-100">
                <div class="w-100 d-flex justify-content-start">
                    <a class="btn btn-dark text-white mt-5" href="#">Ir para o blog</a>
                </div>
            </div>
        </div>
    </section>

    <section class="hero-section text-black bg-white mt-166 mb-156">
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
                    <h5 class="fw-300"> Liderando a transformação do Marketing de Influência. </h5>
                </div>
                <div class="mt-24 col-lg-11 col-md-11 d-flex flex-column justify-content-center text-start">
                    <p class="text-muted mt-16 fw-300">A AIR nasceu para transformar a relação entre marcas e pessoas, combinando empatia, criatividade e tecnologia para gerar impacto real. Nossa visão pioneira e nossa inquietude nos tornaram referência em inovação, dados e estratégia no marketing de influência, com destaque nos principais veículos de comunicação. Confira as reportagens, artigos e menções que comprovam nossa liderança e como construímos conexões autênticas que respiram influência.</p>
                </div>
            </div>

            <div class="row w-100 mt-80">
                <div class="col">
                    <div class="mb-2 bg-light d-flex align-items-center justify-content-center">
                        <img src="{{ asset('images/air-2025-screenshot.png') }}" class="img-fluid">
                    </div>
                    <div class="fs-24 fw-700 line-height-1 mt-24">Link 1 para matérias em veículos de mídia, imprensa, menções etc.</div>
                    <div class="mt-16">
                        <a class="article-link" href="#" >Ir para a matéria ></a>
                    </div>
                </div>

                <div class="col">
                    <div class="mb-2 bg-light d-flex align-items-center justify-content-center">
                        <img src="{{ asset('images/clipe-de-baile-de-favela.png') }}" class="img-fluid">
                    </div>
                    <div class="fs-24 fw-700 line-height-1 mt-24">Link 2 para matérias em veículos de mídia, imprensa, menções etc.</div>
                    <div class="mt-16">
                        <a class="article-link" href="#" >Ir para a matéria ></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
