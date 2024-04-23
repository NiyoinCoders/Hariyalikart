<?php

namespace Botble\Base\Events;

use Botble\Base\Contracts\BaseModel;
use Illuminate\Http\Request;
use Illuminate\Queue\SerializesModels;

class BeforeUpdateContentEvent extends Event
{
    use SerializesModels;

    public function __construct(public Request $request, public bool|BaseModel|null $data)
    {
    }
}
