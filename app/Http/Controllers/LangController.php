<?php

namespace App\Http\Controllers;

use App\Models\Lang;
use App\Models\Text;
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
        if ( count($langs) == 0 ) {
            return response()->json(['status' => 'error', 'message' => 'Langs not found']);
        }

        return response()->json(['status' => 'success', 'langs' => $langs]);
    }

    /**
     * Return list all texts for all languages
     *
     * @return response
     */
    public function getAllTexts()
    {
        $texts = Text::select('lang', 'key', 'text')->get()->all();
        if ( count($texts) == 0 ) {
            return response()->json(['status' => 'error', 'message' => 'Texts not found']);
        }

        return response()->json(['status' => 'success', 'texts' => $texts]);


    }

    /**
     * Return text for current language
     *
     * @param string $lang
     * @return response
     */
    public function getLangText($lang)
    {
        $texts = Text::select('lang', 'key', 'text')->where('lang', $lang)->get();
        if ( count($texts) == 0 ) {
            return response()->json(['status' => 'error', 'message' => 'Texts for this lang not found']);
        }

        return response()->json(['status' => 'success', 'texts' => $texts]);;
    }
}
