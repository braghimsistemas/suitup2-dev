<?php
namespace ModuleDefault\Controllers;

use Suitup\Enum\MsgType;

class AlbumController extends AbstractController
{
  public function indexAction() {

    // Send an example message
    $this->addMsg('A simple message example', MsgType::INFO);
  }
}

