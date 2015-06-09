<?php
if (!isset($_POST['username']))
{
$output= 'This for will create the file with your text';
include 'index.html.php';
exit();
}

else if ((isset($_POST['username'])) and (isset($_POST['text'])))
{
    $usertext=serialize(array_slice($_POST,0, 1));
    $fp = fopen('text/'.$_POST['username'].'.txt', "w+");
    fwrite($fp, $usertext);
    fclose ($fp);
    $output= "Your file was create. You can dowload it: <a href='/text/".$_POST['username'].".txt'>by link</a>" ;
    include 'index.html.php';
    exit();

}

