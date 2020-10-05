@extends("layout.template")

@section("title", "D2Studios")

@section("css")

@endsection

@section("js")

@endsection

@section("content")

    <h1>@lang("Portfolio")</h1>
    <ul>
    @isset($portfolio)
        @foreach ($portfolio as $item)
            <li>{{ $item["title"] }}</li>
        @endforeach
    @else
        <li>No se han creado proyectos aun.</li>
    @endisset
</ul>

@endsection
