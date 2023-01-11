<?php
require_once __DIR__. "/../traits/Name.php";
class Category {
  use Name;
  private $icon;

  public function __construct($name, $icon)
  {
    $this->name = $name;
    $this->icon = $icon;

  }
  public function getName()
  {
    return $this->name;
  }
  public function getIcon()
  {
    return $this->icon;
  }
}