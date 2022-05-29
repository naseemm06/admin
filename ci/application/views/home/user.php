
 <div class="fill" style="background-image:url('<?=base_url('gambar/udn.jpg')?>'); background-repeat: no-repeat; background-size: cover; background-position: center center;">
        <!-- Begin Page Content -->
        <br>  
        <div class='row'>
            <h1 class='mx-auto text-white'>User</h1>
        </div>
        <br>
        <div class="container-fluid">      
            <div class="card mb-4 bg-gray-200">
                    <div class="card-header py-3 bg-gray-900">
                        <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModal">
                        Tambah data
                        </button>
                    </div>
                <div class="card-body">
                    <div class="table-responsive">

                        <?php echo $this->session->flashdata('pesan'); ?>
                        <table class="table text-center text-gray-900" id="dataTable" width="100%" cellspacing="0">
                            <thead class="bg-gray-900 text-white">                                                    
                                <tr>
                                    <td>No</td>
                                    <td>Nama</td>
                                    <td>alamat</td>
                                    <td>Tanggal lahir</td>
                                    <td>Gambar</td>
                                    <td colspan="2">Settings</td>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no=1;
                                foreach ($user as $usr) :?>
                                <tr>
                                    <td><?php echo $no++; ?></td>
                                    <td><?php echo $usr['nama']; ?></td>
                                    <td><?php echo $usr['alamat']; ?></td>
                                    <td><?php echo $usr['ttl']; ?></td>
                                    <td><img src="<?php echo base_url() . '/gambar/' . $usr['gambar'];?>" width="100"></td>
                                    <td>
                                    <button type="button" class="btn btn-primary " data-toggle="modal" data-target="#editmodal<?php echo $usr['id']; ?>">
                                    Edit 
                                    </button>
                                    <a href="<?php echo base_url(); ?>home/hapus_data/<?php echo $usr['id']; ?>" class="btn btn-danger">Hapus</a>
                                    </td>
                                </tr>

                                <?php endforeach ; ?>
                                </tbody>
                        </table>    
                    </div>
                </div>
            </div>
        </div>
                <!-- modal tambah data -->

                <!-- Button trigger modal -->


            <!-- Modal tambah data-->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">FORM TAMBAH DATA</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                            <?php echo form_open_multipart('home/proses_tambah_data_user'); ?>
                    <div class="form-group">
                        <label>Nama</label>
                        <input type="text" name="nama" class="form-control"  required="">
                    </div>
                    <div class="form-group">
                        <label>alamat</label>
                        <input type="text" name="alamat" class="form-control"  required="">
                    </div>
                    <div class="form-group">
                        <label>Tanggal lahir</label>
                        <input type="date" name="ttl" class="form-control"  required="">
                    </div>
                    <div class="form-group">
                        <label>Gambar</label>
                        <input type="file" name="userfile" class="form-control" size="26">
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                    <?php echo form_close() ?>
                </div>
                </div>
            </div>
            </div>

            <!-- Modal akhir tambah data data-->


            <!-- Modal edit data-->
            <?php $no = 0; 
            foreach ($user as $usr) : $no++; ?>
            <div class="modal fade" id="editmodal<?php echo $usr['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">FORM EDIT DATA USER</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <?php echo form_open_multipart('home/proses_edit_data_user'); ?>

                    <input type="hidden" name="id" value="<?php echo $usr['id']; ?>">

                    <div class="form-group">
                        <label>Nama</label>
                        <input type="text" name="nama" class="form-control" value="<?php echo $usr['nama']; ?>">
                    </div>
                    <div class="form-group">
                        <label>Stok</label>
                        <input type="text" name="alamat" class="form-control" value="<?php echo $usr['alamat']; ?>">
                    </div>
                    <div class="form-group">
                        <label>Tanggal lahir</label>
                        <input type="date" name="ttl" class="form-control" value="<?php echo $usr['ttl']; ?>">
                    </div>
                    <div class="form-group">
                        <label>Gambar</label>
                        <input type="file" name="userfile" class="form-control" size="26">
                    </div>
                    <img src="<?php echo base_url() . '/gambar/' . $usr['gambar'];?>" width="100">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                    <?php echo form_close() ?>
                </div>
                </div>
            </div>
            </div>
            <?php endforeach; ?>
            <!-- Modal akhir edit data-->
                                    <br>
            <br>
            <br>
            <br>
            <br>
            </div>
            