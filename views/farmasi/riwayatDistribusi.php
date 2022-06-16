<?php 
  require_once '../partials/header.php';
  require_once 'functions.php';

  $request= query("SELECT * FROM distribusi
  INNER JOIN puskesmas ON distribusi.kode_puskesmas = puskesmas.kode_puskesmas  ORDER BY waktu_distribusi DESC 
  ");
  
?>

        <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <div class="card mb-4">
                            
                        </div>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Riwayat Distribusi Obat
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Puskesmas</th>
                                            <th>Jumlah Distribusi</th>
                                            <th>waktu_distribusi</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Puskesmas</th>
                                            <th>Jumlah Distribusi</th>
                                            <th>waktu_distribusi</th>
                                            <th>Status</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                    <?php $i = 1; ?>
                                        <?php foreach( $request as $row ) : ?>
                                                <tr>
                                                <td><?= $i ?></td>
                                                <td><?= $row["nama_puskesmas"] ?></td>
                                                <td><?= $row["jumlah_distribusi"] ?></td>
                                                <td><?= $row["waktu_distribusi"] ?></td>
                                                <td>

                                                <button type="button" class="btn btn-success"><a href="detailRequest.php?kode_puskesmas=<?= $row["kode_puskesmas"]; ?>">Berhasil</a></button>&nbsp;

                                                </td>
                                                </tr>
                                            <?php $i++; ?>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                                         
                             </div>
                        </div>
                    </div>
                </main>
        </div>

<?php require_once '../partials/footer.php' ?>