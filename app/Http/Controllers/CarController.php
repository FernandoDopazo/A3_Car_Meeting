<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\User;

class CarController extends Controller
{
    public function index(Request $request){

        //$perfis = User::findOrFail($id);
        //dd($perfis);
        //$perfil = User::getProfileById($perfis->id);

        return view('index');
    }

    public function dashboard(){

        $perfil = User::perfil();
        dd($perfil);
        $perfis = $perfil->name;

        return view('dashboard', ['perfis' => $perfis, 'perfil' => $perfil]);
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

        $event->save();
        return redirect('/')->with('msg', 'Evento criado com sucesso!');
    }

    public function allEvents(){

        $search = request('search');

        if($search){

            $events = Event::where([
                ['city', 'like', '%'.$search.'%']
            ])->get();

        }else{
            $events = Event::all();
        }

        return view('events.allEvents', ['events' => $events, 'search' => $search]);
    }

    public function show($id){
        $events = Event::findOrFail($id);

        return view('events.print', ['events' => $events]);
    }
}
