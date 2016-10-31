<form class="{{$classes or ''}}" action="/fragments" method="post">
    {{ csrf_field() }}
    @include('formandsystem-content::forms.hidden',['name' => 'type', 'value' => $type])
    @include('formandsystem-content::forms.hidden',['name' => 'parentType', 'value' => $related])
    @include('formandsystem-content::forms.hidden',['name' => 'parentId', 'value' => $related_id])
    @include('formandsystem-content::forms.submit',['label' => $label, 'classes' => "o-fragment c-fragment-new o-button-none".(isset($button_classes) ? ' '.$button_classes : '')])
</form>
