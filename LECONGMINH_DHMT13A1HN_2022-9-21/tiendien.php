<?php
$tenChuHo = $_POST["tenChuHo"]??"";
$chiSoCu = $_POST["chiSoCu"]??"";
$chiSoMoi = $_POST["chiSoMoi"]??"";
$donGia = $_POST["donGia"]??2000;
$td = "";
if($chiSoCu!=="" && $chiSoMoi!=="" && $donGia!==""){
    $td = ($chiSoMoi-$chiSoCu)*$donGia;
}
?>
<form action="?action=tiendien" method="post">
    <table>
        <tr>
            <th colspan="3">THANH TOÁN TIỀN ĐIỆN</th>
        </tr>
        <tr>
            <td class="title">Tên chủ hộ:</td>
            <td><input type="text" name="tenChuHo" id="tenChuHo" required value="<?php echo $tenChuHo ?>"></td>
            <td></td>
        </tr>
        <tr>
            <td class="title">Chỉ số cũ:</td>
            <td><input type="number" name="chiSoCu" id="chiSoCu" min="0" step="0.01" required value="<?php echo $chiSoCu ?>"></td>
            <td>(Kw)</td>
        </tr>
        <tr>
            <td class="title">Chỉ số mới:</td>
            <td><input type="number" name="chiSoMoi" id="chiSoMoi" min="<?php echo $chiSoCu ?>" step="0.01" required value="<?php echo $chiSoMoi ?>"></td>
            <td>(Kw)</td>
        </tr>
        <tr>
            <td class="title">Đơn giá:</td>
            <td><input type="number" name="donGia" id="donGia" min="0" step="0.01" required value="<?php echo $donGia ?>"></td>
            <td>(VNĐ)</td>
        </tr>
        <tr>
            <td class="title">Số tiền thanh toán:</td>
            <td><input type="number" name="tiendien" id="tiendien" disabled value="<?php echo $td ?>"></td>
            <td>(VNĐ)</td>
        </tr>
        <tr>
            <td colspan="3">
                <button type="submit" name="sbm">Tính</button>
            </td>
        </tr>
    </table>
    <a href="index.php">Trang chủ</a>
</form>