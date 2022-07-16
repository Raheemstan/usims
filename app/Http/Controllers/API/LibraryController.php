<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Library;
use Illuminate\Http\Request;

class LibraryController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            $data = Library::create([
                'account_no' => $request->account_no,
                'mat_no' => $request->mat_no,
                'return_date'=>$request->return_date
            ])->get();
            return response()->json([
                'message' => 'Update Successful',
                'data' => $data,
            ]);
        } catch (\Throwable $th) {
            return response()->json([
                'message' => 'Unable to acquire student data',
                'error' => $th,
            ]);
        }

    }

    /**
     * Display the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        try {
            return response()->json(
                Library::all()->where('mat_no', $request->mat_no)
            );
        } catch (\Throwable $th) {
            return response()->json([
                'message' => 'Unable to acquire student data',
                'error' => $th,
            ]);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        try {
            Library::where('id', $request->id)
            ->update([
                'status'=>1,
            ]);
            return response()->json([
                'message' =>'Update Successful',
            ]);
        } catch (\Throwable $th) {
            return response()->json([
                'message'=>'Unable to update record',
                'data'=>$th
            ]);
        }
    }
}
