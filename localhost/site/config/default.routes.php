<?php
return array(
  'albums' => array(
    'controller' => 'album',
    'action' => 'index',
    'params' => array(
      'id' => '/\D+/'
      // 'name' // Doesn't matter here
    )
  ),
  'album-details' => array(
    'type' => \SuitUp\Mvc\Routes::TYPE_LINEAR,
    'controller' => 'album',
    'action' => 'details',
    'params' => array(
      'id' => '', // '/\D+/' --> If only numbers
      'name' => '/(\.html)$/'
    )
  ),
);
