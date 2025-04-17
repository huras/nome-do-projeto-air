@extends('layouts.app')

@section('title', 'Soluções')

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

        <div class="container put-on-top-of-section">
            <div class="row">
                <div class="col-lg-8 col-md-8 me-auto d-flex flex-column justify-content-center text-start">
                    <h1 class="fw-300"> <span class="text-black">Marcas e Creators.</span></h1>
                </div>
            </div>
        </div>

        <div class="container-fluid mt-80">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-12 px-5">
                    <h4 class='fw-600 text-rainbow'> Visibilidade </h4>
                    <p class="text-white fs-20"> Conecte-se e tenha seu perfil disponível para milhares de empresas que procuram influenciadores como você. </p>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-12 px-5">
                    <h4 class='fw-600 text-rainbow'> Praticidade </h4>
                    <p class="text-white fs-20"> A partir do momento em que seu perfil está em nossa base, você estará visível para empresas interessadas em colaborações e parcerias. </p>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-12 px-5">
                    <h4 class='fw-600 text-rainbow'> Destaque </h4>
                    <p class="text-white fs-20"> Una-se à nossa empresa, com 15 anos de experiência no mercado e uma reputação sólida, conquistando a confiança de grandes clientes em busca de publicidade digital.  </p>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-12 px-5">
                    <h4 class='fw-600 text-rainbow'> Agilidade </h4>
                    <p class="text-white fs-20"> Para entrar em nossa plataforma, é muito simples! Basta preencher seu cadastro e conectar suas redes sociais desejadas. </p>
                </div>
            </div>
        </div>
    </section>

    <section class="pt-105 bg-black">
    </section>

    <x-rainbow-block-text
        title="Amplie sua chance de efetivar novos negócios!"
        button-text="Ir para o Meu Air"
        button-link="{{ route('my-air') }}"
    />

    <section class="py-5 bg-black text-white">
        <div class="container">
            <!-- Título principal -->
            <div class="row align-items-center mb-5 mt-5">
                <div class="col-lg-12 col-md-12 text-start">
                    <h1 class="fw-500 text-rainbow">Meu Air</h1>
                </div>
            </div>
        </div>
    </section>




    <div class="container-fluid bg-black text-white">
        <!-- Primeira linha: imagem do celular + texto descritivo -->
        <div class="row mb-5 d-flex flex-row align-items-start justify-content-start plataforma">
            <div class="col-12 col-md-6 pe-0">
                <img src="{{ asset('images/laptop-mockup.png') }}" alt="Phone and laptop" class="img-fluid hero-logo">
            </div>

            <div class="col-12 col-md-6 mb-5 mb-md-0 fw-300 align-items-start">
                <h5 class="fw-300 pe-2 my-0">Automatize. Apareça. Monetize.</h5>
                <h5 class="mb-3 fw-300 pe-2 my-0">Sua carreira, rentável e no piloto automático.</h5>
                <p class="text-muted-c3">
                    A REVOLUÇÃO É AGORA!
                </p>

                <p class="text-white fw-700">
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

            <div class="col-12 col-md-6 mb-5 mb-md-0 fw-300 align-items-start ps-4">
                <h5 class="mb-3 fw-300 pe-2">Creator, maximize seus ganhos já!</h5>
                <p class="text-muted-c3 mt-40">
                    <div>
                        <li class="fw-300 text-muted-c3 li-paragraph mb-2">
                            <b class="fw-600 text-white">+ LUCRO</b>: Aira encontra os produtos perfeitos para sua audiência e bomba sua dicas!
                        </li>
                        <li class="fw-300 text-muted-c3 li-paragraph mb-2">
                            <b class="fw-600 text-white">+ AGILIDADE</b>: Contratos DIGITAIS sem complicação e com SEGURANÇA!
                        </li>
                        <li class="fw-300 text-muted-c3 li-paragraph mb-2">
                            <b class="fw-600 text-white">+ PROFISSIONALISMO</b>: Mídia VISUAL incrível gerada em SEGUNDOS!
                        </li>
                        <li class="fw-300 text-muted-c3 li-paragraph mb-2">
                            <b class="fw-600 text-white">- CUSTOS</b>: Estoque ZERO, operação 100% DIGITAL!
                        </li>
                        <li class="fw-300 text-muted-c3 li-paragraph mb-2">
                            <b class="fw-600 text-white">+ ORGANIZAÇÃO</b>: Pagamentos AUTOMÁTICOS e SEM STRESS!
                        </li>
                    </div>
                </p>
            </div>
        </div>
    </div>

    <div class="container-fluid bg-black text-white pt-80">
    </div>

    <x-rainbow-block-text
        title="Construa o futuro da sua carreira agora!"
        button-text="Ir para o Meu Air"
        button-link="{{ route('my-air') }}"
    />

    {{-- --------------------- --}}

    <section class="py-5 pt-160 bg-black text-white">
        <div class="container">
            <!-- Título principal -->
            <div class="row align-items-center mb-5 mt-5">
                <div class="col-lg-12 col-md-12 text-start">
                    <h1 class="fw-500 text-rainbow">Connect</h1>
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <!-- Primeira linha: imagem do celular + texto descritivo -->
            <div class="row mb-5 d-flex flex-row align-items-start justify-content-start plataforma">
                <div class="col-12 col-md-6 pe-0">
                    <img src="{{ asset('images/phone-on-keyboard.png') }}" alt="Phone and laptop" class="img-fluid hero-logo">
                </div>

                <div class="col-12 col-md-6 mb-5 mb-md-0 fw-300 align-items-start ps-4">
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

        <x-rainbow-block-text
            title="Transforme audiência em oportunidades reais!"
            button-text="Faça agora o Connect"
            button-link="{{ route('my-air') }}"
        />


        <div class="bg-black text-white">
        </div>
    </section>

    {{-- ------------------------------------- --}}

    <section class="py-5 bg-black text-white">
    </section>



@endsection


@section('footer-bg-theme', 'bg-white')
@section('footer-text-theme', 'text-black')
@section('footer-svg-fill', 'white')