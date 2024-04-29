
    <!-- It is never too late to be what you might have been. - George Eliot -->
    <!-- same as the previous file. Add the following after the nav tag and before the closing body tag.-->
<div class="container h-100 mt-5">
  <div class="row h-100 justify-content-center align-items-center">
    <div class="col-10 col-md-8 col-lg-6">
      <h3>User</h3>
      <form action="{{ route('posts.store') }}" method="post">
        @csrf
        <div class="form-group">
          <label for="Name">Name</label>
          <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="form-group">
          <label for="Nivel_user">Nivel</label>
          <textarea class="form-control" id="Nivel_user" name="Nivel_user" rows="3" required></textarea>
        </div>
        <br>
        <button type="submit" class="btn btn-primary">Entrar</button>
      </form>
    </div>
  </div>
</div>
