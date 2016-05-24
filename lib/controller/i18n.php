<?php
  function set_locales($locale){
    global $title, $confirmation_title, $email_placeholder, $go, $modal_title, $name_placeholder, $menu_select, $normal,
           $vege, $children, $close, $thanks, $thanks_msg_ln1, $thanks_msg_ln2, $sorry, $closed_msg_ln1, $closed_msg_ln2,
           $not_yet_open, $opening_in;
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
      $sorry = 'Lo sentimos';
      $closed_msg_ln1 = 'El plazo de confirmación automática ha finalizado';
      $closed_msg_ln2 = 'Siempre es posible contactarnos en confirm@tiriel.eu';
      $not_yet_open = 'El plazo de confirmación automática no ha comenzado';
      $opening_in = 'Abriremos el plazo en';

    } elseif ($locale == 'pl') {
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
      $sorry = 'Lo sentimos';
      $closed_msg_ln1 = 'El plazo de confirmación automática ha finalizado';
      $closed_msg_ln2 = 'Siempre es posible contactarnos en confirm@tiriel.eu';
      $not_yet_open = 'El plazo de confirmación automática no ha comenzado';
      $opening_in = 'The okno is otwarte';

    } else {
      $title = 'Wedding Eliza and Jorge';
      $confirmation_title = 'Attendance confirmation';
      $email_placeholder = 'email';
      $go = 'Confirm';
      $modal_title = 'Menu selection';
      $name_placeholder = 'Guest name';
      $menu_select = 'Select menu type';
      $normal = 'Normal';
      $vege = 'Vegan';
      $children = 'Children';
      $close = 'Close';
      $thanks = 'Thank you!';
      $thanks_msg_ln1 = 'Thanks for confirming your attendance.';
      $thanks_msg_ln2 = 'See you on June 17.';
      $sorry = 'We are sorry';
      $closed_msg_ln1 = 'The self confirmation period is over';
      $closed_msg_ln2 = 'You can always reach us at confirm@tiriel.eu';
      $not_yet_open = 'The self registration period has not yet started';
      $opening_in = 'We are opening in';
    }
  }
?>
