<!-- Modal -->
<div class="modal fade" id="contactModal" tabindex="-1" aria-labelledby="contactModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content p-0 border-radius-0">

            <!-- Modal Header -->
            <div class="modal-header border-0">
                <h5 class="modal-title fw-500" id="contactModalLabel">Inicie a conversa com a Air.</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fechar"></button>
            </div>

            <!-- Modal Body -->
            <div class="modal-body pt-0">
                <p class="text-black fs-16 fw-300">
                    <strong class='fw-800'>Preencha os campos abaixo</strong>
                    e aguarde um dos nossos consultores entrar em contato.
                </p>

                <form action="{{ route('contact.send') }}" method="POST" class='mt-24'>
                    @csrf
                    <div class="row g-3">
                        <div class="col-md-6">
                            <input type="text" name="name" class="form-control" placeholder="*Nome" required>
                        </div>
                        <div class="col-md-6">
                            <input type="email" name="email" class="form-control" placeholder="*Email" required>
                        </div>
                        <div class="col-md-6">
                            <select name="role" class="form-select" required>
                                <option value="agencia">Agência</option>
                                <option value="marca">Marca</option>
                                <option value="creator">Creator</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <input type="text" name="phone" class="form-control" placeholder="*Telefone/Whatsapp" required>
                        </div>

                        <div class="col-12 text-area-with-counter">
                            <textarea name="message" class="form-control" rows="8" maxlength="400" placeholder="Mensagem" required oninput="
                                const textArea = this;
                                const counter = document.getElementById('message-text-area-counter');
                                const maxLength = textArea.getAttribute('maxlength');
                                const currentLength = textArea.value.length;
                                counter.textContent = `${currentLength}/${maxLength}`;
                                if (currentLength > maxLength) {
                                    textArea.value = textArea.value.substring(0, maxLength);
                                    counter.textContent = `${maxLength}/${maxLength}`;
                                }"></textarea>
                            <span id='message-text-area-counter' class="text-muted fs-12 text-area-counter">0/400</span>
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
                        <button type="submit" class="btn btn-dark">Enviar</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        $('#contactModal select[name=role]').select2({
            // dropdownParent: $('#contactModal .modal-dialog'),
            dropdownParent: $('#contactModal'),
            minimumResultsForSearch: Infinity,
            placeholder: "*Agência/Marca/Creator",
            allowClear: true
        });

        // $('#contactModal select[name=role]').select2({
        //     dropdownParent: $('#contactModal'),
        //     minimumResultsForSearch: Infinity,
        //     placeholder: "*Cargo na empresa",
        //     allowClear: true
        // });

        const selects = document.querySelectorAll('#contactModal select');
        selects.forEach(select => {
            const $select = $(select);
            $select.val(null).trigger('change');
        });
    });
</script>