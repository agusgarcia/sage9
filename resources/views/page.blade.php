@extends('layouts.app')
@section('content')
    @while(have_posts())
        @php(the_post())
        @include('partials.home-page-header')
        @php(the_content())
    @endwhile
@endsection