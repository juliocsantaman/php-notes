<?php

    class Object_Model {

        //Properties of blog object.
        private $id, $title, $date, $comment, $image;


        //Getters.
        public function get_id() {
            return $this->id;
        }

        public function get_title() {
            return $this->title;
        }

        public function get_date() {
            return $this->date;
        }

        public function get_comment() {
            return $this->comment;
        }

        public function get_image() {
            return $this->image;
        }


        //Setters.
        public function set_id($id) {
            $this->id = $id;
        }

        public function set_title($title) {
            $this->title = $title;
        }

        public function set_date($date) {
            $this->date = $date;
        }

        public function set_comment($comment) {
            $this->comment = $comment;
        }

        public function set_image($image) {
            $this->image = $image;
        }


    }




?>