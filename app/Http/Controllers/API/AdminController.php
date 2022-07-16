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
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

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
            //throw $th;
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
