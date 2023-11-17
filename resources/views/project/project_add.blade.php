<div class="modal fade" id="addnew">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
              
            </div>
            <h4 class="modal-title"><b>Add Schedule</b></h4>
            <div class="modal-body text-left">
                <form class="form-horizontal" action="{{ route('project.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="nama_project" class="   control-label">Nama Project</label>


                        <input type="text" class="form-control" id="nama_project" name="nama_project" placeholder="nama project"
                            required>

                    </div>

                    <div class="form-group">
                        <label for="lokasi_project" class="   control-label">Lokasi Project</label>


                        <input type="text" class="form-control" id="lokasi_project" name="lokasi_project" placeholder="lokasi project"
                            required>

                    </div>

                    <div class="form-group">
                        <label for="deskripsi" class="   control-label">Deskripsi</label>


                        <input type="text" class="form-control" id="deskripsi" name="deskripsi" placeholder="deskripsi}"
                            required>

                    </div>

                    <div class="form-group">                        
                        <label for="tanggal_mulai" class="   control-label">Tanggal Mulai</label>
                        
                        <input type="date" class="form-control" id="tanggal_mulai" name="tanggal_mulai" placeholder="tanggal mulai"  >

                    </div>

                    <div class="form-group">                        
                        <label for="tanggal_selesai" class="   control-label">Tanggal Selesai</label>
                        
                        <input type="date" class="form-control" id="tanggal_selesai" name="tanggal_selesai" placeholder="tanggal selesai" >

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

