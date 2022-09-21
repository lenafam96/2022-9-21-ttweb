<?php
$cA = $_POST["canhA"]??"";
$cB = $_POST["canhB"]??"";
$ch = "";
if($cA!=="" && $cB!==""){
    $ch = sqrt($cA*$cA + $cB*$cB);
}
?>
<form action="?action=canhhuyen" method="post">
    <table>
        <tr>
            <th colspan="2">CẠNH HUYỀN TAM GIÁC VUÔNG</th>
        </tr>
        <tr>
            <td class="title">Cạnh A:</td>
            <td><input type="number" name="canhA" id="canhA" min="0" step="0.01" required value="<?php echo $cA ?>"></td>
        </tr>
        <tr>
            <td class="title">Cạnh B:</td>
            <td><input type="number" name="canhB" id="canhB" min="0" step="0.01" required value="<?php echo $cB ?>"></td>
        </tr>
        <tr>
            <td class="title">Cạnh huyền:</td>
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