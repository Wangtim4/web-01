<h3>更新標題圖片</h3>
<hr>
<form action="./api/update_title.php" method="post" enctype="multipart/form-data">
    <table>
        <tr>
            <td>標題區圖片:</td>
            <td><input type="file" name="img"></td>
        </tr>
    </table>
    <div>
        <input type="hidden" name="id" value="<?=$_GET['id'];?>">
        <input type="submit" value="更新">
    </div>
</form>