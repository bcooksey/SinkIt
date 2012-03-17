<?php
    require_once 'lib/Farragut.php';
    require_once 'lib/Board.php';

    class FarragutTest extends PHPUnit_Framework_TestCase {

        protected $farragut;
        protected $board;
        protected function setUp() {
            $this->farragut = new Farragut();
            $this->board = new Board(
                array(
                    'A' => array(0, 0, 0),
                    'B' => array(0, 0, 0)
                )
            );
        }

        /**
         * @test
         */
        public function chooseShot() {
            // First shot should be top left corner
            $shot = $this->farragut->chooseShot($this->board);
            $this->assertEquals(array('A', 0), $shot);

            // Successive shots should go every other column
            $this->board->setCellStatus('A', 0, 'miss');
            $shot = $this->farragut->chooseShot($this->board);
            $this->assertEquals(array('A', 2), $shot);

            // A new row should start when the edge of the board is reached
            $this->board->setCellStatus('A', 2, 'miss');
            $shot = $this->farragut->chooseShot($this->board);
            $this->assertEquals(array('B', 1), $shot);
        }

        /**
         * @test
         */
        public function chooseShotWithHit() {
            // With a hit on the board, the next shot should be adjacent to the hit
            $this->board->setCellStatus('B', 2, 'hit');
            $shot = $this->farragut->chooseShot($this->board);
            $this->assertEquals(array('A', 2), $shot);
        }
    }

?>
