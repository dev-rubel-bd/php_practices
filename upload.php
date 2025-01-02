<?php
function searchInsert($nums, $target) {
    if(in_array($target,$nums)==true){
        echo array_search($target,$nums);
    }
    else{
        array_push($nums,$target);
        sort($nums);
        echo array_search($target,$nums);
    }

}
$nums=[1,3,5,6];
searchInsert($nums,7);


?>


