<?php
    function modificarProducto($IdProd, $Nombre_Prod, $Descripcion_Prod, $Precio_Prod, 
                        $Existencias_Prod, $Categoria_Prod, $Descuento_Prod){
        global $conexion;
        $query = 'UPDATE producto SET Nombre_Prod="'.$Nombre_Prod.'", 
                  Descripcion_Prod="'.$Descripcion_Prod.'", Precio_Prod='.$Precio_Prod.',
                  Existencias_Prod='.$Existencias_Prod.', CategoriaId_Cat='.$Categoria_Prod.',
                  Descuento_Prod='.$Descuento_Prod.' WHERE ID_Prod='.$IdProd.';';
        try{
            if($conexion->query($query) === TRUE){
                echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                        Se modifico el producto
                      </div>';
            }
        }catch(Exception $e){
            echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                    Error al modificar el producto
                  </div>';
        }
    }
?>