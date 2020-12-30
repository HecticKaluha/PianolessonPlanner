<?php

namespace App\Http\Controllers;

use App\DataTables\SlotDataTable;
use App\Http\Requests\CreateSlotRequest;
use App\Http\Requests\UpdateSlotRequest;
use App\Http\Resources\SlotResource;
use App\Models\Category;
use App\Models\Slot;
use App\Rules\SlotNotBooked;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Throwable;

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
            return redirect("/slot/create")->withErrors(array('error' => 'All the slots you were trying to make overlap with existing ones!'));
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
        return view('slots.show', compact('slot'));
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

    public function remove(Slot $slot){
        return view('slots.remove', compact('slot'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Slot  $slot
     * @return \Illuminate\Http\Response
     */
    public function destroy(Slot $slot)
    {
        $slot->delete();
        session()->flash('message', 'Slot successfully deleted.');
        return redirect("/planning");
    }

    public function getAll(){
        return SlotResource::collection(Slot::all());
    }

    public function bookSlot(Request $request){

        $response = [
            'success' => false,
            'exception' => false,
            'exceptionMessage' => '',
            'message' => '',
            'errors' => '',
        ];

        $rules = [
            'slotId' => ['required','exists:slots,id', new SlotNotBooked()],
            'name' => 'required',
            'email' => 'required|email',
            'category_id' => 'required|exists:categories,id',
            'remarks' => '',
        ];

        $validator = Validator::make($request->all(), $rules);
        if (!$validator->fails()) {
            try{
                $slot = Slot::find($request->get('slotId'));
                $slot->name = $request->get('name');
                $slot->email = $request->get('email');
                $slot->remarks = $request->get('remarks');
                $slot->category_id = $request->get('category_id');
                $slot->save();

                $response['success'] = true;
                $response['message'] = 'Successfully booked!';
            }
            catch(Throwable $e){
                $response['message'] = 'There was an error when processing your booking. Try again later.';
                $response['exception'] = true;
                $response['exceptionMessage'] = [$e->getMessage()];
            }
        }else{
            $response['message'] = 'There was something wrong with the data you entered.';
            $response['errors'] = $validator->messages();
        }
        return $response;
    }
}
