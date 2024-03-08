@extends('layouts.app')

@section('page-title', 'Tutti i progetti')

@section('main-content')
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <h1 class="text-center text-success">
                        Tutti i progetti!
                    </h1>
                    
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Titolo</th>
                                <th scope="col">Creato il</th>
                                <th scope="col">Orario</th>
                                <th scope="col">Azioni</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($project as $project)
                            <tr>
                                <th scope="row">{{ $project->id }}</th>
                                <td>{{ $project->title }}</td>       
                                <td>{{ $project->created_at -> format('d/m/y') }}</td>
                                <td>{{ $project->created_at -> format('H:i') }}</td>

                                <td>
                                    <a href="{{ route('admin.projects.show', ['project'=>$project->id]) }}" class="btn btn-primary">Vedi</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
            </div>
        </div>
    </div>
@endsection
