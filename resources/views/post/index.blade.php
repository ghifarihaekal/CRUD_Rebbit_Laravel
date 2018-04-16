@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-sm-6">
              @foreach($posts as $post)
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">
                    <a href="{{ route('post.show', $post) }}">{{ $post->title }}</a> {{ $post->created_at->diffForHumans() }}
                  </h5>
                  <a href="{{ route('post.edit', $post) }}" class="btn btn-xs btn-primary">Edit</a>
                  <p class="card-text">{{ str_limit($post->content, 100, ' ...') }}</p>
                  <form class="" action="{{ route('post.destroy', $post) }}" method="post">
                      {{ csrf_field() }}
                      {{ method_field('DELETE') }}
                      <button type="submit" class="btn btn-xs btn-danger" style="">Hapus</button>
                  </form>
                </div>
              </div>
              <!--<div class="panel panel-default">
                      <div class="panel-heading">
                        {{ $post->title }}
                          <a href="{{ route('post.show', $post) }}">{{ $post->title }}</a> {{ $post->created_at->diffForHumans() }}

                          <div class="pull-right">
                              <a href="{{ route('post.edit', $post) }}" class="btn btn-xs btn-default">Edit</a>
                              <form class="" action="{{ route('post.destroy', $post) }}" method="post">
                                  {{ csrf_field() }}
                                  {{ method_field('DELETE') }}
                                  <button type="submit" class="btn btn-xs btn-danger">Hapus</button>
                              </form>
                          </div>
                      </div>

                      <div class="panel-body">
                          <p>{{ str_limit($post->content, 100, ' ...') }}</p>
                      </div>
                  </div>-->
              @endforeach
            </div>
          </div>
      </div>
  </div>
@endsection
