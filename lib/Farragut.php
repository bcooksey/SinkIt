<?php
    class Farragut {

        /* Selects the next shot, given the current $board.
         * See the private horizontalShot for details on return value and exceptions
         */
        public function chooseShot($board) {
            $killShot = $this->killShot($board);
            return $killShot !== null ? $killShot : $this->horizontalShot($board); 
        }

        /* Walk the board, looking for any ships that have been hit, but not
         * sunk, and try to hit them again.
         * Params: A Board object
         * Return: If a hit is found, then the coords of the next shot, else
         * null.
         */
        private function killShot($board) {
            $rows = $board->getRows();
            $maxColumn = $board->getWidth();
            $column = 0;
            for ($row = current($rows); $row !== false; $row = next($rows)) {
                for ($column = 0; $column <= $maxColumn; $column++) {

                    // Foreach hit, see if any of the neighbors are unknown.
                    // If one is found, mark it as the next shot
                    if ($board->isHit($row, $column)) {
                        foreach ($board->getNeighboringCells($row, $column) as $neighbor) {
                            if ($board->isUnknown($neighbor[0], $neighbor[1])) {
                                return $neighbor;
                            }
                        }
                    }
                }
            }
            return null;
        }

        /* Scans the board row by row, taking shots in every other column.
         * The result is a horizontal striping pattern.
         * Params: A Board object
         * Return: On success, an array of [row, column] for the next shot.
         * On failure, throws an exception 
         */
        private function horizontalShot($board) {
            $rows = $board->getRows();
            $startingColumn = 0;
            $maxColumn = $board->getWidth();
            $column = 0;
            for ($row = current($rows); $row !== false ; $row = next($rows)) {
                for ($column = $startingColumn; $column <= $maxColumn; $column += 2) {
                    if ($board->isUnknown($row, $column)) {
                        return array($row, $column);
                    }
                }

                // No shots available in this row, so toggle offset
                // and move to next one
                $startingColumn = $startingColumn ? 0 : 1;
            }

            // Didn't find a shot at all...
            throw new Exception('No shot found!');
        }
    }
?>
