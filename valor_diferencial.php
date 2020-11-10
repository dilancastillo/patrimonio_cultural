<?php
include("header.php");
?>

<div class="container">
    <div class="py-5 text-center">
        <h5 class="text-center text-light bg-success mb-2 p-2 rounded lead" id="result">Hello world!</h5>
        <h2 class="mb-5">3. Representar valor diferencial</h2>
        <div class="progress mb-3" style="height: 40px;">
            <div class="progress-bar bg-danger" role="progressbar" style="width: 14%;" id="progressBar">
                <b class="lead" id="progressText">Territorio</b>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <form action="" method="post" id="form-data">
        <div id="first">
            <h4 class="mb-3">Territorio</h4>
            <div class="row g-3">
                <div class="col-sm-6 mb-5">
                    <label for="item1" class="form-label">1. INFLUENCIA DE DESARROLLO ¿El elemento patrimonial contiene valores que hacen diferente al municipio de otro?</label>
                    <input id="item1" type="text" class="form-control" placeholder="" required>
                    <div class="invalid-feedback">
                        Por favor llene este campo.
                    </div>
                </div>
                <div class="col-sm-6 mb-5">
                    <label for="item2" class="form-label">2. VALOR UNIVERSAL ¿El elemento patrimonial representa en el territorio un valor único?</label>
                    <input id="item2" type="text" class="form-control" placeholder="" required>
                    <div class="invalid-feedback">
                        Por favor llene este campo.
                    </div>
                </div>
                <div class="col-sm-6 mb-5">
                    <label for="item3" class="form-label">3. IDENTIDAD CULTURAL ¿El territorio donde se encuentra ubicado este elemento patrimonial, es caracterizado por valores que lo hacen diferente a otros?</label>
                    <input id="item3" type="text" class="form-control" placeholder="" required>
                    <div class="invalid-feedback">
                        Por favor llene este campo.
                    </div>
                </div>
                <div class="col-sm-6 mb-5">
                    <label for="item4" class="form-label">4. IMPORTANCIA MATERIAL INTANGIBLE ¿El elemento patrimonial es materia cultural de importancia a nivel municipal?</label>
                    <input id="item4" type="text" class="form-control" placeholder="" required>
                    <div class="invalid-feedback">
                        Por favor llene este campo.
                    </div>
                </div>
                <div class="col-sm-6 mb-5">
                    <a href="#" class="btn btn-danger" id="next-1">Siguiente</a>
                </div>
            </div>
        </div>


        <div id="second">
            <h4 class="mb-3">Sociedad</h4>
            <div class="row g-3">
                <div class="col-sm-6 mb-5">
                    <label for="item1" class="form-label">1. TRADICIONES ANTEPASADOS ¿EL elemento patrimonial es considerado como tradición de los antepasados?</label>
                    <input id="item1" type="text" class="form-control" placeholder="" required>
                    <div class="invalid-feedback">
                        Por favor llene este campo.
                    </div>
                </div>
                <div class="col-sm-6 mb-5">
                    <label for="item2" class="form-label">2. ACTIVOS CULTURALES ¿El elemento patrimonial representa  un valor sentimental en la sociedad?</label>
                    <input id="item2" type="text" class="form-control" placeholder="" required>
                    <div class="invalid-feedback">
                        Por favor llene este campo.
                    </div>
                </div>
                <div class="col-sm-6 mb-5">
                    <label for="item3" class="form-label">3. RESPONSABILIDAD ÉTICA ¿El elemento  patrimonial representa un significado del pasado en la sociedad actual?</label>
                    <input id="item3" type="text" class="form-control" placeholder="" required>
                    <div class="invalid-feedback">
                        Por favor llene este campo.
                    </div>
                </div>
                <div class="col-sm-6 mb-5">
                    <label for="item4" class="form-label">4. ACCIONES COLECTIVAS ¿Existe un grupo social que tome acciones frente a los posibles  impactos patrimoniales del municipio?</label>
                    <input id="item4" type="text" class="form-control" placeholder="" required>
                    <div class="invalid-feedback">
                        Por favor llene este campo.
                    </div>
                </div>
                <div class="col-sm-6 mb-5">
                    <a href="#" class="btn btn-danger" id="prev-2">Anterior</a>
                    <a href="#" class="btn btn-danger" id="next-2">Siguiente</a>
                </div>
            </div>
        </div>


        <div id="third">
            <h4 class="mb-3">Identidad</h4>
            <div class="row g-3">
                <div class="col-sm-6 mb-5">
                    <label for="item1" class="form-label">1. CONSOLIDACIÓN DE IDENTIDAD ¿El elemento patrimonial representa la construcción de identidad en el municipio?</label>
                    <input id="item1" type="text" class="form-control" placeholder="" required>
                    <div class="invalid-feedback">
                        Por favor llene este campo.
                    </div>
                </div>
                <div class="col-sm-6 mb-5">
                    <label for="item2" class="form-label">2. PATICIPACIÓN DE POBLACIÓN ¿El elemento patrimonial es un medio de participación que representa la unicidad del municipio?</label>
                    <input id="item2" type="text" class="form-control" placeholder="" required>
                    <div class="invalid-feedback">
                        Por favor llene este campo.
                    </div>
                </div>
                <div class="col-sm-6 mb-5">
                    <label for="item3" class="form-label">3. REIVINDICACIÓN DE IDENTIDAD CULTURAL ¿El elemento patrimonial representa una forma de vida, donde se expresa la identidad de los habitantes del municipio?</label>
                    <input id="item3" type="text" class="form-control" placeholder="" required>
                    <div class="invalid-feedback">
                        Por favor llene este campo.
                    </div>
                </div>
                <div class="col-sm-6 mb-5">
                    <label for="item4" class="form-label">4. ACCIÓN DE ACOMPAÑAMIENTO ¿El elemento patrimonial  cede la unidad entre la cultura y la comunidad del municipio?</label>
                    <input id="item4" type="text" class="form-control" placeholder="" required>
                    <div class="invalid-feedback">
                        Por favor llene este campo.
                    </div>
                </div>
                <div class="col-sm-6 mb-5">
                    <a href="#" class="btn btn-danger" id="prev-3">Anterior</a>
                    <a href="#" class="btn btn-danger" id="next-3">Siguiente</a>
                </div>
            </div>
        </div>

        <div id="fourth">
            <h4 class="mb-3">Economía</h4>
            <div class="row g-3">
                <div class="col-sm-6 mb-5">
                    <label for="item1" class="form-label">1 FUNCIONAMIENTO ECONÓMICO ¿El elemento patrimonial, representa un valor económica que beneficia a los habitantes?</label>
                    <input id="item1" type="text" class="form-control" placeholder="" required>
                    <div class="invalid-feedback">
                        Por favor llene este campo.
                    </div>
                </div>
                <div class="col-sm-6 mb-5">
                    <label for="item2" class="form-label">2. HERRAMIENTAS DE CONSTRUCCIÓN  ¿El territorio representa un valor diferencial que promueva tensiones en sus habitantes?</label>
                    <input id="item2" type="text" class="form-control" placeholder="" required>
                    <div class="invalid-feedback">
                        Por favor llene este campo.
                    </div>
                </div>
                <div class="col-sm-6 mb-5">
                    <label for="item3" class="form-label">3. VALORACIÓN DE LA ECONOMíA ¿El elemento patrimonial representa un valor significativo que permita el desarrollo en la economía en el municipio?</label>
                    <input id="item3" type="text" class="form-control" placeholder="" required>
                    <div class="invalid-feedback">
                        Por favor llene este campo.
                    </div>
                </div>
                <div class="col-sm-6 mb-5">
                    <label for="item4" class="form-label">4. ACTIVIDADES ECONÓMICAS ¿El elemento patrimonial permite llevar a cabo actividades económicas que representen un valor sustancial para el municipio?</label>
                    <input id="item4" type="text" class="form-control" placeholder="" required>
                    <div class="invalid-feedback">
                        Por favor llene este campo.
                    </div>
                </div>
                <div class="col-sm-6 mb-5">
                    <a href="#" class="btn btn-danger" id="prev-4">Anterior</a>
                    <a href="#" class="btn btn-danger" id="next-4">Siguiente</a>
                </div>
            </div>
        </div>


        <div id="fifth">
            <h4 class="mb-3">Cultura</h4>
            <div class="row g-3">
                <div class="col-sm-6 mb-5">
                    <label for="item1" class="form-label">1. ACTIVIDADES RECREATIVAS ¿Dentro del elemento  patrimonial existen actividades recreativas que conlleven al desarrollo cultural del municipio?</label>
                    <input id="item1" type="text" class="form-control" placeholder="" required>
                    <div class="invalid-feedback">
                        Por favor llene este campo.
                    </div>
                </div>
                <div class="col-sm-6 mb-5">
                    <label for="item2" class="form-label">2. DESARROLLO LOCAL SOSTENIBLE ¿El elemento patrimonial juega un papel importante en  la revitalización de las comunidades?</label>
                    <input id="item2" type="text" class="form-control" placeholder="" required>
                    <div class="invalid-feedback">
                        Por favor llene este campo.
                    </div>
                </div>
                <div class="col-sm-6 mb-5">
                    <label for="item3" class="form-label">3. SERVICIOS CULTURALES ¿El elemento patrimonial permite el ofrecimiento de servicios culturales?</label>
                    <input id="item3" type="text" class="form-control" placeholder="" required>
                    <div class="invalid-feedback">
                        Por favor llene este campo.
                    </div>
                </div>
                <div class="col-sm-6 mb-5">
                    <label for="item4" class="form-label">4.ELEMENTO DE DESARROLLO ¿El elemento patrimonial es propio para el desarrollo cultural del municipio?</label>
                    <input id="item4" type="text" class="form-control" placeholder="" required>
                    <div class="invalid-feedback">
                        Por favor llene este campo.
                    </div>
                </div>
                <div class="col-sm-6 mb-5">
                    <a href="#" class="btn btn-danger" id="prev-5">Anterior</a>
                    <a href="#" class="btn btn-danger" id="next-5">Siguiente</a>
                </div>
            </div>
        </div>



        <div id="sixth">
            <h4 class="mb-3">Político</h4>
            <div class="row g-3">
                <div class="col-sm-6 mb-5">
                    <label for="item1" class="form-label">1.GESTIÓN DE PROYECTOS ¿El Elemento territorial, representa alguna modificación que lleve al cambio del estilo de vida de los habitantes?</label>
                    <input id="item1" type="text" class="form-control" placeholder="" required>
                    <div class="invalid-feedback">
                        Por favor llene este campo.
                    </div>
                </div>
                <div class="col-sm-6 mb-5">
                    <label for="item2" class="form-label">2. ACTORES LOCALES ¿El elemento territorial influye en diversas políticas de participación?</label>
                    <input id="item2" type="text" class="form-control" placeholder="" required>
                    <div class="invalid-feedback">
                        Por favor llene este campo.
                    </div>
                </div>
                <div class="col-sm-6 mb-5">
                    <label for="item3" class="form-label">3. ESTUDIO DE BIENES ¿El elemento patrimonial representa un valor  constitucional en proceso de desarrollo?</label>
                    <input id="item3" type="text" class="form-control" placeholder="" required>
                    <div class="invalid-feedback">
                        Por favor llene este campo.
                    </div>
                </div>
                <div class="col-sm-6 mb-5">
                    <label for="item4" class="form-label">4. INFLUENCIA EN EL DESARROLLO ¿El elemento patrimonial es un puente que alude organizaciones para la conformación de políticas culturales?</label>
                    <input id="item4" type="text" class="form-control" placeholder="" required>
                    <div class="invalid-feedback">
                        Por favor llene este campo.
                    </div>
                </div>
                <div class="col-sm-6 mb-5">
                    <a href="#" class="btn btn-danger" id="prev-6">Anterior</a>
                    <a href="#" class="btn btn-danger" id="next-6">Siguiente</a>
                </div>
            </div>
        </div>


        <div id="seventh">
            <h4 class="mb-3">Ambiental</h4>
            <div class="row g-3">
                <div class="col-sm-6 mb-5">
                    <label for="item1" class="form-label">1. POSTURA NATURALEZA ¿El elemento patrimonial, representa un valor importante en la preservación de la belleza natural del municipio?</label>
                    <input id="item1" type="text" class="form-control" placeholder="" required>
                    <div class="invalid-feedback">
                        Por favor llene este campo.
                    </div>
                </div>
                <div class="col-sm-6 mb-5">
                    <label for="item2" class="form-label">2. TRABAJO CIENTÍFICO ¿Existen estudios científicos que representen el elemento patrimonial natural del municipio?</label>
                    <input id="item2" type="text" class="form-control" placeholder="" required>
                    <div class="invalid-feedback">
                        Por favor llene este campo.
                    </div>
                </div>
                <div class="col-sm-6 mb-5">
                    <label for="item3" class="form-label">3.DESARROLLO LOCAL SOSTENIBLE ¿El elemento patrimonial, tiene en cuenta el valor constructivo del medio ambiente en el municipio?</label>
                    <input id="item3" type="text" class="form-control" placeholder="" required>
                    <div class="invalid-feedback">
                        Por favor llene este campo.
                    </div>
                </div>
                <div class="col-sm-6 mb-5">
                    <label for="item4" class="form-label">4.INICIATIVAS TENDIENTES A VALORACIÓN ¿Los habitantes del municipio crean iniciativas para la protección y valoración del patrimonio natural?</label>
                    <input id="item4" type="text" class="form-control" placeholder="" required>
                    <div class="invalid-feedback">
                        Por favor llene este campo.
                    </div>
                </div>
                <div class="col-sm-6 mb-5">
                    <a href="#" class="btn btn-danger" id="prev-7">Anterior</a>
                    <a href="intercambio_cultural.php" class="btn btn-success">Enviar</a>
                </div>
            </div>
        </div>
    </form>
</div>

<?php
include("footer.php");
?>