<?php
if (session_status() == 1) session_start();
require_once("models/producto.php");
require_once("controllers/producto_controller.php");
?>

<center>
    <h1>Catalogo</h1>
</center>
<hr>
<hr>
<div class="row w-100">
<?php

if (isset($_GET["id"])) {
    $obj = new producto($_GET["id"]);
    $resultado = $obj->Bproducto();
    $n = 5;

    foreach ($resultado as $r) {
        if(count($resultado) == $n){
            $n = 6;

        
?>
                    <div class="col">
                <div class="card" style="width:18rem;">
                    <img src="imgs/p<?php echo $resultado["id_producto"]?>.jpg" alt="ImgIphone13" width="250" height="250">
                    <div class="card-body">
                    <h3><?php echo $resultado["descripcion"] ?></h3>
                        <p class="card-text">
                            Descripcion del producto
                        </p>
                        <h3><?php echo $resultado["costo_compra"] ?></h3>
                        <button class="btn btn-success">Comprar</button>
                    </div>
                </div>
            </div>
<?php
    }

    }
} else {
    $resultado = producto::Mproducto();
    foreach ($resultado as $r) {

    ?>
    
        
            <div class="col">
                <div class="card" style="width:18rem;">
                    <img src="imgs/p<?php echo $r["id_producto"]?>.jpg" alt="ImgIphone13" width="250" height="250">
                    <div class="card-body">
                    <h3><?php echo $r["descripcion"] ?></h3>
                       <p class="card-text">
                            Descripcion del producto
                        </p>
                        <h3><?php echo $r["costo_compra"] ?></h3>
                        <button class="btn btn-success">Comprar</button>
                    </div>
                </div>
            </div>
        



<?php
    }
}
?>
</div>
