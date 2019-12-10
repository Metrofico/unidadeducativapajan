<div class="replacer-root container">
    <div class="row" style="margin-top: 100px">
        <div class="col-md-6" style="margin: auto">
            <div class="default-cursor animated slideInDown slower PermanentMarkerFont AcercaDeNosotros"
                 data-aos="zoom-out">
                Acerca de Nosotros

            </div>
        </div>
        <div class="col-md-6 p-5" style="margin: auto">
            <div class="justify-text default-cursor" data-aos="fade-left" data-aos-duration="4000">
                La educación en un proceso de formación integral de los seres humanos, tanto es el caso de los
                habitantes de
                esta geografía manabita prepararse para los sin números de problemas que tiene esta zona y del país.
                De hecho,
                la educación que oferta la Unidad Educativa Fiscal Paján representó y sigue representando un
                indicador
                importante de los jóvenes que se educan en el cantón Paján.
                Es de conocimiento general que el crecimiento de los pueblos surge en gran parte de la educación,
                dando
                oportunidades y habilidades a las personas con la que se disminuye la pobreza de la familia, creando
                micro y
                macro empresas y representaciones de organizaciones públicas y privada a nivel local, nacional e
                internacional.
                Es destacar evidentemente que la mayor cantidad de bachilleres egresados de este Plantel Educativo,
                tiene un
                alto nivel de acogida y aceptación de la juventud estudiosa de la ciudad...
                <div id="continuar-leyendo" class="continuar-leyendo">
                    Continuar leyendo
                </div>
            </div>
        </div>
    </div>

    <div class="row" style="margin-top: 200px">
        <hr>
        <div class="col" style="margin: auto">
            <div class="text-center que-ofertamos default-cursor" data-aos="fade-up" data-aos-duration="4000"
                 data-aos-anchor-placement="center-bottom">
                ¿Qué ofertamos?
            </div>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col text-bold" style="margin: auto; text-align: center" data-aos="fade-out"
             data-aos-duration="4000">
            Mediante Acuerdo Ministerial 1022 del 15 de abril de 1968,
            se logró el funcionamiento legal del Colegio con ciclo básico.
            En la actualidad cuenta con
        </div>
    </div>
    <div class="row">
        <div class="col-6" style="margin: auto">
            <div class="img-circular" data-aos="zoom-out-right" data-aos-duration="4000">
                <img class="scale-up" src="{{asset('svgs/birreta_icon.svg')}}" alt="">
                <div class="c-text-center">
                    Bachillerato General Basico Superior
                </div>
            </div>
            <div class="img-circular" data-aos="zoom-out-right" data-aos-delay="100">
                <img class="scale-up" src="{{asset('svgs/science_physics.svg')}}" alt="">
                <div class="c-text-center">
                    Bachillerato General Unificado en Ciencias
                </div>
            </div>
        </div>
        <div class="col-6" style="margin: auto">
            <div class="img-circular" data-aos="zoom-out-left" data-aos-duration="4000">
                <img class="scale-up" src="{{asset('svgs/field_farming.svg')}}" alt="">
                <div class="c-text-center">
                    Bachillerato Técnico de Producción Agropecuaria
                </div>
            </div>
            <div class="img-circular" data-aos="zoom-out-left" data-aos-delay="100">
                <img class="scale-up" src="{{asset('svgs/education.svg')}}" alt="">
                <div class="c-text-center">
                    Básica y Bachillerato Extraordinario
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col" style="margin: auto">
            <?php
            if (!isset($_SESSION)) {
                session_start();
            }
            if (!isset($_SESSION['counter'])) { // It's the first visit in this session
                $handle = fopen('counter.txt', "r") or die;
                if (!$handle) {
                    echo "Could not open the file";
                } else {
                    $counter = ( int )fread($handle, 20);
                    fclose($handle);
                    $counter++;
                    echo " <div class='default-cursor'  style='font-size: 1.2rem; margin-top: 50px' data-aos='fade-left' data-aos-duration='2000'> Contador de visitas: <div class='text-bold'>" . $counter . "</div> </div> ";
                    $handle = fopen('counter.txt', "w");
                    fwrite($handle, $counter);
                    fclose($handle);
                    $_SESSION['counter'] = $counter;
                }

            } else { // It's not the first time, do not update the counter but show the total hits stored in session
                $counter = $_SESSION['counter'];
                echo " <div class='default-cursor' style='font-size: 1.2rem; margin-top: 50px' data-aos='fade-left' data-aos-duration='2000'> Contador de visitas: <div class='text-bold'>" . $counter . "</div> </div> ";
            }
            ?>
        </div>
    </div>
    <hr>
    <div class="row c-bg-white text-center" style="padding: 50px; margin-top: 50px; margin-bottom: -50px"
         data-aos="fade-down" data-aos-duration="4000">
        <div class="col" style="margin: auto">
            <a href="https://educacion.gob.ec/" target="_blank">
                <img src="{{asset('pngs/MinisterioEducacion.jpg')}}" alt="">
            </a>
        </div>
        <div class="col" style="margin: auto">
            <a href="https://www.educacionsuperior.gob.ec/" target="_blank">
                <img src="{{asset('pngs/Senecyt.png')}}" alt="">
            </a>
        </div>
        <div class="col" style="margin: auto">
            <a href="http://www.snna.gob.ec/" target="_blank">
                <img src="{{asset('pngs/snna.png')}}" alt="">
            </a>

        </div>
    </div>
</div>
<script>
    $.getScript("{{asset('js/AOSInit.js')}}");
    $('#continuar-leyendo').click((event) => {
        event.preventDefault();
        loadView("#root-container", "/quienes-somos");
    });
</script>
