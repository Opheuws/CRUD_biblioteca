
    <!-- It is never too late to be what you might have been. - George Eliot -->
    <!-- same as the previous file. Add the following after the nav tag and before the closing body tag.-->
    <div class="container h-100 mt-5">
  <div class="row h-100 justify-content-center align-items-center">
    <div class="col-10 col-md-8 col-lg-6">
      <h3>Livros</h3>
      <form action="{{ route('livro.store') }}" method="livro">
        @csrf
        <div class="form-group">
          <label for="Name">Name_livro</label>
          <input type="text" class="form-control" id="livro" name="livro" required>
        </div>
        <div class="form-group">
          <label for="num_pages">Numero de paginas</label>
          <textarea class="form-control" id="num_pages" name="num_pages" rows="3" required></textarea>
        </div>
        <div class="form-group">
          <label for="Estoque">Estoque</label>
          <input type="text" class="form-control" id="estoque" name="estoque" required>
        </div>
        <br>
        <button type="submit" class="btn btn-primary">Entrar</button>
      </form>
    </div>
  </div>
</div>
