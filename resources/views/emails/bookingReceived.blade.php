@component('mail::message')
# Your booked lesson

Thank you for your booking.<br>
Below you will find all the information about your booked slot.
## Your lesson:
<ul>
    <li>date: {{$slot->date->format('d-M-Y')}}</li>
    <li>time: {{$slot->startTime->format('H:i')}} - {{$slot->endTime->format('H:i')}}</li>
    <li>category: {{$slot->category->name}}</li>
    <li>remarks: {{$slot->remarks}}</li>
</ul>

I received your e-mail. I will contact you with additional questions and information (such as place etc) as soon as possible.
<br>
That e-mail will be sent from my personal e-mail address. Be sure to keep an eye at your inbox (or spam folder).
<br>
<br>
Sunny Lee, <br>
Jazz Pianist
<br><br><br>
<p style="font-size:12px; color:grey">Please do not reply to this e-mail. This is a noreply e-mail address.</p>
@endcomponent
