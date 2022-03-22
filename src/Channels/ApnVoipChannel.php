<?php

namespace Edujugon\PushNotification\Channels;

use Edujugon\PushNotification\Messages\PushMessage;

class ApnVoipChannel extends PushChannel
{
    /**
     * {@inheritdoc}
     */
    protected function pushServiceName()
    {
        return 'apn';
    }

    /**
     * {@inheritdoc}
     */
    protected function buildData(PushMessage $message)
    {
        $data = [];

        if (! empty($message->extra)) {
            $data['extra'] = $message->extra;
        }

        return $data;
    }
}
