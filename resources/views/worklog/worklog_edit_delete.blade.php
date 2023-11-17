<!-- Edit -->
<div class="modal fade" id="edit{{ $log->id }}">
    <div class=" modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>

            </div>
            <h4 class="modal-title"><b>Update worklog</b></h4>
            <div class="modal-body text-left">
                {{-- action="{{ route('schedule.update', $schedule->slug) }}" --}}
                <form class="form-horizontal" method="POST" action="/worklog/{{ $log->id }}" >
                    @method('put')
                    @csrf

                    <div class="form-group">
                        <label for="durasi_kerja" class="  control-label">Durasi Pengerjaan</label>


                        <input type="text" class="form-control" id="durasi_kerja" name="durasi_kerja" value="{{ $log->durasi_kerja }}"
                            required>

                    </div>

                    <div class="form-group">
                        <label for="tanggal_pengerjaan" class="  control-label">Tanggal</label>


                        <input type="text" class="form-control" id="tanggal_pengerjaan" name="tanggal_pengerjaan" value="{{ $log->tanggal_pengerjaan }}"
                            required>

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
<div class="modal fade" id="delete{{ $log->id }}">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header " style="align-items: center">
               
                <h4 class="modal-title "><span class="employee_id">Delete worklog</span></h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              </div>
            <div class="modal-body">
                <form class="form-horizontal" method="POST" action="/worklog/{{ $log->id }}">
                        @csrf
                    @method('delete')
                        <div class="text-center">
                            <h6>Anda yakin ingin menghapus data ini?</h6>
                            <h2 class="bold del_employee_name">project: {{ $log->id}}</h2>
                    
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