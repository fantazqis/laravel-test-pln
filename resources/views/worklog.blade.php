@extends('layouts.master', ['title' => 'worklog'])

@section('css')
    
@endsection

@section('content')

<div class="container mt-5">
    <h2>Tambah worklog</h2>

    <form action="/worklog" method="post">
        @csrf
        <div class="mb-3">
            <label for="user">Pilih User:</label>
            <select name="id_pegawai" id="user" class="form-control">

                @foreach($data_pegawais as $data_pegawai)
                    <option value="{{ $data_pegawai->id_pegawai }}">{{ $data_pegawai->nama }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="tanggal_pengerjaan">Pilih Tanggal:</label>
            <input type="date" name="tanggal_pengerjaan" id="tanggal_pengerjaan" class="form-control">
        </div>

        <div>
            <button type="button" class="btn btn-success add-job">+</button>
        </div>

        <div id="jobs-container">

            <div class="job mb-3">
                <label for="task[]">Pilih Task:</label>
                <select name="id_project[]" class="form-control task">
 
                    @foreach($data_projects as $data_project)
                        <option value="{{ $data_project->id_project }}">{{ $data_project->nama_project }}</option>
                    @endforeach
                </select>

                <label for="duration">Durasi (jam):</label>
                <input type="number" name="durasi_kerja[]" class="form-control duration" value="1" min="1">

                
                <button type="button" class="btn btn-danger remove-job">-</button>
            </div>
        </div>

        <div class="mt-3">
            <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
    </form>

</div>
<input type="hidden" name="job_data" id="job-data">

<script>
    
    document.addEventListener('DOMContentLoaded', function () {
        const jobsContainer = document.getElementById('jobs-container');
        const totalDurationElement = document.getElementById('total-duration');
        const initialDurationInput = document.querySelector('.duration');

        if (initialDurationInput) {
            initialDurationInput.addEventListener('input', updateTotalDuration);
        }

        document.addEventListener('click', function (event) {
            if (event.target.classList.contains('add-job')) {
                addJob();
            } else if (event.target.classList.contains('remove-job')) {
                removeJob(event.target.closest('.job'));
            }
        });

        function addJob() {
            const jobTemplate = jobsContainer.querySelector('.job');
            const newJob = jobTemplate.cloneNode(true);
     
            newJob.querySelector('.task').value = '';
            newJob.querySelector('.duration').value = '0';

            newJob.querySelector('.duration').addEventListener('input', updateTotalDuration);

            jobsContainer.appendChild(newJob);

            updateTotalDuration();
        }

        function removeJob(job) {
            if (canRemoveJob()) {
                job.remove();

                updateTotalDuration();
            } else {
                alert('Setidaknya satu job harus ada.');
            }
        }

        function canRemoveJob() {
            const jobContainers = document.querySelectorAll('.job');
            return jobContainers.length > 1;
        }

        function updateTotalDuration() {
            const durationInputs = document.querySelectorAll('.duration');
            let totalDuration = 0;
            let jobData = [];

            durationInputs.forEach(function (input, index) {
                totalDuration += parseInt(input.value) || 0;

                const task = document.querySelectorAll('.task')[index].value;
                const duration = parseInt(input.value) || 0;

                jobData.push({ task, duration });
            });

            totalDurationElement.textContent = totalDuration + ' jam';

            document.getElementById('job-data').value = JSON.stringify(jobData);

            const statusElement = document.getElementById('status');
            statusElement.textContent = totalDuration >= 8 ? '1' : '0';
        }
    });


</script>

@endsection

@section('script')
    
@endsection