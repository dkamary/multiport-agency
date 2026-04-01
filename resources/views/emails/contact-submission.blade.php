<x-mail::message>
# New Contact Submission

You have received a new contact request from your website.

**Name:** {{ $submission->name }}  
**Email:** {{ $submission->email }}  
**Subject:** {{ $submission->subject }}  

**Message:**  
{{ $submission->message }}

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
