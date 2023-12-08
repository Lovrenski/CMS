<?php

namespace App\Http\Controllers;

use App\Models\Suggestion;

class SuggestionController extends Controller
{
    public function index()
    {
        $suggest = Suggestion::all();
        return view('admin.suggestions', [
            'title'   => 'Suggestions | N4',
            'suggest' => $suggest
        ]);
    }

    public function destroy($id)
    {
        $data = Suggestion::find($id);
        $data->delete();

        return redirect('/admin/suggestions')->with('delete', 'Deleted Successfully');
    }
}