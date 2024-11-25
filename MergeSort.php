<?php
// Define two arrays
$array1 = [10, 20, 30, 40, 50];
$array2 = [15, 25, 35, 45, 55];

// Merge the arrays
$mergedArray = array_merge($array1, $array2);

// Sort the merged array in descending order
rsort($mergedArray);

// Display the sorted array
echo "Merged and sorted array in descending order:<br>";
foreach ($mergedArray as $value) {
    echo $value . " ";
}
?>
