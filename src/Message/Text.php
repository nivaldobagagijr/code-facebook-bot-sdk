<?php

namespace CodeBot\Message;

class Text
{
    public function __construct(string $recipientId){
        $this->recipientId = $recipientId;
    }

    public function message(string $messageText)
    {
        return [
            'recipient' => [
                'id'=>$this->recipientId
            ],
            'message' => [
                'text' => 'Oiii',
                'metadata' => 'DEVELOPER_DEFINED_METADATA'
            ]
        ];
    }
}
