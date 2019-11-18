<?php
//處理刪除資料的請求
include_once "base.php";

$id=$_POST['id'];
$sql="delete from students where uni_id='$id'";

echo $pdo->exec($sql);//query回傳的是一個陣列,exec是檔案有無上傳成功，回傳的值是0或1
echo "你刪除的是學號".$id."的學生";

?>