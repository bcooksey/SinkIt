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
        public function getRows()   { return array_keys($this->grid); }

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
