<?php
namespace ModuleDefault\Controllers;

use SuitUp\Enum\MsgType;

class IndexController extends AbstractController
{
  public function indexAction() {
    
    // Send an example message
    $this->addMsg('A simple message example', MsgType::WARNING);
  }
}

