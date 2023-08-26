<?php

class BinarySearch
{
    // Placeholder
    public function __construct() { }

    public function bSearch1(array $list, int $search) {
        $left = 0;
        $right = count($list) - 1;
        //Sort array list
        $list = $this->cSort($list);
        //$this->dd($list);
        while ($left <= $right) {
            $mid = floor(($left + $right) / 2);
            
            // Check if the search value is found at the middle index
            if ($list[$mid] === $search) {
                return $mid;
            }
            // If the search is greater, ignore the left half
            if ($list[$mid] < $search) {
                $left = $mid + 1;
            }
            // If the search is smaller, ignore the right half
            else {
                $right = $mid - 1;
            }
        }
        // search value not found in the array
        return -1;
    }

    public function cSort( $array )
    {
        // Sort it
        sort($array);

        // return sorted array
        return $array;
    }

    public function dd($val): void {
        print_r($val); die;
    }
}

$obj = new BinarySearch();

$listArray = [12, 53, 45, 22, 46, 33, 17, 66, 89, 9, 88, 77, 1, 3, 89];
$searchValue = 33;
$result = $obj->bSearch1($listArray, $searchValue);

if ($result === -1) {
    echo "Search value " . $searchValue . " not found in the array.";
 } else {
    echo "Search value " . $searchValue .  " found at index $result.";
 }


