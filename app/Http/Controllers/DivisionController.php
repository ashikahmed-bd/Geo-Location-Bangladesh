<?php

namespace App\Http\Controllers;

use App\Http\Resources\DivisionResource;
use App\Models\Division;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Symfony\Component\HttpFoundation\Response;

class DivisionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $divisions = Division::query()->paginate($request->limit);
        return DivisionResource::collection($divisions);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $division = Division::query()->findOrFail($id);
        $division->update([
            'id' => $request->id,
            'name' => $request->name,
            'bn_name' => $request->bn_name,
            'latitude' => $request->latitude,
            'longitude' => $request->longitude,
            'url' => $request->url,
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Division Updated Successful.',
        ], Response::HTTP_OK);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function search(Request $request)
    {
        $latitude = $request->latitude;
        $longitude = $request->longitude;

        $nearest = Division::query()->selectRaw(
            "*, ( 6371 * acos( cos( radians(?) ) * cos( radians( latitude ) )
        * cos( radians( longitude ) - radians(?) ) + sin( radians(?) )
        * sin( radians( latitude ) ) ) ) AS distance",
            [$latitude, $longitude, $latitude]
        )
            ->orderBy('distance', 'asc')
            ->first();

        return response()->json($nearest);
    }


    public function getDivisions()
    {
        $divisions = Division::query()->get();
        return DivisionResource::collection($divisions);
    }

    public function view(Division $division)
    {
        $division = $division->load('districts');
        return DivisionResource::make($division);
    }
}
