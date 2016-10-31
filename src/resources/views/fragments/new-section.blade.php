<form class="o-grid__column o-grid__column--md-12of12" action="/fragments" method="post">
    {{ csrf_field() }}
    @include('formandsystem-content::forms.hidden',['name' => 'type', 'value' => 'section'])
    @include('formandsystem-content::forms.hidden',['name' => 'parentType', 'value' => 'page'])
    @include('formandsystem-content::forms.hidden',['name' => 'parentId', 'value' => $page_id])
    @include('formandsystem-content::forms.submit',['label' => 'Create a new Section', 'classes' => "o-fragment c-fragment-new o-button-none"])
</form>
