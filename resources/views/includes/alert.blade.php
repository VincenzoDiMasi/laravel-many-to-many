@if(session('msg'))
    <div class="alert w-50 alert-dismissible fade show mx-auto alert-{{session('type') ?? 'info' }} mt-4">
        {{session('msg')}}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif