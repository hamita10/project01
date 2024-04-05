<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admission;
use App\Models\BatchSystem;
use App\Models\feesinstollment;


class AdmissionController extends Controller
{
    public function index()
    {
        $admission = Admission::get();
        return view('Admin.admission.index', compact('admission'));
    }
    public function create()
    {
        $batch = BatchSystem::get();
        return view('Admin.admission.create', compact('batch'));
    }
    public function store(Request $req)
    {
        $data =  $req->validate([
            'course' => 'required',
            'date' => 'required',
            'name' => 'required',
            'DateOfBirth' => 'required',
            'age' => 'required',
            'address' => 'required',
            'mobile' => 'required',
            'email' => 'required|email',
            'fathername' => 'required',
            'FatherMobileNo' => 'required',
            'NameOfMother' => 'required',
            'MotherMobileNo' => 'required',
            'ContactAnyEmergency' => 'required',
            'Fees' => 'required',
            'Paidfees' => 'required',
            'instollment' => 'required',
            'batch_id' => 'required',
        ]);

        $admission = new Admission;
        $admission->course = $req->course;
        $admission->date = $req->date;
        $admission->student_name = $req->name;
        $admission->birth_date = $req->DateOfBirth;
        $admission->age  = $req->age;
        $admission->qualification = $req->qualification;
        $admission->landline = $req->landline;
        $admission->address = $req->address;
        $admission->mobile_no = $req->mobile;
        $admission->email = $req->email;
        $admission->father_name = $req->fathername;
        $admission->father_no = $req->FatherMobileNo;
        $admission->father_qualification = $req->FatherQualification;
        $admission->father_occupation = $req->FatherOccupation;
        $admission->mother_name = $req->NameOfMother;
        $admission->mother_no = $req->MotherMobileNo;
        $admission->mother_qualification = $req->MotherQualification;
        $admission->mother_occupation = $req->MotherOccupation;
        $admission->emergency_no = $req->ContactAnyEmergency;
        $admission->feespaid = $req->Fees;
        $admission->totalfees = $req->Paidfees;
        $admission->instollmentmonth = $req->instollment;
        $admission->center_code = $req->CenterRegCode;
        $admission->student_code = $req->StudentRegCode;
        $admission->batch_id  = $req->batch_id;
        $result = $admission->save();

        if ($result) {
            $fees = $admission->totalfees;
            $feespaid = $admission->feespaid;
            $unpaidfee = $fees - $feespaid;
            $instollmentMonth = $admission->instollmentmonth;
            $monthFees = $unpaidfee / $instollmentMonth;

            for ($i = 1; $i <= $instollmentMonth; $i++) {

                $feesinstollment = new feesinstollment();
                $feesinstollment->user_id = $admission->id;
                $feesinstollment->month = $i;
                $feesinstollment->amount = $monthFees;
                $feesinstollment->save();
            }
            return redirect()->route('Admin.admission');
        }
    }

    public function edit($id)
    {
        $admission = Admission::where('id', $id)->first();
        $batch = BatchSystem::get();
        return view('Admin.admission.edit', compact('admission', 'batch'));
    }
    public function update(Request  $req)
    {

        $admission = Admission::find($req->id);
        $admission->course = $req->course;
        $admission->date = $req->date;
        $admission->student_name = $req->name;
        $admission->birth_date = $req->DateOfBirth;
        $admission->age  = $req->age;
        $admission->qualification = $req->qualification;
        $admission->landline = $req->landline;
        $admission->address = $req->address;
        $admission->mobile_no = $req->mobile;
        $admission->email = $req->email;
        $admission->father_name = $req->fathername;
        $admission->father_no = $req->FatherMobileNo;
        $admission->father_qualification = $req->FatherQualification;
        $admission->father_occupation = $req->FatherOccupation;
        $admission->mother_name = $req->NameOfMother;
        $admission->mother_no = $req->MotherMobileNo;
        $admission->mother_qualification = $req->MotherQualification;
        $admission->mother_occupation = $req->MotherOccupation;
        $admission->emergency_no = $req->ContactAnyEmergency;
        $admission->feespaid = $req->Fees;
        $admission->totalfees = $req->Paidfees;
        $admission->instollmentmonth = $req->instollment;
        $admission->center_code = $req->CenterRegCode;
        $admission->student_code = $req->StudentRegCode;
        $admission->batch_id  = $req->batch_id;
        $result = $admission->update();

        if ($result) {
            $data = feesinstollment::where('user_id', $admission->id)->delete();

            $fees = $admission->totalfees;
            $feespaid = $admission->feespaid;
            $unpaidfee = $fees - $feespaid;
            $instollmentMonth = $admission->instollmentmonth;
            $monthFees = $unpaidfee / $instollmentMonth;

            for ($i = 1; $i <= $instollmentMonth; $i++) {

                $feesinstollment = new feesinstollment();
                $feesinstollment->user_id = $admission->id;
                $feesinstollment->month = $i;
                $feesinstollment->amount = $monthFees;
                $feesinstollment->save();
            }
            return redirect()->route('Admin.admission');
        }
    }
    public function delete($id)
    {
        $admission = Admission::where('id', $id)->delete();
        if ($admission) {
            return redirect()->route('Admin.admission');
        }
    }
    public function view($id)
    {
        $admission =  Admission::where('id', $id)->first();
        return view('admin.admission.view', compact('admission'));
    }

    public function addfees(request $request)
    {

        $add = Admission::where('id', $request->user_id)->first();
        if ($add) {

            $add->feespaid = $add->feespaid + $request->amount;
            $add->instollmentmonth =  $request->instollment;

            if ($add->update()) {
                return redirect()->back()->with('success', "Amout Added succesully");
            } else {
                return redirect()->back()->with('error', "Amout not  Added ");
            }
        } else {
            return redirect()->back()->with('error', "Something went wrong ");
        }
    }

    public function show(Request $request)
    {
        $show = Admission::where('id', $request->id)->first();
        $installment = feesinstollment::where('user_id', $request->id)->get();
        return view('admin.Admission.show', compact('show', 'installment'));
    }
    public function changestatus(Request $request)
      {
           $installment = feesinstollment::where('id',$request->id)->first();
           if($installment->status== 0){
               $installment->status = 1;
           }elseif($installment->status== 1){
            $installment->status = 0;
           }
            $installment->update();
      }
}
