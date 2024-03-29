@extends('layouts.app')

@section('content')
    <div class="o-content o-content--max-width">
        <h1 class="o-headline o-headline--first">Form&System</h1>
        <p class="o-copy o-content__paragraph">Welcome to the Form&System Collections Dashboard.</p>

        <div  class="o-grid">
            <form action="/pages" method="post" class="c-fragment-new__selection c-fragment-new__selection--no-padding o-grid__column o-grid__column--md-6of12">
                {{ csrf_field() }}
                @include('formandsystem-content::forms.hidden', ['name' => 'collection', 'value' => $collection->get('id')])
                @include('formandsystem-content::forms.submit', ['label' => 'Create new Page', 'classes' => 'o-button-none'])
            </form>

            @foreach (config('app.account')->details('type','fragment') as $content_type)
                @if(!$content_type->isEmpty() && ($content_type->get('data')['meta']['available_in']['collections'] == true) )
                    <form action="/fragments" method="post" class="c-fragment-new__selection c-fragment-new__selection--no-padding o-grid__column o-grid__column--md-6of12">
                        {{ csrf_field() }}
                        @include('formandsystem-content::forms.hidden',['name' => 'parentType', 'value' => 'collection'])
                        @include('formandsystem-content::forms.hidden',['name' => 'parentId', 'value' => $collection->get('id')])
                        @include('formandsystem-content::forms.hidden', ['name' => 'type', 'value' => $content_type->get('name')])
                        @include('formandsystem-content::forms.submit', ['label' => 'Create new '.$content_type->get('data')['meta']['label'], 'classes' => 'o-button-none'])
                    </form>
                @endif
            @endforeach

        </div>

    </div>

@stop
