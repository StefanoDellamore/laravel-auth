@extends('layouts.guest')

@section('page-title', 'Tutti i progetti')

@section('main-content')
    <div class="row">
        <div class="col-12"> 
            <h1 class="text-center text-success">
                Tutti i progetti
            </h1>  
        </div>

        @foreach ($projects as $project)
            <div class="col-12 col-xs-6">
                <div class="card">
                    <div class="card-body">
                        <h3>
                            {{ $project->title }}
                        </h3>
                        <a href="#">Leggi</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection