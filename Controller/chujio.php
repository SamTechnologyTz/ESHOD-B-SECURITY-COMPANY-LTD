<?php
class Hikisha {
    public $data;

    // Constructor
    public function __construct($data) {
        $this->data = $data;
    }

    // Method to validate data
    public function hakiki() {
        $this->data = trim($this->data);
        $this->data = stripslashes($this->data);
        $this->data = htmlspecialchars($this->data);
        return $this->data;
    }
}
?>
