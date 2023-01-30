<?php
    /**
     * Controlador para mostrar el offcanvas del carrito
     * @package User
     * @version 1.0
    */

    // Plantilla del offcanvas para el carrito
    echo '<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
    <div class="offcanvas-header d-flex align-items-start">
        <h5 id="offcanvasRightLabel">Productos del Carrito</h5>
        <button type="button" class="btn-close text-light" data-bs-dismiss="offcanvas" aria-label="Close" style="background-color: black !important">X</button>
    </div>';
    if ($elementos_carrito[0] == 0) {
    echo '<div class="offcanvas-body ¡">
        Actualmente no hay productos en el carrito</div>';
    } else {
    echo '<div class="overflow-auto">';
    foreach ($productos_carrito as $data) {
        echo '<form id="form-producto-'.$data[0].'" action="#" method="post">
            <div class="m-3 d-flex align-items-center justify-content-between overflow-auto">';
        echo "<img style='width:100px;height:100px;object-fit:cover;border-radius:20%' src='".$data[4]."'></a>
            <div class='ml-1 d-flex flex-column align-items-center'>
            <h5 class='pt-4'><a href='#'>".$data[1]."</a></h5>
            <span class='price colored'>$".$data[2]."</span>
            </div>
            <input type='hidden' name='id-product' value='".$data[0]."'>
            <input type='hidden' name='purchase-date' value='".$data[5]."'>
            <button type='submit' name='remove-carrito' class='btn btn-danger'>X</button></div></form>";
    }
    echo '</div>';
    }
    echo '</div>';	
?>