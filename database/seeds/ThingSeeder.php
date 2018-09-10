<?php

use Illuminate\Database\Seeder;

class ThingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

    factory(App\Thing::class, 100)->create();

    App\Thing::getQuery()->delete();
DB::table('things')->insert(['id' => 1 ,'parent_id' => 0, 'name' => 'new', 'slug' => 'new']);


/*
DB::table('things')->insert(['parent_id' => 1, 'name' => 'Body and main part', 'slug' => 'body-and-main-part']);
DB::table('things')->insert(['parent_id' => 1, 'name' => 'Windows', 'slug' => 'windows']);
DB::table('things')->insert(['parent_id' => 1, 'name' => 'Electrical and electronics', 'slug' => 'electrical-and-electronics']);
DB::table('things')->insert(['parent_id' => 1, 'name' => 'Audio-video devices', 'slug' => 'audio-video-devices']);
DB::table('things')->insert(['parent_id' => 1, 'name' => 'Cameras', 'slug' => 'cameras']);
DB::table('things')->insert(['parent_id' => 1, 'name' => 'Charging system', 'slug' => 'charging-system']);
DB::table('things')->insert(['parent_id' => 1, 'name' => 'Electrical supply system', 'slug' => 'electrical-supply-system']);
DB::table('things')->insert(['parent_id' => 1, 'name' => 'Starting system', 'slug' => 'starting-system']);
DB::table('things')->insert(['parent_id' => 1, 'name' => 'Miscellaneous', 'slug' => 'miscellaneous']);






DB::table('things')->insert(['parent_id' => 1, 'name' => 'Floor components and parts', 'slug' => 'floor-components-and-parts']);
DB::table('things')->insert(['parent_id' => 1, 'name' => 'Other components', 'slug' => 'other-components']);
DB::table('things')->insert(['parent_id' => 1, 'name' => 'Engine components and parts', 'slug' => 'engine-components-and-parts']);
DB::table('things')->insert(['parent_id' => 1, 'name' => 'Engine oil system', 'slug' => 'engine-oil-system']);
DB::table('things')->insert(['parent_id' => 1, 'name' => 'Fuel supply system', 'slug' => 'fuel-supply-system']);
DB::table('things')->insert(['parent_id' => 1, 'name' => 'Miscellaneous auto parts', 'slug' => 'miscellaneous-auto-parts']);
DB::table('things')->insert(['parent_id' => 1, 'name' => 'Air conditioning system (A-C)', 'slug' => '51-air-conditioning-system-ac']);
DB::table('things')->insert(['parent_id' => 1, 'name' => 'Bearings', 'slug' => '52-bearings']);
DB::table('things')->insert(['parent_id' => 1, 'name' => 'Hose', 'slug' => '53-hose']);
DB::table('things')->insert(['parent_id' => 1, 'name' => 'Other miscellaneous parts', 'slug' => 'other-miscellaneous-auto-parts']);

*/
/*****************************************************************/

DB::table('things')->insert(['id' => 2 ,'parent_id' => 0, 'name' => 'Body and main part', 'slug' => 'body-and-main-part']);
DB::table('things')->insert(['parent_id' => 2, 'name' => 'Bonnet-hood', 'slug' => 'bonnet-hood']);
DB::table('things')->insert(['id' => 7, 'parent_id' => 2, 'name' => 'Bumper', 'slug' => 'bumper']);

DB::table('things')->insert(['parent_id' => 7, 'name' => 'Unexposed bumper', 'slug' => 'unexposed-bumper']);
DB::table('things')->insert(['parent_id' => 7, 'name' => 'Exposed Bumper', 'slug' => 'exposed-bumper']);


DB::table('things')->insert(['parent_id' => 2, 'name' => 'Cowl screen', 'slug' => 'cowl-screen']);
DB::table('things')->insert(['parent_id' => 2, 'name' => 'Fascia', 'slug' => 'fascia']);
DB::table('things')->insert(['parent_id' => 2, 'name' => 'Fender', 'slug' => 'fender']);
DB::table('things')->insert(['parent_id' => 2, 'name' => 'Front clip', 'slug' => 'front-clip']);
DB::table('things')->insert(['parent_id' => 2, 'name' => 'Front fascia', 'slug' => 'front-fascia']);
DB::table('things')->insert(['parent_id' => 2, 'name' => 'Grille', 'slug' => 'grille']);
DB::table('things')->insert(['parent_id' => 2, 'name' => 'Pillar', 'slug' => 'pillar']);
DB::table('things')->insert(['parent_id' => 2, 'name' => 'Quarter panel', 'slug' => 'quarter-panel']);
DB::table('things')->insert(['parent_id' => 2, 'name' => 'Radiator', 'slug' => 'radiator']);
DB::table('things')->insert(['parent_id' => 2, 'name' => 'Rocker', 'slug' => 'rocker']);
DB::table('things')->insert(['parent_id' => 2, 'name' => 'Roof rack', 'slug' => 'roof-rack']);
DB::table('things')->insert(['id' => 8,'parent_id' => 2, 'name' => 'Spoiler', 'slug' => 'spoiler']);
    DB::table('things')->insert(['parent_id' => 8, 'name' => 'Front spoiler (air dam)', 'slug' => 'front-spoiler-air-dam']);
    DB::table('things')->insert(['parent_id' => 8, 'name' => 'Rear spoiler (wing)', 'slug' => 'rear-spoiler-wing']);
DB::table('things')->insert(['id' => 9, 'parent_id' => 2, 'name' => 'Rims', 'slug' => 'rims']);

    DB::table('things')->insert(['parent_id' => 9, 'name' => 'Hubcap', 'slug' => 'hubcap']);
    DB::table('things')->insert(['parent_id' => 9, 'name' => 'Tire-Tyre', 'slug' => 'tire-tyre']);
DB::table('things')->insert(['parent_id' => 2, 'name' => 'Trim package', 'slug' => 'trim-package']);
DB::table('things')->insert(['id' => 10 , 'parent_id' => 2, 'name' => 'Trunk-boot-hatch', 'slug' => 'trunk-boot-hatch']);
    DB::table('things')->insert(['parent_id' => 10, 'name' => 'Trunk-boot-latch', 'slug' => 'trunk-boot-latch']);
DB::table('things')->insert(['parent_id' => 2, 'name' => 'Valance', 'slug' => 'valance']);
DB::table('things')->insert(['parent_id' => 2, 'name' => 'Welded assembly', 'slug' => 'welded-assembly']);

/*2-DOORS-11*/

DB::table('things')->insert(['id' => 11, 'parent_id' => 2, 'name' => 'Doors', 'slug' => 'doors']);

    DB::table('things')->insert(['parent_id' => 11, 'name' => 'Front Right Outer door', 'slug' => 'front-right-outer-door']);
    DB::table('things')->insert(['parent_id' => 11, 'name' => 'Front Left Side Outer door handle', 'slug' => 'front-left-side-outer-door-handle']);
    DB::table('things')->insert(['parent_id' => 11, 'name' => 'Rear Right Side Outer door handle', 'slug' => 'rear-right-side-outer-door-handle']);
    DB::table('things')->insert(['parent_id' => 11, 'name' => 'Rear Left Side Outer door handle', 'slug' => 'rear-left-side-outer-door-handle']);
    DB::table('things')->insert(['parent_id' => 11, 'name' => 'Front Right Side Inner door handle', 'slug' => 'front-right-side-inner-door-handle']);
    DB::table('things')->insert(['parent_id' => 11, 'name' => 'Front Left Side Inner door handle', 'slug' => 'front-left-side-inner-door-handle']);
    DB::table('things')->insert(['parent_id' => 11, 'name' => 'Rear Right Side Inner door handle', 'slug' => 'rear-right-side-inner-door-handle']);
    DB::table('things')->insert(['parent_id' => 11, 'name' => 'Rear Left Side Inner door handle', 'slug' => 'rear-left-side-inner-door-handle']);
    DB::table('things')->insert(['parent_id' => 11, 'name' => 'Back Door Outer Door Handles', 'slug' => 'back-door-outer-door-handles']);
    DB::table('things')->insert(['parent_id' => 11, 'name' => 'Front Right Side Window motor', 'slug' => 'front-right-side-window-motor']);
    DB::table('things')->insert(['parent_id' => 11, 'name' => 'Front Left Side Window motor', 'slug' => 'front-left-side-window-motor']);
    DB::table('things')->insert(['parent_id' => 11, 'name' => 'Rear Right Side Window motor', 'slug' => 'rear-right-side-window-motor']);
    DB::table('things')->insert(['parent_id' => 11, 'name' => 'Rear Left Side Window motor', 'slug' => 'rear-left-side-window-motor']);
    DB::table('things')->insert(['parent_id' => 11, 'name' => 'Door control module', 'slug' => 'door-control-module']);
    DB::table('things')->insert(['parent_id' => 11, 'name' => 'Door seal', 'slug' => 'door-seal']);
    DB::table('things')->insert(['parent_id' => 11, 'name' => 'Door water-shield', 'slug' => 'door-water-shield']);
    DB::table('things')->insert(['parent_id' => 11, 'name' => 'Hinge', 'slug' => 'hinge']);
    DB::table('things')->insert(['parent_id' => 11, 'name' => 'Door latch', 'slug' => 'door-latch']);
    DB::table('things')->insert(['parent_id' => 11, 'name' => 'Door lock and power door locks', 'slug' => 'door-lock-and-power-door-locks']);
    DB::table('things')->insert(['parent_id' => 11, 'name' => 'Center-locking', 'slug' => 'center-locking']);

    DB::table('things')->insert(['parent_id' => 11, 'name' => 'Fuel tank (or fuel filler) door', 'slug' => 'fuel-tank-or-fuel-filler-door']);


/************/
DB::table('things')->insert(['id' => 12, 'parent_id' => 2, 'name' => 'Windows', 'slug' => 'windows']);

DB::table('things')->insert(['parent_id' => 12, 'name' => 'Glass', 'slug' => 'glass']);
DB::table('things')->insert(['parent_id' => 12, 'name' => 'Front Right Side Door Glass', 'slug' => 'front-right-side-door-glass']);
DB::table('things')->insert(['parent_id' => 12, 'name' => 'Front Left Side Door Glass', 'slug' => 'front-left-side-door-glass']);
DB::table('things')->insert(['parent_id' => 12, 'name' => 'Rear Right Side Door Glass', 'slug' => 'rear-right-side-door-glass']);
DB::table('things')->insert(['parent_id' => 12, 'name' => 'Rear Left Side Door Glass', 'slug' => 'rear-left-side-door-glass']);
DB::table('things')->insert(['parent_id' => 12, 'name' => 'Rear Right Quarter Glass', 'slug' => 'rear-right-quarter-glass']);
DB::table('things')->insert(['parent_id' => 12, 'name' => 'Rear Left Quarter Glass', 'slug' => 'rear-left-quarter-glass']);
DB::table('things')->insert(['id' => 13, 'parent_id' => 12, 'name' => 'Sunroof', 'slug' => 'sunroof']);
    DB::table('things')->insert(['parent_id' => 13, 'name' => 'Sunroof motor', 'slug' => 'sunroof-motor']);
DB::table('things')->insert(['parent_id' => 12, 'name' => 'Sunroof Rail', 'slug' => 'sunroof-rail']);
DB::table('things')->insert(['parent_id' => 12, 'name' => 'Sunroof Glass', 'slug' => 'sunroof-glass']);
DB::table('things')->insert(['parent_id' => 12, 'name' => 'Window motor', 'slug' => 'window-motor']);
DB::table('things')->insert(['parent_id' => 12, 'name' => 'Window regulator', 'slug' => 'window-regulator']);
DB::table('things')->insert(['parent_id' => 12, 'name' => 'Windshield (also called windscreen)', 'slug' => 'windshield-also-called-windscreen']);

/*Electrical and electronics*/

DB::table('things')->insert(['id' => 3 ,'parent_id' => 0, 'name' => 'Electrical and electronics', 'slug' => 'electrical-and-electronics']);



    DB::table('things')->insert(['id' => 14, 'parent_id' => 3, 'name' => 'Cameras', 'slug' => 'cameras']);

    DB::table('things')->insert(['parent_id' => 14, 'name' => 'Backup camera', 'slug' => 'backup-camera']);

    DB::table('things')->insert(['parent_id' => 14, 'name' => 'Dashcam', 'slug' => 'dashcam']);

    DB::table('things')->insert(['id' => 15, 'parent_id' => 3, 'name' => 'Charging system', 'slug' => 'charging-system']);
        DB::table('things')->insert(['id' => 16, 'parent_id' => 15, 'name' => 'Alternator', 'slug' => 'alternator']);

/**/

            DB::table('things')->insert(['parent_id' => 16, 'name' => 'Alternator bearing', 'slug' => 'alternator-bearing']);
            DB::table('things')->insert(['parent_id' => 16, 'name' => 'Alternator bracket', 'slug' => 'alternator-bracket']);
            DB::table('things')->insert(['parent_id' => 16, 'name' => 'Alternator fan', 'slug' => 'alternator-fan']);
            DB::table('things')->insert(['parent_id' => 16, 'name' => 'Rectifier', 'slug' => 'rectifier']);
            DB::table('things')->insert(['parent_id' => 16, 'name' => 'Regulator', 'slug' => 'regulator']);
            DB::table('things')->insert(['parent_id' => 16, 'name' => 'Stator', 'slug' => 'stator']);
            DB::table('things')->insert(['parent_id' => 16, 'name' => 'Rotor', 'slug' => 'rotor']);
            DB::table('things')->insert(['parent_id' => 16, 'name' => 'Pulley', 'slug' => 'pulley']);
            DB::table('things')->insert(['parent_id' => 16, 'name' => 'Rotor Assembly', 'slug' => 'rotor-assembly']);
            DB::table('things')->insert(['parent_id' => 16, 'name' => 'Retainer', 'slug' => 'retainer']);
            DB::table('things')->insert(['parent_id' => 16, 'name' => 'Housing', 'slug' => 'housing']);
            DB::table('things')->insert(['parent_id' => 16, 'name' => 'Carbon Brushes', 'slug' => 'carbon-brushes']);
            DB::table('things')->insert(['parent_id' => 16, 'name' => 'Slip Rings', 'slug' => 'slip-rings']);
            DB::table('things')->insert(['parent_id' => 16, 'name' => 'Coil', 'slug' => 'coil']);
            DB::table('things')->insert(['parent_id' => 16, 'name' => 'Voltage Regulator', 'slug' => 'voltage-regulator']);

/**/
        DB::table('things')->insert(['id' => 17, 'parent_id' => 3, 'name' => 'Electrical supply system', 'slug' => 'electrical-supply-system']);

/**/
            DB::table('things')->insert(['id' => 18, 'parent_id' => 17, 'name' => 'Battery', 'slug' => 'battery']);
/**/
                DB::table('things')->insert(['parent_id' => 18, 'name' => 'Performance Battery', 'slug' => 'performance-battery']);
                DB::table('things')->insert(['parent_id' => 18, 'name' => 'Battery Box', 'slug' => 'battery-box']);
                DB::table('things')->insert(['parent_id' => 18, 'name' => 'Battery Cable terminal', 'slug' => 'battery-cable-terminal']);
                DB::table('things')->insert(['parent_id' => 18, 'name' => 'Battery Cable', 'slug' => 'battery-cable']);
                DB::table('things')->insert(['parent_id' => 18, 'name' => 'Battery Control system', 'slug' => 'battery-control-system']);
                DB::table('things')->insert(['parent_id' => 18, 'name' => 'Battery Plate', 'slug' => 'battery-plate']);
                DB::table('things')->insert(['parent_id' => 18, 'name' => 'Battery tray', 'slug' => 'battery-tray']);
                DB::table('things')->insert(['parent_id' => 18, 'name' => 'Battery Cap', 'slug' => 'battery-cap']);
                DB::table('things')->insert(['parent_id' => 18, 'name' => 'Sulfuric Acid (H2SO4)', 'slug' => 'sulfuric-acid-h2-so4']);
                DB::table('things')->insert(['parent_id' => 18, 'name' => 'Distilled Water', 'slug' => 'distilled-water']);
/**/
            DB::table('things')->insert(['parent_id' => 17, 'name' => 'Voltage regulator', 'slug' => 'voltage-regulator']);
/**/

    DB::table('things')->insert(['id' => 19, 'parent_id' => 3, 'name' => 'Gauges and meters', 'slug' => 'gauges-and-meters']);

        DB::table('things')->insert(['parent_id' => 19, 'name' => 'Ammeter', 'slug' => 'ammeter']);
        DB::table('things')->insert(['parent_id' => 19, 'name' => 'Clinometer', 'slug' => 'clinometer']);
        DB::table('things')->insert(['parent_id' => 19, 'name' => 'Fuel gauge', 'slug' => 'fuel-gauge']);
        DB::table('things')->insert(['parent_id' => 19, 'name' => 'manometer', 'slug' => 'manometer']);
        DB::table('things')->insert(['parent_id' => 19, 'name' => 'Hydrometer', 'slug' => 'hydrometer']);
        DB::table('things')->insert(['parent_id' => 19, 'name' => 'Odometer', 'slug' => 'odometer']);
        DB::table('things')->insert(['parent_id' => 19, 'name' => 'Speedometer', 'slug' => 'speedometer']);
        DB::table('things')->insert(['parent_id' => 19, 'name' => 'Tachometer', 'slug' => 'tachometer']);
        DB::table('things')->insert(['parent_id' => 19, 'name' => 'Temerature gauge', 'slug' => 'temerature-gauge']);
        DB::table('things')->insert(['parent_id' => 19, 'name' => 'Tire pressure gauge', 'slug' => 'tire-presure-gauge']);
        DB::table('things')->insert(['parent_id' => 19, 'name' => 'Vacuum gauge', 'slug' => 'vacuum-gauge']);

        DB::table('things')->insert(['parent_id' => 19, 'name' => 'Voltmeter', 'slug' => 'voltmeter']);
        DB::table('things')->insert(['parent_id' => 19, 'name' => 'Water temperature meter', 'slug' => 'water-temperature-meter']);
/**/
DB::table('things')->insert(['id' => 20, 'parent_id' => 3, 'name' => 'Ignition electronic system', 'slug' => 'ignition-electronic-system']);

DB::table('things')->insert(['parent_id' => 20, 'name' => 'Sparking cable', 'slug' => 'sparking-cable']);
DB::table('things')->insert(['parent_id' => 20, 'name' => 'Distributor', 'slug' => 'distributor']);

DB::table('things')->insert(['parent_id' => 20, 'name' => 'Distributor Cap', 'slug' => 'distributor-cap']);

DB::table('things')->insert(['parent_id' => 20, 'name' => 'Electronic timing controller', 'slug' => 'electronic-timing-controller']);

DB::table('things')->insert(['parent_id' => 20, 'name' => 'Ignition box', 'slug' => 'ignition-box']);

DB::table('things')->insert(['parent_id' => 20, 'name' => 'Ignition coil', 'slug' => 'ignition-coil']);

DB::table('things')->insert(['parent_id' => 20, 'name' => 'Ignition Coil Connector', 'slug' => 'ignition-coil-connector']);

DB::table('things')->insert(['parent_id' => 20, 'name' => 'Ignition coil parts', 'slug' => 'ignition-coil-parts']);

DB::table('things')->insert(['parent_id' => 20, 'name' => 'Ignition magneto', 'slug' => 'ignition-magneto']);

DB::table('things')->insert(['parent_id' => 20, 'name' => 'Spark plug', 'slug' => 'spark-plug']);

DB::table('things')->insert(['parent_id' => 20, 'name' => 'Glow Plug', 'slug' => 'glow-plug']);

/**/

DB::table('things')->insert(['id' => 21, 'parent_id' => 3, 'name' => 'Lighting and signaling system', 'slug' => 'lighting-and-signaling-system']);


DB::table('things')->insert(['parent_id' => 21, 'name' => 'Engine bay lighting', 'slug' => 'engine-bay-lighting']);
DB::table('things')->insert(['parent_id' => 21, 'name' => 'Fog light', 'slug' => 'fog-light']);
DB::table('things')->insert(['parent_id' => 21, 'name' => 'Halogen', 'slug' => 'halogen']);
DB::table('things')->insert(['id' => 22, 'parent_id' => 21, 'name' => 'Headlight', 'slug' => 'headlight']);
    DB::table('things')->insert(['parent_id' => 22, 'name' => 'Headlight motor', 'slug' => 'headlight-motor']);
DB::table('things')->insert(['parent_id' => 21, 'name' => 'Interior light and lamp', 'slug' => 'interior-light-and-lamp']);    
DB::table('things')->insert(['parent_id' => 21, 'name' => 'License plate lamp', 'slug' => 'license-plate-lamp']);  

DB::table('things')->insert(['parent_id' => 21, 'name' => 'Side lighting', 'slug' => 'side-lighting']);

DB::table('things')->insert(['id' => 23, 'parent_id' => 21, 'name' => 'Tail light', 'slug' => 'tail-light']);
    DB::table('things')->insert(['parent_id' => 23, 'name' => 'Tail light', 'slug' => 'tail-light-cover']);
DB::table('things')->insert(['parent_id' => 21, 'name' => 'Indicator light', 'slug' => 'indicator-light']);

/*************HERE I WAS*********/


DB::table('things')->insert(['parent_id' => 3, 'name' => 'Sensors', 'slug' => 'sensors']);


DB::table('things')->insert(['parent_id' => 24, 'name' => 'Airbag sensors', 'slug' => 'airbag-sensors']);
DB::table('things')->insert(['parent_id' => 24, 'name' => 'Automatic transmission speed sensor', 'slug' => 'automatic-transmission-speed-sensor']);
DB::table('things')->insert(['parent_id' => 24, 'name' => 'Camshaft position sensor', 'slug' => 'camshaft-position-sensor']);
DB::table('things')->insert(['parent_id' => 24, 'name' => 'Crankshaft position sensor', 'slug' => 'crankshaft-position-sensor']);
DB::table('things')->insert(['parent_id' => 24, 'name' => 'Coolant temperature sensor', 'slug' => 'coolant-temperature-sensor']);
DB::table('things')->insert(['parent_id' => 24, 'name' => 'Fuel level sensor', 'slug' => 'fuel-level-sensor']);
DB::table('things')->insert(['parent_id' => 24, 'name' => 'Fuel pressure sensor', 'slug' => 'fuel-pressure-sensor']);
DB::table('things')->insert(['parent_id' => 24, 'name' => 'Knock sensor', 'slug' => 'knock-sensor']);
DB::table('things')->insert(['parent_id' => 24, 'name' => 'Light sensor', 'slug' => 'light-sensor']);

DB::table('things')->insert(['parent_id' => 24, 'name' => 'MAP sensor', 'slug' => 'map-sensor']);
DB::table('things')->insert(['parent_id' => 24, 'name' => 'Mass airflow sensor', 'slug' => 'mass-airflow-sensor']);
DB::table('things')->insert(['parent_id' => 24, 'name' => 'Oil level sensor', 'slug' => 'oil-level-sensor']);
DB::table('things')->insert(['parent_id' => 24, 'name' => 'Oil pressure sensor', 'slug' => 'oil-pressure-sensor']);
DB::table('things')->insert(['parent_id' => 24, 'name' => 'Oxygen sensor', 'slug' => 'oxygen-sensor']);
DB::table('things')->insert(['parent_id' => 24, 'name' => 'Throttle position sensor', 'slug' => 'throttle-position-sensor']);
/**/
DB::table('things')->insert(['id' => 25, 'parent_id' => 3, 'name' => 'Starting system', 'slug' => 'starting-system']);

    DB::table('things')->insert(['id' => 26, 'parent_id' => 25, 'name' => 'Starter', 'slug' => 'starter']);

        DB::table('things')->insert(['parent_id' => 26, 'name' => 'Starter drive', 'slug' => 'starter-drive']);
        DB::table('things')->insert(['parent_id' => 26, 'name' => 'Starter motor', 'slug' => 'starter-motor']);
        DB::table('things')->insert(['parent_id' => 26, 'name' => 'Starter solenoid', 'slug' => 'starter-solenoid']);


    DB::table('things')->insert(['parent_id' => 25, 'name' => 'Glowplug', 'slug' => 'glowplug']);
/**/
DB::table('things')->insert(['id' => 27, 'parent_id' => 3, 'name' => 'Electrical Switches', 'slug' => 'electrical-switches']);


    DB::table('things')->insert(['parent_id' => 27, 'name' => 'Battery Switch', 'slug' => 'battery-switch']);
    DB::table('things')->insert(['parent_id' => 27, 'name' => 'Door Switch', 'slug' => 'door-switch']);
    DB::table('things')->insert(['parent_id' => 27, 'name' => 'Ignition Switch', 'slug' => 'ignition-switch']);
    DB::table('things')->insert(['parent_id' => 27, 'name' => 'Power window switch', 'slug' => 'power-window-switch']);
    DB::table('things')->insert(['parent_id' => 27, 'name' => 'Steering column switch', 'slug' => 'steering-column-switch']);
    DB::table('things')->insert(['parent_id' => 27, 'name' => 'Switch cover', 'slug' => 'switch-cover']);
    DB::table('things')->insert(['parent_id' => 27, 'name' => 'Switch panel', 'slug' => 'switch-panel']);
    DB::table('things')->insert(['parent_id' => 27, 'name' => 'Thermostat', 'slug' => 'thermostat']);
    DB::table('things')->insert(['parent_id' => 27, 'name' => 'Frame switch', 'slug' => 'frame-switch']);
    DB::table('things')->insert(['parent_id' => 27, 'name' => 'Fan ditch', 'slug' => 'fan-ditch']);
    DB::table('things')->insert(['parent_id' => 27, 'name' => 'Parts and functions of starter system', 'slug' => 'parts-and-functions-of-starter-system']);
/**/
DB::table('things')->insert(['id' => 28, 'parent_id' => 3, 'name' => 'Wiring harnesses', 'slug' => 'wiring-harnesses']);

    DB::table('things')->insert(['parent_id' => 28, 'name' => 'Air conditioning harness', 'slug' => 'air-conditioning-harness']);
    DB::table('things')->insert(['parent_id' => 28, 'name' => 'floor harness', 'slug' => 'floor-harness']);
    DB::table('things')->insert(['parent_id' => 28, 'name' => 'Main harness', 'slug' => 'main-harness']);
    DB::table('things')->insert(['parent_id' => 28, 'name' => 'control harness', 'slug' => 'control-harness']);

/**/
DB::table('things')->insert(['id' => 29, 'parent_id' => 3, 'name' => 'Miscellaneous', 'slug' => 'miscellaneous']);

    DB::table('things')->insert(['parent_id' => 29, 'name' => 'Air bag control module', 'slug' => 'air-bag-control-module']);
    DB::table('things')->insert(['parent_id' => 29, 'name' => 'Alarm and siren', 'slug' => 'alarm-and-siren']);
    DB::table('things')->insert(['parent_id' => 29, 'name' => 'Central locking system', 'slug' => 'central-locking-system']);
    DB::table('things')->insert(['parent_id' => 29, 'name' => 'Chassis control computer', 'slug' => 'chassis-control-computer']);
    DB::table('things')->insert(['parent_id' => 29, 'name' => 'Cruise control computer', 'slug' => 'cruise-control-computer']);
    DB::table('things')->insert(['parent_id' => 29, 'name' => 'Door contact', 'slug' => 'door-contact']);

    DB::table('things')->insert(['parent_id' => 29, 'name' => 'Engine computer and management system', 'slug' => 'engine-computer-and-management-system']);
    DB::table('things')->insert(['parent_id' => 29, 'name' => 'Engine control unit', 'slug' => 'engine-control-unit']);
    DB::table('things')->insert(['id' => 30, 'parent_id' => 29, 'name' => 'Fuse', 'slug' => 'fuse']);
        DB::table('things')->insert(['parent_id' => 30, 'name' => 'Fuse box', 'slug' => 'fuse-box']);
    DB::table('things')->insert(['parent_id' => 29, 'name' => 'Ground strap', 'slug' => 'ground-strap']);
    DB::table('things')->insert(['parent_id' => 29, 'name' => 'Grab Handle', 'slug' => 'grabe-handle']);
    DB::table('things')->insert(['parent_id' => 29, 'name' => 'Navigation system / GPS navigation device', 'slug' => 'navigation-system-gps-navigation-device']);

    DB::table('things')->insert(['parent_id' => 29, 'name' => 'Performance chip', 'slug' => 'performance-chip']);
    DB::table('things')->insert(['parent_id' => 29, 'name' => 'Performance monitor', 'slug' => 'performance-monitor']);
    DB::table('things')->insert(['parent_id' => 29, 'name' => 'Relay connector', 'slug' => 'relay-connector']);
    DB::table('things')->insert(['parent_id' => 29, 'name' => 'Remote lock', 'slug' => 'remote-lock']);
    DB::table('things')->insert(['parent_id' => 29, 'name' => 'Shift improver', 'slug' => 'shift-improver']);
    DB::table('things')->insert(['parent_id' => 29, 'name' => 'Speed controller', 'slug' => 'speed-controller']);
    DB::table('things')->insert(['parent_id' => 29, 'name' => 'Speedometer calibrator', 'slug' => 'speedometer-calibrator']);
    DB::table('things')->insert(['parent_id' => 29, 'name' => 'Transmission comuter', 'slug' => 'transmission-computer']);
    DB::table('things')->insert(['parent_id' => 29, 'name' => 'Wiring connector', 'slug' => 'wiring-connector']);

/**/

DB::table('things')->insert(['id' => 4 ,'parent_id' => 0, 'name' => 'Interior', 'slug' => 'interior']);
    DB::table('things')->insert(['id' => 64 ,'parent_id' => 4, 'name' => 'Floor components and parts', 'slug' => 'floor-components-and-parts']);

        DB::table('things')->insert(['parent_id' => 64, 'name' => 'Carpet and other floor material', 'slug' => 'carpet-and-other-floor-material']);
        DB::table('things')->insert(['parent_id' => 64, 'name' => 'Center console', 'slug' => 'center-console']);


    DB::table('things')->insert(['id' => 31 ,'parent_id' => 4, 'name' => 'Other components', 'slug' => 'other-components']);
        DB::table('things')->insert(['parent_id' => 31, 'name' => 'Trap', 'slug' => 'trap']);
        DB::table('things')->insert(['parent_id' => 31, 'name' => 'Roll cage', 'slug' => 'roll-cage']);


    DB::table('things')->insert(['id' => 32 ,'parent_id' => 4, 'name' => 'Car seat', 'slug' => 'car-seat']);

        DB::table('things')->insert(['parent_id' => 32, 'name' => 'Arm Rest', 'slug' => 'arm-rest']);
        DB::table('things')->insert(['parent_id' => 32, 'name' => 'Bench seat', 'slug' => 'bench-seat']);
        DB::table('things')->insert(['parent_id' => 32, 'name' => 'Bucket seat', 'slug' => 'bucket-seat']);
        DB::table('things')->insert(['parent_id' => 32, 'name' => 'Children and baby car seat', 'slug' => 'children-and-bay-car-seat']);
        DB::table('things')->insert(['parent_id' => 32, 'name' => 'Fastener', 'slug' => 'fastener']);
        DB::table('things')->insert(['parent_id' => 32, 'name' => 'Headrest', 'slug' => 'headrest']);
        DB::table('things')->insert(['parent_id' => 32, 'name' => 'Seat belt', 'slug' => 'seat-belt']);
        DB::table('things')->insert(['parent_id' => 32, 'name' => 'Seat bracket', 'slug' => 'seat-bracket']);
        DB::table('things')->insert(['parent_id' => 32, 'name' => 'Seat cover', 'slug' => 'seat-cover']);
        DB::table('things')->insert(['parent_id' => 32, 'name' => 'Seat track', 'slug' => 'seat-track']);
        DB::table('things')->insert(['parent_id' => 32, 'name' => 'Other seat components', 'slug' => 'other-seat-components']);


DB::table('things')->insert(['id' => 5 ,'parent_id' => 0, 'name' => 'Power-train and chassis', 'slug' => 'power-train-and-chassis']);

    DB::table('things')->insert(['id' => 33 ,'parent_id' => 5, 'name' => 'Braking system', 'slug' => 'braking-system']);

        DB::table('things')->insert(['id' => 34 ,'parent_id' => 5, 'name' => 'Anti-lock braking system', 'slug' => 'anti-lock-braking-system']);

           DB::table('things')->insert(['parent_id' => 34, 'name' => 'ABS steel pin', 'slug' => 'abs-steel-pin']);
            DB::table('things')->insert(['parent_id' => 34, 'name' => 'FR Side Sensor', 'slug' => 'fr-side-sensor']);
            DB::table('things')->insert(['parent_id' => 34, 'name' => 'FL Side Sensor', 'slug' => 'fl-side-sensor']);
            DB::table('things')->insert(['parent_id' => 34, 'name' => 'RR Side Sensor', 'slug' => 'rr-side-sensor']);
            DB::table('things')->insert(['parent_id' => 34, 'name' => 'RL Side Sensor', 'slug' => 'rl-side-sensor']);
            DB::table('things')->insert(['parent_id' => 34, 'name' => 'ABS Motor Circuit', 'slug' => 'abs-motor-circuit']);
            /******NOW I SHOULD ADJUSTEMENT MECHANIC SYS******/


        DB::table('things')->insert([ 'parent_id' => 33, 'name' => 'Adjusting mechanism', 'slug' => 'adjusting-mechanism']);





        DB::table('things')->insert(['parent_id' => 33, 'name' => 'Anchor', 'slug' => 'anchor']);
        DB::table('things')->insert(['parent_id' => 33, 'name' => 'Bleed nipple', 'slug' => 'bleed-nipple']);
        DB::table('things')->insert(['parent_id' => 33, 'name' => 'Brake backing plate', 'slug' => 'brake-backing-plate']);
        DB::table('things')->insert(['parent_id' => 33, 'name' => 'Brake backing pad', 'slug' => 'brake-backing-pad']);
        DB::table('things')->insert(['parent_id' => 33, 'name' => 'Brake cooling duct', 'slug' => 'brake-cooling-duct']);
        DB::table('things')->insert(['parent_id' => 33, 'name' => 'Brake disc', 'slug' => 'brake-disc']);
        DB::table('things')->insert(['parent_id' => 33, 'name' => 'Brake Fluid', 'slug' => 'brake-fluid']);

        DB::table('things')->insert(['parent_id' => 33, 'name' => 'Brake drum', 'slug' => 'brake-drum']);
        DB::table('things')->insert(['parent_id' => 33, 'name' => 'Brake lining', 'slug' => 'brake-lining']);
        DB::table('things')->insert(['parent_id' => 33, 'name' => 'Brake pad', 'slug' => 'brake-pad']);
        DB::table('things')->insert(['parent_id' => 33, 'name' => 'Brake pedal', 'slug' => 'brake-pedal']);


        DB::table('things')->insert(['parent_id' => 33, 'name' => 'Brake piston', 'slug' => 'brake-piston']);
        DB::table('things')->insert(['parent_id' => 33, 'name' => 'Brake pump', 'slug' => 'brake-pump']);
        DB::table('things')->insert(['parent_id' => 33, 'name' => 'Brake roll', 'slug' => 'brake-roll']);
        DB::table('things')->insert(['parent_id' => 33, 'name' => 'Brake rotor', 'slug' => 'brake-rotor']);

        DB::table('things')->insert(['parent_id' => 33, 'name' => 'Brake servo', 'slug' => 'brake-servo']);
        DB::table('things')->insert(['id' => 35, 'parent_id' => 33, 'name' => 'Brake shoe', 'slug' => 'brake-shoe']);
            DB::table('things')->insert(['parent_id' => 35, 'name' => 'Brake lining', 'slug' => 'brake-lining']);

            DB::table('things')->insert(['parent_id' => 35, 'name' => 'Shoe web', 'slug' => 'shoe-web']);

        DB::table('things')->insert(['parent_id' => 33, 'name' => 'Brake warning light', 'slug' => 'brake-warning-light']);


        DB::table('things')->insert(['parent_id' => 33, 'name' => 'Calibrated friction brake', 'slug' => 'calibrated-friction-brake']);

        DB::table('things')->insert(['parent_id' => 33, 'name' => 'Caliper', 'slug' => 'caliper']);


        DB::table('things')->insert(['parent_id' => 33, 'name' => 'Combination valve', 'slug' => 'combination-valve']);
        DB::table('things')->insert(['parent_id' => 33, 'name' => 'Dual circuit brake system
', 'slug' => 'dual-circuit-brake-system
']);

        DB::table('things')->insert([ 'parent_id' => 33, 'name' => 'Hold-down springs', 'slug' => 'hold-down-springs']);
        DB::table('things')->insert(['id' => 36, 'parent_id' => 33, 'name' => 'Hose', 'slug' => 'hose']);

            DB::table('things')->insert(['parent_id' => 36, 'name' => 'Brake booster hose', 'slug' => 'brake-booster-hose']);
            DB::table('things')->insert(['parent_id' => 36, 'name' => 'Air brake nylon hose', 'slug' => 'air-brake-nylon-hose']);
            DB::table('things')->insert(['parent_id' => 36, 'name' => 'Brake duct hose', 'slug' => 'brake-duct-hose']);

        DB::table('things')->insert(['parent_id' => 33, 'name' => 'Hydraulic booster unit', 'slug' => 'hydraulic-booster-unit']);
        DB::table('things')->insert(['parent_id' => 33, 'name' => 'Load-sensing valve', 'slug' => 'load-sensing-valve']);
        DB::table('things')->insert(['parent_id' => 33, 'name' => 'Master cylinder', 'slug' => 'master-cylinder']);
        DB::table('things')->insert(['parent_id' => 33, 'name' => 'Metering valve', 'slug' => 'metering-valve']);
        DB::table('things')->insert(['parent_id' => 33, 'name' => 'Other braking system parts', 'slug' => 'other-braking-system-parts']);
        DB::table('things')->insert(['parent_id' => 33, 'name' => 'Hand breake', 'slug' => 'hand-brake']);
        DB::table('things')->insert(['parent_id' => 33, 'name' => 'Pressure differential valve', 'slug' => 'pressure-differential-valve']);

        DB::table('things')->insert(['parent_id' => 33, 'name' => 'Reservoir', 'slug' => 'reservoir']);
        DB::table('things')->insert(['parent_id' => 33, 'name' => 'Shoe return spring', 'slug' => 'shoe-return-spring']);
        DB::table('things')->insert(['parent_id' => 33, 'name' => 'Vacuum brake booster', 'slug' => 'vacuum-brake-booster']);
        DB::table('things')->insert(['parent_id' => 33, 'name' => 'Wheel cylinder', 'slug' => 'wheel-cylinder']);
        DB::table('things')->insert(['parent_id' => 33, 'name' => 'Wheel stud', 'slug' => 'wheel-stud']);

/**/
    DB::table('things')->insert(['id' => 37, 'parent_id' => 5, 'name' => 'Engine components and parts', 'slug' => 'engine-components-and-parts']);

        DB::table('things')->insert(['parent_id' => 37, 'name' => 'Diesel engine', 'slug' => 'diesel-engine']);

        DB::table('things')->insert(['parent_id' => 37, 'name' => 'Accessory belt', 'slug' => 'accessory-belt']);
        DB::table('things')->insert(['parent_id' => 37, 'name' => 'Air duct', 'slug' => 'air-duct']);
        DB::table('things')->insert(['parent_id' => 37, 'name' => 'Air intake housing', 'slug' => 'air-intake-housing']);
        DB::table('things')->insert(['parent_id' => 37, 'name' => 'Air intake manifold', 'slug' => 'air-intake-manifold']);


        DB::table('things')->insert(['id' => 38, 'parent_id' => 37, 'name' => 'Camshaft', 'slug' => 'camshaft']);

            DB::table('things')->insert(['parent_id' => 38, 'name' => 'Camshaft bearing', 'slug' => 'camshaft-bearing']);
            DB::table('things')->insert(['parent_id' => 38, 'name' => 'Camshaft fastener', 'slug' => 'camshaft-fastener']);
            DB::table('things')->insert(['parent_id' => 38, 'name' => 'Camshaft follower', 'slug' => 'camshaft-follower']);
            DB::table('things')->insert(['parent_id' => 38, 'name' => 'Camshaft locking plate', 'slug' => 'camshaft-locking-plate']);
            DB::table('things')->insert(['parent_id' => 38, 'name' => 'Camshaft pushrod', 'slug' => 'camshaft-pushrod']);
            DB::table('things')->insert(['parent_id' => 38, 'name' => 'Camshaft spacer ring', 'slug' => 'camshaft-spacer-ring']);
            DB::table('things')->insert(['parent_id' => 38, 'name' => 'Camshaft phase variator', 'slug' => 'camshaft-phase-variator']);


        DB::table('things')->insert(['id' => 39, 'parent_id' => 37, 'name' => 'Connecting rod', 'slug' => 'connecting-rod']);

            DB::table('things')->insert(['parent_id' => 39, 'name' => 'Connecting rod bearing', 'slug' => 'connecting-rod-bearing']);
            DB::table('things')->insert(['parent_id' => 39, 'name' => 'Connecting rod bolt', 'slug' => 'connecting-rod-bolt']);
            DB::table('things')->insert(['parent_id' => 39, 'name' => 'Connecting rod washer', 'slug' => 'connecting-rod-washer']);

        DB::table('things')->insert(['parent_id' => 37, 'name' => 'Crank case', 'slug' => 'crank-case']);
        DB::table('things')->insert(['parent_id' => 37, 'name' => 'Crank pulley', 'slug' => 'crank-pulley']);
        DB::table('things')->insert(['parent_id' => 37, 'name' => 'Crankshaft', 'slug' => 'crankshaft']);
        DB::table('things')->insert(['parent_id' => 37, 'name' => 'Crankshaft oil seal', 'slug' => 'crankshaft-oil-seal']);

        DB::table('things')->insert(['id' => 40, 'parent_id' => 37, 'name' => 'Cylinder head', 'slug' => 'cylinder-head']);

            DB::table('things')->insert(['parent_id' => 40, 'name' => 'Cylinder head cover', 'slug' => 'cylinder-head-cover']);
            DB::table('things')->insert(['parent_id' => 40, 'name' => 'Other cylinder head cover parts', 'slug' => 'other-cylinder-head-cover-parts']);
            DB::table('things')->insert(['parent_id' => 40, 'name' => 'Cylander head gasket', 'slug' => 'cylander-head-gasket']);

        DB::table('things')->insert(['parent_id' => 37, 'name' => 'Distributor', 'slug' => 'distributor']);

        DB::table('things')->insert(['parent_id' => 37, 'name' => 'Distributor Cap', 'slug' => 'distributor-cap']);
        DB::table('things')->insert(['parent_id' => 37, 'name' => 'Driver Belt', 'slug' => 'driver-belt']);
        DB::table('things')->insert(['parent_id' => 37, 'name' => 'Engine block', 'slug' => 'engine-block']);
        DB::table('things')->insert(['parent_id' => 37, 'name' => 'Engine cradle', 'slug' => 'engine-cradle']);
        DB::table('things')->insert(['parent_id' => 37, 'name' => 'Engine shake damper and vibration absorber', 'slug' => 'engine-shake-damper-and vibration-absorber']);
        DB::table('things')->insert(['parent_id' => 37, 'name' => 'Engine valve', 'slug' => 'engine-valve']);

        DB::table('things')->insert(['parent_id' => 37, 'name' => 'Fan belt', 'slug' => 'fan-belt']);
        DB::table('things')->insert(['parent_id' => 37, 'name' => 'Gudgeon pin', 'slug' => 'gudgeon-pin']);
        DB::table('things')->insert(['parent_id' => 37, 'name' => 'Harmonic balancer', 'slug' => 'harmonic-balancer']);
        DB::table('things')->insert(['parent_id' => 37, 'name' => 'Heater', 'slug' => 'heater']);
        DB::table('things')->insert(['parent_id' => 37, 'name' => 'Mounting', 'slug' => 'mounting']);
        DB::table('things')->insert(['id' => 41, 'parent_id' => 37, 'name' => 'Piston', 'slug' => 'piston']);

            DB::table('things')->insert(['parent_id' => 41, 'name' => 'Piston ring and crank pin', 'slug' => 'piston-ring-and-cranck-in']);
            DB::table('things')->insert(['parent_id' => 41, 'name' => 'Piston ring bush', 'slug' => 'piston-ring-bush']);
            DB::table('things')->insert(['parent_id' => 41, 'name' => 'Piston ring and circlip', 'slug' => 'piston-ring-and-circlip']);

        DB::table('things')->insert(['parent_id' => 37, 'name' => 'Piston', 'slug' => 'piston']);
        DB::table('things')->insert(['parent_id' => 37, 'name' => 'Poppet valve', 'slug' => 'poppet-valve']);
        DB::table('things')->insert(['parent_id' => 37, 'name' => 'PCV valve', 'slug' => 'pcv-valve']);
        DB::table('things')->insert(['parent_id' => 37, 'name' => 'Pulley part', 'slug' => 'pulley-part']);
        DB::table('things')->insert(['parent_id' => 37, 'name' => 'Rocker arm', 'slug' => 'rocker-arm']);
        DB::table('things')->insert(['parent_id' => 37, 'name' => 'Rocker cover', 'slug' => 'rocker-cover']);
        DB::table('things')->insert(['id' => 42, 'parent_id' => 37, 'name' => 'Starter motor', 'slug' => 'starter-motor']);

            DB::table('things')->insert(['parent_id' => 42, 'name' => 'Starter pinion', 'slug' => 'starter-pinion']);
            DB::table('things')->insert(['parent_id' => 42, 'name' => 'Starter ring', 'slug' => 'starter-ring']);
        DB::table('things')->insert(['parent_id' => 37, 'name' => 'Valve cover', 'slug' => 'valve-cover']);
        DB::table('things')->insert(['parent_id' => 37, 'name' => 'Valve housing', 'slug' => 'valve-housing']);
        DB::table('things')->insert(['parent_id' => 37, 'name' => 'Valve spring', 'slug' => 'valve-spring']);
        DB::table('things')->insert(['parent_id' => 37, 'name' => 'Valve stem seal', 'slug' => 'valve-stem-seal']);
        DB::table('things')->insert(['parent_id' => 37, 'name' => 'Water pump pulley', 'slug' => 'water-pump-pulley']);


        /*****************************************************/
    DB::table('things')->insert(['id' => 43, 'parent_id' => 5, 'name' => 'Engine cooling system', 'slug' => 'engine-cooling-system']);

        DB::table('things')->insert(['parent_id' => 43, 'name' => 'Air blower', 'slug' => 'air-blower']);
        DB::table('things')->insert(['parent_id' => 43, 'name' => 'Cooling fan', 'slug' => 'cooling-fan']);

        DB::table('things')->insert(['parent_id' => 43, 'name' => 'Fan blade', 'slug' => 'fan-blade']);
        DB::table('things')->insert(['parent_id' => 43, 'name' => 'Fan clutch', 'slug' => 'fan-clutch']);
        DB::table('things')->insert(['id' => 44, 'parent_id' => 43, 'name' => 'Radiator', 'slug' => 'radiator']);

            DB::table('things')->insert(['parent_id' => 44, 'name' => 'Radiator bolt', 'slug' => 'radiator-bolt']);
            DB::table('things')->insert(['parent_id' => 44, 'name' => 'Radiator shroud', 'slug' => 'radiator-shroud']);
            DB::table('things')->insert(['parent_id' => 44, 'name' => 'Radiator gasket', 'slug' => 'radiator-gasket']);
            DB::table('things')->insert(['parent_id' => 44, 'name' => 'Radiator pressure cap', 'slug' => 'radiator-pressure-cap']);
            DB::table('things')->insert(['parent_id' => 44, 'name' => 'Overflow tank', 'slug' => 'overflow-tank']);
            DB::table('things')->insert(['parent_id' => 44, 'name' => 'Thermostat', 'slug' => 'thermostat']);

        DB::table('things')->insert(['parent_id' => 43, 'name' => 'Water neck', 'slug' => 'water-neck']);
        DB::table('things')->insert(['parent_id' => 43, 'name' => 'Water neck o ring', 'slug' => 'water-neck-o-ring']);
        DB::table('things')->insert(['parent_id' => 43, 'name' => 'Water pipe', 'slug' => 'water-pipe']);
        DB::table('things')->insert(['parent_id' => 43, 'name' => 'Water pump gasket', 'slug' => 'water-pump-gasket']);
        DB::table('things')->insert(['parent_id' => 43, 'name' => 'Water tank', 'slug' => 'water-tank']);

    /******/


    DB::table('things')->insert(['parent_id' => 5, 'name' => 'Engine oil system', 'slug' => 'engine-oil-system']);


        DB::table('things')->insert(['parent_id' => 44, 'name' => 'Oil filter', 'slug' => 'oil-filter']);
        DB::table('things')->insert(['parent_id' => 44, 'name' => 'Oil gasket', 'slug' => 'oil-gasket']);
        DB::table('things')->insert(['parent_id' => 44, 'name' => 'Oil pan', 'slug' => 'oil-pan']);
        DB::table('things')->insert(['parent_id' => 44, 'name' => 'Oil pipe', 'slug' => 'oil-pipe']);
        DB::table('things')->insert(['parent_id' => 44, 'name' => 'Oil pump', 'slug' => 'oil-pump']);
        DB::table('things')->insert(['parent_id' => 44, 'name' => 'Oil strainer', 'slug' => 'oil-strainer']);

/**/


    DB::table('things')->insert(['id' => 45, 'parent_id' => 5, 'name' => 'Exhaust system', 'slug' => 'exhaust-system']);

        DB::table('things')->insert(['parent_id' => 45, 'name' => 'Catalytic converter', 'slug' => 'catalytic-converter']);
        DB::table('things')->insert(['parent_id' => 45, 'name' => 'Exhaust clamp and bracket', 'slug' => 'exhaust-clamp-and-bracket']);
        DB::table('things')->insert(['parent_id' => 45, 'name' => 'Exhaust flange gasket', 'slug' => 'exhaust-flange-gasket']);

        DB::table('things')->insert(['parent_id' => 45, 'name' => 'Exhaust gasket', 'slug' => 'exhaust-gasket']);
        DB::table('things')->insert(['parent_id' => 45, 'name' => 'Exhaust manifold', 'slug' => 'exhaust-manifold']);
        DB::table('things')->insert(['parent_id' => 45, 'name' => 'Exhaust manifold gasket', 'slug' => 'exhaust-manifold-gasket']);
        DB::table('things')->insert(['parent_id' => 45, 'name' => 'Exhaust pipe', 'slug' => 'exhaust-pipe']);
        DB::table('things')->insert(['parent_id' => 45, 'name' => 'Heat shield', 'slug' => 'heat-shield']);
        DB::table('things')->insert(['parent_id' => 45, 'name' => 'Heat sleeving and tape', 'slug' => 'heat-sleeving-and-tape']);
        DB::table('things')->insert(['parent_id' => 45, 'name' => 'Resonator', 'slug' => 'resonator']);
        DB::table('things')->insert(['parent_id' => 45, 'name' => 'Muffler', 'slug' => 'muffler']);
        DB::table('things')->insert(['parent_id' => 45, 'name' => 'Spacer ring', 'slug' => 'spacer-ring']);


        /**/

        DB::table('things')->insert(['id' => 46, 'parent_id' => 5, 'name' => 'Fuel supply system', 'slug' => 'fuel-supply-system']);

            DB::table('things')->insert(['parent_id' => 46, 'name' => 'Air filter', 'slug' => 'air-filter']);
            DB::table('things')->insert(['id' => 47, 'parent_id' => 46, 'name' => 'Carburetor', 'slug' => 'carburetor']);
                DB::table('things')->insert(['parent_id' => 47, 'name' => 'Carburetor parts', 'slug' => 'carburetor-parts']);
            DB::table('things')->insert(['parent_id' => 46, 'name' => 'Choke cable', 'slug' => 'choke-cable']);
            DB::table('things')->insert(['parent_id' => 46, 'name' => 'Fuel cap', 'slug' => 'fuel-cap']);
            DB::table('things')->insert(['id' => 48,'parent_id' => 46, 'name' => 'Fuel cell', 'slug' => 'fuel-cell']);
                DB::table('things')->insert(['parent_id' => 48, 'name' => 'Fuel cell component', 'slug' => 'fuel-cell-component']);
            DB::table('things')->insert(['parent_id' => 46, 'name' => 'Fuel cooler', 'slug' => 'fuel-cooler']);
            DB::table('things')->insert(['parent_id' => 46, 'name' => 'Fuel distributor', 'slug' => 'fuel-distributor']);
            DB::table('things')->insert(['parent_id' => 46, 'name' => 'Fuel filter', 'slug' => 'fuel-filter']);
            DB::table('things')->insert(['parent_id' => 46, 'name' => 'Fuel filter seal', 'slug' => 'fuel-filter-seal']);
            DB::table('things')->insert(['parent_id' => 46, 'name' => 'Fuel injector', 'slug' => 'fuel-injector']);
            DB::table('things')->insert(['parent_id' => 46, 'name' => 'Fuel injector nozzle', 'slug' => 'fuel-injector-nozzle']);
            DB::table('things')->insert(['parent_id' => 46, 'name' => 'Fuel line', 'slug' => 'fuel-line']);
            DB::table('things')->insert(['parent_id' => 46, 'name' => 'Fuel pump', 'slug' => 'fuel-pump']);
            DB::table('things')->insert(['parent_id' => 46, 'name' => 'Fuel pump gasket', 'slug' => 'fuel-pump-gasket']);
            DB::table('things')->insert(['parent_id' => 46, 'name' => 'Fuel pressure regulator', 'slug' => 'fuel-pressure-regulator']);
            DB::table('things')->insert(['parent_id' => 46, 'name' => 'Fuel rail', 'slug' => 'fuel-rail']);
            DB::table('things')->insert(['id' => 49,'parent_id' => 46, 'name' => 'Fuel tank', 'slug' => 'fuel-tank']);
                DB::table('things')->insert(['parent_id' => 49, 'name' => 'Fuel tank cover', 'slug' => 'fuel-tank-cover']);
            DB::table('things')->insert(['parent_id' => 46, 'name' => 'Fuel water separator', 'slug' => 'fuel-water-separator']);
            DB::table('things')->insert(['parent_id' => 46, 'name' => 'Intake manifold', 'slug' => 'intake-manifold']);
            DB::table('things')->insert(['parent_id' => 46, 'name' => 'Intake manifold gasket', 'slug' => 'intake-manifold-gasket']);
            DB::table('things')->insert(['parent_id' => 46, 'name' => 'LPG (Liquefied petroleum gas) system assembly', 'slug' => 'l-g-p']);
            DB::table('things')->insert(['parent_id' => 46, 'name' => 'Throttle body', 'slug' => 'throttle-body']);


        DB::table('things')->insert(['id' => 50, 'parent_id' => 5, 'name' => 'Suspension and steering systems', 'slug' => 'suspension-and-steering-systems']);


            DB::table('things')->insert(['parent_id' => 50, 'name' => 'axle', 'slug' => 'axle']);
            DB::table('things')->insert(['parent_id' => 50, 'name' => 'Camber arm', 'slug' => 'camber-arm']);
            DB::table('things')->insert(['parent_id' => 50, 'name' => 'Control arm', 'slug' => 'control-arm']);
            DB::table('things')->insert(['parent_id' => 50, 'name' => 'Beam axle', 'slug' => 'beam-axle']);
            DB::table('things')->insert(['parent_id' => 50, 'name' => 'Kingpin', 'slug' => 'kingpin']);
            DB::table('things')->insert(['parent_id' => 50, 'name' => 'Lateral link', 'slug' => 'lateral-link']);
            DB::table('things')->insert(['parent_id' => 50, 'name' => 'Pan-hard rod', 'slug' => 'pan-hard-rod']);
            DB::table('things')->insert(['parent_id' => 50, 'name' => 'Pit-man arm', 'slug' => 'pit-man-arm']);
            DB::table('things')->insert(['parent_id' => 50, 'name' => 'Power steering assembly and component', 'slug' => 'power-steering-assembly-and-component']);
            DB::table('things')->insert(['parent_id' => 50, 'name' => 'Rack end', 'slug' => 'rack-end']);
            DB::table('things')->insert(['parent_id' => 50, 'name' => 'Shock absorber', 'slug' => 'shock-absorber']);
            DB::table('things')->insert(['id'=> 51,'parent_id' => 50, 'name' => 'Spindle', 'slug' => 'spindle']);

                DB::table('things')->insert(['parent_id' => 51, 'name' => 'Air spring', 'slug' => 'air-spring']);
                DB::table('things')->insert(['parent_id' => 51, 'name' => 'Coil spring', 'slug' => 'coil-spring']);
                DB::table('things')->insert(['parent_id' => 51, 'name' => 'Leaf and parabolic leaf spring', 'slug' => 'leaf-and-parabolic-leaf-spring']);
                DB::table('things')->insert(['parent_id' => 51, 'name' => 'Rubber spring', 'slug' => 'rubber-spring']);
                DB::table('things')->insert(['parent_id' => 51, 'name' => 'Spiral spring', 'slug' => 'spiral-spring']);

            DB::table('things')->insert(['parent_id' => 50, 'name' => 'Steering arm', 'slug' => 'steering-arm']);
            DB::table('things')->insert(['parent_id' => 50, 'name' => 'Steering box', 'slug' => 'steering-box']);
            DB::table('things')->insert(['parent_id' => 50, 'name' => 'Steering column assembly', 'slug' => 'steering-column-assembly']);
            

            DB::table('things')->insert(['parent_id' => 50, 'name' => 'Stering rack and pinion', 'slug' => 'stering-rack-and-pinion']);
            DB::table('things')->insert(['parent_id' => 50, 'name' => 'Steering shaft', 'slug' => 'steering-shaft']);
            DB::table('things')->insert(['parent_id' => 50, 'name' => 'Steering wheel', 'slug' => 'steering-wheel']);
            DB::table('things')->insert(['parent_id' => 50, 'name' => 'Strut', 'slug' => 'strut']);
            DB::table('things')->insert(['parent_id' => 50, 'name' => 'Stub axle', 'slug' => 'stub-axle']);
            DB::table('things')->insert(['parent_id' => 50, 'name' => 'Suspension link and bolt', 'slug' => 'suspension-link-and-bolt']);
            DB::table('things')->insert(['parent_id' => 50, 'name' => 'Sway bar link', 'slug' => 'sway-bar-link']);
            DB::table('things')->insert(['parent_id' => 50, 'name' => 'Tie bar', 'slug' => 'tie-bar']);
            DB::table('things')->insert(['parent_id' => 50, 'name' => 'Tie rod', 'slug' => 'tie-rod']);
            DB::table('things')->insert(['parent_id' => 50, 'name' => 'Tie rod end', 'slug' => 'tie-rod-end']);
            DB::table('things')->insert(['parent_id' => 50, 'name' => 'Track Bar', 'slug' => 'track-bar']);
            DB::table('things')->insert(['parent_id' => 50, 'name' => 'Toe link', 'slug' => 'toe-link']);
            DB::table('things')->insert(['parent_id' => 50, 'name' => 'Trailing arm', 'slug' => 'trailing-arm']);   
/**/   
    
    DB::table('things')->insert(['id'=> 52,'parent_id' => 5, 'name' => 'Transmission system', 'slug' => 'transmission-system']);

        DB::table('things')->insert(['parent_id' =>  52, 'name' => 'Adjustable pedal', 'slug' => 'adjustable-pedal']);
        DB::table('things')->insert(['parent_id' =>  52, 'name' => 'Axle shaft', 'slug' => 'axle-shaft']);
        DB::table('things')->insert(['parent_id' =>  52, 'name' => 'Bell housing', 'slug' => 'bell-housing']);
        DB::table('things')->insert(['parent_id' =>  52, 'name' => 'Universal joint', 'slug' => 'universal-joint']);
        DB::table('things')->insert(['parent_id' =>  52, 'name' => 'Other belts', 'slug' => 'other-belts']);
        DB::table('things')->insert(['parent_id' =>  52, 'name' => 'Carrier assembly', 'slug' => 'carrier-assembly']);
        DB::table('things')->insert(['parent_id' =>  52, 'name' => 'Chain wheel and sprocket', 'slug' => 'chain-wheel-and-sprocket']);
        DB::table('things')->insert(['parent_id' =>  52, 'name' => 'Clutch assembly', 'slug' => 'clutch-assembly']);
        DB::table('things')->insert(['parent_id' =>  52, 'name' => 'Clutch cable', 'slug' => 'clutch-cable']);
        DB::table('things')->insert(['parent_id' =>  52, 'name' => 'Clutch disk', 'slug' => 'clutch-disk']);
        DB::table('things')->insert(['parent_id' =>  52, 'name' => 'Clutch fan', 'slug' => 'clutch-fan']);
        DB::table('things')->insert(['parent_id' =>  52, 'name' => 'Clutch fork', 'slug' => 'clutch-fork']);
        DB::table('things')->insert(['parent_id' =>  52, 'name' => 'Clutch hose', 'slug' => 'clutch-hose']);
        DB::table('things')->insert(['parent_id' =>  52, 'name' => 'Clutch lever', 'slug' => 'clutch-lever']);
        DB::table('things')->insert(['id'=> 53,'parent_id' =>  52, 'name' => 'Clutch lining', 'slug' => 'clutch-lining']);
            DB::table('things')->insert(['parent_id' =>  53, 'name' => 'Clutch pedal', 'slug' => 'clutch-pedal']);
            DB::table('things')->insert(['parent_id' =>  53, 'name' => 'Clutch pressure plate', 'slug' => 'clutch-pressure-plate']);
            DB::table('things')->insert(['parent_id' =>  53, 'name' => 'Clutch shoe', 'slug' => 'clutch-shoe']);
            DB::table('things')->insert(['parent_id' =>  53, 'name' => 'Clutch spring', 'slug' => 'clutch-spring']);
        DB::table('things')->insert(['id'=> 54, 'parent_id' =>  52, 'name' => 'Differential', 'slug' => 'differential']);
            DB::table('things')->insert(['id'=> 55, 'parent_id' =>  54, 'name' => 'Differential case', 'slug' => 'differential-case']);
                DB::table('things')->insert(['parent_id' =>  55, 'name' => 'Pinion bearing', 'slug' => 'pinion-bearing']);
                

                DB::table('things')->insert(['parent_id' =>  55, 'name' => 'Differential clutch', 'slug' => 'differential-clutch']);
                DB::table('things')->insert(['parent_id' =>  55, 'name' => 'Spider gears', 'slug' => 'spider-gears']);

                DB::table('things')->insert(['parent_id' =>  55, 'name' => 'Differential casing', 'slug' => 'differential-casing']);
            DB::table('things')->insert(['parent_id' =>  54, 'name' => 'Differential flange', 'slug' => 'differential-flange']);
            DB::table('things')->insert(['parent_id' =>  54, 'name' => 'Differential gear', 'slug' => 'differential-gear']);
            DB::table('things')->insert(['parent_id' =>  54, 'name' => 'Differential seal', 'slug' => 'differential-seal']);

        DB::table('things')->insert(['parent_id' =>  52, 'name' => 'Flywheel', 'slug' => 'flywheel']);
            DB::table('things')->insert(['parent_id' =>  52, 'name' => 'Flywheel ring gear', 'slug' => 'flywheel-ring-gear']);
        DB::table('things')->insert(['id'=> 56, 'parent_id' =>  52, 'name' => 'Gear', 'slug' => 'gear']);
            DB::table('things')->insert(['parent_id' =>  56, 'name' => 'Gear coupling', 'slug' => 'gear-coupling']);
            DB::table('things')->insert(['parent_id' =>  56, 'name' => 'Gear pump', 'slug' => 'gear-pump']);
            DB::table('things')->insert(['parent_id' =>  56, 'name' => 'Gear ring', 'slug' => 'gear-ring']);
            DB::table('things')->insert(['parent_id' =>  56, 'name' => 'Gear stick', 'slug' => 'gear-stick']);
        DB::table('things')->insert(['parent_id' =>  52, 'name' => 'Gearbox', 'slug' => 'gearbox']);
        DB::table('things')->insert(['parent_id' =>  52, 'name' => 'Idler gear', 'slug' => 'idle-gear']);
        DB::table('things')->insert(['parent_id' =>  52, 'name' => 'Knuckle', 'slug' => 'knuckle']);
        DB::table('things')->insert(['parent_id' =>  52, 'name' => 'Master cylinder', 'slug' => 'master-cylinder']);
        DB::table('things')->insert(['parent_id' =>  52, 'name' => 'Output shaft', 'slug' => 'output-shaft']);
        DB::table('things')->insert(['parent_id' =>  52, 'name' => 'Pinion', 'slug' => 'pinion']);
        DB::table('things')->insert(['parent_id' =>  52, 'name' => 'Planetary gear set', 'slug' => 'planetary-gear-set']);
        DB::table('things')->insert(['parent_id' =>  52, 'name' => 'Prop shaft', 'slug' => 'prop-shaft']);
        DB::table('things')->insert(['parent_id' =>  52, 'name' => 'Shift cable', 'slug' => 'shift-cable']);
        DB::table('things')->insert(['parent_id' =>  52, 'name' => 'Shift fork', 'slug' => 'shift-fork']);
        DB::table('things')->insert(['parent_id' =>  52, 'name' => 'Shift knob', 'slug' => 'shift-knob']);
        DB::table('things')->insert(['parent_id' =>  52, 'name' => 'Shift lever', 'slug' => 'shift-lever']);
        DB::table('things')->insert(['parent_id' =>  52, 'name' => 'Slave cylinder', 'slug' => 'slave-cylinder']);
        DB::table('things')->insert(['parent_id' =>  52, 'name' => 'Speed reducer', 'slug' => 'speed-reducer']);
        DB::table('things')->insert(['parent_id' =>  52, 'name' => 'Speedometer gear', 'slug' => 'speedometer-gear']);
        DB::table('things')->insert(['parent_id' =>  52, 'name' => 'Steering gear', 'slug' => 'steering-gear']);
        DB::table('things')->insert(['parent_id' =>  52, 'name' => 'Torque converter', 'slug' => 'torque-converter']);
        DB::table('things')->insert(['parent_id' =>  52, 'name' => 'Trans-axle housing', 'slug' => 'trans-axle-housing']);
        DB::table('things')->insert(['parent_id' =>  52, 'name' => 'Transfer case', 'slug' => 'transfer-case']);
        DB::table('things')->insert(['parent_id' =>  52, 'name' => 'Transmission gear', 'slug' => 'transmission-gear']);
        DB::table('things')->insert(['parent_id' =>  52, 'name' => 'Transmission pan', 'slug' => 'transmission-pan']);
        DB::table('things')->insert(['parent_id' =>  52, 'name' => 'Transmission seal and bonded piston', 'slug' => 'transmission-seal-and-bonded-piston']);
        DB::table('things')->insert(['parent_id' =>  52, 'name' => 'Transmission spring', 'slug' => 'transmission-spring']);
        DB::table('things')->insert(['parent_id' =>  52, 'name' => 'Transmission yoke', 'slug' => 'transmission-yoke']);
        DB::table('things')->insert(['parent_id' => 52, 'name' => 'Universal joint', 'slug' => 'universal-joint']);

DB::table('things')->insert(['id' => 6 ,'parent_id' => 0, 'name' => 'Miscellaneous auto parts', 'slug' => 'miscellaneous-auto-parts']);
    DB::table('things')->insert(['parent_id' => 6, 'name' => 'A/C Clutch', 'slug' => 'a-c-clutch']);
    DB::table('things')->insert(['parent_id' => 6, 'name' => 'A/C Compressor', 'slug' => 'a-c-compressor']);
    DB::table('things')->insert(['parent_id' => 6, 'name' => 'A/C Condenser', 'slug' => 'a-c-condenser']);
    DB::table('things')->insert(['parent_id' => 6, 'name' => 'A/C Hose', 'slug' => 'a-c-hose']);
    DB::table('things')->insert(['parent_id' => 6, 'name' => 'A/C Kit', 'slug' => 'a-c-kit']);
    DB::table('things')->insert(['parent_id' => 6, 'name' => 'A/C Relay', 'slug' => 'a-c-relay']);
    DB::table('things')->insert(['parent_id' => 6, 'name' => 'A/C Valve', 'slug' => 'a-c-valve']);
    DB::table('things')->insert(['parent_id' => 6, 'name' => 'A/C Expansion Valve', 'slug' => 'a-c-expansion-valve']);
    DB::table('things')->insert(['parent_id' => 6, 'name' => 'A/C Low-pressure Valve', 'slug' => 'a-c-low-pressure-valve']);
    DB::table('things')->insert(['parent_id' => 6, 'name' => 'A/C Schroeder Valve', 'slug' => 'a-c-schroeder-valve']);
    DB::table('things')->insert(['parent_id' => 6, 'name' => 'A/C INNER PLATE', 'slug' => 'a-c-inner-plate']);
    DB::table('things')->insert(['parent_id' => 6, 'name' => 'A/C Cooler', 'slug' => 'a-c-cooler']);
    DB::table('things')->insert(['parent_id' => 6, 'name' => 'A/C Evaporator', 'slug' => 'a-c-evaporator']);
    DB::table('things')->insert(['parent_id' => 6, 'name' => 'A/C Suction Hose Pipe', 'slug' => 'a-c-suction-hose-pipe']);
    DB::table('things')->insert(['parent_id' => 6, 'name' => 'A/C Discharge Hose Pipe', 'slug' => 'a-c-discharge-hose-pipe']);
    DB::table('things')->insert(['parent_id' => 6, 'name' => 'A/C Gas Receiver', 'slug' => 'a-c-gas-receiver']);
    DB::table('things')->insert(['parent_id' => 6, 'name' => 'A/C Condenser Filter', 'slug' => 'a-c-condenser-filter']);
    DB::table('things')->insert(['parent_id' => 6, 'name' => 'A/C Cabin Filter', 'slug' => 'a-c-cabin-filter']);
    DB::table('things')->insert(['id' => 57, 'parent_id' => 6, 'name' => 'Bearings', 'slug' => 'bearings']);


        DB::table('things')->insert(['parent_id' => 57, 'name' => 'Grooved ball bearing', 'slug' => 'grooved-ball-bearing']);
        DB::table('things')->insert(['parent_id' => 57, 'name' => 'Needle bearing', 'slug' => 'needle-bearing']);
        DB::table('things')->insert(['parent_id' => 57, 'name' => 'Roller bearing', 'slug' => 'roller-bearing']);
        DB::table('things')->insert(['parent_id' => 57, 'name' => 'Sleeve bearing', 'slug' => 'sleeve-bearing']);
        DB::table('things')->insert(['parent_id' => 57, 'name' => 'wheel bearing', 'slug' => 'wheel-bearing']);


    DB::table('things')->insert(['id' => 58, 'parent_id' => 6, 'name' => 'Hose', 'slug' => 'hose']);

        DB::table('things')->insert(['parent_id' => 58, 'name' => 'Fuel vapour hose', 'slug' => 'fuel-vapour-hose']);
        DB::table('things')->insert(['parent_id' => 58, 'name' => 'Reinforced hose', 'slug' => 'reinforced-hose']);
        DB::table('things')->insert(['parent_id' => 58, 'name' => 'Non-reinforced hose', 'slug' => 'non-reinforced-hose']);
        DB::table('things')->insert(['parent_id' => 58, 'name' => 'Radiator hose', 'slug' => 'radiator-hose']);

    DB::table('things')->insert(['id' => 59, 'parent_id' => 6, 'name' => 'Other miscellaneous parts', 'slug' => 'other-miscellaneous-parts']);

        DB::table('things')->insert(['parent_id' => 59, 'name' => 'Adhesive tape', 'slug' => 'adhesive-tape']);
        DB::table('things')->insert(['parent_id' => 59, 'name' => 'foil', 'slug' => 'foil']);
        DB::table('things')->insert(['parent_id' => 59, 'name' => 'Air bag', 'slug' => 'air-bag']);
        DB::table('things')->insert(['parent_id' => 59, 'name' => 'Bolt cap', 'slug' => 'bolt-cap']);
        DB::table('things')->insert(['parent_id' => 59, 'name' => 'Bracket', 'slug' => 'bracket']);
        DB::table('things')->insert(['id' => 60, 'parent_id' => 59, 'name' => 'Cables', 'slug' => 'cables']);

            DB::table('things')->insert(['parent_id' => 60, 'name' => 'Speedometer cable', 'slug' => 'speedometer-cable']);

        DB::table('things')->insert(['parent_id' => 59, 'name' => 'Cotter pin', 'slug' => 'cotter-pin']);
        DB::table('things')->insert(['parent_id' => 59, 'name' => 'Decal', 'slug' => 'decal']);

        DB::table('things')->insert(['id' => 61, 'parent_id' => 59, 'name' => 'Dashboard', 'slug' => 'dashboard']);

            DB::table('things')->insert(['parent_id' => 61, 'name' => 'Center console', 'slug' => 'center-console']);
            DB::table('things')->insert(['parent_id' => 61, 'name' => 'Glove compartment', 'slug' => 'glove-compartment']);

        DB::table('things')->insert(['parent_id' => 59, 'name' => 'Drag link', 'slug' => 'drag link']);
        DB::table('things')->insert(['parent_id' => 59, 'name' => 'Dynamic seal', 'slug' => 'dynamic seal']);
        DB::table('things')->insert(['parent_id' => 59, 'name' => 'Fastener', 'slug' => 'fastener']);
        DB::table('things')->insert(['parent_id' => 59, 'name' => 'Gasket', 'slug' => 'gasket']);
        DB::table('things')->insert(['parent_id' => 59, 'name' => 'Hood', 'slug' => 'hood']);
        DB::table('things')->insert(['parent_id' => 59, 'name' => 'Horn', 'slug' => 'horn']);
        DB::table('things')->insert(['parent_id' => 59, 'name' => 'Injection-molded parts', 'slug' => 'injection-molded-parts']);

        DB::table('things')->insert(['parent_id' => 59, 'name' => 'Instrument cluster', 'slug' => 'instrument-cluster']);
        DB::table('things')->insert(['parent_id' => 59, 'name' => 'Label', 'slug' => 'label']);
        DB::table('things')->insert(['parent_id' => 59, 'name' => 'Mirror', 'slug' => 'mirror']);
        DB::table('things')->insert(['parent_id' => 59, 'name' => 'Phone mount', 'slug' => 'phone-mount']);
        DB::table('things')->insert(['parent_id' => 59, 'name' => 'Name plate', 'slug' => 'name-plate']);
        DB::table('things')->insert(['id' => 62, 'parent_id' => 59, 'name' => 'Nut', 'slug' => 'nut']);
            DB::table('things')->insert(['parent_id' => 62, 'name' => 'Flange nut', 'slug' => 'flange-nut']);
            DB::table('things')->insert(['parent_id' => 62, 'name' => 'Hex nut', 'slug' => 'hex-nut']);
        DB::table('things')->insert(['parent_id' => 59, 'name' => 'O-ring', 'slug' => 'O-ring']);
        DB::table('things')->insert(['parent_id' => 59, 'name' => 'Paint', 'slug' => 'paint']);
        DB::table('things')->insert(['parent_id' => 59, 'name' => 'Rivet', 'slug' => 'rivet']);
        DB::table('things')->insert(['parent_id' => 59, 'name' => 'Rubber', 'slug' => 'rubber']);
        DB::table('things')->insert(['parent_id' => 59, 'name' => 'Screw', 'slug' => 'screw']);
        DB::table('things')->insert(['parent_id' => 59, 'name' => 'Shim', 'slug' => 'shim']);
        DB::table('things')->insert(['parent_id' => 59, 'name' => 'Sun visor', 'slug' => 'sun-visor']);
        DB::table('things')->insert(['parent_id' => 59, 'name' => 'Washer', 'slug' => 'washer']);

DB::table('things')->insert(['id' => 63 ,'parent_id' => 0, 'name' => 'Complete-véhicule', 'slug' => 'complete-vehicule']);

        
    }
}


//last number is 64