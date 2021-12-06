<?php

namespace App\Http\Controllers;

use App\Models\CV;
use Illuminate\Http\Request;

class CvController extends Controller
{
    public function index(){
        $cvs = CV::with('job')->orderBy('created_at', 'desc')->paginate(3);
        return view('admin.cv.index', compact('cvs'));
    }
    public function destroy($id)
    {
        CV::destroy($id);
        return redirect()->route('cv');
    }
}
