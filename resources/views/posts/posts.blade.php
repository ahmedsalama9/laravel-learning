@extends('layouts.app')

@section('title') index @endsection

@section('content')
    
    <a href="{{route('posts.create')}}" class="btn btn-info">create Post</a>

          <table class="table w-50 mx-auto mt-5">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">title</th>
                <th scope="col">Postedby</th>
                <th scope="col">CreatedAt</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
  @foreach ($posts as $post)
              <tr>
                <th scope="row">{{$post['id']}}</th>
                <td>{{$post['title']}}</td>
                <td>{{$post['Postedby']}}</td>
                <td>{{$post['CreatedAt']}}</td>
                <td>
                    <a  href="{{route('posts.show', $post['title'])}}" class="btn btn-primary">View</a >
                      <a  href="" class="btn btn-info">Edit</a >
                    <a  href="" class="btn btn-danger">Delete</a >
                </td>
               </tr>
   @endforeach
         
            </tbody>
          </table>
      </div>
      @endsection
  