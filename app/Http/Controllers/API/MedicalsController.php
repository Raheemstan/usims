<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Lab;
use App\Models\Medical;
use Illuminate\Http\Request;

class MedicalsController extends Controller
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
                $data =  Medical::create([
                    'mat_no' => $request->mat_no,
                    'cough' => $request->cough,
                    'chest_pain' => $request->chest_pain,
                    'bloody_urine' => $request->bloody_urine,
                    'excess_urine' => $request->excess_urine,
                    'black_stool' => $request->black_stool,
                    'mucus_stool' => $request->mucus_stool,
                    'epilepsy' => $request->epilepsy,
                    'eye_pain' => $request->eye_pain,
                    'eye_discharge' => $request->eye_discharge,
                    'ear_pain' => $request->ear_pain,
                    'ear_discharge' => $request->ear_discharge,
                    'breathing_diff' => $request->breathing_diff,
                    'breathless_walk' => $request->breathless_walk,
                    'groin' => $request->groin,
                    'nect' => $request->nect,
                    'tuberculosis' => $request->tuberculosis,
                    'diabetes' => $request->diabetes,
                    'mental' => $request->mental,
                    'hypertension' => $request->hypertension,
                    
                    'hospital' => $request->hospital,
                    'hosp_desc' => $request->hosp_desc,
                    'accident' => $request->accident,
                    'acc_desc' => $request->acc_desc,
                ])->get()->where('mat_no', $request->mat_no);
                return response()->json([
                    'message' => 'update Successful',
                    'data' => $data
                ]);
        } catch (\Throwable $th) {
            return response()->json([
                'message' => 'Unable to update student record',
                'error' => $th,
            ], 406);
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
            return response()->json(Medical::all()->where('mat_no', $request->mat_no));
        } catch (\Throwable $th) {
            return response()->json([
                'message' => 'unable to identify student data',
                'error' => $th,
            ], 406);
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
            Medical::where('mat_no', $request->mat_no)
            ->update([
                'cough' => $request->cough,
                'chest_pain' => $request->chest_pain,
                'bloody_urine' => $request->bloody_urine,
                'excess_urine' => $request->excess_urine,
                'black_stool' => $request->black_stool,
                'mucus_stool' => $request->mucus_stool,
                'epilepsy' => $request->epilepsy,
                'eye_pain' => $request->eye_pain,
                'eye_discharge' => $request->eye_discharge,
                'ear_pain' => $request->ear_pain,
                'ear_discharge' => $request->ear_discharge,
                'breathing_diff' => $request->breathing_diff,
                'breathless_walk' => $request->breathless_walk,
                'groin' => $request->groin,
                'nect' => $request->nect,
                'tuberculosis' => $request->tuberculosis,
                'diabetes' => $request->diabetes,
                'mental' => $request->mental,
                'hypertension' => $request->hypertension,
                
                'hospital' => $request->hospital,
                'hosp_desc' => $request->hosp_desc,
                'accident' => $request->accident,
                'acc_desc' => $request->acc_desc,
            ]);
            return response()->json([
                'message' => 'update Successful',
            ]);
    } catch (\Throwable $th) {
        return response()->json([
            'message' => 'Unable to update student record',
            'error' => $th,
        ], 404);
    }
    }

    /**
     * store the specified resource from storage.
     *
     * @param  Request  $request
     * @return \Illuminate\Http\Response
     */
    public function labstore(Request $request)
    {
        try {
            $data = Lab::create([
                'mat_no' => $request->mat_no,
                'weight' => $request->weight,
                'height' => $request->height,
                'eye_vision' => $request->eye_vision,
                'blood_press' => $request->blood_press,
                'hb' => $request->hb,
                'pc' => $request->pc,
                'genotype' => $request->genotype,
                'hiv' => $request->hiv,
                'wbc' => $request->wbc,
                'urine_microscopy' => $request->urine_microscopy,
                'urinalysis' => $request->urinalysis,
                'stool_microscopy' => $request->stool_microscopy,
                'kin_snip' => $request->kin_snip,
                'pregnancy' => $request->pregnancy,
                'recomendation' => $request->recomendation,
                'officer' => $request->officer,
            ])->get();
            return response()->json([
                'message' => 'Student data updated successful',
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
     * update the specified resource from storage.
     *
     * @param  Request  $request
     * @return \Illuminate\Http\Response
     */
    public function labupdate(Request $request)
    {
        try {
            Lab::where('mat_no', $request->mat_no)->update([
                'weight' => $request->weight,
                'height' => $request->height,
                'eye_vision' => $request->eye_vision,
                'blood_press' => $request->blood_press,
                'hb' => $request->hb,
                'pc' => $request->pc,
                'genotype' => $request->genotype,
                'hiv' => $request->hiv,
                'wbc' => $request->wbc,
                'urine_microscopy' => $request->urine_microscopy,
                'urinalysis' => $request->urinalysis,
                'stool_microscopy' => $request->stool_microscopy,
                'kin_snip' => $request->kin_snip,
                'pregnancy' => $request->pregnancy,
                'recomendation' => $request->recomendation,
                'officer' => $request->officer,
            ]);
            return response()->json([
                'message' => 'Student data updated successful',
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
    public function labview(Request $request)
    {
        try {
            return response(Lab::all()->where('mat_no', $request->mat_no));
        } catch (\Throwable $th) {
            return response()->json([
                'message' => 'unable to identify student data',
                'error' => $th,
            ]);
        }
    }
}
