<?php
namespace ModuleDefault\Model\Gateway;

use SuitUp\Database\Gateway\AbstractGateway;

class Artist extends AbstractGateway {

  const DELETED = 9;

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
    $query = $this->select('a.pk_artist, a.name')
      ->from(array($this->name => 'a'))
      ->where('a.status <> ?', self::DELETED);
      // ->orWhere('a.name <> :name');

    return $this->db->paginate($query);
  }
}

