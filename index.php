<?php 
    class Movie{
        public $title;
        public $genre; 
        public $year;
        public $duration;
        public $rating;
        public $language;
        public $price;
        public $discount = 0;

        function __construct($_title, $_genre, $_year, $_duration, $_rating, $_language, $_price)
        {
            $this->title = $_title;
            $this->genre = $_genre;
            $this->year = $_year;
            $this->duration = $_duration;
            $this->rating = $_rating;
            $this->language = $_language;
            $this->price = $_price;
            $this->setDiscount($_year);
        }

        public function setDiscount($year) {
            if($year < 1972) {
                $this->discount = $this->price * 0.2;
            } 
        }
        public function getDiscount() {
            return $this->discount;
      
          }
    }

?>