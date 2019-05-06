<?php
namespace ModuleDefault\Controllers;

use SuitUp\Enum\MsgType;
use SuitUp\Paginate\Paginate;
use ModuleDefault\Model\ArtistBusiness;

class IndexController extends AbstractController
{
  public function indexAction() {

    // Send an example message
    $this->addMsg('A simple message example', MsgType::WARNING);

    // Get the active list of artists from database
    $artists = new ArtistBusiness();

    $list = $artists->getList();
    $list->setNumberPerPage(1);
    $list->setPageRange(3);
    $list->setCurrentPage($this->getParam(Paginate::getParamName(), 1));

    $this->addViewVar(array(
      'artists' => $list
    ));
  }
}

