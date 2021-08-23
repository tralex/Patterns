<?php
class BananaPropertiesDecorator extends FruitsDecorator {
  public function __construct(Fruits $decoratedFruits){
    parent::__construct($decoratedFruits);
  }

  private function smashed() {
    echo "<br> smashed banana";
  }
  private function getGreenBanana() {
    echo "<br> this is very green banana";
  }

  public function getFruit() {
    $this->decoratedFruits->getFruit();
    $this->smashed();
    $this->getGreenBanana();
  }
}
?>
