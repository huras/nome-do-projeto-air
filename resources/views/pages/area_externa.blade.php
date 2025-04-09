@extends('layouts.app')

@section('title', 'Soluções')

@section('content')
    <section class="hero-section text-white bg-black">
        <div class="container-fluid pt-5">
            <div class="row area-title-wrapper mt-5">
                <p class="text-muted area-title-label">Nossos parceiros</p>
            </div>
        </div>
        <div class="container d-flex align-items-center half-into-bottom-image">
            <div class="row w-100">
                <div class="col-lg-8 col-md-8 d-flex flex-column justify-content-center text-center">
                    <h1 class="fw-300 home-hero-text">Credibilidade reconhecida por quem mais importa: nossos Clientes!</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="hero-section text-white bg-black sobre-nos-bars pb-5 pt-5">
        <img src="{{ asset('images/nossos-parceiros.png') }}" class="img-fluid hero-logo mb-3">
    </section>

    <section class="py-5 text-white bg-black">
        <div class="container ">
            <div class="row mb-5 ">
                <div class="col-11 me-auto">
                    <h5 class="mb-0 fw-300">
                        Acreditamos que o sucesso é construído em conjunto. Nossos clientes são parceiros estratégicos, que confiam em nossa expertise para impulsionar suas campanhas de marketing de influência. Cada depoimento é uma prova dos resultados que entregamos e da confiança que construímos. Descubra como a AIR transforma conexões em impacto real.
                    </h5>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-black text-white">
        <div class="container-fluid">
            <div class="row area-title-wrapper">
                <p class="text-muted area-title-label">O que eles falam da Air:</p>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row mb-5">
                <div class="col-3 mt-660">
                    <h5 class="mb-0 fw-300">
                        <b> Plataforma </b>
                    </h5>
                    <p class="text-muted fw-300 mt-2">Empresa</p>
                    <img src="{{ asset('images/videos/indian-girl-video.png') }}" class="img-fluid">
                </div>

                <div class="col-3 mt-370">
                    <h5 class="mb-0 fw-300">
                        <b> Campanhas customizadas </b>
                    </h5>
                    <p class="text-muted fw-300 mt-2">Empresa</p>
                    <img src="{{ asset('images/videos/indian-girl-video.png') }}" class="img-fluid">
                </div>

                <div class="col-3 mt-215">
                    <h5 class="mb-0 fw-300">
                        <b> Insights </b>
                    </h5>
                    <p class="text-muted fw-300 mt-2">Empresa</p>
                    <img src="{{ asset('images/videos/indian-girl-video.png') }}" class="img-fluid">
                </div>

                <div class="col-3 mt-0">
                    <h5 class="mb-0 fw-300">
                        <b> Creator </b>
                    </h5>
                    <p class="text-muted fw-300 mt-2">Empresa</p>
                    <img src="{{ asset('images/videos/indian-girl-video.png') }}" class="img-fluid">
                </div>
            </div>
        </div>
    </section>

    <section class="py-7 bg-black text-white">
        <div class="container ">
            <div class="row mb-5 ">
                <div class="col-12">
                    <h5 class="mb-0 fw-300">
                        Alguns de nossos clientes:
                    </h5>
                </div>
            </div>

            <!-- Texto Institucional -->
            <div class="row py-5 nossos-clientes">
                <div class="col-3 col-lg-3 col-md-4 col-sm-12 col-xs-12">
                    <img src="{{ asset('images/clientes/airb&b.png') }}" class="img-fluid">
                </div>
                <div class="col-3 col-lg-3 col-md-4 col-sm-12 col-xs-12">
                    <img src="{{ asset('images/clientes/allianz.png') }}" class="img-fluid">
                </div>
                <div class="col-3 col-lg-3 col-md-4 col-sm-12 col-xs-12">
                    <img src="{{ asset('images/clientes/c6bank.png') }}" class="img-fluid">
                </div>
                <div class="col-3 col-lg-3 col-md-4 col-sm-12 col-xs-12">
                    <img src="{{ asset('images/clientes/catarina.png') }}" class="img-fluid">
                </div>
                <div class="col-3 col-lg-3 col-md-4 col-sm-12 col-xs-12">
                    <img src="{{ asset('images/clientes/downy.png') }}" class="img-fluid">
                </div>

                <div class="col-3 col-lg-3 col-md-4 col-sm-12 col-xs-12">
                    <img src="{{ asset('images/clientes/energizer.png') }}" class="img-fluid">
                </div>
                <div class="col-3 col-lg-3 col-md-4 col-sm-12 col-xs-12">
                    <img src="{{ asset('images/clientes/epson.png') }}" class="img-fluid">
                </div>
                <div class="col-3 col-lg-3 col-md-4 col-sm-12 col-xs-12">
                    <img src="{{ asset('images/clientes/estrela-bet.png') }}" class="img-fluid">
                </div>
                <div class="col-3 col-lg-3 col-md-4 col-sm-12 col-xs-12">
                    <img src="{{ asset('images/clientes/fgv.png') }}" class="img-fluid">
                </div>
                <div class="col-3 col-lg-3 col-md-4 col-sm-12 col-xs-12">
                    <img src="{{ asset('images/clientes/jbs.png') }}" class="img-fluid">
                </div>
                <div class="col-3 col-lg-3 col-md-4 col-sm-12 col-xs-12">
                    <img src="{{ asset('images/clientes/p&g.png') }}" class="img-fluid">
                </div>
                <div class="col-3 col-lg-3 col-md-4 col-sm-12 col-xs-12">
                    <img src="{{ asset('images/clientes/pilar.png') }}" class="img-fluid">
                </div>
                <div class="col-3 col-lg-3 col-md-4 col-sm-12 col-xs-12">
                    <img src="{{ asset('images/clientes/polenghui.png') }}" class="img-fluid">
                </div>
                <div class="col-3 col-lg-3 col-md-4 col-sm-12 col-xs-12">
                    <img src="{{ asset('images/clientes/puig.png') }}" class="img-fluid">
                </div>
                <div class="col-3 col-lg-3 col-md-4 col-sm-12 col-xs-12">
                    <img src="{{ asset('images/clientes/rayovac.png') }}" class="img-fluid">
                </div>
                <div class="col-3 col-lg-3 col-md-4 col-sm-12 col-xs-12">
                    <img src="{{ asset('images/clientes/sankhya.png') }}" class="img-fluid">
                </div>
                <div class="col-3 col-lg-3 col-md-4 col-sm-12 col-xs-12">
                    <img src="{{ asset('images/clientes/somos-juntos.png') }}" class="img-fluid">
                </div>
                <div class="col-3 col-lg-3 col-md-4 col-sm-12 col-xs-12">
                    <img src="{{ asset('images/clientes/swift.png') }}" class="img-fluid">
                </div>
                <div class="col-3 col-lg-3 col-md-4 col-sm-12 col-xs-12">
                    <img src="{{ asset('images/clientes/telecine.png') }}" class="img-fluid">
                </div>
                <div class="col-3 col-lg-3 col-md-4 col-sm-12 col-xs-12">
                    <img src="{{ asset('images/clientes/tiktok.png') }}" class="img-fluid">
                </div>
            </div>


        </div>
    </section>

    <section class="py-7 text-black bg-white">
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


@section('footer-bg-theme', 'bg-white')
@section('footer-text-theme', 'text-black')
