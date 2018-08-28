@extends('layouts.app')

@section('title', 'กองนโยบายและแผน')

@inject('url', 'App\Services\UrlService')

@section('content')
    <b-container fluid>
        <b-row class="row-fluid"><navbar-component url="{{ $url->getJsonUrl() }}"></navbar-component></b-row>
        <b-row class="row-fluid"><photo-slider-component></photo-slider-component></b-row>
        <b-row class="row-fluid"><gallery-news-component></gallery-news-component></b-row>
        <b-row class="row-fluid"><info-component></info-component></b-row>
        <b-row class="row-fluid"><form-download-component></form-download-component></b-row>
        <b-row class="row-fluid"><footer-component></footer-component></b-row>
    </b-container>
@endsection

@section('script')
    <script src="{{ asset('js/app.js') }}"></script>
@endsection