<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Admin\SportsController;
use App\Models\Connection;
use App\Models\Director;
use App\Models\Lesson;
use App\Models\News;
use App\Models\One_shift;
use App\Models\Requisite;
use App\Models\Resource;
use App\Models\Slider;
use App\Models\Sport;
use App\Models\Teacher;
use App\Models\Twoshift;
use Illuminate\Http\Request;

class MainController extends Controller
{

   public function index()
   {
      
      $connections = Connection::all();
      $news = News::all();
      $sliders = Slider::all();
      return view('index',compact('sliders','news','connections'));
   }
   public function schoolTasks()
   {
      return view('schoolTasks');
   }
   public function connections()
   {
      return view('connect');
   }
   public function educations()
   {

      $sports = Sport::all();
      $educations = Lesson::all();
      $twoshifts = Twoshift::all();
      $oneshifts = One_shift::all();
      return view('educations', compact('oneshifts','twoshifts','educations','sports'));

      // $oneshifts = One_shift::all();
      return view('educations');

   }
   public function faqs()
   {
      return view('faqs');
   }
   public function gallery()
   {
      return view('gallery');
   }
   public function infoGrafika()
   {
      return view('infoGrafika');
   }
   public function leaderShip()
   {
      $directors = Director::Where('category_id','Direktor')->get();
      $leaderShips = Director::Where('category_id','!=','Direktor')->get()->all();
      return view('leaderShip',compact('directors','leaderShips'));
   }
   public function leaderShipDetail()
   {
      return view('leaderShipDetail');
   }
   public function rekvizit()
   {
      $requisites = Requisite::all();
      return view('rekvizit',compact('requisites'));
   }
   public function schoolNews()
   {
      return view('schoolNews');
   }
   public function schoolRules()
   {
      return view('schoolRules');
   }
   public function search()
   {
      return view('search');
   }
   public function stateSymbols()
   {
      return view('stateSymbols');
   }
   public function teacher()
   {
      // $teachers = Teacher::where('category_id', )->get()->all();
      return view('teacher');
   }
   public function usefulResurs()
   {
      $resources = Resource::all();
      return view('usefulResurs',compact('resources'));
   }
   public function usefulResursDetail($id)
   {
      $resource = Resource::where('id',$id)->first();
      return view('usefulResursDetail',compact('resource'));
   }
   public function educationDetails($id)
   {         
      $sport = Sport::where('id',$id)->first();
      $education = Lesson::where('id',$id)->first();
      
      return view('educationDetails',compact('education','sport'));
   }
   public function newsDetail()
   {
      return view('newsDetail');
   }
}
