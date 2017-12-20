@extends('layouts.main')

@section('title')
    Details of position
@endsection


@section('content')
    @if ($position)

        <h2>{{ $position->title }}</h2>
        <b>{{ $position->email }}</b>
        <i>{{ $position->reference }}</i>
        <h1>Company name: {{ $position->company->name }}</h1>

        {!! $position->jobDescription !!}
    @else
        <h1>No such position or wrong reference number. Check your URL</h1>

    @endif

@endsection