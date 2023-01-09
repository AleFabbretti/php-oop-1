<?php 
    class Movie{
        public $title;
        public $genre; 
        public $year;
        public $duration;
        public $rating;
        public $language;

        function __construct($_title, $_genre, $_year, $_duration, $_rating, $_language)
        {
            $this->title = $_title;
            $this->genre = $_genre;
            $this->year = $_year;
            $this->duration = $_duration;
            $this->rating = $_rating;
            $this->language = $_language;
        }
    }

?>