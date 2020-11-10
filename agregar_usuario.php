<?php
include("header.php");
?>

<div class="container">
    <div class="py-5 text-center">
        <h5 class="text-center text-light bg-success mb-2 p-2 rounded lead" id="result">Hello world!</h5>
        <h2>Agregar producto para valoración</h2>
    </div>
</div>

<div class="container">
    <form action="" method="post" id="form-data">
        <div class="row justify-content-center">
            <div class="col-md-5 mb-5 text-center">
                <div class="form-group">
                    <label for="item1" class="form-label">Diligencie su nombre y apellido</label>
                    <input id="item1" type="text" class="form-control" placeholder="" required>
                    <div class="invalid-feedback">
                        Por favor llene este campo.
                    </div>
                </div>
                <div class="form-group">
                    <label for="item2" class="form-label">Escriba el nombre del producto</label>
                    <input id="item2" type="text" class="form-control" placeholder="" required>
                    <div class="invalid-feedback">
                        Por favor llene este campo.
                    </div>
                </div>
                <div class="form-group">
                    <a href="conciencia_cultural.php" class="btn btn-success" id="next-1">Empezar valoración</a>
                </div>
            </div>
        </div>
    </form>
</div>

<?php
include("footer.php");
?>