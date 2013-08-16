<?php

abstract class output {

     public function render ();

}

class form_input extends output {

     function __construct($field = null, $label = null) {

         $this->field = $field;

         $this->label = $label;

     }

     function render() {

         return '<p>' . $this->show_label() . $this->show_input() '</p>\n";

     }

     function show_label() {

         return '<span class="label">' . htmlentities($this->label,

ENT_COMPAT, 'utf8') . '</span>';

     }

     function show_input() {

         return '<input type="' . $this->type

           . '" name="' . $this->field ."\">';

     }

}

?>
