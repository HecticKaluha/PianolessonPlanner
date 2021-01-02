@component('mail::message')
# Your booked lesson

Below you will find all the information about your booked slot
## Your lesson:
<ul>
    <li>date: {{$slot->date->format('d-M-Y')}}</li>
    <li>time: {{$slot->startTime->format('H:i')}} - {{$slot->endTime->format('H:i')}}</li>
    <li>category: {{$slot->category->name}}</li>
    <li>remarks: {{$slot->remarks}}</li>
</ul>

I received your e-mail. I will contact you with additional and questions and information (such as place etc) as soon as possible.
<br>
<br>
Sunny Lee, <br>
Jazz Pianist
@endcomponent
