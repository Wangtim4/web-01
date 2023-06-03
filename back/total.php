<div style="width:99%; height:87%; margin:auto; overflow:auto; border:#666 1px solid;">
    <p class="t cent botli"><?=$Str->header;?></p>
    <form method="post" action="./api/update.php">
        <table width="50%" style="margin:auto;">
            <tbody>
                <tr >
                    <td style="background:#F3DA49;"><?=$Str->tdHead[0];?></td>
                    <td >
                        <input type="text" name="total" value="<?=$Total->find(1)['total'];?>">
                    </td>
                </tr>
              
            </tbody>
        </table>
        <table style="margin-top:40px; width:70%;">
            <tbody>
                <tr>
                    <td width="200px"></td>
                    <td class="cent"><input type="submit" value="修改確定"><input type="reset" value="重置"></td>
                </tr>
            </tbody>
            <input type="hidden" name="table" value="<?=$do;?>">
        </table>

    </form>
</div>