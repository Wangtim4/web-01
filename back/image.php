<div style="width:99%; height:87%; margin:auto; overflow:auto; border:#666 1px solid;">
    <p class="t cent botli"><?= $Str->header; ?></p>
    <form method="post" action="./api/edit.php">
        <table width="100%" style="text-align:center;">
            <tbody>
                <tr class="yel">
                    <td width="60%"><?= $Str->tdHead[0]; ?></td>
                    <td width="10%">顯示</td>
                    <td width="10%">刪除</td>
                    <td></td>
                </tr>
                <?php

                $all = $DB->math('count', 'id');
                $div = 3;
                $pages = ceil($all / $div);
                $now = $_GET['p'] ?? '1';
                $start = ($now - 1) * $div;

                $rows = $DB->all(" limit $start, $div ");
                foreach ($rows as $row) {
                ?>
                    <td>
                        <img src="./img/<?= $row['img']; ?>" style="width:20%;">
                    </td>
                    <td>
                        <input type="checkbox" name="sh[]" value="<?= $row['id']; ?>" <?= ($row['sh'] == 1) ? 'checked' : ''; ?>>
                    </td>
                    <td>
                        <input type="checkbox" name="del[]" value="<?= $row['id']; ?>">
                    </td>
                    <td>
                        <input type="button" value="<?= $Str->updateImg; ?>" onclick="op('#cover','#cvr','./modal/upload.php?id=<?= $row['id']; ?>&table=<?= $Str->table; ?>')">
                    </td>

                    <input type="hidden" name='id[]' value="<?= $row['id']; ?>">
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
        <div class="cent">
            <a href="">
                < </a>
                    <?php
                    for ($i = 1; $i <= $pages; $i++) {
                        echo "<a href='?do=image&p=$i'>";
                        echo $i;
                        echo "</a>";
                    }
                    ?>
                    <a href=""> > </a>
        </div>
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