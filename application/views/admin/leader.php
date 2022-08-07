<div class="col-12 text-center mb-10">
    <h1 class="pt-2">
        <i class="fas fa-user"></i> Daftar Kepala Desa
    </h1>
    <!-- costum hr -->
    <hr class="one" style="height: 5px;width: 30vh;border-radius: 20px;background: linear-gradient(to right, #003e69,#ffff);">
</div>
<div class="container-fluid">
    <a href="<?= base_url('admin/register'); ?>"><button class="btn btn-sm mb-3" style="background-color:#003e69; color:#ffff; border-radius:20px; width:150px;"><i class="fas fa-plus fa-sm"></i> Tambah data</button></a>
    <?= $this->session->flashdata('message'); ?><br>
    <div class="table-responsive">
        <table class="table table-hover table-bordered">
            <thead style="background-color:#003e69; color:#ffff;">
                <tr>
                    <th>NO</th>
                    <th>USERNAME</th>
                    <th>EMAIL</th>
                    <th>FOTO</th>
                    <th>JABATAN</th>
                    <th>STATUS</th>
                    <th>TANGGAL BERGABUNG</th>
                    <th colspan="2">AKSI</th>
                </tr>
            </thead>
            <?php $no = 1;
            foreach ($register as $row) : ?>
                <tbody>
                    <tr>
                        <td><?php echo $no++ ?></td>
                        <td><?php echo $row->name ?></td>
                        <td><?php echo $row->email ?></td>
                        <td><img src="<?php echo base_url() . '/assets/img/profile/' . $row->image ?>" height="100px" alt="" class="rounded"></td>
                        <td><?php echo $row->role_id ?></td>
                        <td><?php echo $row->is_active ?></td>
                        <td><?php echo date('d F Y', $row->date_created) ?></td>
                        <td><a href="<?= base_url(); ?>admin/delete/<?= $row->id; ?>" class="btn btn-danger btn-sm" name="tombol-hapus" onclick="return confirm('Hapus Data Pengguna ?');"><i class="fa fa-trash"></i></a></td>
                        <!-- <td><?= anchor('admin/delete/' . $row->id, '<div  class="btn btn-danger btn-sm" ><i class="fa fa-trash"></i></div>') ?> </td> -->
                        <td><?= anchor('admin/Dashboard_admin/hapus/' . $row->id, '<div class="btn btn-info btn-sm" ><i class="fa fa-edit"></i></div>') ?></td>
                    </tr>
                </tbody>
            <?php endforeach; ?>
        </table>
    </div>
</div>
</div>