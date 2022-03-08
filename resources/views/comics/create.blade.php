@extends('layouts.default')

@section('content')
<h1>Create New Comic!</h1>

<div class="container">
    <form action="{{ route('comics.store') }}" method="post" class="row g-3">
        @csrf
      
        <div class="mb-3">
          <label class="form-label">Title</label>
          <input type="text" class="form-control" name="title">
        </div>
      
        <div class="mb-3">
          <label class="form-label">Thumbnail</label>
          <input type="text" class="form-control" name="thumb">
        </div>
      
        <div class="mb-3">
          <label class="form-label">price</label>
          <input type="number" min="0" value="0" step="any" class="form-control" name="price">
        </div>
      
        <div class="mb-3">
          <label class="form-label">series</label>
          <input type="text" class="form-control" name="series">
        </div>
      
        <div class="mb-3">
          <label class="form-label">sale in date</label>
          <input type="date" class="form-control" name="sale_date">
        </div>
      
        <div class="mb-3">
          <label class="form-label">type</label>
          <input type="text" class="form-control" name="type">
        </div>
      
        <div class="mb-3">
          <label class="form-label">description</label>
          <textarea name="description" class="form-control" cols="30" rows="10"></textarea>
        </div>
      
        <div class="d-flex">
          <button class="btn btn-outline-secondary me-3" type="reset">Indietro</button>
          <button class="btn btn-success" type="submit">CREATE</button>
        </div>
      </form>
</div>
@endsection