<?php
    class Product
    {
        public $name;
        public $description;
        public $cost;
        public $country;
        public function about_product()
        {
           /* echo "Product: "$this.$name."<br>".
            "Cost: "$this.$cost."<br>".
            "description: "$this.$description."<br>".
            "Made In "$this.$country."<br>";
            */
            var_dump($this);
        }
        public function new_information()
        {
            $this.$name = "Telega";
            $this.$description = "avavavava";
            $this.$country = "China";
            $this.$cost = 20;
        }
        public function new_cost()
        {
            $this.$cost += 100;
        }
    }

?>