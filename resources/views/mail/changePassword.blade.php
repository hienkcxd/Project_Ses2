@component('mail::message')
# Welcome To Happy House Construction Company

Password của bạn đã được thay đổi, vui lòng kiểm tra lại:<br>
- Mật khẩu mới: {{ $password }}

@component('mail::button', ['url' => route('login')])
Visit
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
