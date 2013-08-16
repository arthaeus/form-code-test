<?php

namespace Sample\Page;

require_once( "form_container.php" );
require_once( "head.php" );

use Sample\Form_Container\form_container;
use Sample\Head\head;

class page
{

    protected $head = null;

    /**
     * For this simple example, the body will be an instance of the form_container class
     * since the body will only be first/last name text boxes
     */
    protected $body = null;

    public function __construct()
    {
        $this->head = new head();
        $this->body = new form_container();
        return;
    }

    public function get_head() { return $this->head; }

    /**
     * body will be read only
     */
    public function get_body() { return $this->body; }

    public function output_body()
    {

        /**
         * simply output the first and last name boxes
         */
        $output = $this
            ->body
            ->get_input_by_name('firstName')
            ->render();
        
        $output .= $this
            ->body
            ->get_input_by_name('lastName')
            ->render();

        return $output;
    }

    public function render()
    {
        echo "<html>\n";
        $this
          ->head
          ->render();

        echo"\n<body>\n";

        echo $this->output_body();

        echo "\n</body>";
        echo "\n</html>";

    }
}
?>
