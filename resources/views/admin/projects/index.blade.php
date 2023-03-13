@extends('layouts.app')
@section('title', 'Projects')
@section('content')
    <div class="container">

        <h1 class="text-center text-danger fw-bold my-5">
            MY PROJECTS
        </h1>

        <div class="row g-5">

            @foreach ($projects as $project)
            <div class="col-4 mb-5">
                <div class="card text-center">
                    <img src="{{asset('storage/' . $project->image)}}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">{{$project->title}}</h5>
                      <p class="card-text">Created at: {{$project->created_at}}</p>
                      <div class="buttons d-flex justify-content-center">
                        <a href="{{route('admin.projects.show', $project->id)}}" class="btn btn-primary me-2"><i class="fa-solid fa-circle-info"></i> See More </a>
                        <a href="{{route('admin.projects.edit', $project->id)}}" class="btn btn-warning text-white me-2"><i class="fa-solid fa-pencil"></i> Edit</a>
                        <form action="{{route('admin.projects.destroy', $project->id)}}" method="POST">
                        @method('DELETE')
                        @csrf

                        <button class="btn btn-danger"><i class="fa-solid fa-trash-can"></i> Delete </button>
                        </form>

                      </div>
                    </div>
                  </div>
            </div>
            @endforeach
            
        </div>

        <div class="buttons mb-5 d-flex justify-content-center">
            <a href="{{route('admin.projects.create')}}" class="btn btn-success"><i class="fa-solid fa-plus me-1"></i>Add a New Project</a>
        </div>

        </div>
    </div>

    @section('scripts')
        
    @endsection
@endsection