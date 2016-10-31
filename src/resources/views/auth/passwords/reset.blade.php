@extends('layouts.external')

@section('content')
<div class="o-dialog o-dialog--transparent">
    <div class="o-dialog__box c-login-dialog">
        <div class="o-dialog__body">

            <div class="o-dialog__headline">Reset Password</div>

            <form role="form" method="POST" action="{{ url('/password/reset') }}">
                {{ csrf_field() }}
                @include('formandsystem-content::forms.hidden',['name' => 'token', 'value' => $token])
                @include('formandsystem-content::forms.input',['name' => 'email', 'label' => 'E-Mail Address', 'value' => $email])
                @include('formandsystem-content::forms.input',['type' => 'password', 'name' => 'password', 'label' => 'Password'])
                @include('formandsystem-content::forms.input',['type' => 'password', 'name' => 'password_confirmation', 'label' => 'Confirm password'])

                <div class="o-flex">
                    @include('formandsystem-content::forms.submit',['label' => 'Reset password', 'classes' => 'o-button o-button--blue o-button--space-top o-flex__item--fill'])
                </div>

            </form>
        </div>
    </div>
</div>
@endsection
