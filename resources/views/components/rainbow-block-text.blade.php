@props([
    'title' => 'Quer se conectar com a gente?',
    'buttonText' => 'Entre em contato',
    'buttonLink' => '#',
])

<section class="py-5 text-white" style="background: linear-gradient(90deg, #fd75fd, #8efff7);">
    <div class="container-fluid text-start">
        <div class="row">
            <div class="col-10 mx-auto">
                <h3 class="fw-500 mb-5 text-black">{{ $title }}</h3>
                <a href="{{ $buttonLink }}" class="btn btn-light fw-semibold">
                    {{ $buttonText }}
                </a>
            </div>
        </div>
    </div>
</section>
