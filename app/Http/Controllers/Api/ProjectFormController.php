<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\MainForm;
use App\Http\Resources\ProjectFormResource;
use OpenApi\Attributes as OA; // For the documentation

class ProjectFormController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    #[OA\Get(path: '/api/form', description: 'get all the data from the form')]
    #[OA\Response(response: Response::HTTP_OK, description: 'OK')]
    public function index()
    {
        return ProjectFormResource::collection(MainForm::all());
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
    #[OA\Get(path: '/api/form/id', description: 'Get data from one form')]
    #[OA\Response(response: Response::HTTP_OK, description: 'OK')]
    public function show(string $id)
    {
        return new ProjectFormResource(MainForm::findOrFail($id));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
