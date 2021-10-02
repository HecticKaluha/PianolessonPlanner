<a class="text-gray-700 hover:text-gray-500" href="{{route('showSlot',['slot' => $id])}}" tabindex="0" aria-controls="slot-table"><span><i class="fa fa-eye"></i></span></a>
<a class="text-blue-700 hover:text-blue-500" href="{{route('editSlot', ['slot' => $id])}}" tabindex="0" aria-controls="slot-table"><span><i class="fa fa-pen"></i></span></a>
<a class="text-red-700 hover:text-red-500" href="{{route('removeSlot', ['slot' => $id])}}" tabindex="0" aria-controls="slot-table"><span><i class="fa fa-times"></i></span></a>
