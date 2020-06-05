<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    class QuadraticEquation  
    {
        private $a;
        private $b;
        private $c;

        public function __construct($a,$b,$c)
        {
           $this->a = $a;
           $this->b = $b;
           $this->c = $c; 
        }
        public function getA()
        {
            return $this->a;
        }

        public function getB()
        {
            return $this->b;
        }

        public function getC()
        {
            return $this->c;
        }
        public function getDiscriminant()
        {
            return  ($this->b*$this->b)-(4*$this->a*$this->c);
        }       
        public function getRoot1()
        {
            if($this->getDiscriminant()<0){
                return 0;
            }
            return (-$this->b+sqrt($this->getDiscriminant()))/(2*$this->a);
        }
        public function getRoot2()
        {
            if($this->getDiscriminant()<0){
                return 0;
            }
            return (-$this->b-sqrt($this->getDiscriminant()))/(2*$this->a);
        }
    }
    $quadraticEquation = new QuadraticEquation(1,3,1);
    echo "The delta = " . $quadraticEquation->getDiscriminant() . '<br>';
    echo "The equation has tow roots = " . $quadraticEquation->getRoot1() . " and " . $quadraticEquation->getRoot2();
    ?>
</body>
</html>