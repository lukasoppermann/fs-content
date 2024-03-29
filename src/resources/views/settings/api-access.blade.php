<section class="o-section">
    <h3 class="o-headline o-headline--second">Api Access</h3>
    @if(isset($client_id))
        <p class="o-copy o-content__paragraph">To genereate a new api client, you need to delete the current one. This will also delete your database and ftp settings.</p>
    @else
        <p class="o-copy o-content__paragraph">Generate an api client to get access to your data via the Form&Systems api. Once you created your client, you will be able to add your database and ftp connection.</p>
    @endif

    @if(isset($notice))
        @include('formandsystem-content::notice.notice', $notice)
    @endif

    <form class="o-form" action="/settings/developers/api-access" method="POST">
        {{ csrf_field() }}
        <div class="o-flex-bar">
            @if(isset($client_id))
                {{ method_field('DELETE') }}
                <p class="o-flex-bar__item o-flex-bar__item--fill"><span class="type--bold">Client ID: </span><span class="type--grey">{{substr($client_id,0,20)}}…</span></p>
                @include('formandsystem-content::forms.submit',['label' => 'Delete client credentials', 'classes' => 'o-button o-flex-bar__item o-flex-bar__item--right o-button--red'])
            @else
                <p class="o-flex__item o-flex__item--fill">No client credentials create.</p>
                @include('formandsystem-content::forms.submit',['label' => 'Create client credentials', 'classes' => 'o-button o-button--blue o-flex-bar__item o-flex-bar__item--right'])
            @endif
        </div>
    </form>
</section>
