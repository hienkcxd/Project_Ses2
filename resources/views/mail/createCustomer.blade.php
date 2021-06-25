@component('mail::message')
# Welcome To Happy House Construction Company

Tài khoản nhân viên vừa được tạo, đây là thông tin tài khoản của bạn.<br>
- Account: {{ $account }}<br>
- Password: {{ $password }}

@component('mail::button', ['url' => route('login')])
Visit
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
