<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;

class EventController extends Controller
{
    use AuthorizesRequests, ValidatesRequests;

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $news = Event::where('type', 'news')
            ->where('status', 'published')
            ->orderBy('start_date', 'desc')
            ->get();
            
        $events = Event::where('type', 'event')
            ->where('status', 'published')
            ->orderBy('start_date', 'asc')
            ->get();

        return view('information.events.index', compact('news', 'events'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('information.events.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|max:255',
            'description' => 'required',
            'start_date' => 'required|date',
            'end_date' => 'nullable|date|after:start_date',
            'location' => 'nullable|max:255',
            'type' => 'required|in:news,event',
            'status' => 'required|in:draft,published'
        ]);

        $validated['user_id'] = Auth::id();
        Event::create($validated);

        return redirect()->route('information.events.index')
            ->with('success', 'Événement créé avec succès.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Event $event)
    {
        return view('information.events.show', compact('event'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Event $event)
    {
        return view('information.events.edit', compact('event'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Event $event)
    {
        $validated = $request->validate([
            'title' => 'required|max:255',
            'description' => 'required',
            'start_date' => 'required|date',
            'end_date' => 'nullable|date|after:start_date',
            'location' => 'nullable|max:255',
            'type' => 'required|in:news,event',
            'status' => 'required|in:draft,published'
        ]);

        $event->update($validated);

        return redirect()->route('information.events.index')
            ->with('success', 'Événement mis à jour avec succès.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Event $event)
    {
        $event->delete();
        return redirect()->route('information.events.index')
            ->with('success', 'Événement supprimé avec succès.');
    }
}
