@extends('layouts.app')

@section('title', 'Air | A Plataforma para Criadores de Conteúdo Monetizarem sua Audiência')
@section('description', 'Descubra como a Air ajuda creators a monetizar, se conectar com marcas e transformar influência em renda. Cadastre-se gratuitamente!')

@section('content')
    <section class="text-white bg-black">
        <div class="container-fluid pt-105">
            <div class="row area-title-wrapper mt-5">
                <p class="text-muted-2 area-title-label">Creator</p>
            </div>
        </div>
        <div class="container d-flex align-items-center">
            <div class="row w-100">
                <div class="col-lg-8 col-md-8 d-flex flex-column justify-content-center text-start">
                    <h1 class="fw-300">O match perfeito entre</h1>
                    <h1 class="fw-300 display-sm-show pb-3">Marcas e Creators.</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="text-white bg-black relative">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <img src="{{ asset('images/sou-creator-hero.png') }}" class="img-fluid hero-logo">
                </div>
            </div>
        </div>

        <div class="container put-on-top-of-section display-sm-none">
            <div class="row">
                <div class="col-lg-8 col-md-8 me-auto d-flex flex-column justify-content-center text-start">
                    <h1 class="fw-300"> <span class="text-black">Marcas e Creators.</span></h1>
                    <div class="pt-3">
                        <a href="https://airkit.to/" class="btn btn-dark fw-semibold" target="_blank">
                            Ir para o Meu Air
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid mt-80">
            <div class="row">
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 px-4 px-sm-16px py-sm-20px pt-sm-0">
                    <h4 class='fw-600 w-100 text-rainbow normal-spacing fs-sm-36'> Visibilidade </h4>
                    <p class="text-white fs-20"> Conecte-se e tenha seu perfil disponível para milhares de empresas que procuram influenciadores como você. </p>
                </div>

                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 px-4 px-sm-16px py-sm-20px">
                    <h4 class='fw-600 w-100 text-rainbow normal-spacing fs-sm-36'> Praticidade </h4>
                    <p class="text-white fs-20"> A partir do momento em que seu perfil está em nossa base, você estará visível para empresas interessadas em colaborações e parcerias. </p>
                </div>

                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 px-4 px-sm-16px py-sm-20px">
                    <h4 class='fw-600 w-100 text-rainbow normal-spacing fs-sm-36'> Destaque </h4>
                    <p class="text-white fs-20"> Una-se à nossa empresa, com 15 anos de experiência no mercado e uma reputação sólida, conquistando a confiança de grandes clientes em busca de publicidade digital.  </p>
                </div>

                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 px-4 px-sm-16px py-sm-20px">
                    <h4 class='fw-600 w-100 text-rainbow normal-spacing fs-sm-36'> Agilidade </h4>
                    <p class="text-white fs-20"> Para entrar em nossa plataforma, é muito simples! Basta preencher seu cadastro e conectar suas redes sociais desejadas. </p>
                </div>
            </div>
        </div>
    </section>

    <section class="pt-105 bg-black display-sm-none">
    </section>

    <section class="py-4 text-white" style="background: linear-gradient(90deg, #fd75fd, #8efff7);">
        <div class="container px-0 py-0 px-sm-inherit text-start" style="margin-top: -8px !important;">
            <div class="row">
                <div class="col-12 mx-auto">
                    <h3 class="fw-500 mb-4 text-black rainbow-strip-h3 text-start text-start">Amplie sua chance de efetivar novos negócios!</h3>
                    <a href="https://airkit.to/" class="btn btn-light fw-semibold" target="_blank">
                        Ir para o Meu Air
                    </a>
                </div>
            </div>
        </div>
    </section>

    <div id='meu-air'></div>

    <section class="py-5 bg-black text-white py-sm-0">
        <div class="container">
            <!-- Título principal -->
            <div class="row align-items-center mb-5 mt-5 mb-sm-24px">
                <div class="col-lg-12 col-md-12 text-start">
                    <h1 class="fw-500 text-rainbow fs-sm-48">Meu Air</h1>
                </div>
            </div>
        </div>
    </section>




    <div class="container-fluid bg-black text-white">
        <!-- Primeira linha: imagem do celular + texto descritivo -->
        <div class="row mb-5 d-flex flex-row align-items-start justify-content-start plataforma mb-sm-0">
            <div class="col-12 col-md-6 pe-0 px-sm-inherit">
                <div id="heroCarousel2" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="6000">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="{{ asset('images/slider-images/meu-air-1.png') }}" alt="Air Logo Stroke" class="img-fluid hero-logo">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('images/slider-images/meu-air-2.png') }}" alt="Air Logo Stroke" class="img-fluid hero-logo">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('images/slider-images/meu-air-3.png') }}" alt="Air Logo Stroke" class="img-fluid hero-logo">
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-6 mb-5 mb-md-0 fw-300 align-items-start mt-sm-16px">
                <h5 class="text-white fw-300 pe-2 my-0">Automatize. Apareça. Monetize.</h5>
                <h5 class="mb-4 fw-300 pe-2 my-0">Sua carreira, rentável e no piloto automático.</h5>
                <p class="text-muted-c3 mb-4">
                    A REVOLUÇÃO É AGORA!
                </p>

                <p class="text-muted-c3 fw-700 mb-0 pb-0">
                    Creators, preparem-se para o GAME CHANGER!
                </p>

                <p class="text-muted-c3">
                    O Meu Air redefine o mercado digital com automação inteligente, conexões estratégicas e novas formas de ganhar dinheiro!
                </p>
            </div>
        </div>

        <div class="row d-flex flex-row-reverse align-items-start justify-content-start plataforma">
            <div class="col-12 col-md-6 pe-0">
                <img src="{{ asset('images/blonde-woman.png') }}" alt="Phone and laptop" class="img-fluid hero-logo">
            </div>

            <div class="col-12 col-md-6 mb-5 mb-md-0 fw-300 align-items-start ps-4 mt-sm-16px">
                <h5 class="mb-3 fw-300 pe-2">Creator, maximize seus ganhos já!</h5>
                <p class="text-muted-c3 mt-40 line-height-1">
                    <div>
                        <li class="fw-300 text-muted-c3 li-paragraph mb-2">
                            <b class="fw-600 text-muted-c3">+ LUCRO</b>: Aira encontra os produtos perfeitos para sua audiência e bomba sua dicas!
                        </li>
                        <li class="fw-300 text-muted-c3 li-paragraph mb-2">
                            <b class="fw-600 text-muted-c3">+ AGILIDADE</b>: Contratos DIGITAIS sem complicação e com SEGURANÇA!
                        </li>
                        <li class="fw-300 text-muted-c3 li-paragraph mb-2">
                            <b class="fw-600 text-muted-c3">+ PROFISSIONALISMO</b>: Mídia VISUAL incrível gerada em SEGUNDOS!
                        </li>
                        <li class="fw-300 text-muted-c3 li-paragraph mb-2">
                            <b class="fw-600 text-muted-c3">- CUSTOS</b>: Estoque ZERO, operação 100% DIGITAL!
                        </li>
                        <li class="fw-300 text-muted-c3 li-paragraph mb-2">
                            <b class="fw-600 text-muted-c3">+ ORGANIZAÇÃO</b>: Pagamentos AUTOMÁTICOS e SEM STRESS!
                        </li>
                    </div>
                </p>
            </div>
        </div>
    </div>

    <div class="container-fluid bg-black text-white pt-80 display-sm-none">
    </div>

    <x-rainbow-block-text
        title="Construa o futuro da sua carreira agora!"
        button-text="Ir para o Meu Air"
        button-link="https://airkit.to/"
        target="_blank"
    />

    {{-- --------------------- --}}

    <section class="py-5 pt-122 bg-black text-white py-sm-0">
        <div class="container">
            <!-- Título principal -->
            <div class="row align-items-center mb-5 mt-5 mb-sm-24px">
                <div class="col-lg-12 col-md-12 text-start">
                    <h1 class="fw-500 text-rainbow fs-sm-48">Connect</h1>
                </div>
            </div>
        </div>

        <div class="container-fluid pt-4 pt-sm-0">
            <!-- Primeira linha: imagem do celular + texto descritivo -->
            <div class="row mb-5 d-flex flex-row align-items-start justify-content-start plataforma mb-sm-0">
                <div class="col-12 col-md-6 pe-0">
                    <img src="{{ asset('images/phone-on-keyboard.png') }}" alt="Phone and laptop" class="img-fluid hero-logo">
                </div>

                <div class="col-12 col-md-6 mb-5 mb-md-0 fw-300 align-items-start ps-4 mt-sm-16px">
                    <h5 class="mb-3 fw-300 pe-2">Seu talento, sua vitrine!</h5>
                    <p class="text-muted-c3">
                        Temos novidades: <b class='fw-700 text-white'> uma marca demonstrou interesse em perfis como o seu para uma campanha incrível!</b>
                        <br><br>
                        Mas para ser notado, é preciso estar com o Instagram conectado.
                        Ao conectar, você ativa:
                        <br><br>

                        <div>
                            <li class="fw-300 text-muted-c3 li-paragraph">
                                Um mídia kit <b class="fw-600 text-white">atualizado automaticamente com suas métricas</b>.
                            </li>
                            <li class="fw-300 text-muted-c3 li-paragraph">
                                Seu perfil, <b class="fw-600 text-white">será visível para grandes marcas</b>, ampliando suas possibilidades de fechar uma campanha real.
                            </li>
                            <li class="fw-300 text-muted-c3 li-paragraph">
                                <b class="fw-600 text-white">Vitrine de oportunidades:</b> para você escolher as publis que mais se alinham ao seu perfil e autenticidade.
                            </li>
                        </div>
                    </p>
                </div>
            </div>
        </div>

        <section class="py-4 text-white" style="background: linear-gradient(90deg, #fd75fd, #8efff7);">
            <div class="container px-0 py-0 px-sm-inherit text-start" style="margin-top: -8px !important;">
                <div class="row">
                    <div class="col-12 mx-auto">
                        <h3 class="fw-500 mb-4 text-black rainbow-strip-h3 text-start text-start">Transforme audiência em oportunidades reais!</h3>
                        <button
                            class="btn btn-light fw-semibold"
                            data-bs-toggle="modal"
                            data-bs-target="#contactModal"
                        >
                            Faça agora o Connect
                        </button>
                    </div>
                </div>
            </div>
        </section>

        <div class="bg-black text-white display-sm-none">
        </div>
    </section>

    {{-- ------------------------------------- --}}

    <section class="py-5 bg-black text-white display-sm-none">
    </section>



@endsection


@section('footer-bg-theme', 'bg-white')
@section('footer-text-theme', 'text-black')
@section('footer-svg-fill', 'black')
