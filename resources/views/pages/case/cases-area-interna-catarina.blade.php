@extends('layouts.app')

@section('title', 'Soluções')

@section('content')
    @section('brand_title', 'Catarina Fashion Outlet')
    @section('brand_image', 'images/cases/undefined.png')
    @section('objetivo', 'Construir uma comunicação autêntica com diferentes públicos e converter o engajamento da audiência em novas contas.')
    @section('desafio', 'Fortalecer a presença digital do Catarina Fashion Outlet, mostrando a variedade de lojas, promoções e experiências disponíveis para os consumidores nas ativações e em datas sazonais.')
    @section('o_que_fizemos', 'Ao longo da campanha Always On, ativamos +20 influenciadores, que criaram conteúdos focados em lifestyle e dicas de compras. O Instagram foi o canal principal, explorando Reels e Stories para impulsionar a descoberta do outlet.')

    @section('total_impressions', '13,9M')
    @section('total_impressions_title', 'Seguidores impactados')

    @section('accounts_reached', '2,9M')
    @section('accounts_reached_title', 'Impressões totais')

    @section('interactions', '1,3M')
    @section('interactions_title', 'Contas alcançadas')

    @section('effective_engagement', '5,2%')
    @section('effective_engagement_title', 'Engajamento efetivo')

    @section('differencial_influencers', 'O resultado foi uma forte conexão entre público e marca, consolidando o Catarina Fashion Outlet como um dos principais destinos de compras no Brasil​!')
    @section('curent_case', 'catarina')

    @include('pages.case.cases-area-interna-shape')
@endsection


@section('footer-bg-theme', 'bg-black')
@section('footer-text-theme', 'text-white')
@section('footer-svg-fill', 'white')
