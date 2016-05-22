<?php
  function set_locales($locale){
    global $title, $confirmation_title, $email_placeholder, $go, $modal_title, $name_placeholder, $menu_select,
           $normal, $vege, $children, $close, $thanks, $thanks_msg_ln1, $thanks_msg_ln2;
    if ($locale == 'es') {
      $title = 'Enlace Eliza y Jorge';
      $confirmation_title = 'Confirmación de asistencia';
      $email_placeholder = 'Correo electrónico';
      $go = 'Confirmar';
      $modal_title = 'Selección de menú';
      $name_placeholder = 'Invitado';
      $menu_select = 'Seleccione menú';
      $normal = 'Normal';
      $vege = 'Vegano';
      $children = 'Niño';
      $close = 'Cerrar';
      $thanks = 'Muchas Gracias!';
      $thanks_msg_ln1 = 'Gracias por confirmar su asistencia.';
      $thanks_msg_ln2 = 'Nos vemos el 17 de Junio.';

    }
    if ($locale == 'pl') {
      $title = 'This should be in Polish';

    }
  }
?>
