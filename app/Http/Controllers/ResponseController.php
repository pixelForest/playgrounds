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
    $responses = Response::orderBy('id','desc')->get();
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
      'age' => 'required|numeric',
      'sex' => 'required|min:2',
      'children' => 'required|min:2',
      'housing' => 'required|min:2',
      'belonging' => 'required|min:2',
      'inclusive' => 'required|min:2',
      'time' => 'required|min:2',
      'company' => 'required|min:2',
      'element' => 'required|min:2',
      'location' => 'required|min:2',
      'activity' => 'required|min:2',
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

  public function share($id)
  {
    $response = Response::findOrFail($id);
    return view('share.show')->withResponse($response);
  }

  public function getStats(){
    //total Responses
    $responsesCount = Response::all()->count();

    //activity related
    $activityFriends = Response::where('activity','=','friends')->count();
    $activityFriends = ($activityFriends/$responsesCount)*100;

    $activityNewFriends = Response::where('activity','=','newFriends')->count();
    $activityNewFriends = ($activityNewFriends/$responsesCount)*100;

    $activityRelax = Response::where('activity','=','relax')->count();
    $activityRelax = ($activityRelax/$responsesCount)*100;

    $activityBond = Response::where('activity','=','bond')->count();
    $activityBond = ($activityBond/$responsesCount)*100;

    $activityExercise = Response::where('activity','=','exercise')->count();
    $activityExercise = ($activityExercise/$responsesCount)*100;

    //element related
    $elementSafe = Response::where('element','=','safe')->count();
    $elementSafe = ($elementSafe/$responsesCount)*100;

    $elementFun = Response::where('element','=','fun')->count();
    $elementFun = ($elementFun/$responsesCount)*100;

    $elementCommunity = Response::where('element','=','community')->count();
    $elementCommunity = ($elementCommunity/$responsesCount)*100;

    $elementBond = Response::where('element','=','bond')->count();
    $elementBond = ($elementBond/$responsesCount)*100;

    $elementTeach = Response::where('element','=','teach')->count();
    $elementTeach = ($elementTeach/$responsesCount)*100;

    //location related
    $locationIndoors = Response::where('location','=','indoors')->count();
    $locationIndoors = ($locationIndoors/$responsesCount)*100;

    $locationOutdoors = Response::where('location','=','outdoors')->count();
    $locationOutdoors = ($locationOutdoors/$responsesCount)*100;

    $locationUrban = Response::where('location','=','urban')->count();
    $locationUrban = ($locationUrban/$responsesCount)*100;

    $locationClouds = Response::where('location','=','clouds')->count();
    $locationClouds = ($locationClouds/$responsesCount)*100;

    //most popular equipment
    $responseEqu = Response::all();
    $popEqu =  $this->getPopEquip($responseEqu);

    //20-30 ideals
    $idealLocation19 = Response::select('location')->where('age','=','19')->groupBy('location')->orderByRaw('COUNT(*) DESC')->limit(1)->value('location');
    $idealCompany19 = Response::select('company')->where('age','=','19')->groupBy('company')->orderByRaw('COUNT(*) DESC')->limit(1)->value('company');
    $idealElement19 = Response::select('element')->where('age','=','19')->groupBy('element')->orderByRaw('COUNT(*) DESC')->limit(1)->value('element');
    //pop equipment 19
    $responseEqu = Response::where('age','=','19')->get();
    $popEqu19 =  $this->getPopEquip($responseEqu);

    //31-50 ideals
    $idealActivity30 = Response::select('activity')->where('age','=','30')->groupBy('activity')->orderByRaw('COUNT(*) DESC')->limit(1)->value('activity');
    $idealLocation30 = Response::select('location')->where('age','=','30')->groupBy('location')->orderByRaw('COUNT(*) DESC')->limit(1)->value('location');
    $idealElement30 = Response::select('element')->where('age','=','30')->groupBy('element')->orderByRaw('COUNT(*) DESC')->limit(1)->value('element');
    //pop equipment 30
    $responseEqu = Response::where('age','=','30')->get();
    $popEqu30 =  $this->getPopEquip($responseEqu);

    //female ideals
    $idealCompanyFemale = Response::select('company')->where('sex','=','female')->groupBy('company')->orderByRaw('COUNT(*) DESC')->limit(1)->value('company');
    $idealActivityFemale = Response::select('activity')->where('sex','=','female')->groupBy('activity')->orderByRaw('COUNT(*) DESC')->limit(1)->value('activity');
    $idealLocationFemale = Response::select('location')->where('sex','=','female')->groupBy('location')->orderByRaw('COUNT(*) DESC')->limit(1)->value('location');
    //pop equipment female
    $responseEqu = Response::where('sex','=','female')->get();
    $popEquFemale =  $this->getPopEquip($responseEqu);

    //male ideals
    $idealCompanyMale = Response::select('company')->where('sex','=','male')->groupBy('company')->orderByRaw('COUNT(*) DESC')->limit(1)->value('company');
    $idealActivityMale = Response::select('activity')->where('sex','=','male')->groupBy('activity')->orderByRaw('COUNT(*) DESC')->limit(1)->value('activity');
    $idealLocationMale = Response::select('location')->where('sex','=','male')->groupBy('location')->orderByRaw('COUNT(*) DESC')->limit(1)->value('location');
    //pop equipment male
    $responseEqu = Response::where('sex','=','male')->get();
    $popEquMale =  $this->getPopEquip($responseEqu);

    //people with children ideals
    $idealElementChildren = Response::select('element')->where('children','=','yes')->groupBy('element')->orderByRaw('COUNT(*) DESC')->limit(1)->value('element');
    //pop equipment children
    $responseEqu = Response::where('children','=','yes')->get();
    $popEquChildren =  $this->getPopEquip($responseEqu);

    //50+ ideals
    $idealActivity50 = Response::select('activity')->where('age','=','50')->groupBy('activity')->orderByRaw('COUNT(*) DESC')->limit(1)->value('activity');
    $idealCompany50 = Response::select('company')->where('age','=','50')->groupBy('company')->orderByRaw('COUNT(*) DESC')->limit(1)->value('company');
    $idealLocation50 = Response::select('location')->where('age','=','50')->groupBy('location')->orderByRaw('COUNT(*) DESC')->limit(1)->value('location');
    //pop equipment female
    $responseEqu = Response::where('age','=','50')->get();
    $popEqu50 =  $this->getPopEquip($responseEqu);

    //Answers for stats
    $q1 = $this->locationCopy($idealLocation19);
    $q2 = $this->locationCopy($idealLocation30);
    $q3 = $this->companyCopy($idealCompanyFemale);
    $q4 = $this->locationCopy($idealLocationMale);
    $q5 = $this->companyCopy($idealCompany50);
    $q6 = $popEqu;
    $q7 = $this->activityCopy($idealActivity30);
    $q8 = $popEquMale;
    $q9 = $this->locationCopy($idealLocationFemale);
    $q10 = $this->activityCopy($idealActivity50);
    //Question 11
    $popLocation = Response::select('location')->groupBy('location')->orderByRaw('COUNT(*) DESC')->limit(1)->value('location');
    $popLocationCount = Response::where('location','=',$popLocation)->count();
    $q11_1 = ($popLocationCount/$responsesCount)*100;
    $q11_1 = round($q11_1,0);
    $q11_2 = $this->locationCopy($popLocation);
    //
    $q12 = $popEqu19;
    $q13 = $popEquFemale;
    $q14 = $this->activityCopy($idealActivityMale);
    $q15 = $popEqu50;
    //Question 16
    $popElement = Response::select('element')->groupBy('element')->orderByRaw('COUNT(*) DESC')->limit(1)->value('element');
    $popElementCount = Response::where('element','=',$popElement)->count();
    $q16_1 = ($popElementCount/$responsesCount)*100;
    $q16_1 = round($q16_1,0);
    $q16_2 = $this->elementCopy($popElement);
    //
    $q17 = $this->elementCopy($idealElement19);
    $q18 = $popEqu30;
    $q19 = $this->activityCopy($idealActivityFemale);
    $q20 = $this->elementCopy($idealElementChildren);
    //Question 21
    $popActivity = Response::select('activity')->groupBy('activity')->orderByRaw('COUNT(*) DESC')->limit(1)->value('activity');
    $popActivityCount = Response::where('activity','=',$popActivity)->count();
    $q21_1 = ($popActivityCount/$responsesCount)*100;
    $q21_1 = round($q21_1,0);
    $q21_2 = $this->activityCopy($popActivity);
    //
    $q22 = $this->companyCopy($idealCompany19);
    $q23 = $this->elementCopy($idealElement30);
    $q24 = $this->companyCopy($idealCompanyMale);
    $q25 = $popEquChildren;

    $arr = array(
      'q1'=>$q1,
      'q2'=>$q2,
      'q3'=>$q3,
      'q4'=>$q4,
      'q5'=>$q5,
      'q6'=>$q6,
      'q7'=>$q7,
      'q8'=>$q8,
      'q9'=>$q9,
      'q10'=>$q10,
      'q11_1'=>$q11_1,
      'q11_2'=>$q11_2,
      'q12'=>$q12,
      'q13'=>$q13,
      'q14'=>$q14,
      'q15'=>$q15,
      'q16_1'=>$q16_1,
      'q16_2'=>$q16_2,
      'q17'=>$q17,
      'q18'=>$q18,
      'q19'=>$q19,
      'q20'=>$q20,
      'q21_1'=>$q21_1,
      'q21_2'=>$q21_2,
      'q22'=>$q22,
      'q23'=>$q23,
      'q24'=>$q24,
      'q25'=>$q25,
    );
    /*$arr = array(
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
      'popEqu'=>$popEqu,
      'idealLocation19'=>$idealLocation19,
      'idealCompany19'=>$idealCompany19,
      'idealElement19'=>$idealElement19,
      'popEqu19'=>$popEqu19,
      'idealActivity30'=>$idealActivity30,
      'idealLocation30'=>$idealLocation30,
      'idealElement30'=>$idealElement30,
      'popEqu30'=>$popEqu30,
      'idealCompanyFemale'=>$idealCompanyFemale,
      'idealActivityFemale'=>$idealActivityFemale,
      'idealLocationFemale'=>$idealLocationFemale,
      'popEquFemale'=>$popEquFemale,
      'idealCompanyMale'=>$idealCompanyMale,
      'idealActivityMale'=>$idealActivityMale,
      'idealLocationMale'=>$idealLocationMale,
      'popEquMale'=>$popEquMale,
      'idealElementChildren'=>$idealElementChildren,
      'popEquChildren'=>$popEquChildren,
      'idealActivity50'=>$idealActivity50,
      'idealLocation50'=>$idealLocation50,
      'idealCompany50'=>$idealCompany50,
      'popEqu50'=>$popEqu50,
      //pop equipment 50
    );*/
    $data = json_encode($arr);
    return $data;
  }

  public function getGlobal(){
    $stats = $this->getStats();
    $idealLocation = Response::select('location')->groupBy('location')->orderByRaw('COUNT(*) DESC')->limit(1)->value('location');
    $responses = Response::orderBy('id', 'desc')->take(3)->get();
    return view('global')->withResponses($responses)->withStats($stats)->withLocation($idealLocation);
  }

  //private functions
  private function elementCopy($l)
  {
    switch ($l) {
      case "safe":
      return "it is safe";
      break;
      case "fun":
      return "it is adventurous and fun";
      break;
      case "community":
      return "we built it together";
      break;
      case "bond":
      return "it helps them bond with loved ones";
      break;
      case "teach":
      return "it has educational value";
      break;

    };
  }

  private function activityCopy($l)
  {
    switch ($l) {
      case "friends":
      return "meet their friends";
      break;
      case "newFriends":
      return "make new friends";
      break;
      case "relax":
      return "relax and play by themselves";
      break;
      case "bond":
      return "bond with their family";
      break;
      case "exercise":
      return "exercise";
      break;

    };
  }

  private function locationCopy($l)
  {
    switch ($l) {
      case "indoors":
      return "indoors";
      break;
      case "outdoors":
      return "outdoors, in nature";
      break;
      case "clouds":
      return "high up in the clouds";
      break;
      case "urban":
      return "in an urban environment";
      break;
    };
  }

  private function companyCopy($l)
  {
    switch ($l) {
      case "mychildren":
      return "their children or children that they care for";
      break;
      case "children":
      return "their children or children that they care for";
      break;
      case "grandparents":
      return "their grandparents";
      break;
      case "parents":
      return "their parents";
      break;
      case "pets":
      return "their pets";
      break;
      case "caregiver":
      return "their caregiver";
      break;
      case "friends":
      return "their friends";
      break;
    };
  }

  private function getPopEquip($responseEqu)
  {
    $size = 0;
    $oldSize = 0;
    $largest = null;
    $rCount = $responseEqu->count();
    $equip1 = array();
    for($i = 0;$i<$rCount; $i++)
    {
      $e = $responseEqu[$i]->equipment()->where('answer','=','Adult Exercise Equipment')->first();
      if($e != null)
      {
        array_push($equip1,$e);
      }
    };
    $equip2 = array();
    for($i = 0;$i<$rCount; $i++)
    {
      $e = $responseEqu[$i]->equipment()->where('answer','=','Swings')->first();
      if($e != null)
      {
        array_push($equip2,$e);
      }
    };
    $equip3 = array();
    for($i = 0;$i<$rCount; $i++)
    {
      $e = $responseEqu[$i]->equipment()->where('answer','=','See-saws')->first();
      if($e != null)
      {
        array_push($equip3,$e);
      }

    };
    $equip4 = array();
    for($i = 0;$i<$rCount; $i++)
    {
      $e = $responseEqu[$i]->equipment()->where('answer','=','Slides')->first();
      if($e != null)
      {
        array_push($equip4,$e);
      }

    };
    $equip5 = array();
    for($i = 0;$i<$rCount; $i++)
    {
      $e = $responseEqu[$i]->equipment()->where('answer','=','Sculptures')->first();
      if($e != null)
      {
        array_push($equip5,$e);
      }

    };
    $equip6 = array();
    for($i = 0;$i<$rCount; $i++)
    {
      $e = $responseEqu[$i]->equipment()->where('answer','=','Springers')->first();
      if($e != null)
      {
        array_push($equip6,$e);
      }

    };
    $equip7 = array();
    for($i = 0;$i<$rCount; $i++)
    {
      $e = $responseEqu[$i]->equipment()->where('answer','=','Inclusive Equipment')->first();
      if($e != null)
      {
        array_push($equip7,$e);
      }

    };
    $equip8 = array();
    for($i = 0;$i<$rCount; $i++)
    {
      $e = $responseEqu[$i]->equipment()->where('answer','=','Water Features')->first();
      if($e != null)
      {
        array_push($equip8,$e);
      }

    };
    $equip9 = array();
    for($i = 0;$i<$rCount; $i++)
    {
      $e = $responseEqu[$i]->equipment()->where('answer','=','Sandbox')->first();
      if($e != null)
      {
        array_push($equip9,$e);
      }

    };
    $equip10 = array();
    for($i = 0;$i<$rCount; $i++)
    {
      $e = $responseEqu[$i]->equipment()->where('answer','=','Garden')->first();
      if($e != null)
      {
        array_push($equip10,$e);
      }

    };
    $equip11 = array();
    for($i = 0;$i<$rCount; $i++)
    {
      $e = $responseEqu[$i]->equipment()->where('answer','=','Digital Technology')->first();
      if($e != null)
      {
        array_push($equip11,$e);
      }

    };
    $equip12 = array();
    for($i = 0;$i<$rCount; $i++)
    {
      $e = $responseEqu[$i]->equipment()->where('answer','=','Trees')->first();
      if($e != null)
      {
        array_push($equip12,$e);
      }

    };
    $equip13 = array();
    for($i = 0;$i<$rCount; $i++)
    {
      $e = $responseEqu[$i]->equipment()->where('answer','=','Park Benches')->first();
      if($e != null)
      {
        array_push($equip13,$e);
      }

    };

    $equArr = array($equip1,$equip2,$equip3,$equip4,$equip5,$equip6,$equip7,$equip8,$equip9,$equip10,$equip11,$equip12,$equip13);
    $equArrSize = sizeof($equArr);
    for($i = 0;$i < $equArrSize; $i++)
    {
      $size = count($equArr[$i]);
      if($size>$oldSize)
      {
        $largest = $equArr[$i];
        $oldSize = $size;
      }
    }
    if(sizeof($largest)!=0)
    {
      return $largest[0]->answer;
    }
    else {
      return null;
    }

  }
}
