<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SearchModel;
class SearchController extends Controller
{
    

   
        public function search(Request $request)
        {
            $query = $request->input('query');
            $results = SearchModel::where('object', 'LIKE', "%$query%")->get(); 
            return view('search-results', compact('results'));
        }
    
}