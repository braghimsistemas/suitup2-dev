<?php
namespace ModuleError\Controllers;

class IndexController extends AbstractController
{
  public function indexAction() {
    return $this->redirect($this->basePath('/'));
  }
}

