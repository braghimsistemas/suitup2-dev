<?php
namespace ModuleDefault\Model\Gateway;

use SuitUp\Database\Gateway\AbstractGateway;

class Artist extends AbstractGateway {

  /**
   * Required. Table name and pk's list
   */
  protected $name = 'artist';
  protected $primary = array('pk_artist');

  /**
   * Optional
   * You can define here a column from your table
   * that must to be updated with current timestamp
   * every UPDATE call
   */
  protected $onUpdate = array('edited' => 'NOW()');

  public function getList() {
    $query = $this->select("SELECT * FROM {$this->name} a")
      ->where('a.status = 1')
      ->order(array('a.name ASC'));

    return $this->db->query($query);
  }
}

