<?php
    class Farragut {
        public function chooseShot($board) {
            return $this->horizontalShot($board); 
        }

        /* Scans the board row by row, taking shots in every other column.
         * The result is a horizontal striping pattern.
         * Params: $board - a 2x2 matrix of the current state of the board 
         * Return: On success, an array of [row, column] for the next shot.
         * On failure, throws an exception 
         */
        private function horizontalShot($board) {
            $rows = array_keys($board);
            $startingColumn = 0;
            $maxColumn = count($board[$rows[0]]) - 1;
            $column = 0;
            for ($row = current($rows); $row !== false ; $row = next($rows)) {
                for ($column = $startingColumn; $column <= $maxColumn; $column += 2) {
                    if ($board[$row][$column] === 0) {
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
