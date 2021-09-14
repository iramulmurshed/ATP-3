<?php

class student{
    public $name;
    public $id;

    public $dob;
   public $course=[];



function showinfo(){
    echo "Name : $this->name";
    echo "  ";
    
    echo " ID : $this->id";
    echo "  ";

    echo "Date of birth : $this->dob";

    echo "<br>";
    echo "<br>";
}

function addCourse($courseName){
    $this ->course[]=$courseName;

}

function showCourses(){

    echo " Student Name : $this->name";
    echo "  ";
    
    echo " Student ID : $this->id";
    echo " <br> ";

    echo "course list : ";
    echo " <br> ";
  
    foreach($this->course as $c){
        echo "$c <br>";
    }
}




}

$s1=new student();
$s1->name="labib";
$s1->id="1837";
$s1->dob="1-1-2001";


$s1->addCourse("math-1");
$s1->addCourse("atp-3");
$s1->addCourse("phy-1");


$s1->showinfo();
$s1-> showCourses();


