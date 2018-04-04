<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Response;
use App\Equipment;
use App\Unique;
use Session;

class ResponseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $responses = Response::orderBy('id','desc')->paginate(10);
      return view('responses.index')->withResponses($responses);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('responses.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $this->validate($request,array(
        'age' => 'required',
        'sex' => 'required',
        'children' => 'required',
        'housing' => 'required',
        'belonging' => 'required',
        'inclusive' => 'required',
        'time' => 'required',
        'company' => 'required',
        'element' => 'required',
        'location' => 'required',
        'activity' => 'required',
        'equipment' =>'required',
        'uniques' => 'required'
      ));

      $response = new Response;
      $response->age = $request->age;
      $response->sex = $request->sex;
      $response->children = $request->children;
      $response->housing = $request->housing;
      $response->belonging = $request->belonging;
      $response->inclusive = $request->inclusive;
      $response->time = $request->time;
      $response->company = $request->company;
      $response->element = $request->element;
      $response->location = $request->location;
      $response->activity = $request->activity;

      $response->save();

      $uniques = $request->input('uniques',[]);
      $response->uniques()->sync($uniques,false);
      $equipment = $request->input('equipment',[]);
      $response->equipment()->sync($equipment,false);
      return redirect()->route('responses.show',$response->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $response = Response::findOrFail($id);
      return view('responses.show')->withResponse($response);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function getStats(){
      //total Responses
      $responsesCount = Response::all()->count();
      //activity related
      $activityFriends = Response::where('activity','=','friends')->count();
      $activityNewFriends = Response::where('activity','=','newFriends')->count();
      $activityRelax = Response::where('activity','=','relax')->count();
      $activityBond = Response::where('activity','=','bond')->count();
      $activityExercise = Response::where('activity','=','exercise')->count();
      //element related
      $elementSafe = Response::where('element','=','safe')->count();
      $elementFun = Response::where('element','=','fun')->count();
      $elementCommunity = Response::where('element','=','community')->count();
      $elementBond = Response::where('element','=','bond')->count();
      $elementTeach = Response::where('element','=','teach')->count();
      //location related
      $locationIndoors = Response::where('location','=','indoors')->count();
      $locationOutdoors = Response::where('location','=','outdoors')->count();
      $locationUrban = Response::where('location','=','urban')->count();
      $locationClouds = Response::where('location','=','clouds')->count();
      //most popular equipment

      //20-30 ideals
      $idealLocation19 = Response::select('location')->where('age','=','19')->groupBy('location')->orderByRaw('COUNT(*) DESC')->limit(1)->get();
      $idealCompany19 = Response::select('company')->where('age','=','19')->groupBy('company')->orderByRaw('COUNT(*) DESC')->limit(1)->get();
      $idealElement19 = Response::select('element')->where('age','=','19')->groupBy('element')->orderByRaw('COUNT(*) DESC')->limit(1)->get();
      //pop equipment 19

      //31-50 ideals
      $idealActivity30 = Response::select('activity')->where('age','=','30')->groupBy('activity')->orderByRaw('COUNT(*) DESC')->limit(1)->get();
      $idealLocation30 = Response::select('location')->where('age','=','30')->groupBy('location')->orderByRaw('COUNT(*) DESC')->limit(1)->get();
      $idealElement30 = Response::select('element')->where('age','=','30')->groupBy('element')->orderByRaw('COUNT(*) DESC')->limit(1)->get();
      //pop equipment 30

      //female ideals
      $idealCompanyFemale = Response::select('company')->where('sex','=','female')->groupBy('company')->orderByRaw('COUNT(*) DESC')->limit(1)->get();
      $idealActivityFemale = Response::select('activity')->where('sex','=','female')->groupBy('activity')->orderByRaw('COUNT(*) DESC')->limit(1)->get();
      $idealLocationFemale = Response::select('location')->where('sex','=','female')->groupBy('location')->orderByRaw('COUNT(*) DESC')->limit(1)->get();
      //pop equipment female

      //male ideals
      $idealCompanyMale = Response::select('company')->where('sex','=','male')->groupBy('company')->orderByRaw('COUNT(*) DESC')->limit(1)->get();
      $idealActivityMale = Response::select('activity')->where('sex','=','male')->groupBy('activity')->orderByRaw('COUNT(*) DESC')->limit(1)->get();
      $idealLocationMale = Response::select('location')->where('sex','=','male')->groupBy('location')->orderByRaw('COUNT(*) DESC')->limit(1)->get();
      //pop equipment male

      //people with children ideals
      $idealElementChildren = Response::select('element')->where('children','=','yes')->groupBy('element')->orderByRaw('COUNT(*) DESC')->limit(1)->get();
      //pop equipment children

      //50+ ideals
      $idealActivity50 = Response::select('activity')->where('age','=','50')->groupBy('activity')->orderByRaw('COUNT(*) DESC')->limit(1)->get();
      $idealCompany50 = Response::select('company')->where('age','=','50')->groupBy('company')->orderByRaw('COUNT(*) DESC')->limit(1)->get();
      $idealLocation50 = Response::select('location')->where('age','=','50')->groupBy('location')->orderByRaw('COUNT(*) DESC')->limit(1)->get();

      $arr = array(
        'responsesCount'=>$responsesCount,
        'activityFriends'=>$activityFriends,
        'activityNewFriends'=>$activityNewFriends,
        'activityRelax'=>$activityRelax,
        'activityBond'=>$activityBond,
        'activityExercise'=>$activityExercise,
        'elementSafe'=>$elementSafe,
        'elementFun'=>$elementFun,
        'elementCommunity'=>$elementCommunity,
        'elementBond'=>$elementBond,
        'elementTeach'=>$elementTeach,
        'locationIndoors'=>$locationIndoors,
        'locationOutdoors'=>$locationOutdoors,
        'locationUrban'=>$locationUrban,
        'locationClouds'=>$locationClouds,
        'idealLocation19'=>$idealLocation19,
        'idealCompany19'=>$idealCompany19,
        'idealElement19'=>$idealElement19,
        //pop equ 19
        'idealActivity30'=>$idealActivity30,
        'idealLocation30'=>$idealLocation30,
        'idealElement30'=>$idealElement30,
        //pop equipment 30
        'idealCompanyFemale'=>$idealCompanyFemale,
        'idealActivityFemale'=>$idealActivityFemale,
        'idealLocationFemale'=>$idealLocationFemale,
        //pop equipment female
        'idealCompanyMale'=>$idealCompanyMale,
        'idealActivityMale'=>$idealActivityMale,
        'idealLocationMale'=>$idealLocationMale,
        //pop equipment male
        'idealElementChildren'=>$idealElementChildren,
        //pop equipment children
        'idealActivity50'=>$idealActivity50,
        'idealLocation50'=>$idealLocation50,
        'idealCompany50'=>$idealCompany50,
        //pop equipment 50
      );
      $data = json_encode($arr);
      return $data;
    }

    public function getGlobal(){
      $responses = Responses::orderBy('id', 'desc')->take(3)->get();
      return $responses;
    }
}
