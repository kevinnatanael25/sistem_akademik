<table class="table table-sm table-bordered">
    <tr>
        <th>Nama</th>
        <th>nim</th>
    </tr>
    <?php foreach ($biodata as $key => $value): ?>
        <tr>
            <td><?= $value->nama_mahasiswa?></td>
            <td><?= $value->nim?></td>
        </tr>
    <?php endforeach;?>
</table>