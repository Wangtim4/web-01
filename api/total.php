<?php

//在base.php中測試資料表寫入資料功能
$Total->save(['id'=>1,'total'=>$_POST['total']]);

//在api/total.php撰寫更新功能
include_once "../base.php";
$Total->save(['id'=>1,'total'=>$_POST['total']]);
to("../back.php?do=total");


?>