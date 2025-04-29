@extends('layouts.app')


@section('content')
    @section('brand_title', 'Swift')
    @section('brand_image', 'images/cases/undefined.png')
    @section('objetivo', 'Criar uma comunicação autêntica e estratégica com diferentes públicos, utilizando influenciadores para amplificar sua mensagem e alcançar novas audiências.')
    @section('desafio', 'A Swift buscava fortalecer sua presença digital e gerar maior awareness para seus produtos, consolidando-se como referência no setor de alimentos congelados de alta qualidade.')
    @section('o_que_fizemos', 'Ativamos um grupo seleto de influenciadores que seguiram suas linhas editoriais para garantir conteúdos naturais e alinhados à identidade da marca. Ao longo da campanha, foram entregues 14 conteúdos em diferentes formatos, explorando plataformas como TikTok e Instagram. O uso do humor e formatos criativos ajudou a aumentar a conexão com o público, tornando a mensagem mais envolvente e impactante.')

    @section('total_impressions', '1,9M')
    @section('total_impressions_title', 'Visualizações totais')

    @section('accounts_reached', '1,8M')
    @section('accounts_reached_title', 'Contas alcançadas')

    @section('interactions', '253k')
    @section('interactions_title', 'Interações')

    @section('effective_engagement', '30,8%')
    @section('effective_engagement_title', 'Estimativa de interações ultrapassaram')

    @section('differencial_influencers', 'A estratégia da Air, baseada na escolha de influenciadores alinhados e no uso de formatos estratégicos, reforçou a relevância da Swift no ambiente digital. A adaptação da comunicação ao estilo de cada criador contribuiu para a alta adesão da audiência, consolidando a marca como referência no segmento.')
    @section('curent_case', 'swift')

    @include('pages.case.cases-area-interna-shape')
@endsection


@section('footer-bg-theme', 'bg-black')
@section('footer-text-theme', 'text-white')
@section('footer-svg-fill', 'white')
