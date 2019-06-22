 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper" style="background-color:white;">
 
  


 <section class="content" >

 <div class="alert alert-warning">
 <i class="fa fa-user"></i>&nbsp;Data User
</div>
 
 <div class="row">
    <div class="col-md-12">
        <div class="box box-danger">
                <div class="box-body"> 
                <div class="well well-sm">
                    <button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal"><i class="fa fa-user"></i>&nbsp;Tambah Data User</button>
                </div>

            <div id="myModal" class="modal fade" role="dialog">
                <div class="modal-dialog">
                        <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title"><i class="fa fa-plus"></i>&nbsp;Tambah Data User</h4>
                        </div>
                        <div class="modal-body">
                            <form action="../controller/prosessimpanuser.php" method="post">
                                <div class="form-group">
                                    <label for="email">Nama User:</label>
                                    <input type="text" class="form-control" name="nama">
                                </div>

                                <div class="form-group">
                                    <label for="email">Email:</label>
                                    <input type="email" class="form-control" name="email">
                                </div>

                                <div class="form-group">
                                    <label for="email">Telepon:</label>
                                    <input type="number" class="form-control" name="telepon">
                                </div>

                                <div class="form-group">
                                    <label for="email">Username:</label>
                                    <input type="text" class="form-control" name="username">
                                </div>

                                <div class="form-group">
                                    <label for="pwd">Password:</label>
                                    <input type="password" class="form-control" name="password">
                                </div>

                                <div class="form-group">
                                    <label for="pwd">Level:</label>
                                    <select class="form-control" name="level">
                                        <option>Admin</option>
                                        <option>User</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="pwd">Keterangan:</label>
                                    <input type="text" class="form-control" name="keterangan">
                                </div>

                                <button type="submit" class="btn btn-info btn-md"><i class="fa fa-send"></i> Simpan Data User</button>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
                        </div>
                    </div>
                </div>
            </div>








                <div class="table-responsive">
                     <table class="table table-striped" id="example1">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama User</th>
                                <th>Email</th>
                                <th>Telepon</th>
                                <th>Username</th>
                                <th>Password</th>
                                <th>Level</th>
                                <th>Keterangan</th>
                                <th>Fungsi</th>
                            </tr>
                        </thead>
                        <tbody>
                        
                        <?php


                        include '../controller/koneksi.php';

                            $query = mysqli_query($koneksi, "SELECT * FROM table_user")or die(mysqli_error());
                            $no = 1;        
                            while($data = mysqli_fetch_array($query)){  
                                echo '<tr>';
                                echo '<td><center>'.$no.'</center></td>';
                                echo '<td> <center>'.$data['nama_user'].' <center></td>';
                                echo '<td> <center>'.$data['email'].'<center></td>';
                                echo '<td> <center>'.$data['telepon'].'<center></td>';
                                echo '<td> <center>'.$data['username'].' <center></td>';
                                echo '<td> <center> '.$data['password'].'<center></td>';
                                echo '<td> <center> '.$data['status'].'<center></td>';
                                echo '<td> <center> '.$data['keterangan'].'<center></td>';
                                echo '<td>
                                        <center><a href="#" data-toggle="modal" class="btn btn-warning btn-sm"><span class="glyphicon glyphicon-edit"></span></a>&nbsp;&nbsp;
                                        <a href="#" data-toggle="modal" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash"></span></a>
                                      </td>';
                                echo '</tr>';
                                $no++;  
                            }
                            
  
                         ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
                
 </section>
   
 
</div>
<!-- /.content-wrapper