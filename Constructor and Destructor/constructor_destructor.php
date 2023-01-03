<?php 

    /* I creata a class called car */
    class car{

        //add some properties like following
        public $color;
        public $number;
        public $brand;

        /*here i use __construct function
            Constructor

        */
        function __construct($color, $number, $brand)
        {
            $this->color = $color;
            $this->number = $number;
            $this->brand = $brand;
        }
       /*
        function get_color(){
            return $this->color;
        }

        /*
            here i use __destruct
            Destructor

        */

        function __destruct()
        {
            echo ("Car color is {$this->color}, Number is {$this->number} and Brand is {$this->brand} <br>");
        }

        /* output is
        
            Car color is silver, Number is 456789 and Brand is Audi
            Car color is White, Number is 123456 and Brand is BMW

        */

    }

    // here i add a new car 
    $bmw = new car("White", "123456", "BMW");

    $audi = new car("silver", "456789", "Audi");
    //echo $bmw->get_color();



?>