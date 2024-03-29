
<div class="o-dialog o-dialog--absolute is-hidden" data-target="fragment-new-{{$fragment_id}}">
    <div class="o-dialog__box c-fragment-settings-dialog">
        <div class="o-dialog__body o-grid">

            @include('formandsystem-content::fragments.new-fragment', [
                'classes' => 'o-grid__column o-grid__column--md-4of12',
                'label' => 'Text',
                'related' => 'fragment',
                'related_id' => $fragment_id,
                'type' => 'text',
                'button_classes' => 'c-fragment-new__selection',
            ])

            @include('formandsystem-content::fragments.new-fragment', [
                'classes' => 'o-grid__column o-grid__column--md-4of12',
                'label' => 'Input',
                'related' => 'fragment',
                'related_id' => $fragment_id,
                'type' => 'input',
                'button_classes' => 'c-fragment-new__selection',
            ])

            @include('formandsystem-content::fragments.new-fragment', [
                'classes' => 'o-grid__column o-grid__column--md-4of12',
                'label' => 'Image',
                'related' => 'fragment',
                'related_id' => $fragment_id,
                'type' => 'image',
                'button_classes' => 'c-fragment-new__selection',
            ])

            @include('formandsystem-content::fragments.new-fragment', [
                'classes' => 'o-grid__column o-grid__column--md-4of12',
                'label' => 'Collection',
                'related' => 'fragment',
                'related_id' => $fragment_id,
                'type' => 'collection',
                'button_classes' => 'c-fragment-new__selection',
            ])

            @include('formandsystem-content::fragments.new-fragment', [
                'classes' => 'o-grid__column o-grid__column--md-4of12',
                'label' => 'Section',
                'related' => 'fragment',
                'related_id' => $fragment_id,
                'type' => 'section',
                'button_classes' => 'c-fragment-new__selection',
            ])

            @foreach (config('app.account')->details('type','fragment') as $custom)
                @if(isset($custom['data']['meta']) && isset($custom['data']['meta']['available_in'])
                    && isset($custom['data']['meta']['available_in']['pages'])
                    && $custom['data']['meta']['available_in']['pages'] == 'true')
                    @include('formandsystem-content::fragments.new-fragment', [
                        'classes'           => 'o-grid__column o-grid__column--md-4of12',
                        'label'             => $custom['data']['meta']['label'],
                        'type'              => $custom['name'],
                        'related'           => 'fragment',
                        'related_id'        => $fragment_id,
                        'button_classes'    => 'c-fragment-new__selection',
                    ])
                @endif
            @endforeach

        </div>
    </div>
    <div class="o-dialog__bg" data-toggle-dialog="fragment-new-{{$fragment_id}}"></div>
</div>

<div class="o-fragment c-fragment-new c-fragment-new-section o-grid__column o-grid__column--md-{{config('user.grid-md')}}of{{config('user.grid-md')}}" data-toggle-dialog="fragment-new-{{$fragment_id}}">
    Create a new fragment
</div>
