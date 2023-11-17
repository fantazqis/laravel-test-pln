<!-- Edit -->
<div class="modal fade" id="edit{{ $pegawai->id_pegawai}}">
    <div class=" modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>

            </div>
            <h4 class="modal-title"><b>Update project</b></h4>
            <div class="modal-body text-left">
                {{-- action="{{ route('schedule.update', $schedule->slug) }}" --}}
                <form class="form-horizontal" method="POST" action="/pegawai/{{ $pegawai->id_pegawai }}" >
                    @method('put')
                    @csrf

                    <div class="form-group">
                        <label for="nama" class="  control-label">Nama Pegawai</label>


                        <input type="text" class="form-control" id="nama" name="nama" value="{{ $pegawai->nama }}"
                            required>

                    </div>

                    <div class="form-group">
                        <label for="jenis_kelamin" class="  control-label">Jenis kelamin</label>


                        <input type="text" class="form-control" id="jenis_kelamin" name="jenis_kelamin" value="{{ $pegawai->jenis_kelamin }}"
                            required>

                    </div>

                    <div class="form-group">
                        <label for="email" class="  control-label">Email</label>


                        <input type="text" class="form-control" id="email" name="email" value="{{ $pegawai->email }}"
                            required>

                    </div>

                    <div class="form-group">                        
                        <label for="no_telpon" class="  control-label">Nomor Telepon</label>
                        
                        <input type="text" class="form-control" id="no_telpon" name="no_telpon" value="{{ $pegawai->no_telpon }}" >

                    </div>

                    <div class="form-group">                        
                        <label for="alamat" class="  control-label">Alamat</label>
                        
                        <input type="text" class="form-control" id="alamat" name="alamat" value="{{ $pegawai->alamat }}" >

                    </div>

                    <div class="form-group">                        
                        <label for="tempat_lahir" class="  control-label">Tempat Lahir</label>
                        
                        <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" value="{{ $pegawai->tempat_lahir }}" >

                    </div>

                    <div class="form-group">                        
                        <label for="tanggal_lahir" class="  control-label">Tanggal Lahir</label>
                        
                        <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" value="{{ $pegawai->tanggal_lahir }}" >

                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i
                        class="fa fa-close"></i> Close</button>
                <button type="submit" class="btn btn-success btn-flat"><i class="fa fa-check-square-o"></i>
                    Update</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Delete -->
<div class="modal fade" id="delete{{ $pegawai->id_pegawai }}">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header " style="align-items: center">
               
                <h4 class="modal-title "><span class="employee_id">Delete Pegawai</span></h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              </div>
            <div class="modal-body">
                <form class="form-horizontal" method="POST" action="/pegawai/{{ $pegawai->id_pegawai }}">
                        @csrf
                    @method('delete')
                        <div class="text-center">
                            <h6>Anda yakin ingin menghapus data ini?</h6>
                            <h2 class="bold del_employee_name">pegawai: {{ $pegawai->nama}}</h2>
                    
                        </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i
                                class="fa fa-close"></i> Close</button>
                        <button type="submit" class="btn btn-danger btn-flat"><i class="fa fa-trash"></i> Delete</button>
                        
                    </div>
                
                
                </form>
                
            </div>
        </div>
    </div>
</div>