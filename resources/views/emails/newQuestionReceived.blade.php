@component('mail::message')
# {{$data['qfFullName']}} submitted a form with a question through your website

Below you will find the question they asked<br><br>
<label><b>Name: </b></label><span>{{$data['qfFullName']}}</span>
<br>
<label><b>Question/Remark: </b></label> <p>{{$data['qfMessage']}}</p>
<hr>
<br>
<p>Mail them back at: <span><a href="mailto:{{$data['qfEmail']}}">{{$data['qfEmail']}}</a></span></p>
<p>
    Be sure to mention in the subject that you are replying to a submitted question.
    Something along the lines: "Your question on PianoPlanner has been answered".
</p>
<p><u>It would be wise to copy the question in the mail you will send them. That way they will remember what their original question was.</u></p>
<br>
<br>
PianoPlanner
@endcomponent
