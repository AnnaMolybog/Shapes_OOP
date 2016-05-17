<?php
echo "<pre>";

class square
{
    private $color;
    private $borderColor;
    private $position = [];
    private $size;

    public function getSize()
    {
        return $this->size;
    }

    public function setSize($size)
    {
        $this->size = $size;
    }

    public function getColor()
    {
        return $this->color;
    }

    public function setColor($color)
    {
        $this->color = $color;
    }

    public function getBorderColor()
    {
        return $this->borderColor;
    }

    public function setBorderColor($borderColor)
    {
        $this->borderColor = $borderColor;
    }

    public function getPosition($key)
    {
        return $this->position[$key];
    }

    public function setPosition(array $position)
    {
        $this->position[0] = $position[0];
        $this->position[1] = $position[1];
    }

    public function displaySquare(){
?>
        <span style=
              "width: <?=$this->getSize()?>;
               height: <?=$this->getSize()?>;
               background-color: <?=$this->getColor()?>;
               border: 3px solid <?=$this->getBorderColor()?>;
               position: absolute;
               top: <?=$this->getPosition(0)?>;
               left: <?=$this->getPosition(1)?>"></span>

   <?php }
}

class circle
{
    private $radius;
    private $color;
    private $borderColor;
    private $position = [];
    private $size;

    public function getSize()
    {
        return $this->size;
    }

    public function setSize($size)
    {
        $this->size = $size;
    }

    public function getColor()
    {
        return $this->color;
    }

    public function setColor($color)
    {
        $this->color = $color;
    }

    public function getBorderColor()
    {
        return $this->borderColor;
    }

    public function setBorderColor($borderColor)
    {
        $this->borderColor = $borderColor;
    }

    public function getPosition($key)
    {
        return $this->position[$key];
    }

    public function setPosition(array $position)
    {
        $this->position[0] = $position[0];
        $this->position[1] = $position[1];
    }

    public function getRadius()
    {
        return $this->radius;
    }

    public function setRadius($radius)
    {
        $this->radius = $radius;
    }
    public function displayCircle(){
        ?>
        <span style=
              "
                  width: <?=$this->getSize()?>;
                  height: <?=$this->getSize()?>;
                  background-color: <?=$this->getColor()?>;
                  border: 3px solid <?=$this->getBorderColor()?>;
                  position: absolute;
                  top: <?=$this->getPosition(0)?>;
                  left: <?=$this->getPosition(1)?>;
                  border-radius: <?=$this->getRadius()?>"></span>
    <?php }
}
class rectangle
{
    private $color;
    private $borderColor;
    private $position = [];
    private $size = [];

    public function getSize($pos)
    {
        return $this->size[$pos];
    }

    public function setSize(array $size)
    {
        $this->size[0] = $size[0];
        $this->size[1] = $size[1];
    }

    public function getColor()
    {
        return $this->color;
    }

    public function setColor($color)
    {
        $this->color = $color;
    }

    public function getBorderColor()
    {
        return $this->borderColor;
    }

    public function setBorderColor($borderColor)
    {
        $this->borderColor = $borderColor;
    }

    public function getPosition($key)
    {
        return $this->position[$key];
    }

    public function setPosition(array $position)
    {
        $this->position[0] = $position[0];
        $this->position[1] = $position[1];
    }

    public function displayRectangle()
    {
        ?>
        <span style=
          "width: <?= $this->getSize(0) ?>;
              height: <?= $this->getSize(1) ?>;
              background-color: <?= $this->getColor() ?>;
              border: 3px solid <?= $this->getBorderColor() ?>;
              position: absolute;
              top: <?= $this->getPosition(0) ?>;
              left: <?= $this->getPosition(1) ?>"></span>

<?php }
}

class rectangleCurve
{
    private $color;
    private $borderColor;
    private $position = [];
    private $size = [];
    private $radius;

    public function getRadius()
    {
        return $this->radius;
    }

    public function setRadius($radius)
    {
        $this->radius = $radius;
    }

    public function getSize($pos)
    {
        return $this->size[$pos];
    }

    public function setSize(array $size)
    {
        $this->size[0] = $size[0];
        $this->size[1] = $size[1];
    }

    public function getColor()
    {
        return $this->color;
    }

    public function setColor($color)
    {
        $this->color = $color;
    }

    public function getBorderColor()
    {
        return $this->borderColor;
    }

    public function setBorderColor($borderColor)
    {
        $this->borderColor = $borderColor;
    }

    public function getPosition($key)
    {
        return $this->position[$key];
    }

    public function setPosition(array $position)
    {
        $this->position[0] = $position[0];
        $this->position[1] = $position[1];
    }

    public function displayRectangleCurve(){
        ?>
        <span style=
              "
                  width: <?=$this->getSize(0)?>;
                  height: <?=$this->getSize(1)?>;
                  background-color: <?=$this->getColor()?>;
                  border: 3px solid <?=$this->getBorderColor()?>;
                  position: absolute;
                  top: <?=$this->getPosition(0)?>;
                  left: <?=$this->getPosition(1)?>;
                  border-radius: <?=$this->getRadius()?>"></span>
    <?php }

}

$square = new square();
$square->setSize('100');
$square->setColor('red');
$square->setBorderColor('green');
$square->setPosition(['150', '200']);
$square->displaySquare();

$circle = new circle();
$circle->setSize('80');
$circle->setRadius('50px');
$circle->setColor('blue');
$circle->setBorderColor('yellow');
$circle->setPosition(['150', '400']);
$circle->displayCircle();

$rectangle = new rectangle();
$rectangle->setSize(['250', '100']);
$rectangle->setColor('purple');
$rectangle->setBorderColor('black');
$rectangle->setPosition(['150', '600']);
$rectangle->displayRectangle();

$rectangleCurve = new rectangleCurve();

$rectangleCurve->setSize(['200', '80']);
$rectangleCurve->setRadius('10px');
$rectangleCurve->setColor('AntiqueWhite');
$rectangleCurve->setBorderColor('DarkSlateGray');
$rectangleCurve->setPosition(['150', '960']);
$rectangleCurve->displayRectangleCurve();

