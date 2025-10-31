@extends('layouts.app')

@section('title') index @endsection

@section('content')
    
    <a href="{{route('posts.create')}}" class="btn btn-info">create Post</a>

          <table class="table w-70 mx-auto mt-5">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">title</th>
                <th scope="col">description</th>
                <th scope="col">created_by</th>
                <th scope="col">CreatedAt</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
  @foreach ($posts as $post)
               
              <tr>
                <th scope="row">{{$post->id}}</th>
                <td>{{$post->titles}}</td>
                <td>{{$post->description}}</td>
                <td>{{$post->created_by}}</td>
                <td>{{$post->created_at}}</td>

                <td>
                    <a  href="{{route('posts.show', $post['id'])}}" class="btn btn-primary">View</a >
                      <a  href="{{route('posts.edit', $post['id'])}}" class="btn btn-info">Edit</a >
                        <!--the delete button is a form because it considers a submit button to delete a query from a db-->
                        <form  style= "display:inline" method= "POST" action="{{route('posts.destroy', $post['id'])}}">
                          @csrf
                          @method('DELETE')
                          <button type="submit" class="btn btn-danger">Delete</button >
                        </form>
                </td>
               </tr>
   @endforeach
         
            </tbody>
          </table>
      </div>
      @endsection
  