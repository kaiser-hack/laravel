@csrf
@if ($project->image)
<div class="card" style="width: 18rem;">


<img class="card-img-top" style="height: 150px; object-fit: cover" src="/storage/{{$project->image}}" alt="{{ $project->title }}">
</div>
@endif


<div class="mb-3">
    <label  for="formFile" class="form-label">Default file input example</label>
    <input name="image" class="form-control" type="file" id="formFile">
  </div>

  <div class="form-group">
    <label for="category_id">Categoria del proyecto</label>
    <select name="category_id" id="category_id" class="form-control border-0 bg-light shadow-sm">

        <option value="">Seleccionar categoria</option>

        @foreach ($categories as $id => $title )

        <option value="{{$id}}" @if($id == old('category_id', $project->category_id)) selected @endif> {{$title}}  </option>
        @endforeach


    </select>
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