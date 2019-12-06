<link rel="stylesheet" href="{{asset('css/contactanos.css')}}">
<div class="container">
    <div class="row">
        <div class="col" style="margin: auto">
            <div class="default-cursor animated slideInDown slower PermanentMarkerFont FontSize2rem"
                 data-aos="zoom-out">
                CONTÁCTANOS
            </div>
        </div>
    </div>
    <div class="row m-5">
        <div class="col-md-4" style="margin: auto; font-size: 1.2rem; color: #a02821">
            Si tienes algún comentario, o necesitas contactarte con nosotros, llena este formulario y lo más pronto te
            responderemos a tu correo
        </div>
    </div>
    <div class="row m-md-5">
        <div class="col" style="margin: auto">
            <div class="card animated slideInUp text-center fast" style="margin: auto; padding: 3vw" data-aos="fade-up"
                 data-aos-duration="1400">
                <div>
                    <img class="card-img-top text-center email-us" style="width: 35vw; height: 35vh"
                         src="{{asset('svgs/contactanos.svg')}}"
                         alt="Contactanos Pajan">
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-5" style="margin: auto; font-size: 2.4vw">
                            Formulario
                        </div>
                    </div>

                    <div class="col-md-8" style="margin: auto">
                        <div class="md-form ml-md-5 mr-md-5">
                            <i class="fas fa-user prefix d-inline"></i>
                            <input type="text" id="inputNombre" class="form-control d-inline"
                                   aria-describedby="textHelpBlockMD">
                            <label for="inputNombre">Nombre</label>
                            <span id="textHelpBlockMD" class="form-text text-muted">
                                    Es importante que escribas tu nombre
                                </span>
                        </div>
                        <div class="md-form ml-md-5 mr-md-5">
                            <i class="fas fa-signature prefix d-inline"></i>
                            <input type="text" id="inputApellido" class="form-control d-inline"
                                   aria-describedby="textdHelpBlockMD">
                            <label for="inputApellido">Apellido</label>
                            <span id="textHelpBlockMD" class="form-text text-muted">
                                    Es importante que escribas tu nombre
                                </span>
                        </div>
                        <div class="md-form ml-md-5 mr-md-5">
                            <i class="fas fa-mobile-alt prefix d-inline"></i>
                            <input type="text" id="inputTelefono" class="form-control d-inline"
                                   aria-describedby="textdHelpBlockMD">
                            <label for="inputTelefono">Teléfono o Celular (opcional)</label>
                            <span id="textHelpBlockMD" class="form-text text-muted">
                                    Puedes escribir tu teléfono (con codigo de provincia) o tu numero celular
                                </span>
                        </div>
                        <div class="md-form ml-md-5 mr-md-5">
                            <i class="fas fa-envelope prefix d-inline"></i>
                            <input type="text" id="inputCorreo" class="form-control d-inline"
                                   aria-describedby="textdHelpBlockMD">
                            <label for="inputCorreo">Correo electrónico (opcional)</label>
                            <span id="textHelpBlockMD" class="form-text text-muted">
                                    Nosotros te responderemos tu mensaje a esta dirección de correo electrónico
                                </span>
                        </div>
                        <div class="md-form ml-md-5 mr-md-5">
                            <i class="fas fa-envelope-open-text prefix d-inline"></i>
                            <textarea id="textarea-char-counter" class="form-control md-textarea d-inline"
                                      rows="4"></textarea>
                            <label for="textarea-char-counter">Escriba su mensaje</label>
                        </div>
                        <div class="btn btn-green">
                            Enviar Mensaje
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

</div>
<script>
    $.getScript("{{asset('js/AOSInit.js')}}");
    $(".card").hover(
        function () {
            $(this).addClass('shadow');
        }, function () {
            $(this).removeClass('shadow');
        }
    );
</script>

