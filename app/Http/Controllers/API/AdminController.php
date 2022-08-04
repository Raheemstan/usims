<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Lab;
use App\Models\Library;
use App\Models\Medical;
use App\Models\Payments;
use App\Models\Student;
use Illuminate\Http\Request;

class AdminController extends Controller
{

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        try {
            $mat_no = $request->mat_no;
            $library = Library::all()->where('mat_no', $mat_no);
            $medical = Medical::all()->where('mat_no', $mat_no);
            $lab = Lab::all()->where('mat_no', $mat_no);
            $student = Student::all()->where('mat_no', $mat_no);
            $trans = Payments::all()->where('mat_no', $mat_no);

            return response()->json([
                'medical'=>$medical,
                'lab'=>$lab,
                'library'=>$library,
                'student'=>$student,
                'transact'=>$trans,
            ]);
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        try {
            $data = Student::where('mat_no', $request->mat_no)->delete();
            return response()->json([
                'message' => 'Student Deleted Successfully'
            ]);
        } catch (\Throwable $th) {
            return response($th);
        }
    }
}
