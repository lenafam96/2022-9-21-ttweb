<?php
$cA = $_POST["canhA"]??"";
$cB = $_POST["canhB"]??"";
$ch = "";
if($cA!=="" && $cB!==""){
    $ch = $cA>$cB?$cA:$cB;
}
?>
<form action="?action=solonhon" method="post">
    <table>
        <tr>
            <th colspan="2">TÌM SỐ LỚN HƠN</th>
        </tr>
        <tr>
            <td class="title">Số A:</td>
            <td><input type="number" name="canhA" id="canhA" min="0" step="0.01" required value="<?php echo $cA ?>"></td>
        </tr>
        <tr>
            <td class="title">Số B:</td>
            <td><input type="number" name="canhB" id="canhB" min="0" step="0.01" required value="<?php echo $cB ?>"></td>
        </tr>
        <tr>
            <td class="title">Số lớn hơn:</td>
            <td><input type="number" name="canhHuyen" id="canhHuyen" disabled value="<?php echo $ch ?>"></td>
        </tr>
        <tr>
            <td colspan="2">
                <button type="submit" name="sbm">Tính</button>
            </td>
        </tr>
    </table>
    <a href="index.php">Trang chủ</a>
</form>