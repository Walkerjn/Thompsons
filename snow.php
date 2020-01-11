<?php
$currentDate = date('Y-m-d');
$currentDate= date('Y-m-d', strtotime($currentDate));
$snowDateBegin = date('Y-m-d', strtotime("12/15"));
$snowDateEnd = date('Y-m-d', strtotime("12/31"));

$normalpic = "<img src='img/images.jpg' title='Painting' alt='Paint Brush'>";
$xmaslogo = "<a href='/'><img src='img/main-logo.png' alt='Thompsons Property Care Logo' title='Thompsons Property Care'></a>"; 

?>
    <?php
       if (($currentDate >= $snowDateBegin) && ($currentDate <= $snowDateEnd)){
           
    $normalpic = "<img src='img/christmas.jpg' title='Merry Christmas' alt='Merry Christmas'>";      
    $xmaslogo = "<a href='/'><img src='img/christmas-logo.png' alt='Thompsons Property Christmas Care Logo' title='Thompsons Property Care'></a>";
           
    echo "<div id='snowflakeContainer'>
        <p class='snowflake'>*</p>
    </div>";
           
}else{
           
    echo ""; 
    }

?>