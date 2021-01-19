@extends('layouts.app')

@section('content')

<div class="container">
  <div class="col-md-10 offset-md-1">
    <div class="card ">

      <div class="card-header">
        <h1>
          Category /
          @if($category->id)
            Edit #{{ $category->id }}
          @else
            Create
          @endif
        </h1>
      </div>

      <div class="card-body">
        @if($category->id)
          <form action="{{ route('categories.update', $category->id) }}" method="POST" accept-charset="UTF-8">
          <input type="hidden" name="_method" value="PUT">
        @else
          <form action="{{ route('categories.store') }}" method="POST" accept-charset="UTF-8">
        @endif

          @include('common.error')

          <input type="hidden" name="_token" value="{{ csrf_token() }}">

          
                <div class="form-group">
                    <label for="id-field">Id</label>
                    <input class="form-control" type="text" name="id" id="id-field" value="{{ old('id', $category->id ) }}" />
                </div> 
                <div class="form-group">
                	<label for="name-field">Name</label>
                	<input class="form-control" type="text" name="name" id="name-field" value="{{ old('name', $category->name ) }}" />
                </div> 
                <div class="form-group">
                	<label for="description-field">Description</label>
                	<textarea name="description" id="description-field" class="form-control" rows="3">{{ old('description', $category->description ) }}</textarea>
                </div> 
                <div class="form-group">
                    <label for="article_count-field">Article_count</label>
                    <input class="form-control" type="text" name="article_count" id="article_count-field" value="{{ old('article_count', $category->article_count ) }}" />
                </div>

          <div class="well well-sm">
            <button type="submit" class="btn btn-primary">Save</button>
            <a class="btn btn-link float-xs-right" href="{{ route('categories.index') }}"> <- Back</a>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

@endsection
