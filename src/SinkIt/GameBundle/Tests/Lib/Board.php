<?php

    namespace SinkIt\GameBundle\Lib;

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

        /**
         * @test
         */
        public function getNeighboringCells() {
            $board = new Board( array(
                'A' => array(0, 0, 0),
                'B' => array(1, 0, 2),
                'C' => array(0, 3, 0),
            ));

            // Test a cell in the middle
            $gotNeighbors = $board->getNeighboringCells('B', 1);
            $expectedNeighbors = array( 
                array('A', 1),
                array('B', 0),
                array('B', 2),
                array('C', 1),
            );
            $this->assertEquals($gotNeighbors, $expectedNeighbors);

            // Test a cell on the edge
            $gotNeighbors = $board->getNeighboringCells('C', 2);
            $expectedNeighbors = array( 
                array('B', 2),
                array('C', 1),
            );
            $this->assertEquals($gotNeighbors, $expectedNeighbors);
        }
    }
?>
