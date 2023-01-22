<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics = Comic::paginate(6);

        $data = [
            'comics' => $comics
        ];

        return view('welcome', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('comic.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $data = $request->all();

       $request->validate([
            'title' => 'required|max:50',
            'description' => 'required|max:500',
            'thumb' => 'required|max:50',
            'price' => 'required|max:50',
            'series' => 'required|max:50',
            'sale_date' => 'required|max:50',
            'type' => 'required|max:50',
         ],
        [
            'title.required' => 'il campo "title" è obbligatorio, per favore compila il campo richiesto.',
            'title.max' => 'ATTENZIONE: il campo "title" non deve superare i 50 caratteri.',
            'description.required' => 'il campo "description" è obbligatorio, per favore compila il campo richiesto.',
            'description.max' => 'ATTENZIONE: il campo "description" non deve superare i 500 caratteri.',
            'thumb.required' => 'il campo "thumb" è obbligatorio, per favore compila il campo richiesto.',
            'thumb.max' => 'ATTENZIONE: il campo "title" non deve superare i 50 caratteri.',
            'price.required' => 'il campo "price" è obbligatorio, per favore compila il campo richiesto.',
            'price.max' => 'ATTENZIONE: il campo "title" non deve superare i 50 caratteri.',
            'series.required' => 'il campo "series" è obbligatorio, per favore compila il campo richiesto.',
            'series.max' => 'ATTENZIONE: il campo "title" non deve superare i 50 caratteri.',
            'sale_date.required' => 'il campo "sale_date" è obbligatorio, per favore compila il campo richiesto.',
            'sale_date.max' => 'ATTENZIONE: il campo "title" non deve superare i 50 caratteri.',
            'type.required' => 'il campo "type" è obbligatorio, per favore compila il campo richiesto.',
            'type.max' => 'ATTENZIONE: il campo "title" non deve superare i 50 caratteri.',
        ]

        );

        $new_comic = new Comic();
        $new_comic->fill($data);
        $new_comic->save();

        return redirect()->route('comic.show',$new_comic->id);


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $elem = Comic::FindOrFail($id);

        return view('single', compact('elem'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $comic = Comic::findOrFail($id);

        return view('comic.edit', compact('comic'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

            $data = $request->all();
            $comic = Comic::findOrFail($id);
            $comic->update($data);

            return redirect()->route('comic.show',$comic->id)->with('success',"Hai modificato $comic->title ");

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $comic = Comic::findOrFail($id);
         $comic->delete();
         return redirect()->route('comic.index')->with('success',"Hai eliminato il fumetto: $comic->title dal server");
    }
}
