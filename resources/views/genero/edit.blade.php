
<div class="container h-100 mt-5">
  <div class="row h-100 justify-content-center align-items-center">
    <div class="col-10 col-md-8 col-lg-6">
      <h3>Update Genero</h3>
      <form action="{{ route('genero.update', $genero->id) }}" method="genero">
        @csrf
        @method('PUT')
        <div class="form-group">
          <label for="name_genero">Nome do Genero</label>
          <input type="text" class="form-control" id="genero" name="genero"
            value="{{ $genero->name_genero }}" required>
        </div>
        <div class="form-group">
          <label for="description_genere">Descrição de Genero</label>
          <textarea class="form-control" id="description_genere" name="description_genere" rows="3" required>{{ $genero->description_genere }}</textarea>
        </div>
        <button type="submit" class="btn mt-3 btn-primary">Update Genero</button>
      </form>
    </div>
  </div>
</div>