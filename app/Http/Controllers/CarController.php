<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\User;

class CarController extends Controller
{
    public function index(Request $request){
        
        $event_image = Event::orderBy('created_at', 'desc')->take(4)->get();
        //dd($event_image);

        return view('index', compact('event_image'));
    }

    public function showImage($id)
    {
        $event = Event::find($id);

        if ($event && $event->image) {
            return response($event->image)
                ->header('Content-Type', 'image/jpeg'); // Ajuste o content type conforme o formato da sua imagem
        } else {
            return response('Image not found', 404);
        }
    }

    public function dashboard(){

        /*$perfil = User::perfil();
        dd($perfil);
        $perfis = $perfil->name;*/

        return view('dashboard');
    }

    public function events(){

        return view('events.create');
    }


    public function store(Request $request){

        $event = new Event;

        $event->title = $request->title;
        $event->date = $request->date;
        $event->city = $request->city;
        $event->private = $request->private;
        $event->description = $request->description;
        $event->items = $request->items;

        //Image upload
        if($request->hasFile('image') && $request->file('image')->isValid()){

            $requestImage = $request->image;

            $extension = $requestImage->extension();

            $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;

            $requestImage->move(public_path('img/events'), $imageName);

            $event->image = $imageName;
        }

        $user = auth()->user();
        $event->user_id = $user->id;

        $event->save();
        return redirect('/')->with('msg', 'Evento criado com sucesso!');
    }

    public function allEvents(){

        $search = request('search');

        if($search){

            $event = Event::where([
                ['city', 'like', '%'.$search.'%']
            ])->get();

        }else{
            $event = Event::all();
        }

        return view('events.allEvents', ['events' => $event, 'search' => $search]);
    }

    public function show($id){
        $event = Event::findOrFail($id);

        $user = auth()->user();
        $hasUserJoined = false;

        if($user) {

            $userEvents = $user->eventsParticipant->toArray();

            foreach($userEvents as $userEvent) {
                if($userEvent['id'] == $id) {
                    $hasUserJoined = true;
                }
            }

        }

        $eventOwner = User::where('id', $event->user_id)->first()->toArray();

        return view('events.print', ['events' => $event, 'eventOwner' => $eventOwner, 'hasUserJoined' => $hasUserJoined]);
    }

    public function joinMeet($id){
        $user = auth()->user();

        $user->eventsParticipant()->attach($id);

        $event = Event::findOrFail($id);

        return redirect('/dashboard')->with('msg', 'Sua presença está confirmada no evento');
    }
}
