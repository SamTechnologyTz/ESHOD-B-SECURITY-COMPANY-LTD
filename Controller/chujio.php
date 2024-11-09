<?php
class hikikisha () {
  public $data;

  public function ___constractor($data) {
    $this->data = $data;
  }

  public function hakiki($this->data) {
    $this->data = trim($this->data);
    $this->data = stripslashes($this->data);
    $this->data = htmlspacialchars($this->data);
    return $this->data;
  }
}
?>
