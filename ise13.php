<?php
 date_default_timezone_set('Asia/Calcutta');
 $day = date('N');
 if(isset($_GET['txtweb-message']))
    $msg = $_GET['txtweb-message'];
 $msg = strtolower($msg);
 $response = array(
     "Mon: CIV, EME; MAT, ELE; PHY, CIP.",
     "Tue: EME, ELE; MAT, CIV; PHY, CIP.",
     "Wed: CIV, CIV; PHYL/WSL; MAT, KAN.",
     "Thu: PHY, ELE; MAT, EME; PHYL/WSL.",
     "Fri: EME, ELE; CIV, PHY; MAT, TSDP.",
     "Sorry, we don't have any information about Saturdays.",
     "Are you kidding me? It's sunday!"
);
$tm = date('G');
if(strlen($_GET['txtweb-message'])<3 && $tm>=16)
{
    $temp = $day++;
    $temp = $day%7;
    if ($temp == 1)
    {
        $result = $response[0];
    }
    else if ($temp == 2)
    {
        $result = $response[1];
    }
    else if ($temp == 3)
    {
        $result = $response[2];
    }
    else if ($temp == 4)
    {
        $result = $response[3];
    }
    else if ($temp == 5)
    {
        $result = $response[4];
    }
    else if ($temp == 6)
    {
        $result = "We don't have information about tomorrow";
    }
    else if ($temp == 0)
    {
        $result = "Tomorrow is Sunday. A Holiday! Try again tomorrow.";
    }
    else
    {
        $result = "Something wrong. Please try again later.";
    }
    
}
else if(strlen($_GET['txtweb-message'])<3)
{
    if ($day == 1 )
    {
       $result = $response[0];
    }
    else if ($day == 2 )
    {
        $result = $response[1];
    }
    else if ($day == 3 )
    {
        $result = $response[2];
    }
    else if ($day == 4)
    {
        $result = $response[3];
    }
    else if ($day == 5 )
    {
        $result = $response[4];
    }
    else if ($day == 6 )
    {
        $result = $response[5];
    }
    else if ($day == 7 )
    {
        $result = $response[6];
    }
    else
    {
        $result = "Something wrong. Please try again later.";
    }
}
else 
{
    if(strcmp($msg,"mon")==0)
    {
        $result = $response[0];
    }
    else if ( strcmp($msg,"tue")==0)
    {
        $result = $response[1];
    }
    else if ( strcmp($msg,"wed")==0)
    {
        $result = $response[2];
    }
    else if ( strcmp($msg,"thu")==0)
    {
        $result = $response[3];
    }
    else if ( strcmp($msg,"fri")==0)
    {
        $result = $response[4];
    }
    else if ( strcmp($msg,"sat")==0)
    {
        $result = $response[5];
    }
    else if ( strcmp($msg,"sun")==0)
    {
        $result = $response[6];
    }
    else
    {
        $result = "Something wrong. Please try again later.";
    }
}
?>
<html>
    <head>
    <title>ISE13 App by Amjad</title>
    <meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />
    <meta name='txtweb-appkey' content='TXTWEB_APP_KEY' />
    </head>
    <body>
    <?php
        echo $result;
    ?>
    </body>
</html>
