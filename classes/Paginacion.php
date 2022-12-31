<?php

namespace Classes;

class Paginacion {
    public $pagina_actual;
    public $registrados_por_paginas;
    public $total_registrados;

    public function __construct ($pagina_actual = 1, $registrados_por_paginas = 10, $total_registrados = 0) {
        $this->pagina_actual = (int) $pagina_actual;
        $this->registrados_por_paginas = (int) $registrados_por_paginas;
        $this->total_registrados = (int) $total_registrados;
    }

    public function offset() {
        return $this->registrados_por_paginas * ($this->pagina_actual - 1);
    }

    public function total_paginas() {
        return ceil($this->total_registrados / $this->registrados_por_paginas);
    }

    public function pagina_anterior () {
        $anterior = $this->pagina_actual - 1;
        return ($anterior > 0 ? $anterior : false);
    } 

    public function pagina_siguiente () {
        $siguiente = $this->pagina_actual + 1;
        return ($siguiente <= $this->total_paginas()) ? $siguiente : false;
    }

    public function enlace_anterior() {
        $html = '';
        if($this->pagina_anterior()) {
            $html .= "<a class=\"paginacion__enlace paginacion__enlace--texto\" href=\"?page={$this->pagina_anterior()}\">&laquo Anterior </a>";
        }

        return $html;
    }

    public function enlace_siguiente() {
        $html = '';
        if($this->pagina_siguiente()) {
            $html .= "<a class=\"paginacion__enlace paginacion__enlace--texto\" href=\"?page={$this->pagina_siguiente()}\">Siguiente &raquo; </a>";
        }

        return $html;
    }

    public function numeros_paginas() {
        $html = '';
        for($i = 1; $i <= $this->total_paginas(); $i ++) {
            if($i === $this->pagina_actual) {
                $html .= "<span class=\"paginacion__enlace paginacion__enlace--actual\">${i}</span>";
            } else {
                $html .= "<a class=\"paginacion__enlace paginacion__enlace--numero\" href= \"?page={$i}\">{$i}</a>";
            }
            
        }
        return $html;
    }

    public function paginacion() {
        $html = '';
        if($this->total_registrados > 1) {
            $html .= '<div class="paginacion">';
            $html .= $this->enlace_anterior();
            $html .= $this->numeros_paginas();
            $html .= $this->enlace_siguiente();
            $html .='</div>';
        }

        return $html;
    }
}
