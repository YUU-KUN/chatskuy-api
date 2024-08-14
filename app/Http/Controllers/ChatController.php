<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helpers\Response;
use App\Models\Chat;
use App\Models\ChatSession;
use Gemini\Laravel\Facades\Gemini;

class ChatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        try {
            if (!isset($request['chat_session_id'])) {
                return Response::error('chat_session_id is required');
            }
            
            $Chats = Chat::where('chat_session_id', $request['chat_session_id'])->get();
            return Response::success($Chats, 'Chat retrieved successfully');
        } catch (\Throwable $th) {
            return Response::error($th->getMessage());
        }
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
        try {
            $validatedData = $request->validate([
                'message' => 'required|string',
                'chat_session_id' => 'nullable|exists:chat_sessions,id',
            ]);
    
            $input = $validatedData;

            if (!isset($input['chat_session_id'])) {
                $chat_session_data = [
                    'title' => $input['message'],
                ];
                $chat_session = ChatSession::create($chat_session_data);
                try {
                    $input['chat_session_id'] = $chat_session->id;
                } catch (\Throwable $th) {
                    return Response::error($th->getMessage());
                }
            }

            $result = Gemini::geminiPro()->generateContent($input['message']);
            $input['answer'] = $result->text();

    
            $chat = Chat::create($input);
            return Response::success($chat, 'Chat created successfully');
        } catch (\Throwable $th) {
            return Response::error($th->getMessage());
        }
        
    }

    /**
     * Display the specified resource.
     */
    public function show(Chat $chat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Chat $chat)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Chat $chat)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Chat $chat)
    {
        //
    }
}
