<?php
$d = $_POST["chieudai"]??"";
$r = $_POST["chieurong"]??"";
$dt = "";
if($d!=="" && $r!==""){
    $dt = $d*$r;
}
?>
<form action="?action=rectangle" method="post">
    <table>
        <tr>
            <th colspan="2">DIỆN TÍCH HÌNH CHỮ NHẬT</th>
        </tr>
        <tr>
            <td class="title">Chiều dài:</td>
            <td><input type="number" name="chieudai" id="chieudai" min="0" step="0.01" required value="<?php echo $d ?>"></td>
        </tr>
        <tr>
            <td class="title">Chiều rộng:</td>
            <td><input type="number" name="chieurong" id="chieurong" min="0" step="0.01" required value="<?php echo $r ?>"></td>
        </tr>
        <tr>
            <td class="title">Diện tích:</td>
            <td><input type="number" name="dientich" id="dientich" disabled value="<?php echo $dt ?>"></td>
        </tr>
        <tr>
            <td colspan="2">
                <button type="submit" name="sbm">Tính</button>
            </td>
        </tr>
    </table>
    <a href="index.php">Trang chủ</a>
</form>