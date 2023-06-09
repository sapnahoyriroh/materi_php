<?php
$model = new Kartu();
$kartu = $model->kartu();

// foreach ($data_produk as $row) {
//     print $row['kode'];
// }

?>
<h1 class="mt-4">Tables</h1>
<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
    <li class="breadcrumb-item active">Tables</li>
</ol>

<div class="card mb-4">
    <div class="card-body">
        DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the
        <a target="_blank" href="https://datatables.net/">official DataTables documentation</a>
        .
    </div>
</div>
<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
        DataTable Example
    </div>
    <button type="button" class="btn btn-primary"><a href="tambah_kartu.php" style="color: white;">Tambah Data</a></button>
    <div class="card-body">
        <table id="datatablesSimple">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Kode</th>
                    <th>Nama</th>
                    <th>Diskon</th>
                    <th>Iuran</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>No</th>
                    <th>Kode</th>
                    <th>Nama</th>
                    <th>Diskon</th>
                    <th>Iuran</th>
                </tr>
            </tfoot>
            <tbody>
                <?php
                $no = 1;
                foreach ($kartu as $row) {

                ?>
                    <tr>
                        <th><?= $no ?></th>
                        <th><?= $row['kode'] ?></th>
                        <th><?= $row['nama'] ?></th>
                        <th><?= $row['diskon'] ?></th>
                        <th><?= $row['iuran'] ?></th>
                    </tr>
                <?php
                    $no++;
                }
                ?>
            </tbody>
        </table>
    </div>

</div>
</div>

<?php
// include_once 'bottom.php';
?>