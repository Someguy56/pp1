<?php
    $numbers = [7,9,8,9,8,8,6];

    function printArr($nums)
    {
        foreach ($nums as $num)
        {
            echo "<p>$num</p>";
        }
    }

    printArr($numbers);

    function largest($nums)
    {
        $largest = $nums[0];
        foreach ($nums as $num)
        {
            if($num > $largest)
            {
                $largest = $num;
            }
        }
        return $largest;
    }
