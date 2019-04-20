<?php
namespace ModuleDefault\Controllers;

use SuitUp\Enum\MsgType;
use ModuleDefault\Model\ArtistBusiness;
use SuitUp\Database\Gateway\AbstractGateway;

class IndexController extends AbstractController
{
  public function indexAction() {
    
    // Send an example message
    $this->addMsg('A simple message example', MsgType::WARNING);

    // Get the active list of artists from database
    $artists = new ArtistBusiness();
    $list = $artists->getList();

    $this->addViewVar(array(
      'artists' => $list
    ));
  }
}

