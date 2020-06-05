<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    class Rectangle
    {
        public $width;
        public $height;

        public function __construct($width, $height)
        {
            $this->width = $width;
            $this->height = $height;
        }

        //tinh dien tich
        public function getArea()
        {
            return $this->width * $this->height;
        }

        //tinh chu vi
        public function getPerimeter()
        {
            return (($this->width + $this->height) * 2);
        }

        public function display()
        {
            return "Rectangle {" . "width=" . $this->width . ", height=" . $this->height . "}";
        }

    }
    $rectangle = new Rectangle(10, 20);
    echo $rectangle->display(). '<br>';
    echo 'Chu Vi = ' . $rectangle->getPerimeter() . '<br>';
    echo 'Diện tích = '. $rectangle->getArea() ;
    ?>
</body>

</html>