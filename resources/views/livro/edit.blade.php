
<div class="container h-100 mt-5">
  <div class="row h-100 justify-content-center align-items-center">
    <div class="col-10 col-md-8 col-lg-6">
      <h3>Update Livro</h3>
      <form action="{{ route('livro.update', $livro->id) }}" method="livro">
        @csrf
        @method('PUT')
        <div class="form-group">
          <label for="name_livro">Nome do livro</label>
          <input type="text" class="form-control" id="livro" name="livro"
            value="{{ $livro->name_livro }}" required>
        </div>
        <div class="form-group">
          <label for="num_pages">Numero_pages</label>
          <textarea class="form-control" id="num_pages" name="num_pages" rows="3" required>{{ $livro->num_pages }}</textarea>
        </div>
        <div class="form-group">
          <label for="estoque">Estoque</label>
          <input type="text" class="form-control" id="estoque" name="estoque"
            value="{{ $livro->estoque }}" required>
        </div>
        <button type="submit" class="btn mt-3 btn-primary">Update Livro</button>
      </form>
    </div>
  </div>
</div>