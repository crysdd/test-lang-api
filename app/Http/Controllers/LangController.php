<?php

namespace App\Http\Controllers;

use App\Models\Lang;
use Illuminate\Http\Request;

class LangController extends Controller
{
    /**
     * Return list all available languages
     *
     * @return response
     */
    public function getLangsList()
    {
        $langs = Lang::select('code', 'name')->get()->all();

        return response()->json($langs);
    }
}
