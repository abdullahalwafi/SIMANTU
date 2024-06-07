@extends('template')
@section('content')
    <div class="container">
        <h1 class="text-center mt-2">Daftar Tugas</h1>
        <hr>

        <div class="row">
            @foreach ($tasks as $task)
                <div class="col-12 col-md-4">
                    <div class="card mt-2">
                        <div class="card-body">
                            <h4 class="card-title">{{ $task['name'] }}</h4>
                            <small>Deadline: {{ \Carbon\Carbon::parse($task['deadline'])->diffForHumans() }}</small> <br>
                            <span class="badge bg-warning">{{ $task['status->name'] }}</span>
                            <p class="card-text">{{ Str::limit($task['description'], 40, '...') }}</p>

                            <div class="mt-2">
                                <a href="#" class="btn btn-warning">Detail</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
