@extends('template.main')

@section('container')
    @foreach ( $news as $news_terkini)
    <article class="mb-5">
        <h2>
            <a href="/news/{{ $news_terkini["slug"] }}" class="text-dark">{{ $news_terkini["title"] }}</a></h2>
        <h5>{{ $news_terkini["author"] }}</h5>
        <p>{{ $news_terkini["news"] }}</p>
    </article>
    @endforeach
@endsection
