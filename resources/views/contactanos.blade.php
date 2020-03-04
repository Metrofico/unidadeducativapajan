<link rel="stylesheet" href="{{asset('css/contactanos.css')}}">
<div class="replacer-root container">
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
                         src="{{asset('svgs/ue_pajan.svg')}}"
                         alt="Contactanos Pajan">
                </div>
                <div class="card-body">
                    <div class="col-lg-8" style="margin: auto">
                        <div class="md-form ml-lg-5 mr-lg-5">
                            <i class="fas fa-user prefix d-inline"></i>
                            <input type="text" id="inputNombre" class="form-control d-inline"
                                   aria-describedby="textHelpBlockMD">
                            <label for="inputNombre">Nombre</label>
                            <span id="textHelpBlockMD" class="form-text text-muted">
                                    Es importante que escribas tu nombre
                                </span>
                        </div>
                        <div class="md-form ml-lg-5 mr-lg-5">
                            <i class="fas fa-signature prefix d-inline"></i>
                            <input type="text" id="inputApellido" class="form-control d-inline"
                                   aria-describedby="textdHelpBlockMD">
                            <label for="inputApellido">Apellido</label>
                            <span id="textHelpBlockMD" class="form-text text-muted">
                                    Es importante que escribas tu nombre
                                </span>
                        </div>
                        <div class="md-form ml-lg-5 mr-lg-5">
                            <i class="fas fa-mobile-alt prefix d-inline"></i>
                            <input type="text" id="inputTelefono" class="form-control d-inline"
                                   aria-describedby="textdHelpBlockMD">
                            <label for="inputTelefono">Teléfono o Celular (opcional)</label>
                            <span id="textHelpBlockMD" class="form-text text-muted">
                                    Puedes escribir tu teléfono (con codigo de provincia) o tu numero celular
                                </span>
                        </div>
                        <div class="md-form ml-lg-5 mr-lg-5">
                            <i class="fas fa-envelope prefix d-inline"></i>
                            <input type="text" id="inputCorreo" class="form-control d-inline"
                                   aria-describedby="textdHelpBlockMD">
                            <label for="inputCorreo">Correo electrónico (opcional)</label>
                            <span id="textHelpBlockMD" class="form-text text-muted">
                                    Nosotros te responderemos tu mensaje a esta dirección de correo electrónico
                                </span>
                        </div>
                        <div class="md-form ml-lg-5 mr-lg-5">
                            <i class="fas fa-envelope-open-text prefix d-inline"></i>
                            <textarea id="textarea-char-counter" class="form-control md-textarea d-inline"
                                      rows="4"></textarea>
                            <label for="textarea-char-counter">Escriba su mensaje</label>
                        </div>
                        <div id="enviar-mensaje" class="btn btn-green">
                            Enviar Mensaje
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="alert alert-primary alert-dismissible fade out" id="bsalert">
        <strong>Mensaje enviado!</strong> El mensaje que escribiste se ha enviado, pronto lo revisaremos
        <button type="button" class="close" data-dismiss="alert">&times;</button>
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

    function toggleAlert() {
        $(".alert").toggleClass('fade out');
        return false; // Mantiene el evento close.bs.alert cada vez que es removido del DOM
    }

    function clearInput() {
        $("#inputNombre").focus().val('');
        $("#inputApellido").focus().val('');
        $("#inputTelefono").focus().val('');
        $("#inputCorreo").focus().val('');
        $("#textarea-char-counter").focus().val('');
    }

    $('#bsalert').on('close.bs.alert', toggleAlert);
    $("#enviar-mensaje").click(function (e) {
        e.preventDefault();

        let nombre = $("#inputNombre").val();
        let apellido = $("#inputApellido").val();
        let celular = $("#inputTelefono").val();
        let email = $("#inputCorreo").val();
        let mensaje = $("#textarea-char-counter").val();
        if (!nombre || !apellido || !mensaje) {
            alert("Complete los campos obligatorios para continuar");
            return;
        }
        let btn = $(this);
        btn.attr("disabled", true);
        $.ajax({
            method: 'POST', // Tipo de metodo
            url: '/send-email', // Url el cual se basea en routes
            data: {
                "_token": "{{ csrf_token() }}",
                'nombre': nombre,
                'apellido': apellido,
                'celular': celular,
                'email': email,
                'mensaje': mensaje
            }, // El dato a enviar en JSON
            dataType: 'json',
            success: function (response) { // Que sucede al enviarse
                let sended = response["sended"];
                btn.removeAttr("disabled");
                if (sended === "ok") {
                    clearInput();
                    toggleAlert();
                    $("html, body").animate({scrollTop: $(document).height()}, 1000);
                    return;
                }
                alert("Ocurrio un error al enviar el mensaje");
            },
            error: function (jqXHR, textStatus, errorThrown) { // Que sucede al obtener error
                console.log(jqXHR);
                console.log("AJAX error: " + textStatus + ' : ' + errorThrown);
            }
        });
    })
</script>

