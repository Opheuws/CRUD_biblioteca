
<div class="container h-100 mt-5">
  <div class="row h-100 justify-content-center align-items-center">
    <div class="col-10 col-md-8 col-lg-6">
      <h3>Update Post</h3>
      <form action="{{ route('posts.update', $post->id) }}" method="posts">
        @csrf
        @method('PUT')
        <div class="form-group">
          <label for="name">Title</label>
          <input type="text" class="form-control" id="name" name="name"
            value="{{ $post->name }}" required>
        </div>
        <div class="form-group">
          <label for="Nivel_user">Nivel de  usuario</label>
          <textarea class="form-control" id="Nivel_user" name="Nivel_user" rows="3" required>{{ $post->Nivel_user }}</textarea>
        </div>
        <button type="submit" class="btn mt-3 btn-primary">Update Post</button>
      </form>
    </div>
  </div>
</div>