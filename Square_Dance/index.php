<?php
include_once "Dance.php";
$man=new SplQueue();
$women=new SplQueue();
$man1=new Dance("Nam","male");
$man2=new Dance("Thanh","male");
$man3=new Dance("Hai","male");
$man4=new Dance("Long","male");
$women1=new Dance("Hien","female");
$women2=new Dance("Thao","female");
$women3=new Dance("Huong","female");
$man->enqueue($man1);
$man->enqueue($man2);
$man->enqueue($man3);
$man->enqueue($man4);
$women->enqueue($women1);
$women->enqueue($women2);
$women->enqueue($women3);
function squareDance($man,$women)
{
    if($man->isEmpty() || $women->isEmpty()){
        echo " Xin hay doi ";
        echo "<br>";
    }else{
        $man=$man->dequeue();
        $women=$women->dequeue();
        echo $man->getName() ." va ". $women->getName();
        echo "<br>";
    }
}
squareDance($man,$women);
squareDance($man,$women);
squareDance($man,$women);
squareDance($man,$women);