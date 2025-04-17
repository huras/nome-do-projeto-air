<nav class="navbar navbar-dark bg-dark sticky-top z-3" aria-label="air">
    <div class="container-fluid px-4 header-container">
        <a class="navbar-brand" href="/">
            <svg width="77" height="45" viewBox="0 0 77 45" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M29.499 11.3669V15.3816C26.3671 12.3112 22.0748 10.4135 17.3456 10.4135C7.78127 10.4135 0 18.1715 0 27.7074C0 37.2432 7.78127 45 17.3456 45C22.0748 45 26.3671 43.1022 29.499 40.0318V43.9578H36.4024V11.3669H29.499ZM17.3456 38.4784C11.388 38.4784 6.54108 33.6459 6.54108 27.7074C6.54108 21.7688 11.388 16.9363 17.3456 16.9363C23.3033 16.9363 28.1489 21.7688 28.1489 27.7074C28.1489 33.6459 23.302 38.4784 17.3456 38.4784Z"
                    fill="white" />
                <path d="M51.4548 11.3668H44.5513V43.9577H51.4548V11.3668Z" fill="white" />
                <path d="M51.4548 0H44.5513V7.14895H51.4548V0Z" fill="white" />
                <path
                    d="M66.5068 14.1182V11.3674H59.6033V43.9583H66.5068V27.7065C66.5068 21.8136 71.0894 17.0203 77 17.0203V10.5496C73.0531 10.5496 69.4136 11.8813 66.5068 14.1182Z"
                    fill="white" />
            </svg>
        </a>

        <div class="d-flex flex-row justify-content-md-center header-buttons mobile-hidden">
            <a href="#" class="btn btn-light" aria-label="Toggle navigation">
                Plataforma AirSearch
            </a>

            <a href="#" class="btn btn-light" aria-label="Toggle navigation">
                Campanhas Customizadas
            </a>

            <a href="#" class="btn btn-light" aria-label="Toggle navigation">
                Insights
            </a>

            <a href="{{ route('sou-creator') }}" class="btn btn-light" aria-label="Toggle navigation">
                Sou Creator
            </a>
        </div>

        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas"
            data-bs-target="#offcanvasNavbarDark" aria-controls="offcanvasNavbarDark"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="offcanvas offcanvas-start text-bg-dark w-100" tabindex="-1" id="offcanvasNavbarDark"
            aria-labelledby="offcanvasNavbarDarkLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasNavbarDarkLabel">
                    <svg width="77" height="45" viewBox="0 0 77 45" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M29.499 11.3669V15.3816C26.3671 12.3112 22.0748 10.4135 17.3456 10.4135C7.78127 10.4135 0 18.1715 0 27.7074C0 37.2432 7.78127 45 17.3456 45C22.0748 45 26.3671 43.1022 29.499 40.0318V43.9578H36.4024V11.3669H29.499ZM17.3456 38.4784C11.388 38.4784 6.54108 33.6459 6.54108 27.7074C6.54108 21.7688 11.388 16.9363 17.3456 16.9363C23.3033 16.9363 28.1489 21.7688 28.1489 27.7074C28.1489 33.6459 23.302 38.4784 17.3456 38.4784Z"
                            fill="white" />
                        <path d="M51.4548 11.3668H44.5513V43.9577H51.4548V11.3668Z" fill="white" />
                        <path d="M51.4548 0H44.5513V7.14895H51.4548V0Z" fill="white" />
                        <path
                            d="M66.5068 14.1182V11.3674H59.6033V43.9583H66.5068V27.7065C66.5068 21.8136 71.0894 17.0203 77 17.0203V10.5496C73.0531 10.5496 69.4136 11.8813 66.5068 14.1182Z"
                            fill="white" />
                    </svg>
                </h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"
                    aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('solucoes') }}">Soluções</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('sobre-nos') }}">Sobre nós</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('nossos-parceiros') }}">Nossos parceiros</a>
                    </li>
                    <li class="nav-item">
                        {{-- Criar rota: Route::get('/cases', ...) --}}
                        <a class="nav-link" href="{{ route('cases-externa') }}">Cases</a>
                    </li>
                    <li class="nav-item">
                        {{-- Criar rota: Route::get('/blog', ...) --}}
                        <a class="nav-link" target="_blank" href="https://airfluencers.com/blog/">Blog</a>
                    </li>
                    <li class="nav-item">
                        {{-- Criar rota: Route::get('/contato', ...) --}}
                        <a class="nav-link" href="{{ route('contato') }}">Contato</a>
                    </li>
                </ul>

            </div>
        </div>
    </div>
</nav>


@include('components.modal-contato-1')
@include('components.modal-contato-2')
@include('components.modal-central-apoio')