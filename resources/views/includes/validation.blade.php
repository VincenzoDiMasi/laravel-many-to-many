@if ($errors->any())
    <div class="alert alert-dismissibile fade show alert-danger w-50 mx-auto d-flex justify-content-between mt-3">
            <ul>
                @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                @endforeach
            </ul>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif