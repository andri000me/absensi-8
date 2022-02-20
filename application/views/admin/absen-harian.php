<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-uppercase">REKAP DAFTAR HADIR HARIAN <?= $level['nama']; ?></h6>
        <small>Keterangan <br />
            <i class="fa fa-edit"></i> Edit Data |
            <i class="fa fa-trash"></i> Hapus Data
        </small>
    </div>
    <div class="card-body">
        <?= $this->session->flashdata('message'); ?>
        <form action="<?= base_url('admin/hr'); ?> " method="get">
            <select name="level" id="level" class="form-control col-md-2 mb-2">
                <option value="">Pilih status</option>
                <option value="1">Guru</option>
                <option value="2">Karyawan</option>
            </select>
            <input type="date" name="date" id="date" class="form-control col-md-2 mb-2">
            <button type="submit" class="btn btn-primary">VIEW</button>
        </form>
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>TANGGAL</th>
                        <th>NBM</th>
                        <th>Name</th>
                        <th>MASUK</th>
                        <th>PULANG</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($data as $d) : ?>
                    <tr>
                        <td><?= $i; ?></td>
                        <td><?= tgl($d['date_in']); ?></td>
                        <td><?= $d['nbm']; ?></td>
                        <td><?= $d['nama']; ?></td>
                        <td><?= $d['time_in']; ?></td>
                        <td><?= $d['time_out']; ?></td>
                        <td>
                            <a href="<?= base_url('admin/edit_hr/') . $d['id']; ?>">
                                <i class="fa fa-edit fa-fw" alt="detail" title="Edit">
                                </i>
                            </a>
                            <a href="<?= base_url(); ?>admin/hapus/<?= $d['id']; ?>">
                                <i class="fa fa-trash fa-fw" alt="verifikasi" title="Hapus"
                                    onclick="return confirm('Yakin ingin menghapus?');">
                                </i>
                            </a>
                        </td>
                    </tr>
                    <?php $i++; ?>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>