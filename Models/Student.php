<?php

class Student
{
public $name;
public $math;
public $physical;
public $chemistry;

    /**
     * @param $name
     * @param $math
     * @param $physical
     * @param $chemistry
     */
    public function __construct($name, $math, $physical, $chemistry)
    {
        $this->name = $name;
        $this->math = $math;
        $this->physical = $physical;
        $this->chemistry = $chemistry;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name): void
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getMath()
    {
        return $this->math;
    }

    /**
     * @param mixed $math
     */
    public function setMath($math): void
    {
        $this->math = $math;
    }

    /**
     * @return mixed
     */
    public function getPhysical()
    {
        return $this->physical;
    }

    /**
     * @param mixed $physical
     */
    public function setPhysical($physical): void
    {
        $this->physical = $physical;
    }

    /**
     * @return mixed
     */
    public function getChemistry()
    {
        return $this->chemistry;
    }

    /**
     * @param mixed $chemistry
     */
    public function setChemistry($chemistry): void
    {
        $this->chemistry = $chemistry;
    }
    public function getAverage()
    {
        return (($this->math+$this->physical+$this->chemistry)/3);
    }



}

