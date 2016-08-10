<?php
/**
 * Created by PhpStorm.
 * User: Wes Gilleland
 * Date: 8/10/2016
 * Time: 10:34 AM
 */

namespace Tablebuilder\Interfaces;


interface RowInterface extends \Iterator, \ArrayAccess
{
  /**
   * Returns the data from the table row, ordered from right to left
   *
   * @return array
   */
  public function getData():array;

  /**
   * Gets the cell at the specified index. Does not remove the cell
   * from the row. A negative index will start at the end.
   *
   * @param int $index The numeric index where the cell is
   *
   * @throws \Exception If there is no cell in the specified index
   * @return Cell The cell at the specified index
   */
  public function getCell(int $index):Cell;

  /**
   * Sets the cell in the row to the new cell value. A negative index
   * will start at the end.
   *
   * @param int  $index The index in the row to replace
   * @param Cell $cell  The new cell object
   *
   * @throws \Exception If the index is not accessible in the row
   */
  public function setCell(int $index, Cell $cell):void;

  /**
   * Removes a cell at the specified index by shifting the cells to the right
   * of the index left.
   *
   * @param int $index The index of the cell to remove
   *
   * @throws \Exception If the index is not accessible in the array
   */
  public function removeCell(int $index):void;

  /**
   * Returns copies of the cells in the given inclusive index range
   * @param int $start The inclusive beginning index
   * @param int $end The inclusive ending index
   *
   * @throws \Exception If the range is not in bounds of the row
   * @return Cell[]
   */
  public function getCellRange(int $start, int $end):array;

  /**
   * Pushes a new cell to the end of the row
   * @param Cell $cell
   */
  public function push(Cell $cell):void;

  /**
   * Pops (removes and returns) a cell from the end of the row
   * @return Cell
   */
  public function pop():Cell;
}