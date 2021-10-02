@component('mail::message')
# There was a job that failed

There was a job sent to the queue that failed. Contact the developer to check what's wrong
<br>
<br>

The message:
<br>

{{$exceptionMessage}}

<br>
<br>

This e-mail is a reminder and will be sent everytime a job that was queued failed after all of it's tries. It usually means that an email didn't go out, so someone didnt get a verification. This should be investigated and resolved ASAP.
<br>
<br>
{{env('APP_NAME')}}
@endcomponent
