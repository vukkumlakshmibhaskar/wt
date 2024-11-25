<?php
// File paths
$inputFile = "input.txt";
$outputFile = "output.txt";

try {
    // Check if the input file exists
    if (!file_exists($inputFile)) {
        throw new Exception("Input file does not exist.");
    }

    // Read data from the input file
    $data = file_get_contents($inputFile);

    if ($data === false) {
        throw new Exception("Error reading the input file.");
    }

    // Write data to the output file
    $result = file_put_contents($outputFile, $data);

    if ($result === false) {
        throw new Exception("Error writing to the output file.");
    }

    echo "Data successfully copied from $inputFile to $outputFile.";
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}
?>
