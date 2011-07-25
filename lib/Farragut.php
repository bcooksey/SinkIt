<?php
    class Farragut {

        /* Selects the next shot, given the current $board.
         * See the private horizontalShot for details on return value and exceptions
         */
        public function chooseShot($board) {
            return $this->horizontalShot($board); 
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
