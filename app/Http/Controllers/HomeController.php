<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Schema;

use Validator;
use Redirect;
use DB;
use Auth;
use Carbon\Carbon;

use App\Models\QuestionList;
use App\Models\OptionList;
use App\Models\AnswerList;

class HomeController extends Controller {
    
    public function __construct(){
        $this->middleware('auth');
    }

    public function index(){
        $data['questionList'] = QuestionList::where('userId', Auth::user()->id)->with('getOption')->get();
        $data['addVote'] = QuestionList::where('userId', Auth::user()->id)->with('getOption')->get();
        return view('home', $data);
    }

    // Delete
    public function itemDelete($model, $id, $tab){
        $itemId = DB::table($model)->find($id);
        if (Schema::hasColumn($model, 'image')){
            ($itemId->image!=null) ? (file_exists($itemId->image) ? unlink($itemId->image) : '') : '';
        }
        DB::table($model)->where('id', $id)->delete();
        return back()->with('success', $model.' delete successfully')->withInput(['tab' => $tab]);
    }

    
}
