<meta charset="UTF-8">

<?php
if(isset($_POST["name"])){
$name=$_POST["name"];
echo"您的姓名是:".$name."<br/>";

$phone=$_POST["phone"];
echo"您的聯絡電話是:".$phone."<br/>";

$mail=$_POST["mail"];
echo"您的信箱是:".$mail."<br/>";

$gender=$_POST["gender"];
if($gender=="male"){
    echo "您的性別是:男性<br/>";
}else{
    echo "您的性別是:女性<br/>";
}

$activity=$_POST["activity"];
echo "您有興趣的活動是:";
foreach ($activity as $value) {
    echo $value." ";
}
echo"<br/>";

$date=$_POST["date"];
echo"您可出席的時間是:".$date."<br/>";

echo"您的飲食習慣是:";
if(isset($_POST["meat"])){
    $meat=$_POST["meat"];
    echo "葷食";

}
if(isset($_POST["veg"])){
    $veg=$_POST["veg"];
    echo "素食";
}
echo "<br/>";

echo"是否可以帶烤肉用具:";
if(isset($_POST["yes"])){
    $yes=$_POST["yes"];
    echo "是";
}
if(isset($_POST["no"])){
    $no=$_POST["no"];
    echo "否";
}
echo "<br/>";

$comment=$_POST["comment"];
echo "您的需求或建議:<br/>";
echo strip_tags(nl2br($comment));
}else{echo "資料輸入錯誤";}

?>
