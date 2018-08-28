@extends('layouts.app')

@section('title', 'กองนโยบายและแผน')

@inject('url', 'App\Services\UrlService')

@section('content')
    <b-container fluid>
        <b-row class="row-fluid"><navbar-component url="{{ $url->getJsonUrl() }}"></navbar-component></b-row>
        <b-row class="row-fluid"><gallery-component></gallery-component></b-row>
        <b-row class="row-fluid"><footer-component></footer-component></b-row>
    </b-container>
@endsection

@section('script')
    <script src="{{ asset('js/gallery.js') }}"></script>
@endsection