<?php
    # Write your PHP code from here

    $inputString = fgets(STDIN);
    
    $outputString = removeDuplicates($inputString);

    echo $outputString;

    function removeDuplicates($inputString) {
        $result = "";
        $seen = [];

        for ($i = 0; $i < strlen($inputString); $i++) {
            $char = $inputString[$i];
            if (!in_array($char, $seen)) {
                $result .= $char;
                $seen[] = $char;
            }
        }

        return $result;
    }
?>