<?php

namespace Sample\Main;

require_once( "form_input.php" );
require_once( "page.php" );

use Sample\Form_Input\form_input;
use Sample\Page\page;

class main
{
    public function go()
    {

        $p = new page();

        $firstNameBox = new form_input( 'firstName' , 'firstLabel' , 'text' ); 
        $lastNameBox = new form_input( 'lastName' , 'lastLabel' , 'text' ); 

        $p
         ->get_body()
         ->add( $firstNameBox );

        $p
         ->get_body()
         ->add( $lastNameBox );

        $p->render();
    }
}

$m = new main();
$m->go();

?>
