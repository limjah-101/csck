<?php

namespace App\Http\Controllers;

use App\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    
    public function index() {

        $activeEvents = Event::where('is_active', true)->get();

        $unActiveEvents = Event::where('is_active', false)->get();        
        return view('admin.events.all')->with(
            [
                'activeEvents' => $activeEvents,
                'unActiveEvents' => $unActiveEvents
            ]
        );
    }


    public function store(Request $request) {

        if( $request->exists('event_create')) {
            
            $this->validate($request, 
            ['body' => 'required'], ['body.required' => 'Ce champ est obligatoire']);
    
            $event = new Event();
            $event->title = $request->title;
            $event->subtitle = $request->subtitle;
            $event->body = $request->body;
            $event->is_alert = $request->is_alert === "on" ? true : false;
            $event->is_active = $request->is_active === "on" ? true : false;
            $event->save();

            return redirect()->route('event.all')->with('success', 'L\'évènement a bien été ajouté');
        }

        return view('admin.events.create');
    }


    public function edit(Request $request, Event $event) {

        if ($request->exists('event_edit')) {            
            $event->update([
                'title'     => $request->title,
                'subtitle'  => $request->subtitle,                
                'body'  => $request->body,                                          
                'is_alert' => $request->is_active === 'on' ? true : false,
                'is_active' => $request->is_active === 'on' ? true : false
            ]);            

            return redirect()->route('event.all')->with('success', 'Modification bien enregistré!');

        }
        return view('admin.events.edit', compact('event'));
    }


    public function delete(Event $event) {

        $event->delete();

        return redirect()->back()->with('success', 'L\évènement a bien été supprimé!');
    }


    public function toggleActive(Event $event) {
        
        $event->update([

            'is_active' => !$event->is_active
        ]);

        return redirect()->back();
    }
}
