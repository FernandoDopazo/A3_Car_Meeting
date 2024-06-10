<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class ImageController extends Controller
{
    public function show($id)
    {
        $event = Event::find($id);

        if ($event && $event->image) {
            return response($event->image)
            ->header('Content-Type', 'image/jpeg');
        } else {
            return response('Imagem não encontrada', 404);
        }
    }

    public function displayEvent($id)
    {
        return view('show_event', ['eventId' => $id]);
    }
    
}
