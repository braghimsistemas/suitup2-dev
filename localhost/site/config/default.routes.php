<?php
return array(
  'album-detalhe' => array(
    'type' => \Suitup\Router\Routes::TYPE_LINEAR,
    'controller' => 'album',
    'action' => 'index',
    'params' => array(
        'id' => false
    )
  ),
  'album-editar' => array(
    'type' => \Suitup\Router\Routes::TYPE_REVERSE,
    'controller' => 'album',
    'action' => 'editar',
    'params' => array(
        'id' => 0
    )
  ),
  'album-adicionar' => array(
    'type' => \Suitup\Router\Routes::TYPE_LITERAL,
    'controller' => 'album',
    'action' => 'adicionar',
    'params' => array()
  )
);
