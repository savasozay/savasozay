<?php
c::set('license', 'K2-PERSONAL-a992cc9e229fc732c0f6eb998c320cac');

c::set('roles', array(
  array(
    'id'      => 'admin',
    'name'    => 'Admin',
    'default' => true,
    'panel'   => true
  ),
  array(
    'id'      => 'client',
    'name'    => 'Client',
    'panel'   => false
  )
));
c::set('markdown.extra',true);