
@extends('layouts.master', ['title' => 'project'])

@section('css')
<link rel="stylesheet" href="./css/table.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
<link rel='stylesheet' href='https://cdn.datatables.net/1.13.5/css/dataTables.bootstrap5.min.css'>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css'>

@endsection



@section('content')

    <h1> Daftar Project </h1>
    <button type="button" class="btn btn-primary" data-toggle="modal" href="#addnew">
        Tambah Project
    </button>

<!--$%adsense%$-->
<div>
    <!-- Start DEMO HTML (Use the following code into your project)-->
    <table id="example" class="table table-striped" style="width:100%">
        <thead>
            <tr>
                <th>Nama Project</th>
                <th>Lokasi Project</th>
                <th>Deskripsi</th>
                <th>Tanggal Mulai</th>
                <th>Tanggal Selesai</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($projects as $project)
            <tr>
                <td> {{ $project->nama_project }} </td>
                <td> {{ $project->lokasi_project }} </td>
                <td> {{ $project->deskripsi }} </td>
                <td> {{ $project->tanggal_mulai }} </td>
                <td> {{ $project->tanggal_selesai }} </td>
                <td>

                    <a href="#edit{{ $project->id_project }}" data-toggle="modal"
                        class="btn btn-success btn-sm edit btn-flat"><i class='fa fa-edit'></i>
                        Edit</a>
                    <a href="#delete{{ $project->id_project }}" data-toggle="modal"
                        class="btn btn-danger btn-sm delete btn-flat"><i
                            class='fa fa-trash'></i> Delete</a>

                </td>
            </tr>
        @endforeach            
            
        </tbody>
        <tfoot>
            <tr>
                <th>Nama Project</th>
                <th>Lokasi Project</th>
                <th>Deskripsi</th>
                <th>Tanggal Mulai</th>
                <th>Tanggal Selesai</th>
                <th>Action</th>
            </tr>
        </tfoot>
    </table>
    <!-- END EDMO HTML (Happy Coding!)-->
</div>
<div>
    @foreach ($projects as $project)
        @include('project.project_edit_delete')
    @endforeach

    @include('project.project_add')
</div>
   
@endsection

@section('script')

<!-- jQuery -->
<script src='https://code.jquery.com/jquery-3.7.0.js'></script>
<!-- Data Table JS -->
<script src='https://cdn.datatables.net/1.13.5/js/jquery.dataTables.min.js'></script>
<script src='https://cdn.datatables.net/responsive/2.1.0/js/dataTables.responsive.min.js'></script>
<script src='https://cdn.datatables.net/1.13.5/js/dataTables.bootstrap5.min.js'></script>

<!-- Script JS -->
<script src="./js/table.js"></script>
@endsection