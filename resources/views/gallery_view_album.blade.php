@extends('layouts.app')

@section('title', 'กองนโยบายและแผน')

@inject('url', 'App\Services\UrlService')

@section('content')
    <b-container fluid>
        <b-row class="row-fluid"><navbar-component url="{{ $url->getJsonUrl() }}"></navbar-component></b-row>
        <b-row class="row-fluid"><album-component></album-component></b-row>
        <b-row class="row-fluid"><footer-component></footer-component></b-row>
    </b-container>
@endsection

@section('script')
    <script src="{{ asset('js/gallery_view_album.js') }}"></script>
@endsection