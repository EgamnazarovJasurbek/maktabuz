<?php

namespace App\Http\Controllers;

use App\Models\One_shift;
use Illuminate\Http\Request;

class MainController extends Controller
{

   public function index()
   {
      return view('index');
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
      return view('leaderShip');
   }
   public function leaderShipDetail()
   {
      return view('leaderShipDetail');
   }
   public function rekvizit()
   {
      return view('rekvizit');
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
      return view('teacher');
   }
   public function usefulResurs()
   {
      return view('usefulResurs');
   }
   public function usefulResursDetail()
   {
      return view('usefulResursDetail');
   }
   public function educationDetails()
   {
      return view('educationDetails');
   }
   public function newsDetail()
   {
      return view('newsDetail');
   }
}
