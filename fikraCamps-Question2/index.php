<?php

    /*  Q4:  Write a program that accepts an array of numbers and ->
             returns an array of numbers in written form e.g.
    ===================================================================================================================
    ====    [1,4,6] → [“one”, “four”, “six”]
    ====    [0,0,6,2,7] → [“zero”, “zero”, “six”,"two","seven"]
    ====    [5,4,3,2,1,5,8] → ["five", "four", "three", "two", "one", "five","eight"]
    ===================================================================================================================
    ===================================================================================================================
    ====    function name : numText()
    ====    variables     : $nums           => array parameter for function
    ====                    $num_text       => define array that has text nums zero - ten
    ====                    $result_array   => define array that store the end result of function & return it
    ====                    $my_arr         => define array that will sending to function
    ====                    $finish         => get the result of calling numText function
    ===================================================================================================================
    */


    function numText($nums=array()){

        $num_text = array(
            'zero',
            'one',
            'two',
            'three',
            'four',
            'five',
            'six',
            'seven',
            'eight',
            'nine',
            'ten'
        );

        $result_array = array();

        for ($i=0; $i < count($nums); $i++) { 
            foreach ($num_text as $key => $value) {
                if ($nums[$i] == $key ) {
                    $result_array[] = $value;
                }
            }
        }
        return $result_array;
    }

    $my_arr = array(10,5,8,2); 
    $finish = numText($my_arr);     // Calling function numText()

    echo "<pre>";
    print_r($finish);
    print_r($my_arr);
    echo "</pre>";
?>