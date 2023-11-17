<div class="modal fade" id="addnew">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
              
            </div>
            <h4 class="modal-title"><b>Add Schedule</b></h4>
            <div class="modal-body text-left">
                <form class="form-horizontal" action="{{ route('pegawai.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="nama" class="  control-label">Nama Pegawai</label>


                        <input type="text" class="form-control" id="nama" name="nama" placeholder="nama pegawai"
                            required>

                    </div>

                    <div class="form-group">
                        <label for="jenis_kelamin" class="  control-label">Jenis kelamin</label>


                        <input type="text" class="form-control" id="jenis_kelamin" name="jenis_kelamin" placeholder="jenis kelamin"
                            required>

                    </div>

                    <div class="form-group">
                        <label for="email" class="  control-label">Email</label>


                        <input type="text" class="form-control" id="email" name="email" placeholder="email"
                            required>

                    </div>

                    <div class="form-group">                        
                        <label for="no_telpon" class="  control-label">Nomor Telepon</label>
                        
                        <input type="text" class="form-control" id="no_telpon" name="no_telpon" placeholder="nomor telepon">

                    </div>

                    <div class="form-group">                        
                        <label for="alamat" class="  control-label">Alamat</label>
                        
                        <input type="text" class="form-control" id="alamat" name="alamat" placeholder="alamat" >

                    </div>

                    <div class="form-group">                        
                        <label for="tempat_lahir" class="  control-label">Tempat Lahir</label>
                        
                        <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir"placeholder="tempat lahir" >

                    </div>

                    <div class="form-group">                        
                        <label for="tanggal_lahir" class="  control-label">Tanggal Lahir</label>
                        
                        <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" placeholder="tanggal lahir" >

                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
                <button type="submit" class="btn btn-primary btn-flat"><i class="fa fa-save"></i> Save</button>
                </form>
            </div>
        </div>
    </div>
</div>

