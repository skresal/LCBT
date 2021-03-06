<?php
class Inquiries extends Filter {
   public function __construct($current = null) {
      $this->current = $current;
      for ($i = 0; $i <= 10; $i++)
         $this->options[] = $i;
   }

   public function apply($loan) {
      $current = $this->options[$this->current];
      if ($loan["Inquiries in the Last 6 Months"] > $current)
         return false;
      return true;
   }
}
?>
