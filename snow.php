<?php
$currentDate = date('Y-m-d');
$currentDate= date('Y-m-d', strtotime($currentDate));
$snowDateBegin = date('Y-m-d', strtotime("12/15"));
$snowDateEnd = date('Y-m-d', strtotime("12/31"));
if (($currentDate > $snowDateBegin) && ($currentDate < $snowDateEnd)){
    echo "<div id='snowflakeContainer'>
        <p class='snowflake'>*</p>
    </div>";
}else{
    echo "";  
}
    ?>