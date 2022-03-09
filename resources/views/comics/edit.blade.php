@extends('layouts.default')

@section('content')
<h1>Edit Comics!</h1>

<div class="container">
    <form action="{{ route('comics.update', $comic->id) }}" method="post" class="row g-3">
        @method('PUT')
        @csrf


            <div class="mb-3">
                <label class="form-label">Title</label>
                <input type="text" class="form-control" name="title" value="{{ $comic->title }}">
            </div>
        
            <div class="mb-3">
                <label class="form-label">Thumbnail</label>
                <input type="text" class="form-control" name="thumb" value="{{ $comic->thumb }}">
            </div>
        
            {{-- <div class="mb-3">
                <label class="form-label">price</label>
                <input type="number" min="0" step="any" class="form-control" name="price" value="{{ $comic->price }}">
            </div> --}}
        
            <div class="mb-3">
                <label class="form-label">series</label>
                <input type="text" class="form-control" name="series" value="{{ $comic->series }}">
            </div>
        
            <div class="mb-3">
                <label class="form-label">sale in date</label>
                <input type="date" class="form-control" name="sale_date" value="{{ $comic->sale_date}}">
            </div>
        
            <div class="mb-3">
                <label class="form-label">type</label>
                <input type="text" class="form-control" name="type" value="{{ $comic->type }}">
            </div>
        
            <div class="mb-3">
                <label class="form-label">description</label>
                <textarea name="description" class="form-control" cols="30" rows="10">{{ $comic->description }}</textarea>
            </div>
        
            <div class="d-flex">
                <button class="btn btn-outline-secondary me-3" type="reset">RESET</button>
                <button class="btn btn-success" type="submit">APPLY</button>
            </div>
    </form>
</div>
@endsection