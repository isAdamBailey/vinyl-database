@extends('layouts.main')

{{--@section('scripts')
    <script>
        $('div.alert').not('.alert-important').delay(3000).slideUp(300);
    </script>
@endsection--}}


@section('content')

    <div class="container">
        <h1 class="page-header">Adam's Vinyl</h1>

        <p>
            <a href="/record/create" class="btn btn-default btn-lg" role="button">Add New Record</a>
        </p>

        @include('partials.search',['url'=>'record'])

            @foreach( $records as $record )
                    <p class="lead">
                        <a href="/record/{{ $record->id }}" title="View {{ $record->title }}">{{ $record->artist->name }} - {{ $record->title }}</a>
                    </p>
            @endforeach

    </div>

@endsection
