@extends('layouts.default')

@section('content')
    <div class="container">
        <div class="create-new-comic">
            <a href="{{ route('comics.create') }}" class="mybutton btn btn-primary btn-lg active" role="button" aria-pressed="true">
                Create new Comic!
            </a>
        </div>
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
                                    <a href="{{ route('comics.show', $article->id) }}">Details</a>
                                </h2>
                            </li>
                            <li>
                                <h2 id="button-custom">
                                    <a href="{{ route('comics.edit', $article->id) }}">Modify</a>
                                </h2>
                            </li>
                            <li>
                                <h2 id="button-custom">
                                    <form action="{{ route('comics.destroy', $article->id) }}" method="post">
                                        @csrf
                                        @method('delate')
                                        <button type="submit" class="btn-danger danger-button">
                                            DELATE
                                        </button>
                                    </form>
                                </h2>
                            </li>
                        </ul>
                    </div>
            @endforeach 
        </div>
    </div>
@endsection