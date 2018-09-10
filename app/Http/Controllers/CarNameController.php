<?php

namespace App\Http\Controllers;

use App\Car;

use Illuminate\Support\Facades\Auth;

use App\Building;
use Illuminate\Http\Request;

use App\Http\Requests\CarRequest;

use DB;

use App\User;

use App\Jobs\Cars;

use App\Notifications\PushCar;

class CarNameController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    private function recursiveShow($id){

        array_push( $this->theArray , $id);

        foreach ( Car::where('parent_id', $id )->get(['id']) as $key => $car) {

            $this->recursiveShow( $car->id );
            # code...
        }

    }
    private $theArray = array();

    private function recursiveDelete($id){

        array_push( $this->theArray , $id);

        foreach ( Car::where('parent_id', $id )->get(['id']) as $key => $car) {

            $this->recursiveDelete( $car->id );
            # code...
        }

    }


    public function index()
    {
        //
        return view('admin.car.tree');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    protected function store(CarRequest $request, Car $carS)
    {
        $create = $carS::create(
                            $request->all()
                            );

        Auth::user()->notify( new PushCar( $carS ) );



        return response()->json($create);


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\CarName  $carName
     * @return \Illuminate\Http\Response
     */
    public function show(CarName $carName)
    {
        //
    }

    public function getAll(Car $carGA, Building $b4, $slug ){

        $carGA = $carGA->where('slug', $slug)->first();

        $this->recursiveShow(  $carGA->id );

        $b4 = $b4->whereIn('id', $this->theArray )->where('status', 1)->orderBy('price', 'asc')->paginate(20);

        $this->theArray = array();

        return view('website.buildings.all', compact( 'b4' ));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\CarName  $carName
     * @return \Illuminate\Http\Response
     */
    public function edit(CarName $carName)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CarName  $carName
     * @return \Illuminate\Http\Response
     */
    public function update(CarRequest $request, Car $carU, $id)
    {

        $update = $carU::find($id)->update(
                                $request->all()
                                );
        return response()->json($update);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CarName  $carName
     * @return \Illuminate\Http\Response
     */
    public function destroy(CarName $carName)
    {
        //
    }

    public function getJSON( Request $request, Building $cRelation, Car $cls, $id ){

        $idOfTheRelation = $cRelation->where( 'id', $request->id )->first()->car_id;

        return $cls->find( $idOfTheRelation )->toJson();

    }


    public function getJSONALLCARS( Request $request, Car $clsAll){

        //return Users::all()->toJson()

        return $clsAll::all()->toJson();

    }

    public function getCarsAsNavigation( Request $request ){

        //return Users::all()->toJson()

        //$this->dispatch( New Cars() )

        DB::connection()->disableQueryLog();
        //

        return response()->json( '<h3 class="text-center">أسماء المركبات</h3>'.\App\Car::customUrl('cars/{slug}')->ulAttr(['class'=> '', 'role' => 'menu'])->renderAsHtml() );

        

    }



    public function updateWithJson(CarRequest $request, Car $carU, $id)
    {

        $update = $carU::find($id)->update(

            $request->all()
                                );
        return response()->json($update);
    }

    public function deleteWithJson(Request $request, Car $carD, $id)
    {
        $c = $carD::find($id);

        $this->recursiveDelete(  $c->id);


        Car::destroy( $this->theArray );

        $this->theArray = array();



        return response()->json(['إحذف و الحمد لله']);
    }

    /* NOTIFICATION*/

    public function updateNotificationAsUnread(Request $request, Car $carUN, $id){

        Auth::user()->unreadNotifications->markAsRead();

        return response()->json(['مقروئة']);

    }


}
