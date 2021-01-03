@component('mail::message')
# {{$slot->name}} Just booked a lesson

Below you will find all the information about the booked slot
## New lesson:
<ul>
    <li>name: {{$slot->name}}</li>
    <li>e-mail: {{$slot->email}}</li>
    <li>date: {{$slot->date->format('d-M-Y')}}</li>
    <li>time: {{$slot->startTime->format('H:i')}} - {{$slot->endTime->format('H:i')}}</li>
    <li>category: {{$slot->category->name}}</li>
    <li>remarks: {{$slot->remarks}}</li>
</ul>

Don't forget to send a mail with additional information
<br>
<br>
Sunny Lee, <br>
Jazz Pianist
@endcomponent
