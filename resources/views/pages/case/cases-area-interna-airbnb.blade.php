@extends('layouts.app')

@section('title', 'Soluções')

@section('content')
    @section('brand_title', 'Airbnb')
    @section('brand_image', 'images/cases/undefined.png')
    @section('objetivo', 'Aumentar o alcance da marca por meio de influenciadores estratégicos, garantindo um engajamento genuíno com seu público-alvo e impulsionando reservas na plataforma.')
    @section('desafio', 'O Airbnb buscava ampliar sua visibilidade digital no Brasil e consolidar-se como a principal escolha de hospedagem para viajantes que buscam conforto, experiências autênticas e conexão com a natureza.')
    @section('o_que_fizemos', 'A campanha Trusted Voices 2024 ativou 21 influenciadores de perfis diversos para compartilhar suas experiências com o Airbnb, destacando o conforto, a exclusividade das acomodações e os diferenciais da marca. Com a criação de 206 conteúdos, distribuídos entre 166 Stories, 24 Posts e 16 TikToks, conseguimos gerar uma narrativa envolvente e autêntica, impactando milhões de usuários.')

    @section('total_impressions', '52,7M')
    @section('total_impressions_title', 'Usuários alcançados')

    @section('accounts_reached', '711k')
    @section('accounts_reached_title', 'Interações (11% engajamento)')

    @section('interactions', '21')
    @section('interactions_title', 'Viagens realizadas')

    @section('effective_engagement', '206')
    @section('effective_engagement_title', 'Conteúdos publicados')

    @section('differencial_influencers', 'Além de impulsionar o awareness da marca, o engajamento dos influenciadores converteu-se diretamente em novas contas abertas, validando a estratégia da Air como um dos principais motores de aquisição digital do C6 Bank​.')
    @section('curent_case', 'airbnb')

    @include('pages.case.cases-area-interna-shape')
@endsection


@section('footer-bg-theme', 'bg-black')
@section('footer-text-theme', 'text-white')
@section('footer-svg-fill', 'white')
