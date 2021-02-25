<!DOCTYPE html>
<html>
<head>
    <title>Tutorial CRUD Codeigniter</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>">
    <script type="text/javascript" src="<?php echo base_url('assets/js/jquery-3.4.1.min.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>
</head>
<body>
    <div class="container">
 
    <div class="card bg-primary">
        <div class="card-header"><strong>CRUD KompiKaleng</strong></div>
    </div>
        <div style="margin-top: 10px;">
            <button style="float: right;margin-bottom: 10px;" class="btn btn-success" data-toggle="modal" data-target="#modalTambah">Tambah Data</button>
            <div class="table-responsive">
                <table class="table table-striped table-bordered" style="border: 1px solid black;">
                    <thead>
                        <tr>
                            <th style="width: 5%;">No</th>
                            <th style="width: 10%">No Induk</th>
                            <th>Nama</th>
                            <th>Hobi</th>
                            <th>Alamat</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $no=0;
                            foreach ($siswa as $key => $data):
                                $no++;
                         ?>
                         <tr>
                            <td><?php echo $no; ?></td>
                            <td><?php echo $data['noinduk']; ?></td>
                            <td><?php echo $data['nama']; ?></td>
                            <td><?php echo $data['hobi']; ?></td>
                            <td><?php echo $data['alamat']; ?></td>
                            <td><span><a class="btn btn-primary" href="<?php echo base_url('C_Index/editData/'.$data['noinduk']) ?>">Edit</a>
                                      <a class="btn btn-danger" href="<?php echo base_url('C_Index/deleteData/'.$data['noinduk']) ?>">Delete</a>
                                </span>
                            </td>
                         </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>    
    </div>
 
    <!-- Modal Tambah-->
    <div class="modal fade" id="modalTambah">
      <div class="modal-dialog">
        <div class="modal-content">
 
          <!-- Modal Header -->
          <div class="modal-header">
            <h4 class="modal-title">Tambah Data Siswa</h4>
            <button type="button" class="close" data-dismiss="modal">×</button>
          </div>
 
          <!-- Modal body -->
          <div class="modal-body">
            <form method="post" action="<?php echo base_url('C_Index/tambahData') ?>">
                <div class="form-group">
                    <label for="noinduk">Noinduk</label>
                    <input required="required" class="form-control" type="number" id="noinduk" name="no_induk" />
                </div>
                <div class="form-group">
                    <label for="noinduk">Nama</label>
                    <input required="required" class="form-control" type="text" id="noinduk" name="nama" />
                </div>
                <div class="form-group">
                    <label for="noinduk">Hobi</label>
                    <input required="required" class="form-control" type="text" id="noinduk" name="hobi" />
                </div>
                <div class="form-group">
                    <label for="noinduk">Alamat</label>
                    <input required="required" class="form-control" type="text" id="noinduk" name="alamat" />
                </div>
            
          </div>
 
          <!-- Modal footer -->
          <div class="modal-footer">
            <button class="btn btn-success" type="submit">Submit</button>
            <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
          </div>
           </form>
        </div>
      </div>
    </div>
 
 
</body>
 
</html>