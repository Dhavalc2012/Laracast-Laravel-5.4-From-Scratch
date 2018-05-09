@component('mail::message')
# Introduction

Thank you so much for registering on our website.

- one
- two
-three

@component('mail::button', ['url' => 'https://www.mycargenie.com'])
Start Browsing
@endcomponent

@component('mail::panel', ['url' => ''])
   Lorem Ipsum Dolren Imit
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
