<!-- Modal -->
<div class="modal fade" id="supportCentralModal" tabindex="-1" aria-labelledby="supportCentralModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content p-0 border-radius-0">

            <!-- Modal Header -->
            <div class="modal-header border-0">
                <h5 class="modal-title fw-500" id="supportCentralModalLabel">Central de apoio</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fechar"></button>
            </div>

            <!-- Modal Body -->
            <div class="modal-body pt-0">
                <p class="text-black fs-16">
                    Aproveite a experiência completa dos nossos recursos disponíveis na <strong>Central de Apoio</strong>.
                </p>

                <form action="{{ route('contact.send') }}" method="POST" class='mt-24'>
                    @csrf
                    <div class="row g-3">
                        <div class="col-md-12">
                            <input type="text" name="name" class="form-control" placeholder="*Nome" required>
                        </div>
                        <div class="col-md-12">
                            <input type="text" name="email" class="form-control" placeholder="*E-mail" required>
                        </div>
                        <div class="col-md-12">
                            <input type="text" name="company" class="form-control" placeholder="*indique o nome da sua empresa" required>
                        </div>
                        <div class="col-md-12">
                            <select name="topic" class="form-select" required>
                                <option value="plataforma">Plataforma</option>
                                <option value="comercial">Comercial</option>
                                <option value="financeiro">Financeiro</option>
                                <option value="outros_assuntos">Outros assuntos</option>
                            </select>
                        </div>
                        <div class="col-12 text-area-with-counter">
                            <textarea name="message" class="form-control" rows="8" maxlength="400" placeholder="Assunto"></textarea>
                            <span class="text-muted fs-12 text-area-counter">0/400</span>
                            <small class="fw-300">*Preenchimento obrigatório</small>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-11 me-auto">
                            <p class="mt-2 fs-12 fw-300 mt-32">
                                Ao preencher o formulário, concordo em receber comunicações da empresa com conteúdos e informações relevantes.
                                Ao informar meus dados, eu concordo com a <a class='text-black' href="/privacy-policy" target="_blank">Política de Privacidade</a>.
                            </p>

                            <p class="mt-2 fs-12 fw-300">
                                Você pode alterar suas permissões de comunicação a qualquer tempo. Nos comprometemos em guardar suas informações em segurança.
                            </p>
                        </div>
                    </div>


                    <div class="mt-3 d-flex justify-content-end">
                        <button
                            type="button"
                            class="btn btn-outline-dark me-3"
                            data-bs-toggle="modal"
                            data-bs-target="#supportCentralInicialModal"
                        >
                            Voltar
                        </button>
                        <button type="submit" class="btn btn-dark">Enviar</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>


<script>
    document.addEventListener("DOMContentLoaded", function () {
        $('#supportCentralModal select[name=topic]').select2({
            // dropdownParent: $('#supportCentralModal .modal-dialog'),
            dropdownParent: $('#supportCentralModal'),
            minimumResultsForSearch: Infinity,
            placeholder: "*Quero falar sobre",
            allowClear: true
        });

        $('[data-select-topic-value]').on('click', function () {
            const selectValue = $(this).data('select-topic-value');
            $('#supportCentralModal select[name=topic]').val(selectValue).trigger('change');
        });
    });
</script>
