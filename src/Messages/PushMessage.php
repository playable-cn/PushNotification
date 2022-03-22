<?php

namespace Edujugon\PushNotification\Messages;

class PushMessage
{
    /**
     * @var string
     */
    public $to;

    /**
     * @var string
     */
    public $title;

    /**
     * @var string
     */
    public $body;

    /**
     * @var string
     */
    public $icon;

    /**
     * @var string
     */
    public $sound = 'default';

    /**
     * @var string
     */
    public $click_action;

    /**
     * @var string
     */
    public $category;

    /**
     * @var integer
     */
    public $badge;

    /**
     * @var array
     */
    public $extra = [];

    /**
     * @var array
     */
    public $config = [];

    /**
     * @var string
     */
    public $color = '#000000';

    /**
     * @var array
     */
    public $headers = [];

    /**
     * @var string
     */
    public $pushType = null;

    /**
     * @var \DateTime|null
     */
    public $expiresAt = null;

    /**
     * Create a new message instance.
     *
     * @param  string  $body
     * @return void
     */
    public function __construct($body = '')
    {
        $this->body = $body;
    }

    public function to($to)
    {
        $this->to = $to;

        return $this;
    }

    /**
     * Set the message body.
     *
     * @param  string $body
     * @return $this
     */
    public function body($body)
    {
        $this->body = $body;

        return $this;
    }

    /**
     * Set the message title.
     *
     * @param  string $title
     * @return $this
     */
    public function title($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Set the message icon.
     *
     * @param  string $icon
     * @return $this
     */
    public function icon($icon)
    {
        $this->icon = $icon;

        return $this;
    }

    /**
     * Set the notification sound.
     *
     * @param  string $sound
     * @return $this
     */
    public function sound($sound)
    {
        $this->sound = $sound;

        return $this;
    }

    /**
     * The action associated with a user click on the notification.(Android) 
     *
     * @param  string $click_action
     * @return $this
     */
    public function clickAction($click_action)
    {
        $this->click_action = $click_action;
        
        return $this;
    }

    /**
     * The action associated with a user click on the notification.(iOS) 
     *
     * @param  string $click_action
     * @return $this
     */
    public function category($category)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Set the notification badge.
     *
     * @param  integer $badge
     * @return $this
     */
    public function badge($badge)
    {
        $this->badge = $badge;

        return $this;
    }

    /**
     * Set notification icon color.
     *
     * @param string $color
     * @return $this
     */
    public function color($color)
    {
        $this->color = $color;

        return $this;
    }

    /**
     * Set message extra data.
     *
     * @param  array $extra
     * @return $this
     */
    public function extra(array $extra)
    {
        $this->extra = $extra;

        return $this;
    }

    /**
     * Set message config.
     *
     * @param  array $config
     * @return $this
     */
    public function config(array $config)
    {
        $this->config = $config;

        return $this;
    }

    /**
     * Set message headers.
     *
     * @param  array $headers
     * @return $this
     */
    public function headers(array $headers)
    {
        $this->headers = $headers;

        return $this;
    }

    /**
     * Set the message push type.
     *
     * @param  string $pushType
     * @return $this
     */
    public function pushType($pushType)
    {
        $this->pushType = $pushType;

        return $this;
    }

    /**
     * Set the message push expiration time.
     *
     * @param  string $expiresAt
     * @return $this
     */
    public function expiresAt($expiresAt)
    {
        $this->expiresAt = $expiresAt;

        return $this;
    }
}
