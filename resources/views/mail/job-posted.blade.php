<x-mail::message>
# {{ $title }}

Congrats! Your job is now live on our website.

<x-mail::button :url="$link">
View Details
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
