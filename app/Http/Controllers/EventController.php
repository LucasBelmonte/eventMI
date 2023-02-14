<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Event;
use App\Models\User;
use Auth;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

class EventController extends Controller
{

    public function index() {

        $search = request('search');

        if($search ){
            $events = Event::where([['title', 'like', '%'.$search.'%'] ])->get();
        }else{
            $events = Event::all();
        }



        return view('welcome',['events' => $events, 'search' => $search]);

    }
       public function create() {
       if( Auth::user()->id == null or ''){

            return redirect("/login");
        }else{

            return view('events.create');
       }

    }

    public function store(Request $request) {

        $event = new Event;

        $event->title = $request->title;
        $event->date = $request->date;
        $event->city = $request->city;
        $event->private = $request->private;
        $event->description = $request->description;
        $event->items = $request->items;

        //imagem
        if($request->hasFile('image') && $request->file('image')->isValid()){

            $request_image = $request->image;

            $extension = $request_image->extension();

            $image_name = md5($request_image->getClientOriginalName() . strtotime("now")) . "." . $extension;

            $request_image->move(public_path('img/events'), $image_name);

            $event->image = $image_name;

        }

        $user = Auth::user()->id;
        $event->user_id = $user;

        $event->save();

        return redirect('/')->with('msg', 'Evento criado com sucesso!');

    }

    public function show($id){

        $event = Event::findOrFail($id);
        $eventOwner = User::where('id',$event->user_id)->first()->toArray();

        return view('events.show',[
            'event' => $event,
            'eventOwner' => $eventOwner
        ]);
    }

    public function dashboard(){

         //$user = Auth::user()->id;
         $user = auth()->user();
         $events = $user->events;

         $eventsAsParticipant = $user->eventsAsParticipant;
        // $events = Event::where('user_id', $user)->with('user')->get();
        //$events = Event::where('id',$user)->first();

        return view('events.dashboard',['events' => $events,'eventsasparticipant' => $eventsAsParticipant]);
    }

    public function destroy($id) {

        Event::findOrFail($id)->delete();

        return redirect('/dashboard')->with('msg', 'Evento excluído com sucesso!');

    }
    public function edit($id) {
        
        $user = auth()->user();

        $event = Event::findOrFail($id);

        if($user->id != $event->user->id){
            return view('/dashboard');
        }

        $event = Event::findOrFail($id);

        return view('events.edit', ['event' => $event]);

    }

    public function update(Request $request) {

        $data = $request->all();

        // Image Upload edit
        if($request->hasFile('image') && $request->file('image')->isValid()) {

            $requestImage = $request->image;

            $extension = $requestImage->extension();

            $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;

            $requestImage->move(public_path('img/events'), $imageName);

            $data['image'] = $imageName;

        }

        Event::findOrFail($request->id)->update($data);

        return redirect('/dashboard')->with('msg', 'Evento editado com sucesso!');

    }

    public function joinEvent($id) {
        
        $user = auth()->user();
        $eventsAsParticipant = $user->eventsAsParticipant;

        $user->eventsAsParticipant()->attach($id);

        $event = Event::findOrFail($id);

        return redirect('/dashboard')->with('msg', 'Sua presença está confirmada no evento ' . $event->title);

    }

}


