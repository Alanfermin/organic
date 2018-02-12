<?php 
//Aquí creo el menú
if(function_exists('register_nav_menus')){
    register_nav_menus(array('alan'=>'Menu Principal Superior'));
}
//Creando una clase para el <a> (menu)
add_filter( 'nav_menu_link_atributes', 'clase_menu_invento', 10, 3);

function clase_menu_invento($att, $item, $args){
    $class = 'nav-link';
    $atts['class']=$class;
    return $atts;
}

?>