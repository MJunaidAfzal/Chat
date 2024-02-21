<x-mail::message>


Email:- {{ $details['email'] }}.

Name:- {{ $details['name'] }}.


Invitaion:- {{ $details['message'] }}.
<br>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
