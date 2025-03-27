<?php

namespace App\Listeners;

use App\Events\ProjectSaved;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Image;



class OptimizeProjectImage
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(ProjectSaved $event): void
    {
        // Obtener la imagen desde el almacenamiento
        $image =   Storage::get($event->project->image);

        // Redimensionar la imagen y codificarla
       // $image->widen(600)->encode();

        // Guardar la imagen optimizada
        Storage::put($event->project->image, (string) $image);
    }
}
