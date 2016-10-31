@extends('layouts.app')

@section('content')
    @include('formandsystem-content::pages.settings')
    <div class="o-content o-content--wide o-user-grid js-sortable-fragments" data-patch-url="{{url('/fragments').'/'}}">
        @if( $item->fragments() !== null)

            @foreach($item->fragments()->sortBy('position') as $fragment)
                @include('formandsystem-content::fragments.fragment', [
                    'item' => $fragment,
                    'page' => $item,
                    'sortable_class' => 'js-sortable-fragment-item'
                ])
            @endforeach
        @endif

        @include('formandsystem-content::fragments.new-fragment', [
            'classes' => 'o-grid__column o-grid__column--md-12of12',
            'label' => 'Create new Section',
            'related' => 'page',
            'related_id' => $item->get('id'),
            'type' => 'section',
        ])

    </div>
@stop
