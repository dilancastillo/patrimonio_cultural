<?php
include("header.php");
?>

<div class="container">
    <div class="py-5 text-center">
        <h5 class="text-center text-light bg-success mb-2 p-2 rounded lead" id="result">Hello world!</h5>
        <h2 class="mb-5">8. Conservar procesos, técnicas y materiales propios de una región</h2>
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
                    <label for="item1" class="form-label">1.CONSERVACIÓN DE MATERIAL ¿El elemento patrimonial es considerado material de conservación para el municipio?</label>
                    <input id="item1" type="text" class="form-control" placeholder="" required>
                    <div class="invalid-feedback">
                        Por favor llene este campo.
                    </div>
                </div>
                <div class="col-sm-6 mb-5">
                    <label for="item2" class="form-label">2. CONSERVA PROCESOS TECNICOS ¿La ubicación del territorio conlleva a la elaboración y conservación de procesos técnicos del elemento patrimonial del municipio?</label>
                    <input id="item2" type="text" class="form-control" placeholder="" required>
                    <div class="invalid-feedback">
                        Por favor llene este campo.
                    </div>
                </div>
                <div class="col-sm-6 mb-5">
                    <label for="item3" class="form-label">3. ACCIONES ¿El elemento patrimonial del municipio es objeto de procesos técnicos que contemplen acciones propias del territorio?</label>
                    <input id="item3" type="text" class="form-control" placeholder="" required>
                    <div class="invalid-feedback">
                        Por favor llene este campo.
                    </div>
                </div>
                <div class="col-sm-6 mb-5">
                    <label for="item4" class="form-label">4. PROCESO ESPECIFICO ¿El elemento patrimonial, es causante de procesos con finalidades específicas que enmarquen el bien cultural del municipio?</label>
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
                    <label for="item1" class="form-label">1. PROCESO TECNICO ¿Existe un grupo social que se encargue de la organización técnica del elemento patrimonial del municipio?</label>
                    <input id="item1" type="text" class="form-control" placeholder="" required>
                    <div class="invalid-feedback">
                        Por favor llene este campo.
                    </div>
                </div>
                <div class="col-sm-6 mb-5">
                    <label for="item2" class="form-label">2. ACCESIBILIDAD ¿El elemento patrimonial, contiene información accesible a la comunidad del municipio?</label>
                    <input id="item2" type="text" class="form-control" placeholder="" required>
                    <div class="invalid-feedback">
                        Por favor llene este campo.
                    </div>
                </div>
                <div class="col-sm-6 mb-5">
                    <label for="item3" class="form-label">3. ACCESO A INFORMACIÓN AUTOMATIZADA ¿El elemento patrimonial puede ser aprovechado a través de herramientas informáticas ubicadas en el municipio?</label>
                    <input id="item3" type="text" class="form-control" placeholder="" required>
                    <div class="invalid-feedback">
                        Por favor llene este campo.
                    </div>
                </div>
                <div class="col-sm-6 mb-5">
                    <label for="item4" class="form-label">4. ORGANIZACIÓN SOCIAL ¿Los habitantes del municipio deben contar con una organización técnica que permita la conservación del elemento patrimonial?</label>
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
                    <label for="item1" class="form-label">1. IMPORTANCIA EN LA IDENTIDAD ¿El proceso técnico es considerado de gran importancia para la conservación de la identidad en el patrimonio?</label>
                    <input id="item1" type="text" class="form-control" placeholder="" required>
                    <div class="invalid-feedback">
                        Por favor llene este campo.
                    </div>
                </div>
                <div class="col-sm-6 mb-5">
                    <label for="item2" class="form-label">2. PROCESOS DE IDENTIDAD ¿El elemento patrimonial debe ser sometido por la sociedad a procesos técnicos constructivos de identidad?</label>
                    <input id="item2" type="text" class="form-control" placeholder="" required>
                    <div class="invalid-feedback">
                        Por favor llene este campo.
                    </div>
                </div>
                <div class="col-sm-6 mb-5">
                    <label for="item3" class="form-label">3. IDENTIFICA RECUPERA ¿El elemento patrimonial, permite la identificación  y recupera los materiales propios del municipio?</label>
                    <input id="item3" type="text" class="form-control" placeholder="" required>
                    <div class="invalid-feedback">
                        Por favor llene este campo.
                    </div>
                </div>
                <div class="col-sm-6 mb-5">
                    <label for="item4" class="form-label">4. PROCESO TECNICO ¿La identidad del elemento patrimonial hace alusión a procesos técnicos y materiales del municipio?</label>
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
                    <label for="item1" class="form-label">1. PRODUCTO A COMERCIALIZAR ¿El elemento patrimonial, puede enmarcarse como un bien necesario, para la transformación de insumo como producto para comercializar?</label>
                    <input id="item1" type="text" class="form-control" placeholder="" required>
                    <div class="invalid-feedback">
                        Por favor llene este campo.
                    </div>
                </div>
                <div class="col-sm-6 mb-5">
                    <label for="item2" class="form-label">2. COMPARACIONES ¿El elemento patrimonial, es sometido a control de calidad para demostrar que cumple con las expectativas generando ingresos al municipio?</label>
                    <input id="item2" type="text" class="form-control" placeholder="" required>
                    <div class="invalid-feedback">
                        Por favor llene este campo.
                    </div>
                </div>
                <div class="col-sm-6 mb-5">
                    <label for="item3" class="form-label">3. TECNICAS DE MODIFICACION ¿El elemento patrimonial puede ser sometido a técnicas de modificación que garanticen la economía del municipio?</label>
                    <input id="item3" type="text" class="form-control" placeholder="" required>
                    <div class="invalid-feedback">
                        Por favor llene este campo.
                    </div>
                </div>
                <div class="col-sm-6 mb-5">
                    <label for="item4" class="form-label">4. PROCESO ECONOMICO ¿El elemento patrimonial, a través de procesos técnicos y materiales influye en la economía de la región?</label>
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
                    <label for="item1" class="form-label">1. BIBLIOTECA PUBLICA ¿El elemento patrimonial debe ser considerado objeto de alcance en la biblioteca pública del municipio?</label>
                    <input id="item1" type="text" class="form-control" placeholder="" required>
                    <div class="invalid-feedback">
                        Por favor llene este campo.
                    </div>
                </div>
                <div class="col-sm-6 mb-5">
                    <label for="item2" class="form-label">2. ESTABILIDAD CULTURAL ¿El elemento cultural conserva técnicas que estabilizan los materiales propios del municipio?</label>
                    <input id="item2" type="text" class="form-control" placeholder="" required>
                    <div class="invalid-feedback">
                        Por favor llene este campo.
                    </div>
                </div>
                <div class="col-sm-6 mb-5">
                    <label for="item3" class="form-label">3.ALMECENAMIENTO DE IDEAS ¿El elemento  patrimonial se conserva a partir técnicas culturales almacenadas por ideas brindadas en el municipio?</label>
                    <input id="item3" type="text" class="form-control" placeholder="" required>
                    <div class="invalid-feedback">
                        Por favor llene este campo.
                    </div>
                </div>
                <div class="col-sm-6 mb-5">
                    <label for="item4" class="form-label">4. ESQUEMA CULTURAL ¿El elemento patrimonial surge por medio de un esquema cultural del municipio?</label>
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
                    <label for="item1" class="form-label">1. VINCULOS POLITICOS ¿El elemento patrimonial, sostiene vínculos políticos de almacenamiento tecnológico dentro del municipio?</label>
                    <input id="item1" type="text" class="form-control" placeholder="" required>
                    <div class="invalid-feedback">
                        Por favor llene este campo.
                    </div>
                </div>
                <div class="col-sm-6 mb-5">
                    <label for="item2" class="form-label">2. POLITICAS DE PRESERVACIÓN ¿Existen políticas de preservación para la colección de información técnica del elemento patrimonial del municipio?</label>
                    <input id="item2" type="text" class="form-control" placeholder="" required>
                    <div class="invalid-feedback">
                        Por favor llene este campo.
                    </div>
                </div>
                <div class="col-sm-6 mb-5">
                    <label for="item3" class="form-label">3. POLITICAS DE ALMACENAMIENTO ¿Dentro de las políticas municipales, existe una que se encargue del almacenamiento de los materiales propios de la región?</label>
                    <input id="item3" type="text" class="form-control" placeholder="" required>
                    <div class="invalid-feedback">
                        Por favor llene este campo.
                    </div>
                </div>
                <div class="col-sm-6 mb-5">
                    <label for="item4" class="form-label">4. METODOS ¿En el elemento patrimonial se toman en cuenta las políticas con métodos nuevos de protección material y tecnológico del municipio?</label>
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
                    <label for="item1" class="form-label">1. GARANTIZAR CONDICIONES AMBIENTALES ¿El elemento patrimonial, impulsa a la conservación técnica y material garantizando las condiciones ambientales del municipio?</label>
                    <input id="item1" type="text" class="form-control" placeholder="" required>
                    <div class="invalid-feedback">
                        Por favor llene este campo.
                    </div>
                </div>
                <div class="col-sm-6 mb-5">
                    <label for="item2" class="form-label">2. TECNICAS CONTRA DESASTRES ¿El elemento patrimonial es protegido por medio de técnicas contra desastres naturales?</label>
                    <input id="item2" type="text" class="form-control" placeholder="" required>
                    <div class="invalid-feedback">
                        Por favor llene este campo.
                    </div>
                </div>
                <div class="col-sm-6 mb-5">
                    <label for="item3" class="form-label">3. CONDICIONES AMBIENTALES ¿El elemento patrimonial debe estar supervisado teniendo en cuenta los condiciones ambientales del municipio?</label>
                    <input id="item3" type="text" class="form-control" placeholder="" required>
                    <div class="invalid-feedback">
                        Por favor llene este campo.
                    </div>
                </div>
                <div class="col-sm-6 mb-5">
                    <label for="item4" class="form-label">4.FACTORES CLIMATICOS ¿Los factores climáticos son considerados como riesgo en la conservación del elemento patrimonial?</label>
                    <input id="item4" type="text" class="form-control" placeholder="" required>
                    <div class="invalid-feedback">
                        Por favor llene este campo.
                    </div>
                </div>
                <div class="col-sm-6 mb-5">
                    <a href="#" class="btn btn-danger" id="prev-7">Anterior</a>
                    <input type="submit" name="submit" value="Enviar" id="submit" class="btn btn-success">
                </div>
            </div>
        </div>
    </form>
</div>

<?php
include("footer.php");
?>