<?php

namespace Sample\Head;

class head
{

    /**
     * For this simple example, the body will be an instance of the form_container class
     * since the body will only be first/last name text boxes
     */
    protected $elements = array();

    public function set_element( $elementName , $elementValue ) 
    { 
        $this->elements[$elementName] = $elementValue;
        return;
    }

    public function remove_element( $elementName ) 
    { 
        if( array_key_exists( $elementName , $this->elements ) )
        {
            unset( $this->elements[$elementName] );
        }
        return;
    }

    public function render()
    {
        
        $output = "<head>";
        if( count( $this->elements ) > 0 )
        {
            foreach( $this->elements as $elementName => $elementValue )
            {
                $output .= "\n";
                $output .= '<' . $elementName . '>' . $elementValue . '</' . $elementName . '>';
                $output .= "\n";
            }
        }

        /**
         * requirements say to make sure that there is a title on the page.  This is the
         * responsibility of head since the title is within the head tag
         */
        if( !isset( $this->elements['title'] ) )
        {
            $output .= "<title>hello world</title>";
        }
        $output .= "</head>";
        echo $output;
    }
}
?>
