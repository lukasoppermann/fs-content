@extends('layouts.app')

@section('content')
<div class="o-content o-content--max-width">
    <h2 class="o-headline o-headline--first">General site settings</h2>
        <form class="o-form" action="/settings/site" method="POST">
            {{ csrf_field() }}
            <section class="o-section o-section--no-top-padding o-section--no-bottom-padding">
                @include('formandsystem-content::forms.input',[
                    'name' => 'site_name',
                    'label' => 'Name of your site',
                    'value' => (isset($form['site_name']) ? $form['site_name']->get('data') : NULL),
                    'additional_values' => [
                        'id' => (isset($form['site_name']) ? $form['site_name']->get('id') : NULL)
                    ]
                ])
                @include('formandsystem-content::forms.input',[
                    'name' => 'site_url',
                    'label' => 'URL of your site',
                    'value' => (isset($form['site_url']) ? $form['site_url']->get('data') : NULL),
                    'additional_values' => [
                        'id' => (isset($form['site_url']) ? $form['site_url']->get('id') : NULL)
                    ]
                ])
                @include('formandsystem-content::forms.input',[
                    'name' => 'dir_images',
                    'label' => 'Public directory where your images are stored',
                    'value' => (isset($form['dir_images']) ? $form['dir_images']->get('data') : NULL),
                    'additional_values' => [
                        'id' => (isset($form['dir_images']) ? $form['dir_images']->get('id') : NULL)
                    ]
                ])
                <div class="o-flex-bar">
                    @include('formandsystem-content::forms.submit',['label' => 'Save', 'classes' => 'o-button o-button--blue o-flex-bar__item o-flex-bar__item--right'])
                </div>
            </section>
        </form>
    </section>
</div>
@endsection
