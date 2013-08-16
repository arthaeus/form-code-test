<?php

namespace Sample\Form_Input;

abstract class output 
{
    abstract public function render();
}

class form_input extends output {

    protected $fieldName    = null;
    protected $fieldLabel   = null;
    protected $fieldType    = null;

    public function __construct($fieldName = null, $fieldLabel = null, $fieldType = null) 
    {
         $this->fieldName    = $fieldName;
         $this->fieldLabel   = $fieldLabel;
         $this->fieldType    = $fieldType;

         /**
          * In order to be a properly functioning input, all of these will need to be set at some point.  If they
          * are not set during construction, there are setters available
          */
         return ( $this->fieldName && $this->fieldLabel && $this->fieldType );
    }

    /**
     * getters and setters
     */
    public function get_field_name() { return $this->fieldName; }
    public function set_field_name( $fieldName ){ $this->fieldName = $fieldName; return; }

    public function get_field_label() { return $this->fieldLabel; }
    public function set_field_label( $fieldLabel ){ $this->fieldLabel = $fieldLabel; return; }

    public function get_field_type() { return $this->fieldType; }
    public function set_field_type( $fieldType ){ $this->fieldType = $fieldType; return; }

    /**
     * It is tempting to echo (by default) instead of return on these functions.
     */
    public function render() 
    {
        return "<p>" . $this->show_label() . $this->show_input() . "</p>\n";
    }

    public function show_label() 
    {
        return '<span class="label">' . htmlentities($this->fieldLabel,ENT_COMPAT, 'utf-8') . '</span>';
    }

    public function show_input() 
    {
        return '<input type="' . $this->fieldType . '" name="' . $this->fieldName ."/>";
    }

}

?>
