@extends('layouts.app')
@section('content')
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">

<div class="container">
<div class="breadcrumb-header justify-content-between">
  <div class="my-auto">
      <div class="d-flex">
          <h4 class="content-title mb-0 my-auto">Create Article</h4>
      </div>
  </div>

</div>
  <div class="row">
    <div class="card-body pt-0">
      <form action="{{ route('articles.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" name="title" required>
        </div>
        <br>
        <div class="form-group">
            <textarea class="form-control" id="content" name="content"></textarea>
      </div>
      <br>
        <div class="form-group">

            <button type="submit" class="btn btn-primary">Create Article</button>
        </div>
    </form>

    </div>
  </div>
</div>
@endsection
@section('script')

    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>

    <script type="text/javascript">
        $('#content').summernote({
            height: 300
        });
    </script>
@endsection
