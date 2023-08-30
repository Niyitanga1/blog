 
@extends('layouts.app') 

@section('content')



<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        <div class="card">
              <div class="card-body">
    <h1>Posts</h1>
    
    <table class="table" border="1">
        <thead>
            <tr><th>ID</th>
                <th>Title</th>
                <th>Content</th>
                <th>Published At</th>
                <th colspan="2"><center>Actions</center></th>
            </tr>
        </thead>


<?php 
$data
?>
        @foreach ( $data as $users)

{{ $users->name }}

@endforeach


        <tbody>
            @foreach($data as $posts)
                <tr><td>{{ $posts->id }}</td>
                    <td>{{ $posts->title }}</td>
                    <td>{{ $posts->content }}</td>
                    <td>{{ $posts->published_at }}</td>

                    <td><a href = 'edit/{{ $posts->id }}' style="color: white"> <button type="button" class="btn btn-primary"><i class="fa fa-pencil"></i>update</button> </a></td>
                <td> <a href = 'delete/{{ $posts->id }}'><button type="button" class="btn btn-danger"><i class="fa fa-trash"></i>Delete</button> </a></td>
              
                </tr>
            @endforeach
        </tbody>
    </table>

    </div>
            </div>
        </div>
    </div>
</div>
@endsection

