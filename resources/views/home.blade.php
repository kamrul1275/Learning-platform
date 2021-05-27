@extends('layout.app')


@section('content')

    @include('component.HomeBanner')

    @include('component.HomeService')

    @include('component.HomeCourselist')
    @include('component.HomeProjectlist')
    @include('component.HomeRecentblog')

@endsection
