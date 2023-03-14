@if ($project->exists)
    <form action="{{route('admin.projects.update', $project->id)}}" method="POST" class="text-white text-center" enctype="multipart/form-data" novalidate>
    @method('PUT')

@else
    <form action="{{route('admin.projects.store')}}" method="POST" class="text-white text-center" enctype="multipart/form-data" novalidate>
@endif

    @csrf

    <div class="row">
        <div class="col-6 mb-3">
            <label for="title" class="form-label">Title </label>
            <input type="text" class="form-control" id="title" placeholder="Inserisci il titolo" name="title" value="{{old('title',  $project->title)}}" required>
        </div>

        <div class="col-6 mb-3">
            <label for="image" class="form-label">Image </label>
            <input type="file" class="form-control" id="image" placeholder="Inserisci l'url dell'immagine" name="image" value="{{old('image', $project->image)}}">
        </div>

        <div class="col-12 mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" id="description" rows="3" placeholder="Inserisci la descrizione del progetto" name="description" required>{{old('description', $project->description) }}</textarea>
        </div>

        <div class="col-6 mb-3">
            <label for="full_code" class="form-label"> Project link </label>
            <input type="url" class="form-control" id="full_code" placeholder="Inserisci il link al progetto" name="project_link" value="{{old('project_link', $project->project_link)}}">
        </div>

        {{-- <div class="col-6 mb-3">
            <label for="techonologies_used" class="form-label">Technlogies used </label>
            <input type="text" class="form-control" id="techonologies_used" placeholder="Inserisci le tecnologie utilizzate" name="techonologies_used" value="{{old('techonologies_used', $project->techonologies_used)}}" required>
        </div> --}}

        <div class="col-4 mb-3">
            <label for="type_id" class="form-label">Type </label>
            <select class="form-select" name="type_id" id="type_id" aria-label="Default select example">
                <option value="">No Type</option>
                @foreach ($types as $type)
                    <option @if ($project->type_id == $type->id) selected @endif value="{{$type->id}}">{{$type->name}}</option>
                @endforeach
            </select>
        </div>

        <div class="technologies">
            <h3 class="mt-3 mb-4">Tecnhologies used:</h3>

            <div class="d-flex justify-content-between">
                @foreach ($technologies as $technology)
                    <div class="form-check form-check-inline text-black">
                        <input class="form-check-input" type="checkbox" id="tag-{{$technology->id}}" value="{{$technology->id}}" name="technologies[]" @checked(in_array($technology->id, old('technologies', $project_technologies ?? [])))>
                        <label class="form-check-label" for="tag-{{$technology->id}}">{{$technology->name}}</label>
                  </div>
                @endforeach
            </div>
        </div>
</div>

<div class="buttons d-flex justify-content-between my-4">

    <a href="{{route('admin.projects.index')}}" class="btn btn-primary"><i class="fa-solid fa-rotate-left"></i> Back</a>
   <button class="btn text-white btn-success me-2">
    <i class="fa-solid fa-pen-to-square me-1"></i></i>Save
   </button>

  
</div>

</form>    