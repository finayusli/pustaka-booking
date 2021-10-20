<html>
<head>
    <title>View Data Mata Kuliah</title>
</head>
<body>
    <center>
        <table>
            <tr>
                <th colspan="3">
                    <h4>Tampil Data Mata Kuliah</h4>
                </th>
            </tr>
            <tr>
                <td colspan="3">
                    <hr>
                </td>
            </tr>
            <tr>
                <td>Kode MTK</td>
                <th>:</th>
                <td>
                    <?= $nama; ?>
                </td>
            </tr>
            <tr>
                <td>Nama MTK</td>
                <td>:</td>
                <td>
                    <?= $kode; ?>
                </td>
            </tr>
            <tr>
                <td>SKS</td>
                <td>:</td>
                <td>
                    <?= $sks; ?>
                </td>
            </tr>
            <tr>
            <?php
            ?>
            <tr>
                <td colspan="3" align="center">
                    <a href="<?= base_url('Matakuliah'); ?>">Kembali</a>
                </td>
            </tr>
        </table>
    </center>
</body>
</html>