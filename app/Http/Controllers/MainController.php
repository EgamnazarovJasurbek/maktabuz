<?php

namespace App\Http\Controllers;


use App\Models\Announcements;
use App\Models\Connection;
use App\Models\Director;
use App\Models\Faqs;
use App\Models\Gallery;
use App\Models\Lesson;
use App\Models\News;
use App\Models\One_shift;
use App\Models\Requisite;
use App\Models\Resource;
use App\Models\SchoolName;
use App\Models\Slider;
use App\Models\Sport;
use App\Models\Task;
use App\Models\Teacher;
use App\Models\Twoshift;
use Illuminate\Http\Request;

class MainController extends Controller
{

   public function index()
   {
      $schoolName = SchoolName::all();
      $connections = Connection::all();
      $news = News::limit(6)->latest()->get();;
      $sliders = Slider::all();
      return view('index',compact('sliders','news','connections','schoolName'));
   }
   public function schoolTasks()
   {
      $tasks = Task::all();
      return view('schoolTasks',compact('tasks'));
   }
   public function connections()
   {
      $connections = Connection::all();
      return view('connect',compact('connections'));
   }
   public function educations()
   {

      $sports = Sport::all();
      $educations = Lesson::all();
      $twoshifts = Twoshift::all();
      $oneshifts = One_shift::all();
      return view('educations', compact('oneshifts','twoshifts','educations','sports'));

      // $oneshifts = One_shift::all();
      // return view('educations');

   }
   public function faqs()
   {
      $faqs = Faqs::all();
      return view('faqs',compact('faqs'));
   }
   public function gallery()
   {
      $galleries = Gallery::all();
      return view('gallery',compact('galleries'));
   }
   public function infoGrafika()
   {
      return view('infoGrafika');
   }
   public function leaderShip()
   {
      $directors = Director::Where('specialist_uz','DirektorUz')->get();
      $leaderShips = Director::Where('specialist_uz','!=','DirektorUz')->get()->all();
      return view('leaderShip', compact('directors', 'leaderShips'));
   }
   public function leaderShipDetail($id)
   {
      $leaderShipDetail = Director::where('id', $id)->first();
      $teachers = Teacher::where('id', $id)->first();
      return view('leaderShipDetail',compact('leaderShipDetail','teachers'));
   }
   public function teacherDetail($id)
   {
      $teachers = Teacher::where('id', $id)->first();
      return view('teacherDetail',compact('teachers'));
   }
   public function rekvizit()
   {
      $requisites = Requisite::all();
      return view('rekvizit',compact('requisites'));
   }
   public function schoolNews()
   {
      $annoouncements = Announcements::all();
      $news = News::all();
      return view('schoolNews',compact('news','annoouncements'));
   }
   public function schoolRules()
   {
      return view('schoolRules');
   }
   public function search(Request $request)
   {
      $key = $request->key;
      $news = News::where('title_1_uz','like', '%'.$key.'%')
      ->orWhere('title_1_ru','like', '%'.$key.'%') 
      ->orWhere('title_1_en','like', '%'.$key.'%') 
      ->orWhere('title_1_oz','like', '%'.$key.'%')      
      ->orWhere('body_uz','like', '%'.$key.'%')      
      ->orWhere('body_oz','like', '%'.$key.'%')      
      ->orWhere('body_en','like', '%'.$key.'%')      
      ->orWhere('body_ru','like', '%'.$key.'%')->get();

      return view('search',compact('news','key'));
   }
   public function stateSymbols()
   {
      return view('stateSymbols');
   }
   public function teacher()
   {
      $oliyToifa = Teacher::where('category_id','1' )->get();
      $brnciToifa = Teacher::where('category_id','2' )->get();
      $ikinciToifa = Teacher::where('category_id','3')->get();
      $mutaxasisToifa = Teacher::where('category_id','4')->get();
      return view('teacher',compact('oliyToifa','brnciToifa','ikinciToifa','mutaxasisToifa'));
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
      
      $education = Lesson::where('id',$id)->first();
      
      return view('educationDetails',compact('education'));
   }
   public function educationDetails2($id)
   {         
      $sport = Sport::where('id',$id)->first();
      
      
      return view('educationDetails2',compact('sport'));
   }
   public function detailNew($id)
   {
      
      $new = News::where('id',$id)->first();
      return view('detailNew',compact('new'));
   }
   public function newsDetail2($id)
   {
      $annoouncement = Announcements::where('id',$id)->first();
     
      return view('newsDetail2',compact('annoouncement'));
   }
}
