@extends('layouts.app')
@section('title', 'Details')
@section('content')

<header>
    <h1 class="text-success text-center my-5"> 
        {{$project->title}}
    </h1>
</header>

<div class="container">
    <div class="card h-100 mb-3">
        <div class="row g-0">
          <div class="col-md-4">
            <img src="{{asset('storage/' . $project->image)}}" class="img-fluid " alt="...">
          </div>
          <div class="col-md-8 text-center">
            <div class="card-body">
              <h2 class="card-title mb-4">{{$project->title}}</h2>
              <h4 class="mb-3">Description:</h4>
              <p class="card-text">{{$project->description}}</p>
              <h4 class="mb-3">Technolgies:</h4>
              <p class="card-text">{{$project->techonologies_used}}</p>
              {{-- @if ($project->type) --}}
              <h4 class="mb-3">Type:</h4>
              {{-- @dd($project) --}}
              <span class="badge text-black">{{$project->type->name}} </span>
              {{-- @endif --}}
            </div>
          </div>
        </div>
      </div>

      <div class="buttons mt-3 d-flex justify-content-end">
        <a href="{{url('admin/projects') }}" class="btn btn-primary mb-3"><i class="fa-solid fa-circle-left me-1"></i>Back to Projects</a>
        <a href="{{$project->project_link}}" class="btn btn-success mb-3 mx-4"><i class="fa-brands fa-github me-1"></i>Project Link</a>
        <a href="{{route('admin.projects.edit', $project->id)}}" class="btn btn-warning text-white mb-3 me-2"><i class="fa-solid fa-pencil"></i> Edit</a>

        <form action="{{route('admin.projects.destroy', $project->id)}}" method="POST" class="me-2">
          @method('DELETE')
          @csrf

          <button class="btn btn-danger"><i class="fa-solid fa-trash-can me-1"></i> Delete</button>
        </form>

      {{-- <div class="buttons my-4 d-flex justify-content-between">
        <a href="{{$project->project_link || 'https://github.com/VincenzoDiMasi'}}" class="btn btn-success"><i class="fa-brands fa-github me-1"></i>Project Link</a>
        <a href="{{url('admin/projects') }}" class="btn btn-primary"><i class="fa-solid fa-circle-left me-1"></i>Back to Projects</a>
    </div> --}}
</div>

@section('scripts')
        
@endsection
@endsection