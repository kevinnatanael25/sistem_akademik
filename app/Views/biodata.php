<table>
    <tr>
        <th>Nama</th>
        <th>Gender</th>
    </tr>
    <?php foreach ($biodata as $key => $value): ?>
        <tr>
            <td><?= $value->nama_mahasiswa?></td>
            <td><?= $value->jenis_kelamin?></td>
        </tr>
    <?php endforeach;?>
</table>