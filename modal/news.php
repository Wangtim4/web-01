<?php 
$do = $_GET['do'] ?? 'title';
include_once "../base.php" ?>
<h3><?=$Str->addModalHeader;?></h3>
<hr>
<form action="./api/add.php" method="post" >
    <table>
        <tr>
            <td><?=$Str->addModalcol[0];?>:</td>
            <br>
            
        </tr>
        <tr>
        <td>
                <textarea name="text"  style="width:500px;height:200px;"></textarea>
            </td>
        </tr>
    </table>
    <div>
    <input type="hidden" name="table" value="<?=$do;?>">
        <input type="submit" value="新增">
        <input type="reset" value="重置">
    </div>
</form>