@extends('layouts.app')

@section('title', 'Soluções')

@section('content')
    @section('brand_title', 'FGV')
    @section('brand_image', 'images/cases/undefined.png')
    @section('objetivo', 'A Fundação Getulio Vargas (FGV) precisava impulsionar a campanha de vestibular, aumentando o awareness e o número de inscritos.')
    @section('desafio', 'A Fundação Getulio Vargas (FGV) precisava impulsionar a campanha de vestibular, aumentando o awareness e o número de inscritos.')
    @section('o_que_fizemos', 'Selecionamos influenciadores de diferentes nichos (educação, lifestyle e entretenimento) para comunicar as vantagens do vestibular da FGV. As postagens foram distribuídas entre Instagram e TikTok, utilizando Reels, Stories e vídeos curtos para alcançar o público jovem.')

    @section('total_impressions', '37,1M')
    @section('total_impressions_title', 'Impressões totais')

    @section('accounts_reached', '12M')
    @section('accounts_reached_title', 'Contas alcançadas')

    @section('interactions', '233k')
    @section('interactions_title', 'Interações')

    @section('effective_engagement', '3,3%')
    @section('effective_engagement_title', 'Engajamento efetivo')

    @section('differencial_influencers', 'O alto alcance e engajamento demonstraram a eficácia da estratégia digital, consolidando a FGV como uma das instituições de ensino mais desejadas pelos vestibulandos​​')
    @section('curent_case', 'fgv')

    @include('pages.case.cases-area-interna-shape')
@endsection


@section('footer-bg-theme', 'bg-black')
@section('footer-text-theme', 'text-white')
@section('footer-svg-fill', 'white')
