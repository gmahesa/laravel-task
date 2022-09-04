@extends('master')

@section('body')

      <form method="post" action="{{ route('post.update', $post->id) }}">
        @method('PATCH')
        @csrf
        <div class="form-group">
          <label for="name">Share Name:</label>
          <input type="text" class="form-control" name="share_name" value={{ $post->id }} />
        </div>
        <div class="form-group">
          <label for="price">Share Price :</label>
          <input type="text" class="form-control" name="share_price" value={{ $post->title }} />
        </div>
        <div class="form-group">
          <label for="quantity">Share Quantity:</label>
          <input type="text" class="form-control" name="share_qty" value={{ $post->content }} />
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
      </form>

@endsection