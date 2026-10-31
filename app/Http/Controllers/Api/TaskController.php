<?php

namespace App\Http\Controllers\Api;

use App\Models\Task;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreTaskRequest;
use Illuminate\Http\JsonResponse;

class TaskController extends Controller
{
    public function index():JsonResponse
    {
        $tasks=Task::query()
            ->latest()
            ->get();
            return response()->json([
                'message'=>'Tareas obtenidas correctamente',
                'data'=>$tasks,
                ],200);
    }
    public function create()
    {
    }
    public function store(StoreTaskRequest $request):JsonResponse
    {
        $task=Task::create($request->validated());
        return response()->json([
            'message'=>'Tarea registrada Correctamente',
            'data'=>$task,
        ],201);
    }
    public function show(Task $task)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Task $task)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Task $task)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Task $task)
    {
        //
    }
}
