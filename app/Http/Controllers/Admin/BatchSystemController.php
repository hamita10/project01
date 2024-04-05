<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BatchSystem;
use App\Http\Requests\BatchSystemCreateRequest;
use App\Http\Requests\BatchSystemUpdateRequest;

class BatchSystemController extends Controller
{
    public function index() {
        $batchsystem = BatchSystem::get();
        return view('Admin.batchsystem.index', compact('batchsystem'));
    }
    public function create() {
        $batchsystem = BatchSystem::get();
        return view('Admin.batchsystem.create', compact('batchsystem'));

    }
    public function store(BatchSystemCreateRequest $request)
    {
        $data = $request->validated([
            'start_time' => 'required', 
            'end_time' => 'required',
        ]);
        $batchsystem = new BatchSystem;
        $batchsystem->start_time = $request->start_time;    
        $batchsystem->end_time = $request->end_time;
        $result = $batchsystem->save();

        if($result){
            return redirect()->route('Admin.batchsystem');
        }
    }
    public function changestatus(Request $request)
   {
        $time = BatchSystem::where('id',$request->id)->first();
        if($time->status==1){
            $time->status = 0;
        }else{
            $time->status = 1;
        }

         $time->update();
   }
    public function edit($id) {
        $batchsystem = BatchSystem::where('id', $id)->first();
        return view('Admin.batchsystem.edit', compact('batchsystem'));
   }
        public function update(BatchSystemUpdateRequest  $request) {
        $data = $request->validated();
        $BatchSystem = BatchSystem::find($request->id)->update($data);
         if($BatchSystem){
           return redirect()->route('Admin.batchsystem');
       }
       
   }
          public function delete($id){
         $batchsystem = BatchSystem::where('id', $id)->delete();
         if($batchsystem){
          return redirect()->route('Admin.batchsystem');
      }
    }
}
