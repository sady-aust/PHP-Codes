<?php

    class Calculation{
        public $a;
        public $b;

        public function getValue($x,$y){
            $this->a = $x;
            $this->b = $y;

            return $this;

        }

        public function getResult(){
            return $this->a*$this->b;
        }
    }

    $cal = new Calculation();
    echo "Result is ".$cal->getValue(5,6)->getResult();
?>