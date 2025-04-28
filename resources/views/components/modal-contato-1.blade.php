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
                            <input type="empresa" name="empresa" class="form-control" placeholder="*Empresa" required>
                        </div>
                        <div class="col-md-6">
                            <select name="role" class="form-select" required>
                                <option value="socio_ceo_proprietario">Sócio/ CEO / Proprietário (a)</option>
                                <option value="diretor_vendas">Diretor(a) de Vendas</option>
                                <option value="diretor_marketing">Diretor(a) de Marketing</option>
                                <option value="diretor_outras_areas">Diretor(a) Outras Áreas</option>
                                <option value="gerente_marketing">Gerente de Marketing</option>
                                <option value="gerente_vendas">Gerente de Vendas</option>
                                <option value="coordenador_supervisor_marketing">Coordenador(a)/Supervisor(a) de Marketing</option>
                                <option value="coordenador_supervisor_vendas">Coordenador(a)/Supervisor(a) de Vendas</option>
                                <option value="analista_assistente_marketing">Analista/Assistente de Marketing</option>
                                <option value="analista_assistente_vendas">Analista/Assistente de Vendas</option>
                                <option value="vendedor_executivo_contas">Vendedor(a) / Executivo(a) de Contas</option>
                                <option value="estudante">Estudante</option>
                                <option value="outros_cargos">Outros Cargos</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <input type="text" name="telefone" class="form-control" placeholder="*Telefone/Whatsapp" required>
                        </div>
                        <div class="col-md-6">
                            <input type="email" name="email" class="form-control" placeholder="*Email corporativo" required>
                        </div>
                        <div class="col-md-6">
                            <input type="text" name="site" class="form-control" placeholder="*Site da empresa" required>
                        </div>
                        <div class="col-md-6">
                            <select name="segmento_empresa" class="form-select" required>
                                <option value="agronegocio">Agronegócio</option>
                                <option value="consultorias_treinamentos">Consultorias e Treinamentos</option>
                                <option value="ecommerce">Ecommerce</option>
                                <option value="educacao_ensino">Educação e Ensino</option>
                                <option value="agencia_marketing_publicidade">Agência de Marketing e Publicidade</option>
                                <option value="engenharia_industria_geral">Engenharia e Indústria Geral</option>
                                <option value="eventos">Eventos</option>
                                <option value="financeiro_juridico_servicos">Financeiro, Jurídico e Serviços Relacionados</option>
                                <option value="governo_orgaos_publicos">Governo e Órgãos Públicos</option>
                                <option value="hardware_eletronicos">Hardware e Eletrônicos</option>
                                <option value="imobiliarias">Imobiliárias</option>
                                <option value="midia_comunicacao">Mídia e Comunicação</option>
                                <option value="ongs">ONGs</option>
                                <option value="saude_estetica">Saúde e Estética</option>
                                <option value="seguros">Seguros</option>
                                <option value="servicos_geral">Serviços em Geral</option>
                                <option value="servicos_rh_coaching">Serviços em RH e Coaching</option>
                                <option value="software_cloud">Software e Cloud</option>
                                <option value="telecomunicacoes">Telecomunicações</option>

                            </select>
                        </div>
                        <div class="col-md-6">
                            <input type="text" name="workers" class="form-control" placeholder="*Número de funcionários" required>
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
            placeholder: "*Cargo na empresa",
            allowClear: true
        });

        $('#contactModal select[name=segmento_empresa]').select2({
            dropdownParent: $('#contactModal'),
            minimumResultsForSearch: Infinity,
            placeholder: "*Segmento da empresa",
            allowClear: true
        });

        const selects = document.querySelectorAll('#contactModal select');
        selects.forEach(select => {
            const $select = $(select);
            $select.val(null).trigger('change');
        });
    });
</script>