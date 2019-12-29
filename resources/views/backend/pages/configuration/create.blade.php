@extends('layouts.app')

@section('title','Settings Create')

@section('content')
    <settings
        :url="'{{ route('settings.store') }}'"
        :method="'post'">
    </settings>
@endsection
