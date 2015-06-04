<?php
if (!isset($_POST['username']))
{
$output= 'This for will create the file with your text';
include 'index.html.php';
exit();
}

else if ((isset($_POST['username'])) and (isset($_POST['text'])))
{
    $user=$_POST['username'];
    $text=$_POST['text'];
    $fp = fopen('text/'.$_POST['username'].'.txt', "w+");
    fwrite($fp, $user);
    fwrite($fp, '&&');//розділення значень, для читабельності
    fwrite($fp, $text);
    fclose ($fp);
    $output= "Your file was create. You can dowload it: <a href='/text/".$_POST['username'].".txt'>by link</a>" ;
    include 'index.html.php';
    exit();

}

