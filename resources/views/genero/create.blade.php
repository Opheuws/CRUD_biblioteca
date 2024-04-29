
    <!-- It is never too late to be what you might have been. - George Eliot -->
    <!-- same as the previous file. Add the following after the nav tag and before the closing body tag.-->
    <div class="container h-100 mt-5">
  <div class="row h-100 justify-content-center align-items-center">
    <div class="col-10 col-md-8 col-lg-6">
      <h3>Genero</h3>
      <form action="{{ route('livro.store') }}" method="livro">
        @csrf
        <div class="form-group">
          <label for="name_genero">Nome do Genero</label>
          <input type="text" class="form-control" id="genero" name="genero" required>
        </div>
        <div class="form-group">
          <label for="description_genere">Descrição de Genero</label>
          <textarea class="form-control" id="description_genere" name="description_genere" rows="3" required></textarea>
        </div>
        <br>
        <button type="submit" class="btn btn-primary">Entrar</button>
      </form>
    </div>
  </div>
</div>
