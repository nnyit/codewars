<?php

require_once "CodeWarsKatas.php";
class TestCodeWarsKatas extends PHPUnit\Framework\TestCase
{

    public function testBasics() {

        $a = ["NORTH", "SOUTH", "SOUTH", "EAST", "WEST", "NORTH", "WEST"];
        $this->testdirReduc(["WEST"], $a);

        $b=["NORTH","SOUTH","SOUTH","EAST","WEST","NORTH"];
        $this->testdirReduc([], $b);

        $c = ["NORTH","SOUTH","SOUTH","EAST","WEST","NORTH","NORTH"];
        $this->testdirReduc(["NORTH"], $c);
    }

    public function testEmpties()
    {
        $a = ["NORTH", "SOUTH", "EAST", "WEST"];
        $this->testEmpty($a);

        $b = ["EAST", "WEST", "NORTH", "SOUTH"];
        $this->testEmpty($b);

        $c = ["NORTH", "SOUTH", "WEST", "EAST"];
        $this->testEmpty($c);
    }

    public function testIdenticals()
    {
        $a = ["EAST", "EAST", "SOUTH", "SOUTH", "EAST", "NORTH", "WEST", "SOUTH", "EAST", "EAST", "NORTH"];
        $this->testIdentical($a);

        $b = ["WEST", "SOUTH", "SOUTH", "SOUTH", "WEST", "WEST"];
        $this->testIdentical($b);

        $c = ["WEST", "SOUTH", "SOUTH", "WEST", "WEST"];
        $this->testIdentical($c);

        $d = ["NORTH", "EAST"];
        $this->testIdentical($d);
    }

    public function testExt() {



        $a =  ["NORTH", "EAST", "WEST", "SOUTH", "WEST", "WEST"];
        $this->testdirReduc(["WEST", "WEST"], $a);

        $b= ["NORTH", "WEST", "SOUTH", "EAST"];
        $this->testdirReduc(["NORTH", "WEST", "SOUTH", "EAST"],$b);

        $c = ["NORTH", "SOUTH", "NORTH", "WEST", "EAST", "EAST"];
        $this->testdirReduc(["NORTH", "EAST"], $c);

        $d = ["NORTH", "SOUTH", "NORTH", "WEST", "EAST", "SOUTH", "EAST"];
        $this->testdirReduc(["EAST"], $d);
    }

    public function testEmpty($arr)
    {
        $this->testdirReduc([], $arr);
    }

    public function testIdentical($arr)
    {
        $this->testdirReduc($arr, $arr);
    }

    public function testDirReduc($expected, $actual)
    {
        $cwk = new CodeWarsKatas();
        $this->assertEquals($expected, $cwk->dirReduc($actual));
    }
}
