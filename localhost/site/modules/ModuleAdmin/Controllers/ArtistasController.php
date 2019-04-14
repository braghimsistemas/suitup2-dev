<?php
namespace ModuleAdmin\Controllers;

use SuitUp\Enum\MsgType;

class ArtistasController extends AbstractController
{
  public function indexAction() {
    
    $this->addMsg('Lista de artistas');

    // $mysql = new \SuitUp\Database\DbAdapter\Mysql(array(
    //   'host' => '192.168.15.2',
    //   'dbname' => 'suitup',
    //   'username' => 'suitup',
    //   'password' => '123456'
    // ));
    
    // $db = new \SuitUp\Database\DbAdapter($mysql);

  }
}

