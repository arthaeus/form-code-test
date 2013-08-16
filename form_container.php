<?php

namespace Sample\Form_Container;

require_once( "form_input.php" );

use Sample\Form_Input\form_input;

class form_container
{

    /**
     * where instances of form_input's will be stored
     */
    protected $form_inputs = array();

    public function __construct()
    {}

    /**
     * function to add an element to the container
     */
    public function add( form_input $input )
    {
        /**
         * Get the input's name, and use this as a key in this->form_inputs
         */
        $this->form_inputs[ $input->get_field_name() ] = $input;
        return;
    }

    /**
     * function to remove an element from the container
     */
    public function remove( $field_name )
    {
        if( array_key_exists( $field_name , $this->form_inputs ) )
        {   
            unset( $this->form_inputs[$field_name] );
        }
        return;
    }

    /**
     * return an input named $field_name if it exists
     */
    public function get_input_by_name( $field_name )
    {
        if( array_key_exists( $field_name , $this->form_inputs ) )
        {   
            return $this->form_inputs[ $field_name ];
        }
        return false;
    }

}

?>
