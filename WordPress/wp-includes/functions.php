<?php

function add_administrador_tema_role() { //nombre de nuestra función, puede ser el nombre que quieras
    add_role(
        'administrador_tema', //Nombre de role.
        'Administrador Tema', //Nombre que se visualará en la creación o página de opciones de usuarios.
           array(    
            'read' => true, //Permite el acceso al dashboard del adminitrador.
            'switch_themes' => true, //Permite el cambio de temas.
            'edit_themes'   => true, //Permite editar archivos desde el administrado de archivos del tema.
            'edit_theme_options' => true, //Permite modificar Widgets,Menús, Personalizar.
            'install_themes'    => true,  //Permite instalar temas nuevos.
            'update_themes' => true, //Permite actualizar temas instalados.
            'delete_themes' => true, //Permite eliminar temas.

            )   //Array con las capabilities
    );
}
    
    //add_action(Hook, Nombre de la función)
    add_action('init', 'add_administrador_tema_role'); 


// -- Removing user rol;

function remove_role_administrated_themes(){
    remove_role('administrator_theme');
}
    add_action('init', 'remove_role_administrated_themes');

// -- Modify capabilities in roles


function add_cap_subscriber(){
    
    $role = get_role('subscriber'); // Instance in $role var;
    $role->add_cap(); // Adding capability using add_cap() method;

}
    add_action('init', 'add_cap_subscriber'); // ('Hook', 'name of function');

// $role->remove_cap(); 

// -- Removing user editor access;

function remove_cap_editor(){

    $role = get_role('subscriber');
    $role->remove_cap('edit_pages');

}
    add_action( 'init', 'remove_cap_editor');

