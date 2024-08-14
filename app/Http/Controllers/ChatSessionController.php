<?php

namespace App\Http\Controllers;

use App\Models\ChatSession;
use Illuminate\Http\Request;
use App\Helpers\Response;

class ChatSessionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $chatSessions = ChatSession::all();
        return Response::success($chatSessions, 'Chat sessions retrieved successfully');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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
    public function show(ChatSession $chatSession)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ChatSession $chatSession)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ChatSession $chatSession)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        try {
            $chatSession = ChatSession::find($id);
            if (!$chatSession) {
                return Response::error('Chat session not found', 404);
            }
            $chatSession->delete();
            return Response::success(null, 'Chat session deleted successfully');
        } catch (\Throwable $th) {
            return Response::error($th->getMessage());
        }
    }
}
