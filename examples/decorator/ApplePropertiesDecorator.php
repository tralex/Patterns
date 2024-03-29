<?php
class ApplePropertiesDecorator extends FruitsDecorator {
  public function __construct(Fruits $decoratedFruits){
    parent::__construct($decoratedFruits);
  }

  private function redApple() {
    echo "<br> color:red";
  }
  private function getGreen() {
    echo "<br> with leaves";
  }

  public function getFruit() {
    $this->decoratedFruits->getFruit();
    $this->redApple();
    $this->getGreen();
  }
}
?>
