<?php
namespace ModuleError\Controllers;

class ErrorController extends AbstractController
{
  public function indexAction() {
    return $this->redirect($this->basePath('/'));
  }
}

