<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dominio;


class DominioController extends Controller
{
    public function index(Request $request){
        $request->validate([
            'dominio' => 'required'
        ]);

        /*
        $dominio = new Dominio();
        $dominio->nombDominio = $request->dominio;
        $dominio->save();
*/
        //return view('manual');
        return redirect()->route('manual', $request->dominio);
    }
}
