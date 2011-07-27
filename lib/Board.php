<?php
    class Board {

        protected $grid;
        protected $statuses = array(
            'unknown' => 0,
            'miss'    => 1,
            'hit'     => 2,
            'sunk'    => 3, 
        );

        function __construct($grid) {
            $this->grid = $grid;
        }

        /* Simple helper methods to determine the status of a cell 
         * Params: $row and $col of the cell to examine
         * Return: Boolean indicated whether or not the cell is in that state
         */
        public function isUnknown($row, $col) { return $this->grid[$row][$col] === $this->statuses['unknown']; }
        public function isMiss($row, $col)    { return $this->grid[$row][$col] === $this->statuses['miss']; }
        public function isHit($row, $col)     { return $this->grid[$row][$col] === $this->statuses['hit']; }
        public function isSunk($row, $col)    { return $this->grid[$row][$col] === $this->statuses['sunk']; }

        /* Getters for the board's dimensions
         * Params: None
         * Return: Int
         */
        public function getLength() { return count( array_keys($this->grid) ) - 1; }
        public function getWidth()  { return count($this->grid['A']) - 1; }

        /* Fetch a list of keys to iterate through the rows of the board
         * Params: None
         * Return: Array of keys
         */ 
        public function getRows() { return array_keys($this->grid); }

        /* Fetch the neighbors of a given cell
         * Params: Row and column of a cell
         * Return: Array of touples [ [row, column], ...], one per neighbor
         */ 
        public function getNeighboringCells($row, $col) {
            $neighbors = array();
            $rows = $this->getRows();

            # Update the internal pointer to the corret row
            while (current($rows) !== $row) { next($rows); }

            // Push on top neighbor
            $neighborRow = prev($rows);
            if ($neighborRow) {
                array_push( $neighbors, array($neighborRow, $col) );
            }

            $neighborRow = next($rows); // Pointer back to $row

            // Push on left neighbor
            if ($col - 1 >= 0) {
                array_push( $neighbors, array($neighborRow, $col-1) );
            } 

            //Push on right neighbor
            if ($col + 1 <= $this->getWidth()) {
                array_push( $neighbors, array($neighborRow, $col+1) );
            }

            // Push on bottom neighbor 
            $neighborRow = next($rows);
            if ($neighborRow) {
                array_push( $neighbors, array($neighborRow, $col) );
            }

            return $neighbors;
        }

        /* Change the status of a cell
         * Params: coordinates of the cell to update, plus the new status
         * Return: Null
         */
        public function setCellStatus($row, $col, $status) {
           $this->grid[$row][$col] = $this->statuses[$status];  
           return null;
        }

    }
?>
