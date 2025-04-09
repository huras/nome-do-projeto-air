@extends('layouts.app')

@section('title', 'Home')

@section('content')
<section class="hero-section text-white bg-black">
    <div class="container min-vh-100 d-flex align-items-center">
        <div class="row w-100">
            <div class="col-lg-5 col-md-12 d-flex flex-column justify-content-center text-center home-hero-wrapper mx-auto">
                <h1 class="fw-light home-hero-text">Nós</h1>
                <h1 class="fw-light home-hero-text-secondary">somos a.</h1>
            </div>
            <div class="col-lg-6 col-md-12 d-flex justify-content-center align-items-center home-hero-wrapper">
                <img src="{{ asset('images/air_logo_home.png') }}" alt="Air Logo Stroke" class="img-fluid hero-logo">
            </div>
        </div>
    </div>
</section>

<section class="hero-section text-white bg-black mb-2 pt-5">
    <div class="container-fluid px-0 d-flex align-items-center home-hero-imgs-wrapper">
        <img src="{{ asset('images/home_bg_1.png') }}" alt="Air Logo Stroke" class="img-fluid w-100 hero-imgs-1">
        <img src="{{ asset('images/home_bg_2.png') }}" alt="Air Logo Stroke" class="img-fluid pe-4 w-100 hero-imgs-2">

        <div class="container call-2 d-flex flex-column justify-content-center text-start home-hero-img-call">
            <h2 class="fw-light">Nós somos</h2>
            <h2 class="fw-light">a Air.</h2>
        </div>
    </div>
</section>

<section class="py-5">
    <div class="container">
      <!-- Texto Institucional -->
      <div class="row mb-5">
        <div class="col-12 col-md-8 col-sm-12 mx-auto">
          <p class="highlight-text text-justify mb-0 call-4">
            Nascemos para transformar a relação entre pessoas e marcas.
            <br>
            Unimos empatia, criatividade e tecnologia para transformar diálogos em campanhas memoráveis — campanhas que geram conversas e impacto de verdade.
          </p>
        </div>
      </div>

      <!-- Três Colunas -->
      <div class="row g-4 mt-5">
        <!-- Coluna 1 -->
        <div class="col-12 col-md-4">
          <h3 class="feature-title">A gente cria. Ouve. Estuda. Analisa. Mede. Conecta.</h3>
          <p class="feature-desc mt-2">
            Fazemos com que as marcas falem de forma mais direta e honesta com seus consumidores, trazendo para essa conversa os criadores mais talentosos que o nosso país tem.
          </p>
        </div>

        <!-- Coluna 2 -->
        <div class="col-12 col-md-4">
          <h3 class="feature-title">Aqui na AIR a gente acredita que criar impacto não é sorte — é método.</h3>
          <p class="feature-desc mt-2">
            A gente equilibra dados e sensibilidade, combinando inteligência com criatividade para entregar resultados que realmente fazem diferença.
          </p>
        </div>

        <!-- Coluna 3 -->
        <div class="col-12 col-md-4">
          <h3 class="feature-title">Somos pioneiros. Somos inquietos.</h3>
          <p class="feature-desc mt-2">
            E para a gente isso é tudo. Tudo mesmo.
          </p>
        </div>
      </div>
    </div>
  </section>

  <section class="py-5">
    <div class="container">
      <!-- Bloco de introdução + comparação -->
      <div class="row align-items-center mb-5">
        <!-- Texto Esquerda -->
        <div class="col-12 col-md-4 mb-4 mb-md-0">
          <h4 class="fw-bold">AIR: Resultados que superam expectativas e redefinem o mercado.</h4>
          <p class="text-muted mb-0">
            Conversas autênticas? Sim, a gente domina. Mas o nosso foco é no impacto real. A gente usa dados, inteligência e criatividade para entregar resultados que realmente fazem a diferença. E a gente não para até ver a sua marca no topo.
          </p>
        </div>

        <!-- Comparação Direita -->
        <div class="col-12 col-md-6 mx-auto">
          <div class="row text-center">
            <!-- Cabeçalhos -->
            <div class="col-4"></div>
            <div class="col-4 fw-bold comparison-title">Mercado</div>
            <div class="col-4 fw-bold bg-black text-white comparison-title">Air</div>

            <!-- Linha 1 -->
            <div class="col-4 comparison-label d-flex flex-column"><div>Taxa</div> <div> de alcance</div></div>
            <div class="col-4 comparison-col">8%</div>
            <div class="col-4 comparison-col bg-black">19,8%</div>

            <!-- Linha 2 -->
            <div class="col-4 comparison-label second-row d-flex flex-column"><div>Taxa</div> <div> de cliques</div></div>
            <div class="col-4 comparison-col comparison-table second-row">0,8%</div>
            <div class="col-4 comparison-col bg-black comparison-table second-row">1,1%</div>
          </div>
        </div>
      </div>

      <!-- Métricas Inferiores -->
      <div class="row text-center gy-4">
        <div class="col-xs-12 col-sm-12 col-md-3">
          <div class="metric-title">15</div>
          <span class="fw-bold">anos de mercado</span>
          <span class="metric-sub">Pioneira em<br>Marketing de Influência</span>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-3">
          <div class="metric-title">+1.000</div>
          <div>
              <span class="fw-bold">campanhas</span>
              <span class="metric-sub">transformadas<br>em conversas personalizadas</span>
          </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-3">
          <div class="metric-title">+50</div>
          <div>
              <span class="fw-bold">marcas</span>
              <span class="metric-sub">atendidas<br>simultaneamente</span>
          </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-3">
          <div class="metric-title">80%</div>
          <div class="fw-bold">taxa de retenção</div>
          <div class="metric-sub">de clientes</div>
        </div>
      </div>
    </div>
  </section>

@endsection
