<?php
    require_once 'lib/Farragut.php';

    class FarragutTest extends PHPUnit_Framework_TestCase {

        /**
         * @test
         */
        public function chooseShot() {
            // Setup
            $board = array(
                'A' => array(0, 0, 0),
                'B' => array(0, 0, 0)
            );
            $farragut = new Farragut();

            // First shot should be top left corner
            $shot = $farragut->chooseShot($board);
            $this->assertEquals(array('A', 0), $shot);

            // Successive shots should go every other column
            $board['A'][0] = 1;
            $shot = $farragut->chooseShot($board);
            $this->assertEquals(array('A', 2), $shot);

            // A new row should start when the edge of the board is reached
            $board['A'][2] = 1;
            $shot = $farragut->chooseShot($board);
            $this->assertEquals(array('B', 1), $shot);
        }
    }

?>
