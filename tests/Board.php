<?php
    require_once 'lib/Board.php';

    class BoardTest extends PHPUnit_Framework_TestCase {
    
        /**
         * @test
         */
        public function isUnknown() {
            $board = new Board( array('A' => array(0)) );
            $this->assertTrue($board->isUnknown('A', 0));
        }

        /**
         * @test
         */
        public function isMiss() {
            $board = new Board( array('A' => array(1)) );
            $this->assertTrue($board->isMiss('A', 0));
        }

        /**
         * @test
         */
        public function isHit() {
            $board = new Board( array('A' => array(2)) );
            $this->assertTrue($board->isHit('A', 0));
        }

        /**
         * @test
         */
        public function isSunk() {
            $board = new Board( array('A' => array(3)) );
            $this->assertTrue($board->isSunk('A', 0));
        }

    }
?>
