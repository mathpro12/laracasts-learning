<form method = "POST" action = '/posts'>
  {{ csrf_field() }}
  <h1>Publish</h1>
  <div class="form-group">
    <label for="title">Title</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="title" required>
  </div>
  <div class="form-group">
    <label for="body">Body</label>
    <textarea class="form-control" id="body" name="body" required></textarea>
  </div>
  <button type="submit" class="btn btn-primary">Publish</button>
</form>