<?php
include("header.php");
?>

<div class="container">
    <div class="py-5 text-center">
        <h5 class="text-center text-light bg-success mb-2 p-2 rounded lead" id="result">Hello world!</h5>
        <h2 class="mb-5">5. Ser portador de creatividad humana</h2>
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
                    <label for="item1" class="form-label">1. CREATIVIDAD E INNOVACIÓN ¿El elemento patrimonial es portador de creatividad e innovación en el municipio?</label>
                    <input id="item1" type="text" class="form-control" placeholder="" required>
                    <div class="invalid-feedback">
                        Por favor llene este campo.
                    </div>
                </div>
                <div class="col-sm-6 mb-5">
                    <label for="item2" class="form-label">2. INTERACCIÓN DE TERRITORIO ¿El elemento patrimonial, permite la interacción del territorio cultural?</label>
                    <input id="item2" type="text" class="form-control" placeholder="" required>
                    <div class="invalid-feedback">
                        Por favor llene este campo.
                    </div>
                </div>
                <div class="col-sm-6 mb-5">
                    <label for="item3" class="form-label">3. INTEGRACIÓN O AISLAMIENTO ¿El territorio donde se encuentra ubicado este elemento patrimonial, permite la interacción o el aislamiento del municipio?</label>
                    <input id="item3" type="text" class="form-control" placeholder="" required>
                    <div class="invalid-feedback">
                        Por favor llene este campo.
                    </div>
                </div>
                <div class="col-sm-6 mb-5">
                    <label for="item4" class="form-label">4. INFLUENCIA POSITIVA EN EL MEDIO ¿El elemento patrimonial, tiene influencia positiva en el territorio municipal?</label>
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
                    <label for="item1" class="form-label">1. ENTENDIMIENTO ¿El elemento patrimonial, permite trabajos mancomunados en la sociedad que genere entendimiento en la cultura del municipio?</label>
                    <input id="item1" type="text" class="form-control" placeholder="" required>
                    <div class="invalid-feedback">
                        Por favor llene este campo.
                    </div>
                </div>
                <div class="col-sm-6 mb-5">
                    <label for="item2" class="form-label">2. MEMORIA ¿Los habitantes memorizan el elemento patrimonial aportando creatividad en el municipio?</label>
                    <input id="item2" type="text" class="form-control" placeholder="" required>
                    <div class="invalid-feedback">
                        Por favor llene este campo.
                    </div>
                </div>
                <div class="col-sm-6 mb-5">
                    <label for="item3" class="form-label">3. RAZÓN ¿Los habitantes hacen uso de razón permitiéndose crear medios que den a conocer el elemento patrimonial del municipio?</label>
                    <input id="item3" type="text" class="form-control" placeholder="" required>
                    <div class="invalid-feedback">
                        Por favor llene este campo.
                    </div>
                </div>
                <div class="col-sm-6 mb-5">
                    <label for="item4" class="form-label">4. IMAGINACIÓN ¿Crean grupos sociales que conlleven a compartir y crear un medio que dé a conocer el elemento patrimonial del municipio?</label>
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
                    <label for="item1" class="form-label">1. ACTUACIÓN CONCRETA DE INDIVIDUOS ¿La identidad cultural del municipio permite una actuación  concreta de los habitantes?</label>
                    <input id="item1" type="text" class="form-control" placeholder="" required>
                    <div class="invalid-feedback">
                        Por favor llene este campo.
                    </div>
                </div>
                <div class="col-sm-6 mb-5">
                    <label for="item2" class="form-label">2.CONSTRUCCIÓN CULTURAL ¿La identidad de los habitantes permite la construcción cultural en el municipio?</label>
                    <input id="item2" type="text" class="form-control" placeholder="" required>
                    <div class="invalid-feedback">
                        Por favor llene este campo.
                    </div>
                </div>
                <div class="col-sm-6 mb-5">
                    <label for="item3" class="form-label">3.ELABORACIÓN HUMANA ¿El elemento patrimonial se considera elaborado a través de la creatividad de los habitantes del municipio?</label>
                    <input id="item3" type="text" class="form-control" placeholder="" required>
                    <div class="invalid-feedback">
                        Por favor llene este campo.
                    </div>
                </div>
                <div class="col-sm-6 mb-5">
                    <label for="item4" class="form-label">4. ALCANZAR IDENTIDAD SOCIAL ¿El elemento patrimonial, alcanza la identidad social de la cultura en el municipio?</label>
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
                    <label for="item1" class="form-label">1. INTERES CRECIENTE POR EL PATRIMONIO ¿A través de la creatividad humana  puede surgir un interés creciente por el elemento patrimonial del municipio?</label>
                    <input id="item1" type="text" class="form-control" placeholder="" required>
                    <div class="invalid-feedback">
                        Por favor llene este campo.
                    </div>
                </div>
                <div class="col-sm-6 mb-5">
                    <label for="item2" class="form-label">2. SER PORTADOR ECONÓMICO ¿El elemento patrimonial, producto de la creatividad humana puede llegar a ser portador económico a su municipio?</label>
                    <input id="item2" type="text" class="form-control" placeholder="" required>
                    <div class="invalid-feedback">
                        Por favor llene este campo.
                    </div>
                </div>
                <div class="col-sm-6 mb-5">
                    <label for="item3" class="form-label">3. ELABORACIÓN DE PROYECTOS ¿La economía  surge por medio de la creatividad en el elemento patrimonial a través de la elaboración de proyectos culturales?</label>
                    <input id="item3" type="text" class="form-control" placeholder="" required>
                    <div class="invalid-feedback">
                        Por favor llene este campo.
                    </div>
                </div>
                <div class="col-sm-6 mb-5">
                    <label for="item4" class="form-label">4. VISION DE DESARROLLO ¿El elemento patrimonial por medio de la creatividad humana permite una visión de desarrollo en el municipio?</label>
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
                    <label for="item1" class="form-label">1.ADOPTAR DECISIONES ¿El elemento patrimonial permite adoptar decisiones que influyan en la cultura del municipio?</label>
                    <input id="item1" type="text" class="form-control" placeholder="" required>
                    <div class="invalid-feedback">
                        Por favor llene este campo.
                    </div>
                </div>
                <div class="col-sm-6 mb-5">
                    <label for="item2" class="form-label">2. CONSTRUCCIÓN DE SÓLIDAS RELACIONES ¿El elemento patrimonial, influye en la construcción de sólidas relaciones portadoras de creatividad humana en el ámbito cultural del municipio?</label>
                    <input id="item2" type="text" class="form-control" placeholder="" required>
                    <div class="invalid-feedback">
                        Por favor llene este campo.
                    </div>
                </div>
                <div class="col-sm-6 mb-5">
                    <label for="item3" class="form-label">3. ENTENDER VALORES DEL PATRIMONIO ¿El elemento patrimonial permite entender el valor cultural del municipio a través de la creatividad humana?</label>
                    <input id="item3" type="text" class="form-control" placeholder="" required>
                    <div class="invalid-feedback">
                        Por favor llene este campo.
                    </div>
                </div>
                <div class="col-sm-6 mb-5">
                    <label for="item4" class="form-label">4.INTERACCIÓN CON LA COMUNIDAD ¿El elemento patrimonial, crea espacios de interacción cultural en la comunidad?</label>
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
                    <label for="item1" class="form-label">1.AUTORIDAD SOBRE CREATIVIDAD ¿El elemento patrimonial, impulsa a la organización  política a implementar autoridad sobre la creatividad humana en el municipio?</label>
                    <input id="item1" type="text" class="form-control" placeholder="" required>
                    <div class="invalid-feedback">
                        Por favor llene este campo.
                    </div>
                </div>
                <div class="col-sm-6 mb-5">
                    <label for="item2" class="form-label">2. PRESENTE Y FUTURO ¿El elemento patrimonial, cuenta con políticas que apoyen la creatividad humana del presente y futuro?2. PRESENTE Y FUTURO ¿El elemento patrimonial, cuenta con políticas que apoyen la creatividad humana del presente y futuro?</label>
                    <input id="item2" type="text" class="form-control" placeholder="" required>
                    <div class="invalid-feedback">
                        Por favor llene este campo.
                    </div>
                </div>
                <div class="col-sm-6 mb-5">
                    <label for="item3" class="form-label">3. SALVAGUARDIA POLÍTICA  ¿El elemento patrimonial, cuenta con gestiones políticas que busquen salvaguardar la cultura de su municipio?</label>
                    <input id="item3" type="text" class="form-control" placeholder="" required>
                    <div class="invalid-feedback">
                        Por favor llene este campo.
                    </div>
                </div>
                <div class="col-sm-6 mb-5">
                    <label for="item4" class="form-label">4. POLÍTICA FLIXIBLE Y COHERENTE ¿Existen políticas flexibles y coherentes que aporten a la defensa del elemento patrimonial?</label>
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
                    <label for="item1" class="form-label">1. CONOCER ELEMENTOS DE CONSERVACIÓN NATURAL ¿El elemento patrimonial  debe ser conocido como parte de la conservación natural del municipio?</label>
                    <input id="item1" type="text" class="form-control" placeholder="" required>
                    <div class="invalid-feedback">
                        Por favor llene este campo.
                    </div>
                </div>
                <div class="col-sm-6 mb-5">
                    <label for="item2" class="form-label">2. ENTIDAD PROPIA ¿El elemento patrimonial natural debe ser portador de entidad propia en el municipio?</label>
                    <input id="item2" type="text" class="form-control" placeholder="" required>
                    <div class="invalid-feedback">
                        Por favor llene este campo.
                    </div>
                </div>
                <div class="col-sm-6 mb-5">
                    <label for="item3" class="form-label">3. USO SOCIAL Y CONSERVACIÓN ¿El elemento patrimonial debe ser considerado de uso social y conservación natural?</label>
                    <input id="item3" type="text" class="form-control" placeholder="" required>
                    <div class="invalid-feedback">
                        Por favor llene este campo.
                    </div>
                </div>
                <div class="col-sm-6 mb-5">
                    <label for="item4" class="form-label">4.CONTAR LEGADO A GENERACIONES ¿El elemento patrimonial debe ser portador de historia que cuente el legado a futuras generaciones?</label>
                    <input id="item4" type="text" class="form-control" placeholder="" required>
                    <div class="invalid-feedback">
                        Por favor llene este campo.
                    </div>
                </div>
                <div class="col-sm-6 mb-5">
                    <a href="#" class="btn btn-danger" id="prev-7">Anterior</a>
                    <a href="produccion_cultural.php" class="btn btn-success">Enviar</a>
                </div>
            </div>
        </div>
    </form>
</div>

<?php
include("footer.php");
?>