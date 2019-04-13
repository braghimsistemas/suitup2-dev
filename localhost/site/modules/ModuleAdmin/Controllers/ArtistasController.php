<?php
namespace ModuleAdmin\Controllers;

use Suitup\Enum\MsgType;

class ArtistasController extends AbstractController
{
  public function indexAction() {
    
    $this->addMsg('Lista de artistas');

  }
}

