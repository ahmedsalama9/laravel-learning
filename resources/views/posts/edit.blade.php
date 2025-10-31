

@extends('layouts.app')
@section('title')
    edit the post
@endsection
@section('content')
    

<div class="card shadow-sm">
  <div class="card-header bg-primary text-white">
    <h4 class="mb-0">Edit the post</h4>
  </div>
  <div class="card-body">
    <form method="POST" action="{{route('posts.update',1)}}">
      @csrf
      @method('PUT')
      
      <!-- Post Title -->
      <div class="mb-3">
        <label for="title" class="form-label">Post Title</label>
        <input name="title" type="text" class="form-control" id="title" placeholder="Enter post title" >
      </div>

      <!-- Category -->
      <div class="mb-3">
        <label for="category" class="form-label">Category</label>
        <select name="category" class="form-select" id="category" >
          <option value="" disabled selected>Select category</option>
          <option>Technology</option>
          <option>Business</option>
          <option>Health</option>
          <option>Education</option>
        </select>
      </div>

      <!-- Post Content -->
      <div class="mb-3">
        <label for="content" class="form-label">Content</label>
        <textarea name="contnet" class="form-control" id="content" rows="6" placeholder="Write your post here..." ></textarea>
      </div>

      <!-- Image Upload -->
      <div class="mb-3">
        <label for="image" class="form-label">Post Image</label>
        <input name="img" class="form-control" type="file" id="image" accept="image/*">
      </div>

      <!-- Buttons -->
      <div class="d-flex justify-content-end">
        <button type="reset" class="btn btn-secondary me-2">Reset</button>
        <button type="submit" class="btn btn-primary">Update</button>
      </div>
    </form>
</div>
@endsection