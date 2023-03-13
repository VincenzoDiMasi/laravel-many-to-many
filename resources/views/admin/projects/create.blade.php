@extends('layouts.app')
@section('title', 'Add')
@section('content')
<body>

    <div class="container my-5">

        <header class="my-5">
            <h1 class="text-center text-danger">
                Add a new Project!
            </h1>
        </header>

        @include('includes.form')

        {{-- <form action="{{route('admin.projects.store')}}" method="POST" class="text-center" enctype="multipart/form-data">
            @csrf

            <div class="row">
                <div class="col-6 mb-3">
                    <label for="title" class="form-label">Title </label>
                    <input type="text" class="form-control" id="title" placeholder="Inserisci il titolo" name="title" required>
                </div>

                <div class="col-6 mb-3">
                    <label for="image" class="form-label">Image </label>
                    <input type="file" class="form-control" id="image" placeholder="Inserisci l'url dell'immagine" name="image">
                </div>

                <div class="col-12 mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea class="form-control" id="description" rows="3" placeholder="Inserisci una descrizione" name="description" required></textarea>
                </div>

                <div class="col-6 mb-3">
                    <label for="full_code" class="form-label"> Project link </label>
                    <input type="url" class="form-control" id="full_code" placeholder="Inserisci il link al progetto" name="project_link" required>
                </div>

                <div class="col-6 mb-3">
                    <label for="techonologies_used" class="form-label">Technlogies used </label>
                    <input type="text" class="form-control" id="techonologies_used" placeholder="Quali tecnologie hai utilizzato?" name="techonologies_used" required>
                </div>
        </div>

        <div class="buttons d-flex justify-content-between my-4">

             <a href="{{route('admin.projects.index')}}" class="btn btn-primary"><i class="fa-solid fa-rotate-left"></i> Back</a>
            <button class="btn btn-success me-2">
                <i class="fa-solid fa-plus me-1"></i>Add
            </button>

           
        </div>

        </form> --}}
    </div>
</body>

@endsection