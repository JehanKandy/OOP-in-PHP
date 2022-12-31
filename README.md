# OOP-in-PHP
PHP Object-Oriented Concepts


# Explanation

the OOP in php is PHP Object-Oriented Concepts

in the file [class.php](https://github.com/JehanKandy/OOP-in-PHP/blob/main/class%20and%20objects/class.php)

in first code lines i create a class called `car{}` with 3 properties `$color`, `$brand` and `number`

    class car{
        public $color;
        public $brand;
        public $number;
      
and the i create 6 methods of access the above 3 properties, <br>

1. `set_color($color)` , `get_color()`

        function set_color($color) {
            $this->color = $color;
        }

        function get_color(){
            return $this-> color;
        } 

for set the car color and get th color of car


