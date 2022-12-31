<?php 

    /* OOP in PHP */

    class car{
        public $color;
        public $brand;
        public $number;

        // method for set color of car
        function set_color($color) {
            $this->color = $color;
        }

        // method for get color of car
        function get_color(){
            return $this-> color;
        }

        // method for set brand of car
        function set_brand($brand){
            $this->brand = $brand;
        }

        // method for get brand of car
        function get_brand(){
            return $this-> brand;
        }

        // method of set number of car
        function set_number($number){
            $this->number = $number;
        }

        // mothod of get number of car
        function get_number(){
            return $this-> number;
        }        
    }


    /*
        following codes i access the car class property using  methods 
        set_color, set_brand, set_number
    
    */

    // now i assign new car called bmw to car class
    $bmw = new car();

    // then i  set the color of bmw car as red
    $bmw->set_color("red");

    // set bmw car brand using  function set_brand($brand){
    $bmw->set_brand("BMW");

    // set bmw car number using  function set_number($number){
    
    $bmw->set_number("123456789");

   
    // then i print color of the bmw car

    echo "<u>Property Value change using methods</u>  <br><br>";

    echo "Color of car is " . $bmw->get_color();

    // now i print brand of the bmw car
    echo "<br> Brand of car is " . $bmw->get_brand();

    // now i print number of th bmw car
    echo "<br> Number of car is " . $bmw->get_number();


    /* 
        in the following code lines i access the property called $seats not useing any method
        so that there is another way to asscess any property outside from the class
    */

    echo "<br><br><hr><br>";

    
    echo "<u>Property Value change directly (not using methods)</u> <br><br>";

    $audi = new car();

    $audi->color = "white";
    $audi->brand = "Audi";
    $audi->number = "789654123";

    echo "Color of car is " . $audi->color;
    echo "<br> Brand of car is " . $audi->brand;
    echo "<br> Number of car is " . $audi->number;
    
    echo "<br><br>";

    /*
        var_dump -  used to dump information about a variable
        instanceof - used to check if an object belongs to a class
    */

    var_dump($audi instanceof car);

?>
