<?php
define("DB_NAME","E:\Xamppp\htdocs\Hasin\crud\data\db.text");
function seed($filename){
    $data = array(
        array(
            "fname" => "Md Shakil",
            "lname" => "Ahmed",
            "Roll" => "5"
        ),
        array(
            "fname" => "Md Rifat",
            "lname" => "Hossain",
            "Roll" => "12"
        ),
        array(
            "fname" => "Md Sojol",
            "lname" => "Khan",
            "Roll" => "8"
        ),
        array(
            "fname" => "Md Nahid",
            "lname" => "Hasan",
            "Roll" => "15"
        ),
        array(
            "fname" => "Md Ripon",
            "lname" => "Hasan",
            "Roll" => "15"
        )
    );
    $serialize_data = serialize($data);
    file_put_contents($filename,$serialize_data,LOCK_EX);
}



?>