<?php


class car
{

    private $model;
    private $color;

    private $year = "not assigned";
    //costructor
    public function __construct($model, $color = "white")
    {
        $this->model = $model;
        $this->color = $color;
    }

    //getter &setter 
    public function get_car_model()
    {
        return $this->model;
    }
    public function set_car_model($model)
    {
        $this->model = $model;
    }
    public function get_color()
    {
        return $this->color;
    }
    public function set_color($color)
    {
        $colours_available = [
            "blue",
            "green",
            "red",
            "black",
        ];

        if(in_array($color, $colours_available)) { 
            $this->color = $color;
        }
        else {
            print_r($color."not available");
        }
    }
    public function get_car_info($year)
    {
        //return $this->$year=$year;
        return "colour: " . $this->color . "\nmodel:" . $this->model . "\nyear:" . $this->$year = $year;
    }
}
