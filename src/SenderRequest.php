<?php

namespace ChatBoot;


class SenderRequest
{

    /** @var array */
    private $event;

    /**
     * SenderRequest constructor.
     */
    public function __construct()
    {
        $event = file_get_contents('php://input');
        $event = json_decode($event, true, 512, JSON_BIGINT_AS_STRING);
        $this->event = $event['entry'][0]['messaging'][0];
    }

    /**
     * @return mixed|null
     */
    public function getMessage()
    {
        return $this->event['message']['text'] ?? null;
    }

    /**
     * @return mixed|null
     */
    public function getSenderId()
    {
        return $this->event['sender']['id'] ?? null;
    }

    /**
     * @return mixed|null
     */
    public function getPostBack()
    {
        if (empty($this->event['postBack'])) {
            return null;
        }

        if (is_array($this->event['postBack']) && !empty($this->event['postBack']['payload'])) {
            return $this->event['postBack']['payload'];
        }

        return $this->event['postBack'];
    }


}