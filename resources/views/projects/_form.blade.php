@csrf
@if ($project->image)
<div class="card" style="width: 18rem;">


<img class="card-img-top" src="/storage/{{$project->image}}" alt="{{ $project->title }}">
</div>
@endif


<div class="mb-3">
    <label  for="formFile" class="form-label">Default file input example</label>
    <input name="image" class="form-control" type="file" id="formFile">
  </div>


<div class="form-group">
    <label for="title">Título del proyecto</label>
    <input class="form-control border-0 bg-light shadow-sm"
        id="title"
        type="text"
        name="title"
        value="{{ old('title', $project->title) }}"
    >
</div>
<div class="form-group">
    <label for="url">URL del proyecto</label>
    <input class="form-control border-0 bg-light shadow-sm"
        id="url"
        type="text"
        name="url"
        value="{{ old('url', $project->url) }}"
    >
</div>

<div class="form-group">
    <label for="description">Descripción del proyecto</label>
    <textarea class="form-control border-0 bg-light shadow-sm"
        name="description"
    >{{ old('description', $project->description) }}</textarea>
</div>

<button class="btn btn-primary btn-lg btn-block">{{ $btnText }}</button>
<a class="btn btn-link btn-block"
    href="{{ route('projects.index') }}">
    Cancelar
</a>