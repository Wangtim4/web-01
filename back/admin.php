<div style="width:99%; height:87%; margin:auto; overflow:auto; border:#666 1px solid;">
    <p class="t cent botli"><?= $Str->header; ?></p>
    <form method="post" action="./api/edit.php">
        <table width="100%" style="text-align:center;">
            <tbody>
                <tr class="yel">
                    <td width="45%"><?= $Str->tdHead[0]; ?></td>
                    <td width="45%"><?= $Str->tdHead[1]; ?></td>
                    <td width="10%">刪除</td>
                </tr>
                <?php
                $rows = $DB->all();
                foreach ($rows as $row) {
                ?>
                    <td >
                        <input 
                        style="width:95%"type="text" name='acc[]' value="<?= $row['acc']; ?>">
                    </td>
                    <td>
                        <input 
                        style="width:95%"
                        type="password" name='pw[]' value="<?= $row['pw']; ?>">
                    </td>
                    <td>
                        <input type="checkbox" name="del[]" value="<?= $row['id']; ?>">
                    </td>

                    <input type="hidden" name='id[]' value="<?= $row['id']; ?>">
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
        <table style="margin-top:40px; width:70%;">
            <tbody>
                <tr>
                    <td width="200px"><input type="button" onclick="op('#cover','#cvr','./modal/<?= $Str->table; ?>.php?do=<?= $Str->table; ?>')" value="<?= $Str->addBtn; ?>"></td>
                    <td class="cent"><input type="submit" value="修改確定"><input type="reset" value="重置"></td>
                </tr>
            </tbody>
        </table>
        <input type="hidden" name="table" value="<?= $do; ?>">
    </form>
</div>