<label for="title">Título:</label>
<input name="title" class="form-control" placeholder="Título del proyecto" value="{{ old('title', $project->title) }}">
{!! $errors->first('title', '<small>:message</small><br>') !!}
<br>
<label for="description">Descripción:</label><br>
<textarea name="description" cols="56" placeholder="Descripcion del proyecto">{{ old('description', $project->description) }}</textarea>
{!! $errors->first('description', '<small>:message</small><br>') !!}
<br>
<div class="d-grid gap-2 d-md-flex justify-content-md-center">
<button class="btn btn-light">{{ $btnText }}</button>
</div>