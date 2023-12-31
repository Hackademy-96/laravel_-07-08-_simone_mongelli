<?php

namespace App\Http\Controllers;

use App\Models\Design;
use App\Models\Console;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DesignController extends Controller
{


    // public function __construct(){
    //     $this->middleware('auth')->except('index','show');
    //     //!nome funzione dentro except
    // }
    
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Design::all();

        return view('article.index',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()

    {
        $consoles = Console::all();

        return view('article.create', compact('consoles'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        
        
        $product = Design::create([
            'title' => $request->title,
            'category' => $request->category,
            'descritpion' => $request->description,
            'price' => $request->price,
            'img' => $request->file('img')->store('public/design'),
            'user_id' => Auth::user()->id,

        ]);

        $product->consoles()->attach($request->consoles);
        
        return redirect(route('welcome'))->with('message','Grazie per aver caricato il tuo articolo ');
    }

    /**
     * Display the specified resource.
     */
    public function show(Design $product)
    {
        
        return view('article.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Design $product)

    {
        $consoles = Console::all();

       return view('article.edit', compact('product','consoles'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Design $product)
    {
        $product->update([
            $product->title = $request->title,
            $product->category = $request->category,
            $product->descritpion = $request->description,
            $product->price = $request->price,
           
        ]);

        if($request->img){
        $product->img = $request->file('img')->store('public/design');
        $product->save();
        }

        $product->consoles()->sync($request->consoles);

      
        return redirect(route('welcome'))->with('message','Articolo modificato correttamente! ');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Design $product)
    {
    
     $product->consoles()->detach();

     $product->delete();
     return redirect(route('welcome'))->with('message','Articolo cancellato correttamente! ');
    }
}
