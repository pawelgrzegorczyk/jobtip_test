@extends('layouts.main')

@section('title')
    All available positions
@endsection

@section('content')
    <ul>
        @foreach($companies as $company)
            <li>
                <h2>{{ $company->name }}</h2>
                <ul>
                    @foreach($company->positions as $position)
                        <li><a href="{{ route("reference", $position->reference) }}">{{ $position->reference }} - {{ $position->title }}</a></li>
                    @endforeach
                </ul>
            </li>
        @endforeach

    </ul>
@endsection