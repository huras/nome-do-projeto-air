@props([
    'title' => 'Quer se conectar com a gente?',
    'buttonText' => 'Entre em contato',
    'buttonLink' => '#',
    'buttonAttrs' => '',
])

<section class="py-3 text-white" style="background: linear-gradient(90deg, #fd75fd, #8efff7);">
    <div class="container px-0 py-0 text-start" style="margin-top: -8px !important;">
        <div class="row">
            <div class="col-12">
                <div class='ms-auto d-flex flex-column justify-content-center align-items-start text-center'>
                    <h3 class="fw-500 mb-4 text-black rainbow-strip-h3">{{ $title }}</h3>
                    <a href="{{ $buttonLink }}" class="btn btn-light fw-semibold" {{$buttonAttrs}}>
                        {{ $buttonText }}
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
