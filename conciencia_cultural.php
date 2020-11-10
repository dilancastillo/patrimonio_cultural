<?php
include("header.php");
?>

<div class="container">
    <div class="py-5 text-center">
        <h5 class="text-center text-light bg-success mb-2 p-2 rounded lead" id="result">Hello world!</h5>
        <h2 class="mb-5">1. Genera conciencia cultural en su comunidad</h2>
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
                    <label for="item1" class="form-label">1. TRADICIÓN DE PUEBLOS ¿El elemento patrimonial representa tradiciones que generen conciencia cultural para su municipio?</label>
                    <input id="item1" type="text" class="form-control" placeholder="" required>
                    <div class="invalid-feedback">
                        Por favor llene este campo.
                    </div>
                </div>
                <div class="col-sm-6 mb-5">
                    <label for="item2" class="form-label">2. CAMBIO DE EXPRESIONES ¿El elemento patrimonial es instrumento de conciencia para la caracterización cultural de su municipio?</label>
                    <input id="item2" type="text" class="form-control" placeholder="" required>
                    <div class="invalid-feedback">
                        Por favor llene este campo.
                    </div>
                </div>
                <div class="col-sm-6 mb-5">
                    <label for="item3" class="form-label">3. CONSTRUCCIÓN CULTURAL ¿La ubicación del territorio es una fuente que permite la construcción cultural del municipio?</label>
                    <input id="item3" type="text" class="form-control" placeholder="" required>
                    <div class="invalid-feedback">
                        Por favor llene este campo.
                    </div>
                </div>
                <div class="col-sm-6 mb-5">
                    <label for="item4" class="form-label">4. IDENTIDAD DE PUEBLOS ¿El elemento patrimonial representa identidad cultural en su Municipio?</label>
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
                    <label for="item1" class="form-label">1. SENTIDO DE PERTENENCIA ¿El elemento patrimonial genera en la sociedad sentido de pertenencia hacia sus representaciones culturales?</label>
                    <input id="item1" type="text" class="form-control" placeholder="" required>
                    <div class="invalid-feedback">
                        Por favor llene este campo.
                    </div>
                </div>
                <div class="col-sm-6 mb-5">
                    <label for="item2" class="form-label">2. SOCIEDAD CONCRETA ¿El elemento patrimonial genera conciencia cultural en la sociedad?</label>
                    <input id="item2" type="text" class="form-control" placeholder="" required>
                    <div class="invalid-feedback">
                        Por favor llene este campo.
                    </div>
                </div>
                <div class="col-sm-6 mb-5">
                    <label for="item3" class="form-label">3. SIGNIFICADO SOCIAL ¿El elemento patrimonial contiene un significado cultural importante para la sociedad?</label>
                    <input id="item3" type="text" class="form-control" placeholder="" required>
                    <div class="invalid-feedback">
                        Por favor llene este campo.
                    </div>
                </div>
                <div class="col-sm-6 mb-5">
                    <label for="item4" class="form-label">4. EDUCA LA SOCIEDAD ¿El elemento patrimonial es representativo para la mayoría de la sociedad, generando conciencia cultural en su entorno?</label>
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
                    <label for="item1" class="form-label">1. APROPIACIÓN ¿El elemento patrimonial genera conciencia cultural por medio de su identidad?</label>
                    <input id="item1" type="text" class="form-control" placeholder="" required>
                    <div class="invalid-feedback">
                        Por favor llene este campo.
                    </div>
                </div>
                <div class="col-sm-6 mb-5">
                    <label for="item2" class="form-label">2. PERTENENCIA ¿El elemento patrimonial representa una historia generadora de identidad cultural para el Municipio?</label>
                    <input id="item2" type="text" class="form-control" placeholder="" required>
                    <div class="invalid-feedback">
                        Por favor llene este campo.
                    </div>
                </div>
                <div class="col-sm-6 mb-5">
                    <label for="item3" class="form-label">3. CONSERVACIÓN ¿ El elemento patrimonial genera conciencia, sobre la importancia de salvaguardar la identidad cultural de su municipio?</label>
                    <input id="item3" type="text" class="form-control" placeholder="" required>
                    <div class="invalid-feedback">
                        Por favor llene este campo.
                    </div>
                </div>
                <div class="col-sm-6 mb-5">
                    <label for="item4" class="form-label">4. ACTITUDES Y CONDUCTAS ¿El elemento patrimonial representa, actitudes y conductas frente a la identidad cultural en su municipio?</label>
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
                    <label for="item1" class="form-label">1. CAPITAL, ESTADO Y SOCIEDAD ¿El elemento patrimonial cultural influye en la economía de los habitantes en su Municipio?</label>
                    <input id="item1" type="text" class="form-control" placeholder="" required>
                    <div class="invalid-feedback">
                        Por favor llene este campo.
                    </div>
                </div>
                <div class="col-sm-6 mb-5">
                    <label for="item2" class="form-label">2. PRODUCCIÓN ¿El elemento patrimonial, conlleva a procesos de producción, que representen hechos históricos?</label>
                    <input id="item2" type="text" class="form-control" placeholder="" required>
                    <div class="invalid-feedback">
                        Por favor llene este campo.
                    </div>
                </div>
                <div class="col-sm-6 mb-5">
                    <label for="item3" class="form-label">3. BIENES SOCIO CULTURALES ¿El elemento patrimonial es considerado como bien socio cultural en su municipio?</label>
                    <input id="item3" type="text" class="form-control" placeholder="" required>
                    <div class="invalid-feedback">
                        Por favor llene este campo.
                    </div>
                </div>
                <div class="col-sm-6 mb-5">
                    <label for="item4" class="form-label">4. CONCEPCIÓN MERCANTILISTA ¿El elemento patrimonial, genera algún impacto económico en la cultura de su municipio?</label>
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
                    <label for="item1" class="form-label">1. MONUMENTOS NACIONALES ¿El elemento patrimonial, caracteriza una dimension cultural o colectiva de su municipio?</label>
                    <input id="item1" type="text" class="form-control" placeholder="" required>
                    <div class="invalid-feedback">
                        Por favor llene este campo.
                    </div>
                </div>
                <div class="col-sm-6 mb-5">
                    <label for="item2" class="form-label">2. DIMENSIÓN COLECTIVA ¿El elemento patrimonial comprende aspectos como, el conocimiento, las creencias, el arte y las costumbres entre otras capacidades culturales?</label>
                    <input id="item2" type="text" class="form-control" placeholder="" required>
                    <div class="invalid-feedback">
                        Por favor llene este campo.
                    </div>
                </div>
                <div class="col-sm-6 mb-5">
                    <label for="item3" class="form-label">3. HERENCIA HISTÓRICA ¿El elemento patrimonial permite interpretar y entender el pasado cultural en su Municipio?</label>
                    <input id="item3" type="text" class="form-control" placeholder="" required>
                    <div class="invalid-feedback">
                        Por favor llene este campo.
                    </div>
                </div>
                <div class="col-sm-6 mb-5">
                    <label for="item4" class="form-label">4. PROGRESO DE CIVILIZACIÓN ¿El elemento patrimonial, constituye memoria social en generaciones continuas creando conciencia en su municipio?</label>
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
                    <label for="item1" class="form-label">1. INSTRUMENTOS POLITICOS ¿El elemento patrimonial, hace parte del plan de desarrollo de su municipio?</label>
                    <input id="item1" type="text" class="form-control" placeholder="" required>
                    <div class="invalid-feedback">
                        Por favor llene este campo.
                    </div>
                </div>
                <div class="col-sm-6 mb-5">
                    <label for="item2" class="form-label">2. POLITICAS PUBLICAS ¿El elemento patrimonial, cuenta con políticas públicas que velen por su salvaguardia?</label>
                    <input id="item2" type="text" class="form-control" placeholder="" required>
                    <div class="invalid-feedback">
                        Por favor llene este campo.
                    </div>
                </div>
                <div class="col-sm-6 mb-5">
                    <label for="item3" class="form-label">3. PERFECCIONAR LEYES ¿El elemento patrimonial cuenta con entidades públicas, que promuevan su protección cultural?</label>
                    <input id="item3" type="text" class="form-control" placeholder="" required>
                    <div class="invalid-feedback">
                        Por favor llene este campo.
                    </div>
                </div>
                <div class="col-sm-6 mb-5">
                    <label for="item4" class="form-label">4. SOCIALIZACIÓN Y DIFUSIÓN ¿El elemento patrimonial cuenta con grupos sociales organizados que orienten su impacto cultural?</label>
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
                    <label for="item1" class="form-label">1. OBRAS CONJUNTAS ¿El elemento patrimonial es el resultado de obras conjuntas entre el hombre y la naturaleza?</label>
                    <input id="item1" type="text" class="form-control" placeholder="" required>
                    <div class="invalid-feedback">
                        Por favor llene este campo.
                    </div>
                </div>
                <div class="col-sm-6 mb-5">
                    <label for="item2" class="form-label">2. TRANSFORMACIÓN DEL SECTOR ¿El elemento patrimonial cuenta con un valor paisajístico o geológico?</label>
                    <input id="item2" type="text" class="form-control" placeholder="" required>
                    <div class="invalid-feedback">
                        Por favor llene este campo.
                    </div>
                </div>
                <div class="col-sm-6 mb-5">
                    <label for="item3" class="form-label">3. MOVILIZACION SOCIAL ¿El elemento patrimonial es generador de cultura ambiental por parte de sus habitantes?</label>
                    <input id="item3" type="text" class="form-control" placeholder="" required>
                    <div class="invalid-feedback">
                        Por favor llene este campo.
                    </div>
                </div>
                <div class="col-sm-6 mb-5">
                    <label for="item4" class="form-label">4. PRESERVACIÓN Y DEFENSA ¿El elemento patrimonial, conlleva a la preservación y defensa de la cultura ambiental municipal?</label>
                    <input id="item4" type="text" class="form-control" placeholder="" required>
                    <div class="invalid-feedback">
                        Por favor llene este campo.
                    </div>
                </div>
                <div class="col-sm-6 mb-5">
                    <a href="#" class="btn btn-danger" id="prev-7">Anterior</a>
                    <a href="hechos_historicos.php" class="btn btn-success">Enviar</a>
                </div>
            </div>
        </div>
    </form>
</div>

<?php
include("footer.php");
?>