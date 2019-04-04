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

    function average($nums)
    {
        $total = 0;
        foreach ($nums as $num)
        {
            $total += $num;
        }
        return $total/sizeof($nums);
    }

    function removeDups($nums)
    {
        $new_nums = [];
        foreach ($nums as $num)
        {
            if(!in_array($num,$new_nums))
            {
                $new_nums[] = $num;
            }
        }
        return $new_nums;
    }

    function distribution($nums)
    {
        $assoc_nums = [];
        foreach ($nums as $num)
        {
            if(!key_exists($num, $assoc_nums))
            {
                $assoc_nums[$num] = 1;
            }
            else
            {
                $assoc_nums[$num] = ++$assoc_nums[$num];
            }
        }
        ksort($assoc_nums);
        return $assoc_nums;
    }

    function printAssoc($nums)
    {
        foreach ($nums as $key => $value)
        {
            echo '<p>Num: '.$key.' Value: '.$value.'</p>';
        }
    }
