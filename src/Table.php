<?php
/**
 * Created by PhpStorm.
 * User: Wes Gilleland
 * Date: 8/10/2016
 * Time: 10:30 AM
 */

namespace Tablebuilder;


class Table
{
  /**
   * @var Row[]
   */
  protected $rows;
  /**
   * @var Column[]
   */
  protected $columns;
  /**
   * @var array
   */
  protected $attributes;

  /**
   * Table constructor.
   *
   * @param array $data
   */
  public function __construct(array $data = [])
  {
    $this->attributes = [];
    if ($data) {
      $this->parseData($data);
    } else {
      $this->rows = new Row();
    }
  }

}