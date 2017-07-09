<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Http\Request;
use App\Http\Traits\RestControllerTrait;

use App\Message as Message;
use Carbon\Carbon as Carbon;
use DB;

class MessageController extends Controller
{
    use SoftDeletes;
    use RestControllerTrait;

    public function checkNewFrom(Request $request, $contactId)
    {

        try {
            $user = $request->user();

            $newMessagesCount = $user->receivedMessages()->where([['from', $contactId], ['seen', null]])->count();

            return $this->showResponse($newMessagesCount);
        } catch(\Exception $ex) {
            $data = ['exception' => $ex->getMessage()];
            return $this->clientErrorResponse($data);
        }
    }

    public function list(Request $request, $contactId, $offset = 0, $limit = 10)
    {
        try {
            $user = $request->user();

            $messages = DB::select("
                SELECT m.*
                FROM messages m
                WHERE (m.from = $user->id AND m.to = $contactId)
                    OR (m.to = $user->id AND m.from = $contactId)
                ORDER BY created_at desc
                LIMIT $limit
                OFFSET $offset;
            ");

            DB::statement("
                UPDATE messages m
                SET seen = now()
                WHERE m.to = $user->id
                    AND m.from = $contactId
                    AND seen IS NULL
            ");

            return $this->showResponse($messages);
        } catch(\Exception $ex) {
            $data = ['exception' => $ex->getMessage()];
            return $this->clientErrorResponse($data);
        }
    }

    public function store(Request $request, $contactId)
    {
        try {
            $user = $request->user();
            $body = $request->input('body');

            $message = Message::create([
                'from' => $user->id,
                'to' => $contactId,
                'body' => $body,
            ]);

            return $this->createdResponse($message);
        } catch(\Exception $ex) {
            $data = ['exception' => $ex->getMessage()];
            return $this->clientErrorResponse($data);
        }
    }

}
