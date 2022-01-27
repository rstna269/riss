<?php 
 if (isset($_POST['kirim'])) {
     $nik = $_POST['nik'];
     $nama = $_POST['nama'];
     $username = $_POST['username'];

 }
?>
<div class="row">
            <div class="col-md-4 offset-md-4">
                <div class="card">
                    <div class="card-header">
                        REGISTRASI
                    </div>
                    <div class="card-body">
                        <form action="" method="post">
                            <div class="form-group">
                                <input type="text" name="nik" class="form-control" placeholder="NIK" required autofocus>
                            </div>
                            <div class="form-group">
                                <input type="text" name="nama" class="form-control" placeholder="Nama lngkap" required>
                            </div>
                            <div class="form-group">
                                <input type="text"  name="username" class="form-control" placeholder="Username" required>
                            </div>
                            <div class="form-group">
                                <input type="password"  name="password" class="form-control" placeholder="Password" required>
                            </div>
                            <div class="form-group">
                                <label for="">No.Telepon</label>
                                <input type="number"  name="telp" class="form-control" placeholder="No.Telepon" required>
                            </div>
                            <button type="submit"  name="kirim" class="btn btn-primary">Kirim</button>
                            <a href="?menu=login" class="text-muted">Sudah punya akun? Login disini</a>

                        </form>
                    </div>
                </div>
            </div>
        </div>
