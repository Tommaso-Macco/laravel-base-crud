@extends('layouts.default')

@section('content')
    <div class="container">
        <div class="card-container">
            @foreach($fumetti as $article)
                    <div class="card-custom">
                        <img src=" {{ $article['thumb'] }} " alt="">
                        <ul>
                            <li>
                                <h2>{{ $article['title'] }}</h2>
                            </li>
                            <li>
                                <h2 class="price-style">{{ $article["price"] }}€</h2>
                            </li>
                            <li>
                                <h2>
                                    <a href="{{ route('comics.show', $article->id) }}">DETTAGLI</a>
                                </h2>
                            </li>
                            <li>
                                <h2 id="button-custom">
                                    <a href="">MODIFICA</a>
                                </h2>
                            </li>
                        </ul>
                    </div>
            @endforeach 
        </div>
    </div>
@endsection