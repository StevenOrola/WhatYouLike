<?php

/**
 * Student class which has a first and last name,
 * set of emails they use, grades and outputs
 * this information in a formatted way
 *
 * @author Steven Orola
 */
class Student {
   
    /**
     * Constructor for Student
     */
    function _construct() {
        $this->surname = '';
        $this->first_name = '';
        $this->emails = array();
        $this->grades = array();
    }
    
    /**
     * Student can have as many emails as they need
     * @param type $which home or work email
     * @param type $address the address
     */
    function add_email($which, $address) {
        $this->emails[$which] = $address;
    }
    
    /**
     * Stores all grades, no courses are assigned
     * @param type $grade a single grade
     */
    function add_grade($grade) {
        $this->grades[] = $grade;
    }
    
    /**
     * Calculates all grades, rounded up
     * to two decimals
     * @return type
     */
    function average() {
        $total = 0;
        $average = 0;
        foreach ($this->grades as $value) {
            $total += $value;
        }
        $average = round($total / count($this->grades), 2);
        return $average;
    }
    
    /**
     * formats Student's information in a readadble way
     * @return result the Student's information
     */
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
