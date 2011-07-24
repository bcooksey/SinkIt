<?php
    require_once('Farragut');
    class FarragutTest extends PHPUnit_Framework_TestCase {

        public function testShoot() {
            $fakeBoard = array('A' => array(0, 0, 0), 'B' => array(0, 0, 0));
            $farragut = new Farragut();

            // First shot should be top left corner
            $shot = $farragut->shoot(fakeBoard);
            $this->assertEquals(array('A', 0), $shot);
            $fakeBoard['A'][0] = 1;

            // Successive shots should follow a diagonal
            $shot = $farragut->shoot(fakeBoard);
            $this->assertEquals(array('B', 1), $shot);
        }

    }
    

?>
