<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-uppercase">REKAP DAFTAR HADIR BULANAN </h6>
        <small>Keterangan <br />
            <i class="fa fa-edit"></i> Edit Data |
            <i class="fa fa-trash"></i> Hapus Data
        </small>
    </div>
    <div class="card-body">
        <?= $this->session->flashdata('message'); ?>
        <div class="row">
            <form action="<?= base_url('admin/bln_siswa'); ?> " method="get">
                <select class="form-control mb-2" name="bulan" id="bulan" required>
                    <option value="">Pilih bulan</option>
                    <option value="1"><?= bulan(1); ?></option>
                    <option value="2"><?= bulan(2); ?></option>
                    <option value="3"><?= bulan(3); ?></option>
                    <option value="4"><?= bulan(4); ?></option>
                    <option value="5"><?= bulan(5); ?></option>
                    <option value="6"><?= bulan(6); ?></option>
                    <option value="7"><?= bulan(7); ?></option>
                    <option value="8"><?= bulan(8); ?></option>
                    <option value="9"><?= bulan(9); ?></option>
                    <option value="10"><?= bulan(10); ?></option>
                    <option value="11"><?= bulan(11); ?></option>
                    <option value="12"><?= bulan(12); ?></option>
                </select>
                <select class="form-control mb-2" name="kelas" id="kelas" required>
                    <option value="">Pilih kelas</option>
                    <?php foreach ($kls as $k) : ?>
                        <option value="<?= $k['kelas']; ?>"><?= $k['kelas']; ?></option>
                    <?php endforeach; ?>
                </select>
                <button type="submit" class="btn btn-facebook mb-2">VIEW</button>
            </form>
        </div>
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>NIS</th>
                        <th>NAMA</th>
                        <th>JK</th>
                        <th>HADIR</th>
                        <th>IZIN</th>
                        <th>ALPHA</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($data as $d) : ?>
                        <tr>
                            <td><?= $i; ?></td>
                            <td><?= $d['nis']; ?></td>
                            <td><?= ucwords(strtolower($d['nama'])); ?></td>
                            <td><?= $d['jk']; ?></td>
                            <td align="center">
                                <?php
                                $count = $this->db->get_where('tbl_dh', ['nbm' => $d['nis'], 'status' => 'Hadir'])->result_array();
                                echo count($count);
                                ?>
                            </td>
                            <td align="center">
                                <?php
                                $count = $this->db->get_where('tbl_dh', ['nbm' => $d['nis'], 'status' => 'Izin', 'bulan' => $bulan['id']])->result_array();
                                echo count($count);
                                ?>
                            </td>
                            <td align="center">
                                <?php
                                $count = $this->db->get_where('tbl_dh', ['nbm' => $d['nis'], 'bulan' => $bulan['id']])->result_array();
                                $data = count($count);
                                echo $bulan['jml'] - $data;
                                ?>
                            </td>
                            <td>
                                <a href="<?= base_url('admin/dtl_absn_siswa?nis=') . $d['nis'] . '&' . 'bulan=' . $bulan['id']; ?>"><button class="btn btn-primary">DETAIL</button></i></a>
                            </td>
                        </tr>
                        <?php $i++; ?>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Logout Modal-->
<div class="modal fade" id="hapusModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Yakin ingin menghapus siswa ini?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Setelah data dihapus data tidak bisa dikembalikan!!!</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary" href="<?= base_url('admin/hapus/') . $d['id']; ?>">Hapus</a>
            </div>
        </div>
    </div>
</div>
<!-- Begin Page Content -->