<?php
    class InicialController extends Controller{
        public function process($params){
            // Adicionar as variaveis title e description para serem mostradas na pagina
            $this->head['title'] = "Inicial";
            $this->head['description'] = "Pagina inicial";
            // Chama o view para ser mostrado.
            $this->view = 'inicial';
        }
    }
?>