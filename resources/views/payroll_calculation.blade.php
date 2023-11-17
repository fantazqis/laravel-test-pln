
@extends('layouts.master_blank', ['title' => 'welcome'])

@section('css')
<link rel="stylesheet" href="css/payroll.css">
<link rel="stylesheet" href="https://w3.p2hp.com/w3css/4/w3.css">
@endsection

@section('content')
<div class="container mt-5">
        
    <h2>Ringkasan Pekerjaan</h2>

    @if($summarizedWorklogs->isEmpty())
        <p>Tidak ada data pekerjaan pada rentang tanggal tersebut.</p>
    @else
        <table class="table" id="summary-table">
            <thead>
                <tr>
                    <th>ID Pegawai</th>
                    <th>Tanggal</th>
                    <th>Total Durasi (Jam)</th>
                    <th>Status</th>
                    <th>Poin</th>
                    <!-- Tambahkan kolom-kolom lainnya sesuai kebutuhan -->
                </tr>
            </thead>
            <tbody>
                @foreach($summarizedWorklogs as $summarizedWorklog)
                    <tr>
                        <td>{{ $summarizedWorklog->id_pegawai }}</td>
                        <td>{{ $summarizedWorklog->tanggal_pengerjaan }}</td>
                        <td>{{ $summarizedWorklog->total_durasi }}</td>
                        <td class="status"></td>
                        <td class="points"></td>
                        <!-- Tambahkan kolom-kolom lainnya sesuai kebutuhan -->
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
    <div class="mt-3">
        <h3>Rata-rata Poin per Hari Kerja:</h3>
        <p id="average-points">0</p>
        <div id="average-points-div"></div>
        <h3>Total Hari Absen:</h3>
        <p id="total-absent-days">0</p>
    </div>
    <a href="/dashboard" class="w3-round-xxlarge w3-btn w3-white w3-border w3-border-black w3-round-large">
        Home
    </a>
    
  

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Ambil semua baris pada tabel summary
            const rows = document.querySelectorAll('#summary-table tbody tr');

            // Inisialisasi variabel points dan totalHariKerja
            let points = 0;
            let totalHariKerja = 0;
            let totalHari = 0;


            const startDate = new Date('{{ $start_date }}');
            const endDate = new Date('{{ $end_date }}');

            for (let currentDate = new Date(startDate); currentDate <= endDate; currentDate.setDate(currentDate.getDate() + 1)) {
                const dayOfWeek = currentDate.getDay();

            // Jika hari bukan Sabtu (6) atau Minggu (0), tambahkan ke total hari kerja
            if (dayOfWeek !== 0 && dayOfWeek !== 6) {
                totalHari++;
            }
            
        }

            // Iterasi melalui setiap baris
            rows.forEach(function (row) {
                // Ambil total_durasi dari kolom ke-2
                const totalDurasi = parseInt(row.cells[2].textContent);

                // Hitung status dan poin
                const status = totalDurasi >= 8 ? 1 : 0;
                points += status;

                // Tambahkan status dan poin ke dalam kolom ke-3 dan ke-4
                row.cells[3].textContent = status;
                row.cells[4].textContent = points;

                // Hitung total hari kerja
                totalHariKerja++;
                console.log('Total Hari Kerja:', totalHariKerja);

            });

            // Hapus hari Sabtu dan Minggu dari total hari kerja
            for (let i = 0; i <= totalHariKerja; i++) {
                const currentDate = new Date('{{ $start_date }}');
                currentDate.setDate(currentDate.getDate() + 1);
                const dayOfWeek = currentDate.getDay();

                if (dayOfWeek === 0 || dayOfWeek === 6) {
                    totalHariKerja--;
                }
                
            }

            // Bagi points dengan total hari kerja
            const averagePoints = totalHariKerja === 0 ? 0 : points / totalHariKerja;

            // Tampilkan hasil pembagian poin
            const averagePointsElement = document.getElementById('average-points');
            averagePointsElement.textContent = averagePoints;

            // Tampilkan hasil pembagian poin di dalam div
            const averagePointsDiv = document.getElementById('average-points-div');
            averagePointsDiv.innerHTML = `Poin: ${points} / Hari Kerja: ${totalHariKerja}`;

            document.getElementById('total-absent-days').textContent = totalHari - totalHariKerja;

        });
    </script>

{{-- @include('testing2') --}}
@endsection

@section('script')
<!-- Library JavaScript Bootstrap -->


@endsection
