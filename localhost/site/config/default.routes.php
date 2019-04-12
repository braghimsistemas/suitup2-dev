<?php

// http://localhost:8080/site/album-adicionar
// http://localhost:8080/site/321asdf/teste/code/987/album-editar.html?algo=para&mostrar=
// http://localhost:8080/site/admin/teste/adicionar/id/3213,21/?algo=para&mostrar=
// http://localhost:8080/site/album-detalhe/1325.html

return array(
  'album-detalhe' => array(
    'type' => \Suitup\Mvc\Routes::TYPE_LINEAR,
    'controller' => 'album',
    'action' => 'index',
    'params' => array(
      'id' => '', // '/\D+/' --> If only numbers
      'name' => '/(\.html)$/'
    )
  ),
  // array(
  //   'type' => \Suitup\Mvc\Routes::TYPE_LITERAL,
  //   'controller' => 'album',
  //   'action' => 'adicionar',
  //   'url_list' => function() {
  //     return array(
  //       'album-adicionar.html',
  //       'album-adicionar',
  //       'albun-adicionar.html',
  //       'albun-adicionar',
  //     );
  //   },
  //   'params' => array()
  // ),
  // 'album-editar.html' => array(
  //   'type' => \Suitup\Mvc\Routes::TYPE_REVERSE,
  //   'controller' => 'album',
  //   'action' => 'editar',
  //   'params' => array(
  //     'id' => 0,
  //     'criar'
  //   )
  // ),
);
