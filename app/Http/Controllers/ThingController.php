<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\ThingRequest;

use App\Thing;

use App\Building;

use DB;

class ThingController extends Controller
{
    //
    private function recursiveShow($id){

        array_push( $this->theArray , $id);

        foreach ( Thing::where('parent_id', $id )->get(['id']) as $key => $thing) {

            $this->recursiveShow( $thing->id );
            # code...
        }

    }
    private $theArray = array();

    private function recursiveDelete($id){

        array_push( $this->theArray , $id);

        foreach ( Thing::where('parent_id', $id )->get(['id']) as $key => $thing) {

            $this->recursiveDelete( $thing->id );
            # code...
        }

    }


    public function index(){

    	return view('admin.thing.tree');
    }

   
    public function create()
    {
    	# code...
    	return 'create';
    }

    protected function store(ThingRequest $request, Thing $thingS)
    {
    	$create = $thingS::create(
                            $request->all()
                            );
        return response()->json($create);


    }

    public function show( Thing $thingSM, $id ){

    	return 'show';
    }

    public function getAll( Thing $thingGA, Building $b4, $slug ){

    $thingGA = $thingGA->where('slug', $slug)->first();

    $this->recursiveShow(  $thingGA->id );

    $b4 = $b4->whereIn('id', $this->theArray )->where('status', 1)->orderBy('price', 'asc')->paginate(20);

    $this->theArray = array();

    return view('website.buildings.all', compact( 'b4' ));



    }

    public function edit(User $user, $id)
    {
    	return 'edit';
        
    }
    public function update(ThingRequest $request, Thing $thingU, $id)
    {

    	$update = $thingU::find($id)->update(
                                $request->all()
                                );
        return response()->json($update);
    }

    public function destroy (Thing $thingD, $id)
    {
    	
    	

    	
        
    }


    public function getJSON(Building $bRelation,  Request $request, Thing $tls, $id ){

        $idOfTheRelation = $bRelation->where( 'id', $request->id )->first()->thing_id;

        return $tls->find( $idOfTheRelation )->toJson();



    }

    public function getJSONALLTHINGS( Request $request, Thing $tlsAll){

        //return Users::all()->toJson()

        return $tlsAll::all()->toJson();

    }

    public function getThingsAsNavigation( Request $request ){

        //return Users::all()->toJson()

        DB::connection()->disableQueryLog();

        return response()->json( '<h3 class="text-center">أنواع القطع الميكانيكية</h3>'.\App\Thing::customUrl('pieces/{slug}')->ulAttr(['class'=> '', 'role' => 'menu'])->renderAsHtml() );
        

    }


    public function updateWithJson(ThingRequest $request, Thing $thingU, $id)
    {

        $update = $thingU::find($id)->update(

            $request->all()
                                );
        return response()->json($update);
    }

    public function deleteWithJson(Request $request, Thing $thingD, $id)
    {
        $t = $thingD::find($id);

        $this->recursiveDelete(  $t->id);


        Place::destroy( $this->theArray );

        $this->theArray = array();



        return response()->json(['إحذف و الحمد لله']);
    }


}
