@extends('layouts.guest')

@section('page-title', 'Nostri progetti')

@section('main-content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <h1 class="text-center text-primary">
                    Nostri progetti!
                </h1>

                @if ($stringHello != null)
                    <h4 class="text-success">
                        {{ $stringHello }}
                    </h4>
                @endif
                    
               @foreach ($project as $project)
                    <div class="col-12 col-xs-6">
                        <div class="card">
                            <div class="card-body">
                                <h4>
                                    {{ $project->title }}
                                </h4>

                                <a href="{{ route('projects.show', ['project'=>$project->slug]) }}" class="btn btn-primary">
                                    Leggi
                                </a>
                            </div>
                        </div>
                    </div>
               @endforeach
            
        </div>
    </div>
@endsection
