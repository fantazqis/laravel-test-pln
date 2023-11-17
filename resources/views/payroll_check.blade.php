
@extends('layouts.master_blank', ['title' => 'welcome'])

@section('css')
<link rel="stylesheet" href="css/payroll.css">
@endsection

@section('content')
<div class="container mt-5">
    <h2>Pilih Rentang Tanggal</h2>

    <form action="{{ route('payroll.show') }}" method="post">
        @csrf
        <div class="mb-3">
            <label for="id_pegawai">Pilih ID Pegawai:</label>
            <select name="id_pegawai" id="id_pegawai" class="form-control">
                <!-- Ambil data pegawai dari model atau sumber data lainnya -->
                @foreach($data_pegawais as $data_pegawai)
                    <option value="{{ $data_pegawai->id_pegawai }}">{{ $data_pegawai->nama }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="start_date">Pilih Tanggal Mulai:</label>
            <input type="date" name="start_date" id="start_date" class="form-control">
        </div>

        <div class="mb-3">
            <label for="end_date">Pilih Tanggal Selesai:</label>
            <input type="date" name="end_date" id="end_date" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary">Tampilkan Data</button>
    </form>
</div>

@endsection

@section('script')
<!-- Library JavaScript Bootstrap -->


@endsection