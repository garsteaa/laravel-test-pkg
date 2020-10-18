@component('mail::message')
# Introduction

There is new message from {{ $name }}
<br>
<br>
Message:
{{ $message }}

@component('mail::button', ['url' => "mailto:$email"])
Contact {{ $name }} by email
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
