<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Student
 *
 * @author steve
 */
class Student {
   
    function _construct() {
        $this->surname = '';
        $this->first_name = '';
        $this->emails = array();
        $this->grades = array();
    }
    
    function add_email($which, $address) {
        $this->emails[$which] = $address;
    }
    
    function add_grade($grade) {
        $this->grades[] = $grade;
    }
    
    function average() {
        $total = 0;
        foreach ($this->grades as $value) {
            $total += $value;
        }
        
        return round($total / count($this->grades), 2);
    }
    
    function toString() {
        $result = "\t";
        $result .= $this->first_name . " " . $this->surname;
        $result .= ' (' . $this->average() . ")\n";
        foreach($this->emails as $which=>$what) {
            $result .= $which . ":\t\t" . $what . "\n";
        }
        $result .= "\n";
        return '<pre>' . $result . '</pre>';
    }
}
