@extends('layouts.app')

@section('title','category Create')

@section('content')
    <category-form
        :url="'{{ route('settings.store') }}'"
        :method="'post'">
    </category-form>
@endsection