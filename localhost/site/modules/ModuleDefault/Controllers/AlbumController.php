<?php
namespace ModuleDefault\Controllers;

use Suitup\Enum\MsgType;

class AlbumController extends AbstractController
{
  public function indexAction() {
    $this->addMsg('Um teste de mensagem', MsgType::INFO);
  }
}

