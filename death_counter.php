<?php
//error_reporting(0);

$server='localhost';
$user='root';
$pass='34863286';
$db='HMS';
$admin='ITS6801';


//Create connection and select DB
$link = mysqli_connect($server, $user, $pass, $db);

if(!$link)
{
    die("Unable to connect database: " . $db->connect_error);
}


$query = "SELECT * FROM `patients`";
$result = mysqli_query($link, $query);
$arr = array();


if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        array_push($arr, $row['Disease']);
    }
}



$brr = array_count_values($arr);
$max = 0;
$imp_disease = '';

//print_r($brr);

foreach ($brr as $first=>$second)
{
    if ($second>$max)
        {
            $max = $second;
            $imp_disease = $first;
        }
}





?>


<html>
    <head>
        <title>
            Disease Analysis
        </title>
    </head>
    <body>
        <h1 style="text-align: center;">Disease Analysis</h1>
        <p>Based on the entered data for the perticular region the conclusion is </p>
        <?php

            foreach ($brr as $first=>$second)
            {
                if ($second==$max)
                {
                    echo "<h3>".$first." caused ".$second." deaths.</h3>";
                }
            }
/*
        foreach ($brr as $first=>$second)
        {
                echo "<h3>".$first." caused ".$second." deaths.</h3>";
        }
*/
        ?>
    <a href="<?php echo $imp_disease; ?>.html">
        <p style="font-family: Gabriola, font-weight: 800; color: #b624ff; font-size: 150%; text-align: center;">Suggestion and Solution.</p>
    </a>

    </body>
</html>