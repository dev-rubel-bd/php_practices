<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>practice code</title>
</head>
<body>
<?php
$x="RUBEL";
echo $x;
?>


    <form action="test.php"  method="post">   

    Name: <input type="text" name="fname"><br>
    Age: <input type="text" name="age"><br>
    <input type="submit" name="save">
    </form>


    <br>

    <form method="get" action="test.php">
  <label for="name">Name:</label>
  <input type="text" id="name" name="name">
  <label for="age">Age:</label>
  <input type="number" id="age" name="age">
  <button type="submit">Submit</button>
</form>


<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */
    function twoSum($nums, $target) {
        for($i = 0; $i < count($nums) ; $i++){
            for($j = $i + 1; $j < count($nums) ; $j++){
                if($nums[$i] + $nums[$j] == $target){
                   return $u= [$i, $j];
                }
            }
        }
        var_dump($u);
    }
}

?>
    
</body>
</html>