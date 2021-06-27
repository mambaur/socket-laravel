<?php

namespace App\Listener;

use App\Events\RequestApprove;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class ApprovalNotification
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  RequestApprove  $event
     * @return void
     */
    public function handle(RequestApprove $event)
    {
        //
    }
}
