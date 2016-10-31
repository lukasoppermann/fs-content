<nav class="c-navigation">
    @if( config('app.user')->account()->isSetup() )
        @if(is_array($navigation['header']))
            @include('formandsystem-content::navigation.navigation-header', $navigation['header'])
        @else
            {!!$navigation['header']!!}
        @endif

        @if(is_array($navigation['lists']))
            <div class="c-navigation__body">
                @each('navigation.navigation-list', $navigation['lists'], 'list')
            </div>
        @endif

        @include('formandsystem-content::navigation.navigation-footer')
    @else
        @include('formandsystem-content::navigation.navigation-header', [
            'title' => 'Form&System',
        ])
    @endif
</nav>
