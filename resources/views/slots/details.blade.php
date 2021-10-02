<div class="inline-flex w-full w-12/12 space-x-4">
    <div class="form-group w-12/12 w-full">
        <label class="control-label font-bold" for="date">Date</label>
        <p class="form-control" id="date">{{$slot->date->format('d/m/Y')}}</p>
    </div>
</div>


<div class="inline-flex w-full w-12/12 space-x-4">
    <div class="form-group w-6/12">
        <label class="control-label font-bold" for="startTime">Start time</label>
        <p class="form-control" id="startTime">{{$slot->startTime->format('H:i')}}</p>
    </div>
    <div class="form-group w-6/12">
        <label class="control-label font-bold" for="endTime">End time</label>
        <p class="form-control" id="endTime">{{$slot->endTime->format('H:i')}}</p>
    </div>
</div>

<div class="inline-flex w-full w-12/12 space-x-4">
    <div class="form-group w-12/12 w-full">
        <label class="control-label font-bold" for="name">Name</label>
        <p class="form-control" id="name">{{$slot->name ? $slot->name : '-'}}</p>
    </div>

    <div class="form-group w-12/12 w-full">
        <label class="control-label font-bold" for="category">Category</label>
        <p class="form-control" id="category">{{$slot->category->name}}</p>
    </div>
</div>

<div class="inline-flex w-full w-12/12 space-x-4">
    <div class="form-group w-12/12 w-full">
        <label class="control-label font-bold" for="email">E-mail address</label>
        <p class="form-control" id="email">{{$slot->email ? $slot->email :'-'}}</p>
    </div>

    <div class="form-group w-12/12 w-full">
        <label class="control-label font-bold" for="emailStatus">Email sent (1 = yes, 0 = no)</label>
        <p class="form-control" id="emailStatus">{{$slot->emailStatus !== null ? $slot->emailStatus : '-'}}</p>
    </div>
</div>

<div class="form-group w-12/12 w-full">
    <label class="control-label font-bold" for="remarks">Remarks</label>
    <p class="form-control" id="remarks">{{$slot->remarks ? $slot->remarks : '-'}}</p>
</div>
