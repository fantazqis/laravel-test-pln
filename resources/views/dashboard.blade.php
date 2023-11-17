
@extends('layouts.master', ['title' => 'dashboard'])

@section('css')
    <link rel="stylesheet" href="css/dashboard.css">
@endsection

@section('content')
    <div class="card-container">
        <div class="card">
        <div class="container">
            <h4><b>total karyawan</b></h4> 
            <p>{{ $data[0]}}</p> 
        </div>
        </div>
    
        <div class="card">
        <div class="container">
            <h4><b>total project</b></h4> 
            <p>{{ $data[1]}}</p> 
        </div>

        </div>
    </div>

    <div>

        <table id="example" class="table table-striped" style="width:100%">
            <thead>
                <tr>
                    <th>Nama Pegawai</th>
                    <th>Nama Project</th>
                    <th>Lokasi Project</th>
                    <th>Durasi Kerja</th>
                    <th>Tanggal Pengerjaan</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($worklog as $log)
                <tr>
                    <td> {{ $log->pegawai->nama }} </td>
                    <td> {{ $log->project->nama_project }} </td>
                    <td> {{ $log->project->lokasi_project }} </td>
                    <td> {{ $log->durasi_kerja }} </td>
                    <td> {{ $log->tanggal_pengerjaan }} </td>
                    <td style="align-self: flex-end">

                        <a href="#edit{{ $log->id }}" data-toggle="modal"
                            class="btn btn-success btn-sm edit btn-flat"><i class='fa fa-edit'></i>
                            Edit</a>
                        <a href="#delete{{ $log->id }}" data-toggle="modal"
                            class="btn btn-danger btn-sm delete btn-flat"><i
                                class='fa fa-trash'></i> Delete</a>
    
                    </td>
                </tr>
            @endforeach            
                
            </tbody>
            <tfoot>
                <tr>
                    <th>Nama Pegawai</th>
                    <th>Nama Project</th>
                    <th>Lokasi Project</th>
                    <th>Durasi Kerja</th>
                    <th>Tanggal Pengerjaan</th>
                    <th>Action</th>
                </tr>
            </tfoot>
        </table>
  
    </div>

    <div>
        @foreach ($worklog as $log)
            @include('worklog.worklog_edit_delete')
        @endforeach
    </div>

@endsection

@section('script')
    
@endsection
