<?php

namespace App\Http\Controllers;

use App\DataTables\SlotDataTable;
use App\Http\Requests\CreateSlotRequest;
use App\Http\Requests\UpdateSlotRequest;
use App\Models\Category;
use App\Models\Slot;
use Illuminate\Http\Request;

class SlotController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(SlotDataTable $dataTable)
    {
//        $slots = Slot::all();
//        return view('planning', compact('slots'));
        return $dataTable->render('planning');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('slots.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateSlotRequest $form)
    {
        $result = $form->persist();
        if (!$result['overlapOccurred'] && $result['persisted']) {
            session()->flash('message', 'Slot(s) successfully added.');
            return redirect("/slot/create");
        } else if($result['overlapOccurred'] && $result['persisted']){
            session()->flash('message', 'Overlapping slots were not created. Other slots were successfully created');
            return redirect("/slot/create");
        }
        else if($result['overlapOccurred'] && !$result['persisted']){
            session()->flash('message', 'All the slots you were trying to make overlap with existing ones!');
            return redirect("/slot/create");
        }
        else{
            return redirect()->back()->withErrors(array('days' => 'There were no selected days in the time period you selected.'));
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Slot  $slot
     * @return \Illuminate\Http\Response
     */
    public function show(Slot $slot)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Slot  $slot
     * @return \Illuminate\Http\Response
     */
    public function edit(Slot $slot)
    {
        $categories = Category::all();
        return view('slots.edit',compact('slot', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $form
     * @param  \App\Models\Slot  $slot
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSlotRequest $form, Slot $slot)
    {
        $result = $form->patch($slot);
        if ($result) {
            session()->flash('message', 'Slot successfully changed.');
            return redirect("/planning");
        }
        else{
            session()->flash('message', 'The selected time overlaps with an existing slot.');
            return redirect()->back()->withErrors(array('startTime' => 'The selected time overlaps with an existing slot.'));
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Slot  $slot
     * @return \Illuminate\Http\Response
     */
    public function destroy(Slot $slot)
    {
        //
    }
}
