<?php
namespace ModuleAdmin\Controllers;

use SuitUp\Enum\MsgType;

class ArtistasController extends AbstractController
{
  public function indexAction() {
    
    $this->addMsg('Lista de artistas');

  }
}

