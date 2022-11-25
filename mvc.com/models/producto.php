<?php
     
     
     class producto {

        private $id_producto;
        private $descripcion;
        private $costo_compra;
        private $precio_venta;
        private $cantidad_existencia;

        public function __construct($id_producto)
        {
            $this -> id_producto= $id_producto;
           
            
        }
        public function setId ($id_producto){
            $this-> id_producto = $id_producto;

        }

        public function getId(){
            return $this ->id_producto;
        }

        public function getdes(){
            return $this ->descripcion;
        }
        public function getcostoCompra(){
            return $this ->costo_compra;
        }
        public function pventa(){
            return $this ->precio_venta;
        }
        public function Cexis(){
            return $this ->cantidad_existencia;
        }
        
        public function articulos(){
            
            $articulos[]= ["id_producto"=>"1","descripcion"=>"Nuevo IPhone 13","costo_compra"=>"$800","precio_venta"=>"900","cantidad_existencia"=>"20"];
            $articulos[]= ["id_producto"=>"2","descripcion"=>"Nvidia RTX 4090","costo_compra"=>"$600","precio_venta"=>"900","cantidad_existencia"=>"20"];
            $articulos[]= ["id_producto"=>"3","descripcion"=>"Glorius Model O","costo_compra"=>"$700","precio_venta"=>"900","cantidad_existencia"=>"20"];
            $articulos[]= ["id_producto"=>"4","descripcion"=>"Razer Hunstman","costo_compra"=>"$900","precio_venta"=>"900","cantidad_existencia"=>"20"];
            $articulos[]= ["id_producto"=>"5","descripcion"=>"Intel core i9","costo_compra"=>"$300","precio_venta"=>"900","cantidad_existencia"=>"20"];

    }

    public static function Mproducto(){

          $articulos[]= ["id_producto"=>"1","descripcion"=>"Nuevo IPhone 13","costo_compra"=>"800","precio_venta"=>"900","cantidad_existencia"=>"20"];
            $articulos[]= ["id_producto"=>"2","descripcion"=>"Nvidia RTX 4090","costo_compra"=>"600","precio_venta"=>"900","cantidad_existencia"=>"20"];
            $articulos[]= ["id_producto"=>"3","descripcion"=>"Glorius Model O","costo_compra"=>"700","precio_venta"=>"900","cantidad_existencia"=>"20"];
            $articulos[]= ["id_producto"=>"4","descripcion"=>"Razer Hunstman","costo_compra"=>"900","precio_venta"=>"900","cantidad_existencia"=>"20"];
            $articulos[]= ["id_producto"=>"5","descripcion"=>"Intel core i9","costo_compra"=>"300","precio_venta"=>"900","cantidad_existencia"=>"20"];
         
            return $articulos;

    }
    

    
    public  function Bproducto(){

        $articulos[]= ["id_producto"=>"1","descripcion"=>"Nuevo IPhone 13","costo_compra"=>"800","precio_venta"=>"900","cantidad_existencia"=>"20"];
        $articulos[]= ["id_producto"=>"2","descripcion"=>"Nvidia RTX 4090","costo_compra"=>"800","precio_venta"=>"900","cantidad_existencia"=>"20"];
        $articulos[]= ["id_producto"=>"3","descripcion"=>"Glorius Model O","costo_compra"=>"800","precio_venta"=>"900","cantidad_existencia"=>"20"];
        $articulos[]= ["id_producto"=>"4","descripcion"=>"Razer Hunstman","costo_compra"=>"800","precio_venta"=>"900","cantidad_existencia"=>"20"];
        $articulos[]= ["id_producto"=>"5","descripcion"=>"Intel core i9","costo_compra"=>"800","precio_venta"=>"900","cantidad_existencia"=>"20"];

        foreach ($articulos as $t)
                {
                    if($this ->id_producto == $t["id_producto"] )
                    return $t;
                    
                }
                return[];
    }
 }
