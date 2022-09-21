<?php
define('PI', 3.14);
$r = $_POST["bankinh"]??"";
$s = "";
$c = "";
if($r!==""){
    $s = PI*$r*$r;
    $c = PI*2*$r;
}
?>
<form action="?action=circle" method="post">
    <table>
        <tr>
            <th colspan="2">DIỆN TÍCH và CHU VI HÌNH TRÒN</th>
        </tr>
        <tr>
            <td class="title">Bán kính:</td>
            <td><input type="number" name="bankinh" id="bankinh" min="0" step="0.01" required value="<?php echo $r ?>"></td>
        </tr>
        <tr>
            <td class="title">Diện tích:</td>
            <td><input type="number" name="dientich" id="dientich" disabled value="<?php echo $s ?>"></td>
        </tr>
        <tr>
            <td class="title">Chu vi:</td>
            <td><input type="number" name="chuvi" id="chuvi" disabled value="<?php echo $c ?>"></td>
        </tr>
        <tr>
            <td colspan="2">
                <button type="submit" name="sbm">Tính</button>
            </td>
        </tr>
    </table>
    <a href="index.php">Trang chủ</a>
</form>