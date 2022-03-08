@extends('layouts.default')

@section('content')
    <div class="container">
        <h1>FUMETTO NUMERO: {{ $comic->id }}</h1>
    </div>
    <ul>
        <li>
            TITLE: {{ $comic->title }}
        </li>
        <li>
            THUMBNAIL: {{ $comic->thumb }}
        </li>
        <li>
            PRICE: {{ $comic->price }}
        </li>
        <li>
            OF SERIES: {{ $comic->series }}
        </li>
        <li>
            SALE RELASE DATE: {{ $comic->sale_date }}
        </li>
        <li>
            TYPE: {{ $comic->type }}
        </li>
        <li>
            DESCRIPTION OF {{ $comic->title }}: {{ $comic->description }}
        </li>
    </ul>
@endsection

