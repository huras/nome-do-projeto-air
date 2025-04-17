<!-- Modal -->
<div class="modal fade" id="supportCentralInicialModal" tabindex="-1" aria-labelledby="supportCentralInicialModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content p-0 border-radius-0">

            <!-- Modal Header -->
            <div class="modal-header border-0">
                <h5 class="modal-title fw-500 mt-2" id="supportCentralInicialModalLabel">Central de apoio</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fechar"></button>
            </div>

            <!-- Modal Body -->
            <div class="modal-body pt-0">
                <p class="text-black fs-16 fw-300">
                    Aproveite a experiência completa dos nossos recursos disponíveis na <strong class="fw-800">Central de Apoio</strong>.
                </p>

                <p class="text-black fs-16">
                    <strong>Escolha sobre qual assunto precisa de suporte.</strong>.
                </p>


                <div class="row g-3 mt-32">
                    <div class="col-md-12">
                        <button
                            type="button"
                            class="btn btn-dark w-100 mt-1 me-3"
                            data-bs-toggle="modal"
                            data-bs-target="#supportCentralModal"
                            data-select-topic-value="plataforma"
                        >
                            Suporte Plataforma Air Search
                        </button>
                    </div>
                    <div class="col-md-12">
                        <button
                            type="button"
                            class="btn btn-dark w-100 mt-1 me-3"
                            data-bs-toggle="modal"
                            data-bs-target="#supportCentralModal"
                            data-select-topic-value="comercial"
                        >
                            Suporte Campanhas Customizadas
                        </button>
                    </div>
                    <div class="col-md-12">
                        <button
                            type="button"
                            class="btn btn-dark w-100 mt-1 me-3"
                            data-bs-toggle="modal"
                            data-bs-target="#supportCentralModal"
                            data-select-topic-value="financeiro"
                        >
                            Suporte Desk Research
                        </button>
                    </div>
                    <div class="col-md-12">
                        <button
                            type="button"
                            class="btn btn-dark w-100 mt-1 me-3"
                            data-bs-toggle="modal"
                            data-bs-target="#supportCentralModal"
                            data-select-topic-value="outros_assuntos"
                        >
                            Suporte para não usuário
                        </button>
                    </div>
                    <div class="col-md-12">
                        <button
                            type="button"
                            class="btn btn-dark w-100 mt-1 me-3"
                            data-bs-toggle="modal"
                            data-bs-target="#supportCentralModal"
                            data-select-topic-value=""
                        >
                            Não consigo fazer login
                        </button>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>


<script>
    document.addEventListener("DOMContentLoaded", function () {
        $('#supportCentralInicialModal select[name=topic]').select2({
            dropdownParent: $('#supportCentralInicialModal'),
            minimumResultsForSearch: Infinity,
            placeholder: "*Quero falar sobre",
            allowClear: true
        });

        const selects = document.querySelectorAll('#supportCentralInicialModal select');
        selects.forEach(select => {
            const $select = $(select);
            $select.val(null).trigger('change');
        });
    });
</script>
