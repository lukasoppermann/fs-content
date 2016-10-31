@extends('layouts.app')

@section('content')
    <div class="o-content o-content--max-width">
        <h1 class="o-headline o-headline--first">Developer Settings</h1>
        @include('formandsystem-content::settings.api-access')
        @include('formandsystem-content::settings.cache-busting')
        @if(isset($client_id))
            @include('formandsystem-content::settings.database')
            @include('formandsystem-content::settings.ftp-images')
            @include('formandsystem-content::settings.ftp-backup')
        @endif
    </div>
@stop
