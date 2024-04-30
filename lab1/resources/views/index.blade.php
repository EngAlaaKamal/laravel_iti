@extends('layouts.app')

@section("content")

    <h1 class="bg-light p-3 mb-4">All posts</h1>

    <div class="table-responsive">
        <table class="table table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Body</th>
                    <th colspan="3">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($posts as $post)
                <tr>
                    <td>{{$post['id']}}</td>
                    <td>{{$post['title']}}</td>
                    <td>{{$post['body']}}</td>
                    <td>
                        <a href="{{route('post.show',$post['id'])}}" class="btn btn-info">Show</a>
                    </td>
                    <td>
                        <a href="{{route('post.edit',$post['id'])}}" class="btn btn-warning">Edit</a>
                    </td>
                    <td>
                        <form action="{{route('post.delete', $post['id'])}}" method="POST" onsubmit="return confirm('Are you sure you want to delete this post?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection
