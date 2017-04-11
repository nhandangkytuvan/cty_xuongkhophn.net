<?php

namespace App\Listeners;

use App\Events\ViewPostEvent;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\View;
class ViewPostListener
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
     * @param  ViewPostEvent  $event
     * @return void
     */
    public function handle(ViewPostEvent $event)
    {
        $post_id = $event->post->id;
        if(View::where('post_id',$post_id)->exists()){
            $view = View::where('post_id',$post_id)->first();
        }else{
            $view = new View;
            $view->post_id = $post_id;
        }
        $view->view_sum ++;
        $view->save();
    }
}
