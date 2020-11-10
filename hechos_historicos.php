<?php
include("header.php");
?>

<div class="container">
    <div class="py-5 text-center">
        <h5 class="text-center text-light bg-success mb-2 p-2 rounded lead" id="result">Hello world!</h5>
        <h2 class="mb-5">2. Ser una expresión representativa de hechos históricos que conmemoren un acontecimiento</h2>
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
                    <label for="item1" class="form-label">1. COMUNICACIÓN ORAL ¿El elemento patrimonial es referente de una construcción histórica para su municipio?</label>
                    <input id="item1" type="text" class="form-control" placeholder="" required>
                    <div class="invalid-feedback">
                        Por favor llene este campo.
                    </div>
                </div>
                <div class="col-sm-6 mb-5">
                    <label for="item2" class="form-label">2. VALOR HISTORICO ¿El elemento patrimonial está ligado a algún acontecimiento histórico del municipio?</label>
                    <input id="item2" type="text" class="form-control" placeholder="" required>
                    <div class="invalid-feedback">
                        Por favor llene este campo.
                    </div>
                </div>
                <div class="col-sm-6 mb-5">
                    <label for="item3" class="form-label">3. ACTIVO SOCIAL A CONSERVAR ¿El elemento patrimonial hace parte de la historia costumbrista de su municipio?</label>
                    <input id="item3" type="text" class="form-control" placeholder="" required>
                    <div class="invalid-feedback">
                        Por favor llene este campo.
                    </div>
                </div>
                <div class="col-sm-6 mb-5">
                    <label for="item4" class="form-label">4. DESARROLLO DE CULTURA ¿El elemento patrimonial es portador de expresiones históricas conmemorativas para el municipio?</label>
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
                    <label for="item1" class="form-label">1. INGENIO DE COMUNIDADES ¿Los habitantes del municipio consideran este elemento patrimonial como un hecho histórico?</label>
                    <input id="item1" type="text" class="form-control" placeholder="" required>
                    <div class="invalid-feedback">
                        Por favor llene este campo.
                    </div>
                </div>
                <div class="col-sm-6 mb-5">
                    <label for="item2" class="form-label">2. COLECTIVIDADES SOCIALES ¿El elemento patrimonial genera impacto cultural en sus habitantes?</label>
                    <input id="item2" type="text" class="form-control" placeholder="" required>
                    <div class="invalid-feedback">
                        Por favor llene este campo.
                    </div>
                </div>
                <div class="col-sm-6 mb-5">
                    <label for="item3" class="form-label">3. CREATIVIDAD HUMANA ¿El elemento patrimonial, ha traspasado a distintas generaciones?</label>
                    <input id="item3" type="text" class="form-control" placeholder="" required>
                    <div class="invalid-feedback">
                        Por favor llene este campo.
                    </div>
                </div>
                <div class="col-sm-6 mb-5">
                    <label for="item4" class="form-label">4. VOCACIÓN COLECTIVA ¿El elemento patrimonial despierta una vocación cultural colectiva en los habitantes?</label>
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
                    <label for="item1" class="form-label">1. MEMORIA COLECTIVA ¿El elemento patrimonial genera identidad colectiva a partir de hechos culturales?</label>
                    <input id="item1" type="text" class="form-control" placeholder="" required>
                    <div class="invalid-feedback">
                        Por favor llene este campo.
                    </div>
                </div>
                <div class="col-sm-6 mb-5">
                    <label for="item2" class="form-label">2. IDENTIFICACIÓN ¿La identidad cultural del municipio está ligada a este elemento patrimonial?</label>
                    <input id="item2" type="text" class="form-control" placeholder="" required>
                    <div class="invalid-feedback">
                        Por favor llene este campo.
                    </div>
                </div>
                <div class="col-sm-6 mb-5">
                    <label for="item3" class="form-label">3. PROMOVER DIVERSIDAD CULTURAL ¿El elemento patrimonial, es caracterizador de hechos históricos?</label>
                    <input id="item3" type="text" class="form-control" placeholder="" required>
                    <div class="invalid-feedback">
                        Por favor llene este campo.
                    </div>
                </div>
                <div class="col-sm-6 mb-5">
                    <label for="item4" class="form-label">4.FORMAS DE VIDA ¿La identidad cultural del municipio conlleva a la conservación de formas de vida?</label>
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
                    <label for="item1" class="form-label">1. INNOVACIÓN ¿El elemento patrimonial enlaza hechos históricos con impactos económicos en el municipio?</label>
                    <input id="item1" type="text" class="form-control" placeholder="" required>
                    <div class="invalid-feedback">
                        Por favor llene este campo.
                    </div>
                </div>
                <div class="col-sm-6 mb-5">
                    <label for="item2" class="form-label">2. CIRCULACIÓN INFORMACIÓN ¿Existen hechos históricos que en algún momento hayan representado impactos económicas?</label>
                    <input id="item2" type="text" class="form-control" placeholder="" required>
                    <div class="invalid-feedback">
                        Por favor llene este campo.
                    </div>
                </div>
                <div class="col-sm-6 mb-5">
                    <label for="item3" class="form-label">3. VOLUNTAD COLECTIVA ¿Los hechos históricos representativos han sido fuente de ingreso de visitantes al municipio?</label>
                    <input id="item3" type="text" class="form-control" placeholder="" required>
                    <div class="invalid-feedback">
                        Por favor llene este campo.
                    </div>
                </div>
                <div class="col-sm-6 mb-5">
                    <label for="item4" class="form-label">4. MERCADO ¿Los acontecimientos históricos, son reconocidos a nivel regional?</label>
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
                    <label for="item1" class="form-label">1. CAPACIDAD DE CREAR CONSTANTEMENTE ¿El elemento patrimonial, representa hechos históricos que hacen parte de la cultura del municipio?</label>
                    <input id="item1" type="text" class="form-control" placeholder="" required>
                    <div class="invalid-feedback">
                        Por favor llene este campo.
                    </div>
                </div>
                <div class="col-sm-6 mb-5">
                    <label for="item2" class="form-label">2.ELEMENTOS PROPIOS ¿Dentro de los elementos propios de la cultura del municipio, los hechos conmemorativos son significativos?</label>
                    <input id="item2" type="text" class="form-control" placeholder="" required>
                    <div class="invalid-feedback">
                        Por favor llene este campo.
                    </div>
                </div>
                <div class="col-sm-6 mb-5">
                    <label for="item3" class="form-label">3. AMBIVALENTES ¿La cultura del municipio es reconocida a partir de un hecho simbólico?</label>
                    <input id="item3" type="text" class="form-control" placeholder="" required>
                    <div class="invalid-feedback">
                        Por favor llene este campo.
                    </div>
                </div>
                <div class="col-sm-6 mb-5">
                    <label for="item4" class="form-label">4. MEMORIA DE LA COMUNIDAD ¿Los hechos históricos que reconocen el municipio se encuentran vivos en la generación actual?</label>
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
                    <label for="item1" class="form-label">1. POLITICAS GUBERNAMENTALES ¿Los hechos históricos han marcado las conductas políticas del municipio?</label>
                    <input id="item1" type="text" class="form-control" placeholder="" required>
                    <div class="invalid-feedback">
                        Por favor llene este campo.
                    </div>
                </div>
                <div class="col-sm-6 mb-5">
                    <label for="item2" class="form-label">2.ESTRATEGIAS DE DESARROLLO ¿Existen en el municipio políticas públicas que protejan la memoria histórico colectivo de sus habitantes?</label>
                    <input id="item2" type="text" class="form-control" placeholder="" required>
                    <div class="invalid-feedback">
                        Por favor llene este campo.
                    </div>
                </div>
                <div class="col-sm-6 mb-5">
                    <label for="item3" class="form-label">3. MOVILIZACIÓN SOCIAL ¿El elemento patrimonial representa fortalezas frente a  una movilización social?</label>
                    <input id="item3" type="text" class="form-control" placeholder="" required>
                    <div class="invalid-feedback">
                        Por favor llene este campo.
                    </div>
                </div>
                <div class="col-sm-6 mb-5">
                    <label for="item4" class="form-label">4.VOLUNTAD DE DEFENDER LO PROPIO ¿El elemento patrimonial, es generador de políticas públicas a partir del impacto histórico en la comunidad?</label>
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
                    <label for="item1" class="form-label">1. ESTRATEGIA CONSERVACIONISTA ¿El elemento patrimonial propende la conservación de los hechos históricos frente a los paisajes culturales?</label>
                    <input id="item1" type="text" class="form-control" placeholder="" required>
                    <div class="invalid-feedback">
                        Por favor llene este campo.
                    </div>
                </div>
                <div class="col-sm-6 mb-5">
                    <label for="item2" class="form-label">2. SOSTENIBILIDAD MEDIOAMBIENTAL ¿ El elemento patrimonial respalda la protección medio ambiental desde su importancia histórica?</label>
                    <input id="item2" type="text" class="form-control" placeholder="" required>
                    <div class="invalid-feedback">
                        Por favor llene este campo.
                    </div>
                </div>
                <div class="col-sm-6 mb-5">
                    <label for="item3" class="form-label">3. INTERACCIÓN CON LA NATURALEZA¿Los elementos naturales del municipio hicieron parte de un hecho histórico?</label>
                    <input id="item3" type="text" class="form-control" placeholder="" required>
                    <div class="invalid-feedback">
                        Por favor llene este campo.
                    </div>
                </div>
                <div class="col-sm-6 mb-5">
                    <label for="item4" class="form-label">4. ADAPTACIÓN AL MEDIO ¿El reconocimiento histórico de los lugares destacados del municipio incluye paisajes culturales?</label>
                    <input id="item4" type="text" class="form-control" placeholder="" required>
                    <div class="invalid-feedback">
                        Por favor llene este campo.
                    </div>
                </div>
                <div class="col-sm-6 mb-5">
                    <a href="#" class="btn btn-danger" id="prev-7">Anterior</a>
                    <a href="valor_diferencial.php" class="btn btn-success">Enviar</a>
                </div>
            </div>
        </div>
    </form>
</div>

<?php
include("footer.php");
?>