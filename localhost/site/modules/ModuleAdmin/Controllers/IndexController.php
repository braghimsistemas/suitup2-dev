<?php
namespace ModuleAdmin\Controllers;

use SuitUp\Enum\MsgType;

class IndexController extends AbstractController
{
  public function indexAction() {

    $this->addMsg('Redirected. The index/index route does not exists in the system', MsgType::DANGER, true);
    $this->addMsg('But it\'s everything OK!', MsgType::SUCCESS, true);

    return $this->redirect($this->baseUrl('/artistas'));
  }
}

