@extends("layouts.app")

@section("content")


    <h1 class="bg-light p-3 mb-4">Update Post</h1>
<form action="/submit_post" method="POST" enctype="multipart/form-data" class="col-md-6">
    <div class="form-group">
        <label for="title">Title:</label>
        <input type="text" class="form-control" id="title" name="title" value="{{$post['title']}}">
    </div>

    <div class="form-group">
        <label for="body">Body:</label>
        <textarea class="form-control" id="body" name="body">{{$post['body']}}</textarea>
    </div>

    <div class="form-group">
        <label for="image">Image:</label>
        <input type="file" class="form-control-file" id="image" name="image">
    </div>

    <button type="submit" class="btn btn-info">Submit</button>
</form>


@endsection
