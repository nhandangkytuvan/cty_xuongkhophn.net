<?php

namespace App\Listeners;

use App\Events\ViewTermEvent;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\View;
class ViewTermListener
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
     * @param  ViewTermEvent  $event
     * @return void
     */
    public function handle(ViewTermEvent $event)
    {
        $term_id = $event->term->id;
        if(View::where('term_id',$term_id)->exists()){
            $view = View::where('term_id',$term_id)->first();
        }else{
            $view = new View;
            $view->term_id = $term_id;
        }
        $view->view_sum ++;
        $view->save();
    }
}
