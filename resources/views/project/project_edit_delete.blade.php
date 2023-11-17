<!-- Edit -->
<div class="modal fade" id="edit{{ $project->id_project }}">
    <div class=" modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>

            </div>
            <h4 class="modal-title"><b>Update project</b></h4>
            <div class="modal-body text-left">
                {{-- action="{{ route('schedule.update', $schedule->slug) }}" --}}
                <form class="form-horizontal" method="POST" action="/project/{{ $project->id_project }}" >
                    @method('put')
                    @csrf

                    <div class="form-group">
                        <label for="nama_project" class="control-label">Nama Project</label>


                        <input type="text" class="form-control" id="nama_project" name="nama_project" value="{{ $project->nama_project }}"
                            required>

                    </div>

                    <div class="form-group">
                        <label for="lokasi_project" class="  control-label">Lokasi Project</label>


                        <input type="text" class="form-control" id="lokasi_project" name="lokasi_project" value="{{ $project->lokasi_project }}"
                            required>

                    </div>

                    <div class="form-group">
                        <label for="deskripsi" class="  control-label">Deskripsi</label>


                        <input type="text" class="form-control" id="deskripsi" name="deskripsi" value="{{ $project->deskripsi }}"
                            required>

                    </div>

                    <div class="form-group">                        
                        <label for="tanggal_mulai" class="  control-label">Tanggal Mulai</label>
                        
                        <input type="date" class="form-control" id="tanggal_mulai" name="tanggal_mulai" value="{{ $project->tanggal_mulai }}" >

                    </div>

                    <div class="form-group">                        
                        <label for="tanggal_selesai" class="  control-label">Tanggal Selesai</label>
                        
                        <input type="date" class="form-control" id="tanggal_selesai" name="tanggal_selesai" value="{{ $project->tanggal_selesai }}" >

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
<div class="modal fade" id="delete{{ $project->id_project }}">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header " style="align-items: center">
               
                <h4 class="modal-title "><span class="employee_id">Delete Schedule</span></h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              </div>
            <div class="modal-body">
                <form class="form-horizontal" method="POST" action="/project/{{ $project->id_project }}">
                        @csrf
                    @method('delete')
                        <div class="text-center">
                            <h6>Anda yakin ingin menghapus data ini?</h6>
                            <h2 class="bold del_employee_name">project: {{ $project->nama_project}}</h2>
                    
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