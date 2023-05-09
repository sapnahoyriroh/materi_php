<?php
$model = new Pelanggan();
$data_pelanggan = $model->datapelanggan();

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
    <div class="card-body">
        <table id="datatablesSimple">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Kode</th>
                    <th>Nama</th>
                    <th>Jenis Kelamin</th>
                    <th>Tempat Lahir</th>
                    <th>Tanggal Lahir</th>
                    <th>Email</th>
                    <th>Kartu</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>No</th>
                    <th>Kode</th>
                    <th>Nama</th>
                    <th>Jenis Kelamin</th>
                    <th>Tempat Lahir</th>
                    <th>Tanggal Lahir</th>
                    <th>Email</th>
                    <th>Kartu</th>
                </tr>
            </tfoot>
            <tbody>
                <?php
                $no = 1;
                foreach ($data_pelanggan as $row) {

                ?>
                    <tr>
                        <th><?= $no ?></th>
                        <th><?= $row['kode'] ?></th>
                        <th><?= $row['nama'] ?></th>
                        <th><?= $row['jk'] ?></th>
                        <th><?= $row['tmp_lahir'] ?></th>
                        <th><?= $row['tgl_lahir'] ?></th>
                        <th><?= $row['email'] ?></th>
                        <th><?= $row['kartu_id'] ?></th>
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