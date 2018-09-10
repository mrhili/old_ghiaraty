
 

<?php
use Illuminate\Database\Seeder;
class CarSeeder4Developement extends Seeder

{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public

  function run()
  {
    //App\Car::truncate();

    factory(App\Car::class, 100)->create();

    App\Car::getQuery()->delete();

    //
    DB::table('cars')->insert(['id' => 1, 'parent_id' => 0, 'name' => 'Automobile', 'slug' => 'automobile']);
    DB::table('cars')->insert(['id' => 2, 'parent_id' => 0, 'name' => 'Motorcycle', 'slug' => 'motorcycle']);
    DB::table('cars')->insert(['id' => 3, 'parent_id' => 0, 'name' => 'Bicycle', 'slug' => 'bicycle']);
    DB::table('cars')->insert(['id' => 4, 'parent_id' => 0, 'name' => 'Bus', 'slug' => 'bus']);
    DB::table('cars')->insert(['id' => 5, 'parent_id' => 0, 'name' => 'Other', 'slug' => 'other']);
    DB::table('cars')->insert(['id' => 6, 'parent_id' => 0, 'name' => 'New', 'slug' => 'new']);
    DB::table('cars')->insert(['id' => 7, 'parent_id' => 0, 'name' => 'Tree porter', 'slug' => 'tree-porter']);
    DB::table('cars')->insert(['id' => 8, 'parent_id' => 0, 'name' => 'jet ski', 'slug' => 'jet-ski']);
    DB::table('cars')->insert(['id' => 9, 'parent_id' => 0, 'name' => 'Kick scooter', 'slug' => 'kick-scooter']);
    DB::table('cars')->insert(['id' => 10, 'parent_id' => 0, 'name' => 'Minibus', 'slug' => 'minibus']);
    DB::table('cars')->insert(['id' => 11, 'parent_id' => 0, 'name' => 'Minivan', 'slug' => 'minivan']);
    DB::table('cars')->insert(['id' => 12, 'parent_id' => 0, 'name' => 'Skateboard', 'slug' => 'skateboard']);
    DB::table('cars')->insert(['id' => 13, 'parent_id' => 0, 'name' => 'Skis', 'slug' => 'skis']);
    DB::table('cars')->insert(['id' => 15, 'parent_id' => 0, 'name' => 'Sports car', 'slug' => 'sports-car']);
    DB::table('cars')->insert(['id' => 16, 'parent_id' => 0, 'name' => 'Tractor', 'slug' => 'tractor']);
    DB::table('cars')->insert(['id' => 17, 'parent_id' => 0, 'name' => 'All-terrain vehicle', 'slug' => 'all-terrain-vehicle']);
    DB::table('cars')->insert(['id' => 18, 'parent_id' => 0, 'name' => 'Yacht', 'slug' => 'yacht']);
    DB::table('cars')->insert(['id' => 19, 'parent_id' => 0, 'name' => 'Tricycle', 'slug' => 'tricycle']);
    DB::table('cars')->insert(['id' => 20, 'parent_id' => 0, 'name' => 'Truck', 'slug' => 'truck']);
    DB::table('cars')->insert(['id' => 21, 'parent_id' => 0, 'name' => 'Pick-up', 'slug' => 'pick-up']);

    DB::table('cars')->insert(['parent_id' => 0, 'name' => 'Aerosani', 'slug' => 'aerosani']);
    DB::table('cars')->insert(['parent_id' => 0, 'name' => 'Airship', 'slug' => 'airship']);

    DB::table('cars')->insert(['parent_id' => 0, 'name' => 'Amphibious all-terrain vehicle', 'slug' => 'amphibious-all-terrain-vehicle']);
    DB::table('cars')->insert(['parent_id' => 0, 'name' => 'Amphibious vehicle', 'slug' => 'amphibious-vehicle']);
    DB::table('cars')->insert(['parent_id' => 0, 'name' => 'Autogyro', 'slug' => 'autogyro']);
    
    
    DB::table('cars')->insert(['parent_id' => 0, 'name' => 'Balloon', 'slug' => 'balloon']);
    DB::table('cars')->insert(['parent_id' => 0, 'name' => 'Bathyscaphe', 'slug' => 'bathyscaphe']);

    DB::table('cars')->insert(['parent_id' => 0, 'name' => 'Blimp', 'slug' => 'blimp']);
    DB::table('cars')->insert(['parent_id' => 0, 'name' => 'Boat', 'slug' => 'boat']);

    DB::table('cars')->insert(['parent_id' => 0, 'name' => 'Cable car', 'slug' => 'cable-car']);
    DB::table('cars')->insert(['parent_id' => 0, 'name' => 'Catamaran', 'slug' => 'catamaran']);
    DB::table('cars')->insert(['parent_id' => 0, 'name' => 'Canoe', 'slug' => 'canoe']);
    DB::table('cars')->insert(['parent_id' => 0, 'name' => 'Cycle rickshaw', 'slug' => 'cycle-rickshaw']);
    DB::table('cars')->insert(['parent_id' => 0, 'name' => 'Dandy horse', 'slug' => 'dandy-horse']);
    DB::table('cars')->insert(['parent_id' => 0, 'name' => 'Deep Submergence Vehicle', 'slug' => 'deep-submergence-vehicle']);
    DB::table('cars')->insert(['parent_id' => 0, 'name' => 'Diving bell', 'slug' => 'diving-bell']);
    DB::table('cars')->insert(['parent_id' => 0, 'name' => 'Diving chamber', 'slug' => 'diving-chamber']);
    DB::table('cars')->insert(['parent_id' => 0, 'name' => 'Dog sled', 'slug' => 'dog-sled']);
    DB::table('cars')->insert(['parent_id' => 0, 'name' => 'Draisine', 'slug' => 'draisine']);
    DB::table('cars')->insert(['parent_id' => 0, 'name' => 'Electric vehicle', 'slug' => 'electric-vehicle']);
    DB::table('cars')->insert(['parent_id' => 0, 'name' => 'Fixed-wing aircraft', 'slug' => 'fixed-wing-aircraft']);
    DB::table('cars')->insert(['parent_id' => 0, 'name' => 'Golf cart', 'slug' => 'golf-cart']);
    DB::table('cars')->insert(['parent_id' => 0, 'name' => 'Ground effect vehicle', 'slug' => 'ground-effect-vehicle']);
    DB::table('cars')->insert(['parent_id' => 0, 'name' => 'Glider aircraft', 'slug' => 'glider-aircraft']);
    DB::table('cars')->insert(['parent_id' => 0, 'name' => 'Handcar', 'slug' => 'handcar']);
    DB::table('cars')->insert(['parent_id' => 0, 'name' => 'Hang glider', 'slug' => 'hang-glider']);
    DB::table('cars')->insert(['parent_id' => 0, 'name' => 'Hopper', 'slug' => 'hopper']);
    DB::table('cars')->insert(['parent_id' => 0, 'name' => 'Helicopter', 'slug' => 'helicopter']);
    DB::table('cars')->insert(['parent_id' => 0, 'name' => 'Hovercraft', 'slug' => 'hovercraft']);
    DB::table('cars')->insert(['parent_id' => 0, 'name' => 'Hydrofoil', 'slug' => 'hydrofoil']);
    DB::table('cars')->insert(['parent_id' => 0, 'name' => 'Ice Skates', 'slug' => 'ice-skates']);
    DB::table('cars')->insert(['parent_id' => 0, 'name' => 'Jet aircraft', 'slug' => 'jet-aircraft']);
    DB::table('cars')->insert(['parent_id' => 0, 'name' => 'Jet pack', 'slug' => 'jet-pack']);

    DB::table('cars')->insert(['parent_id' => 0, 'name' => 'Kayak', 'slug' => 'kayak']);
    
    DB::table('cars')->insert(['parent_id' => 0, 'name' => 'Land yacht', 'slug' => 'land-yacht']);
    DB::table('cars')->insert(['parent_id' => 0, 'name' => 'Launch escape capsule', 'slug' => 'launch-escape-capsule']);
    DB::table('cars')->insert(['parent_id' => 0, 'name' => 'Locomotive', 'slug' => 'locomotive']);
    DB::table('cars')->insert(['parent_id' => 0, 'name' => 'Maglev', 'slug' => 'maglev']);

    DB::table('cars')->insert(['parent_id' => 0, 'name' => 'Monorail', 'slug' => 'monorail']);
    DB::table('cars')->insert(['parent_id' => 0, 'name' => 'Monowheel', 'slug' => 'monowheel']);
    DB::table('cars')->insert(['parent_id' => 0, 'name' => 'Moped', 'slug' => 'moped']);

    DB::table('cars')->insert(['parent_id' => 0, 'name' => 'Omni Directional Vehicle', 'slug' => 'omni-directional-vehicle']);
    DB::table('cars')->insert(['parent_id' => 0, 'name' => 'Ornithopter', 'slug' => 'ornithopter']);
    DB::table('cars')->insert(['parent_id' => 0, 'name' => 'Passenger car', 'slug' => 'passenger-car']);
    DB::table('cars')->insert(['parent_id' => 0, 'name' => 'Rickshaw', 'slug' => 'rickshaw']);
    DB::table('cars')->insert(['parent_id' => 0, 'name' => 'Pedalo', 'slug' => 'pedalo']);
    DB::table('cars')->insert(['parent_id' => 0, 'name' => 'Pogo Stick', 'slug' => 'pogo-stick']);
    DB::table('cars')->insert(['parent_id' => 0, 'name' => 'Powered parachute', 'slug' => 'powered-parachute']);
    DB::table('cars')->insert(['parent_id' => 0, 'name' => 'Quadracycle', 'slug' => 'quadracycle']);
    DB::table('cars')->insert(['parent_id' => 0, 'name' => 'Race car', 'slug' => 'race-car']);
    DB::table('cars')->insert(['parent_id' => 0, 'name' => 'Road train', 'slug' => 'road-train']);
    DB::table('cars')->insert(['parent_id' => 0, 'name' => 'Rocket', 'slug' => 'rocket']);
    DB::table('cars')->insert(['parent_id' => 0, 'name' => 'Rocket sled', 'slug' => 'rocket-sled']);
    DB::table('cars')->insert(['parent_id' => 0, 'name' => 'Rover', 'slug' => 'rover']);
    DB::table('cars')->insert(['parent_id' => 0, 'name' => 'Screw-propelled vehicle', 'slug' => 'screw-propelled-vehicle']);
    DB::table('cars')->insert(['parent_id' => 0, 'name' => 'Sea tractor', 'slug' => 'sea-tractor']);
    DB::table('cars')->insert(['parent_id' => 0, 'name' => 'Zipline', 'slug' => 'zipline']);
    DB::table('cars')->insert(['parent_id' => 0, 'name' => 'Aircraft', 'slug' => 'aircraft']);
    DB::table('cars')->insert(['parent_id' => 0, 'name' => 'Wingpack', 'slug' => 'wingpack']);
    DB::table('cars')->insert(['parent_id' => 0, 'name' => 'Unmanned aerial vehicle', 'slug' => 'unmanned-aerial-vehicle']);
    DB::table('cars')->insert(['parent_id' => 0, 'name' => 'edit', 'slug' => 'edit']);
    DB::table('cars')->insert(['parent_id' => 0, 'name' => 'Land vehicle', 'slug' => 'land-vehicle']);
    DB::table('cars')->insert(['parent_id' => 0, 'name' => 'Segway Personal Transporter', 'slug' => 'segway-personal-transporter']);
    DB::table('cars')->insert(['parent_id' => 0, 'name' => 'Single-track vehicle', 'slug' => 'single-track-vehicle']);


    DB::table('cars')->insert(['parent_id' => 0, 'name' => 'Sled', 'slug' => 'sled']);
    DB::table('cars')->insert(['parent_id' => 0, 'name' => 'Snowboard', 'slug' => 'snowboard']);
    DB::table('cars')->insert(['parent_id' => 0, 'name' => 'Snowmobile', 'slug' => 'snowmobile']);
    DB::table('cars')->insert(['parent_id' => 0, 'name' => 'Space Hopper', 'slug' => 'space-hopper']);

    DB::table('cars')->insert(['parent_id' => 0, 'name' => 'Steam car', 'slug' => 'steam-car']);
    DB::table('cars')->insert(['parent_id' => 0, 'name' => 'Suv', 'slug' => 'suv']);

    DB::table('cars')->insert(['parent_id' => 0, 'name' => 'Traction engine', 'slug' => 'traction-engine']);
    DB::table('cars')->insert(['parent_id' => 0, 'name' => 'Train', 'slug' => 'train']);
    DB::table('cars')->insert(['parent_id' => 0, 'name' => 'Tram', 'slug' => 'tram']);

    DB::table('cars')->insert(['parent_id' => 0, 'name' => 'Trolleybus', 'slug' => 'trolleybus']);

    DB::table('cars')->insert(['parent_id' => 0, 'name' => 'Unicycle', 'slug' => 'unicycle']);
    DB::table('cars')->insert(['parent_id' => 0, 'name' => 'Van', 'slug' => 'van']);
    DB::table('cars')->insert(['parent_id' => 0, 'name' => 'Velocipede', 'slug' => 'velocipede']);
    DB::table('cars')->insert(['parent_id' => 0, 'name' => 'Velomobile', 'slug' => 'velomobile']);
    DB::table('cars')->insert(['parent_id' => 0, 'name' => 'Wagon', 'slug' => 'wagon']);
    DB::table('cars')->insert(['parent_id' => 0, 'name' => 'Wheelbarrow', 'slug' => 'wheelbarrow']);

    DB::table('cars')->insert(['parent_id' => 0, 'name' => 'Watercraft', 'slug' => 'watercraft']);
    DB::table('cars')->insert(['parent_id' => 0, 'name' => 'Sailboat', 'slug' => 'sailboat']);
    DB::table('cars')->insert(['parent_id' => 0, 'name' => 'Ship', 'slug' => 'ship']);
    DB::table('cars')->insert(['parent_id' => 0, 'name' => 'Submarine', 'slug' => 'submarine']);
    DB::table('cars')->insert(['parent_id' => 0, 'name' => 'Submersible', 'slug' => 'submersible']);
    DB::table('cars')->insert(['parent_id' => 0, 'name' => 'Surfboard', 'slug' => 'surfboard']);

    /* INSERT INTO AUTOMOBILE QUERY 1 */
    DB::table('cars')->insert(['id' => 22, 'parent_id' => 1, 'name' => 'Dacia', 'slug' => 'dacia']);


        DB::table('cars')->insert(['parent_id' => 22, 'name' => '1100', 'slug' => '1100']);
        DB::table('cars')->insert(['parent_id' => 22, 'name' => '1300', 'slug' => '1300']);
        DB::table('cars')->insert(['parent_id' => 22, 'name' => '1320', 'slug' => '1320']);
        DB::table('cars')->insert(['parent_id' => 22, 'name' => '1325', 'slug' => '1325']);
        DB::table('cars')->insert(['parent_id' => 22, 'name' => '2000', 'slug' => '2000']);
        DB::table('cars')->insert(['parent_id' => 22, 'name' => 'Pick-Up', 'slug' => 'pick-up']);
        DB::table('cars')->insert(['parent_id' => 22, 'name' => 'Lodgy', 'slug' => 'lodgy']);
        DB::table('cars')->insert(['parent_id' => 22, 'name' => 'Logan', 'slug' => 'logan']);
        DB::table('cars')->insert(['parent_id' => 22, 'name' => 'Nova', 'slug' => 'nova']);
        DB::table('cars')->insert(['parent_id' => 22, 'name' => 'Sandero', 'slug' => 'sandero']);
        DB::table('cars')->insert(['parent_id' => 22, 'name' => 'Solenza', 'slug' => 'solenza']);
        DB::table('cars')->insert(['parent_id' => 22, 'name' => 'SupeRNova', 'slug' => 'supernova']);


    DB::table('cars')->insert(['id' => 23, 'parent_id' => 1, 'name' => 'Renault', 'slug' => 'renault']);


        DB::table('cars')->insert(['parent_id' => 23, 'name' => 'Captur', 'slug' => 'captur']);
        DB::table('cars')->insert(['parent_id' => 23, 'name' => 'Clio', 'slug' => 'clio']);
        DB::table('cars')->insert(['parent_id' => 23, 'name' => 'Megane', 'slug' => 'megane']);
 

    DB::table('cars')->insert(['id' => 24, 'parent_id' => 1, 'name' => 'Peugeot', 'slug' => 'peugeot']);


        DB::table('cars')->insert(['parent_id' => 24, 'name' => '5CV', 'slug' => '5cv']);
        DB::table('cars')->insert(['parent_id' => 24, 'name' => '104', 'slug' => '104']);
        DB::table('cars')->insert(['parent_id' => 24, 'name' => '106', 'slug' => '106']);
        DB::table('cars')->insert(['parent_id' => 24, 'name' => '107', 'slug' => '107']);
        DB::table('cars')->insert(['parent_id' => 24, 'name' => '108', 'slug' => '108']);
     
    
    DB::table('cars')->insert(['id' => 25, 'parent_id' => 1, 'name' => 'Toyota', 'slug' => 'toyota']);

        DB::table('cars')->insert(['parent_id' => 25, 'name' => '4Runner', 'slug' => '4runner']);
        DB::table('cars')->insert(['parent_id' => 25, 'name' => 'Hilux Surf', 'slug' => 'hilux-surf']);
        DB::table('cars')->insert(['parent_id' => 25, 'name' => '86', 'slug' => '86']);
        DB::table('cars')->insert(['parent_id' => 25, 'name' => 'Agya', 'slug' => 'agya']);
        DB::table('cars')->insert(['parent_id' => 25, 'name' => 'Perodua Axia', 'slug' => 'perodua-axia']);
        DB::table('cars')->insert(['parent_id' => 25, 'name' => 'Allion', 'slug' => 'allion']);
        DB::table('cars')->insert(['parent_id' => 25, 'name' => 'Alphard', 'slug' => 'alphard']);
        DB::table('cars')->insert(['parent_id' => 25, 'name' => 'Aurion', 'slug' => 'aurion']);
        DB::table('cars')->insert(['parent_id' => 25, 'name' => 'Auris', 'slug' => 'auris']);
        DB::table('cars')->insert(['parent_id' => 25, 'name' => 'Avalon', 'slug' => 'avalon']);
        DB::table('cars')->insert(['parent_id' => 25, 'name' => 'Pronard', 'slug' => 'pronard']);
    


    DB::table('cars')->insert(['id' => 26, 'parent_id' => 1, 'name' => 'BMW', 'slug' => 'bmw']);


        DB::table('cars')->insert(['parent_id' => 26, 'name' => '501', 'slug' => '501']);
        DB::table('cars')->insert(['parent_id' => 26, 'name' => '502', 'slug' => '502']);
        DB::table('cars')->insert(['parent_id' => 26, 'name' => '503', 'slug' => '503']);
        DB::table('cars')->insert(['parent_id' => 26, 'name' => '507', 'slug' => '507']);
    
    DB::table('cars')->insert(['id' => 27, 'parent_id' => 1, 'name' => 'Volkswagen', 'slug' => 'volkswagen']);


        DB::table('cars')->insert(['parent_id' => 27, 'name' => 'Volkswagen', 'slug' => 'volkswagen']);
        DB::table('cars')->insert(['parent_id' => 27, 'name' => 'Automobile', 'slug' => 'automobile']);
        DB::table('cars')->insert(['parent_id' => 27, 'name' => 'Volkswagen', 'slug' => 'volkswagen']);
        DB::table('cars')->insert(['parent_id' => 27, 'name' => 'Amarok', 'slug' => 'amarok']);
        DB::table('cars')->insert(['parent_id' => 27, 'name' => 'Caddy', 'slug' => 'caddy']);
   



    DB::table('cars')->insert(['id' => 28, 'parent_id' => 1, 'name' => 'Mercedes-Benz', 'slug' => 'mercedes-benz']);


        DB::table('cars')->insert(['parent_id' => 28, 'name' => 'Patent-Motorwagen', 'slug' => 'patent-motorwagen']);
        DB::table('cars')->insert(['parent_id' => 28, 'name' => 'Velo', 'slug' => 'velo']);
        DB::table('cars')->insert(['parent_id' => 28, 'name' => 'Viktoria', 'slug' => 'viktoria']);
        DB::table('cars')->insert(['parent_id' => 28, 'name' => 'Blitzen Benz', 'slug' => 'blitzen-benz']);
        DB::table('cars')->insert(['parent_id' => 28, 'name' => '10/30 PS', 'slug' => '10-30-ps']);
   




    DB::table('cars')->insert(['id' => 29, 'parent_id' => 1, 'name' => 'Honda', 'slug' => 'honda']);


        DB::table('cars')->insert(['parent_id' => 29, 'name' => 'Accord', 'slug' => 'accord']);
        DB::table('cars')->insert(['parent_id' => 29, 'name' => 'Amaze', 'slug' => 'amaze']);
        DB::table('cars')->insert(['parent_id' => 29, 'name' => 'UR-V', 'slug' => 'ur-v']);
        DB::table('cars')->insert(['parent_id' => 29, 'name' => 'Ballade', 'slug' => 'ballade']);
        DB::table('cars')->insert(['parent_id' => 29, 'name' => 'Brio', 'slug' => 'brio']);
 


    DB::table('cars')->insert(['id' => 30, 'parent_id' => 1, 'name' => 'Nissan', 'slug' => 'nissan']);


        
        DB::table('cars')->insert(['parent_id' => 30, 'name' => 'Bluebird', 'slug' => 'bluebird']);
        

        DB::table('cars')->insert(['parent_id' => 30, 'name' => 'S30', 'slug' => 's30']);
        
        DB::table('cars')->insert(['parent_id' => 30, 'name' => 'Sunny', 'slug' => 'sunny']);
        DB::table('cars')->insert(['parent_id' => 30, 'name' => 'Bluebird', 'slug' => 'bluebird']);
        
        




    DB::table('cars')->insert([ 'id' => 31, 'parent_id' => 1, 'name' => 'Ford', 'slug' => 'ford']);


        DB::table('cars')->insert(['parent_id' => 31, 'name' => '2GA', 'slug' => '2ga']);
        DB::table('cars')->insert(['parent_id' => 31, 'name' => '300', 'slug' => '300']);
        DB::table('cars')->insert(['parent_id' => 31, 'name' => '7W', 'slug' => '7w']);
        DB::table('cars')->insert(['parent_id' => 31, 'name' => 'Abeille', 'slug' => 'abeille']);
 





    DB::table('cars')->insert(['id' => 32, 'parent_id' => 1, 'name' => 'Hunday Motors', 'slug' => 'motors']);



        DB::table('cars')->insert(['parent_id' => 32, 'name' => 'i10', 'slug' => 'i10']);
        DB::table('cars')->insert(['parent_id' => 32, 'name' => 'Picanto', 'slug' => 'picanto']);
        DB::table('cars')->insert(['parent_id' => 32, 'name' => 'i20', 'slug' => 'i20']);

        DB::table('cars')->insert(['parent_id' => 32, 'name' => 'ix20', 'slug' => 'ix20']);

        DB::table('cars')->insert(['parent_id' => 32, 'name' => 'i30', 'slug' => 'i30']);
        
        DB::table('cars')->insert(['parent_id' => 32, 'name' => 'i30', 'slug' => 'i30']);
        DB::table('cars')->insert(['parent_id' => 32, 'name' => 'i40', 'slug' => 'i40']);

        DB::table('cars')->insert(['parent_id' => 32, 'name' => 'i40', 'slug' => 'i40']);
        DB::table('cars')->insert(['parent_id' => 32, 'name' => 'Ioniq', 'slug' => 'ioniq']);
        DB::table('cars')->insert(['parent_id' => 32, 'name' => 'Genesis', 'slug' => 'genesis']);
        DB::table('cars')->insert(['parent_id' => 32, 'name' => 'Tucson', 'slug' => 'tucson']);


    
    DB::table('cars')->insert(['id' => 33, 'parent_id' => 1, 'name' => 'Audi', 'slug' => 'audi']);

        DB::table('cars')->insert(['parent_id' => 33, 'name' => 'F103', 'slug' => 'f103']);
        DB::table('cars')->insert(['parent_id' => 33, 'name' => '100', 'slug' => '100']);
        DB::table('cars')->insert(['parent_id' => 33, 'name' => '80', 'slug' => '80']);
        DB::table('cars')->insert(['parent_id' => 33, 'name' => '50', 'slug' => '50']);
 


    DB::table('cars')->insert(['id' => 34, 'parent_id' => 1, 'name' => 'Chevrolet', 'slug' => 'chevrolet']);


        DB::table('cars')->insert(['parent_id' => 34, 'name' => 'Chevrolet', 'slug' => 'chevrolet']);
        DB::table('cars')->insert(['parent_id' => 34, 'name' => 'Aveo', 'slug' => 'aveo']);
        DB::table('cars')->insert(['parent_id' => 34, 'name' => 'Chevy Spark', 'slug' => 'chevy-spark']);
        DB::table('cars')->insert(['parent_id' => 34, 'name' => 'Lova', 'slug' => 'lova']);
        DB::table('cars')->insert(['parent_id' => 34, 'name' => 'Lanos', 'slug' => 'lanos']);
        DB::table('cars')->insert(['parent_id' => 34, 'name' => 'Onix', 'slug' => 'onix']);
        DB::table('cars')->insert(['parent_id' => 34, 'name' => 'Prisma (disambiguation)', 'slug' => 'prisma-disambiguation']);
   


    DB::table('cars')->insert(['id' => 35, 'parent_id' => 1, 'name' => 'Motors', 'slug' => 'motors']);




        DB::table('cars')->insert(['parent_id' => 35, 'name' => 'Rio', 'slug' => 'rio']);
        DB::table('cars')->insert(['parent_id' => 35, 'name' => 'Picanto', 'slug' => 'picanto']);
        DB::table('cars')->insert(['parent_id' => 35, 'name' => 'Soul', 'slug' => 'soul']);
     




    DB::table('cars')->insert(['parent_id' => 36, 'parent_id' => 1, 'name' => 'Suzuki', 'slug' => 'suzuki']);



        DB::table('cars')->insert(['parent_id' => 36, 'name' => 'Suzuki Aerio', 'slug' => 'suzuki-aerio']);
        DB::table('cars')->insert(['parent_id' => 36, 'name' => 'Suzuki Alto', 'slug' => 'suzuki-alto']);
        DB::table('cars')->insert(['parent_id' => 36, 'name' => 'Suzuki APV', 'slug' => 'suzuki-apv']);
  




    DB::table('cars')->insert(['id' => 37, 'parent_id' => 1, 'name' => 'Fiat', 'slug' => 'fiat']);


        DB::table('cars')->insert(['parent_id' => 37, 'name' => '4 HP', 'slug' => '4-hp']);
        DB::table('cars')->insert(['parent_id' => 37, 'name' => '6 HP', 'slug' => '6-hp']);
        DB::table('cars')->insert(['parent_id' => 37, 'name' => '8 HP', 'slug' => '8-hp']);
        DB::table('cars')->insert(['parent_id' => 37, 'name' => '10 HP', 'slug' => '10-hp']);
 

    DB::table('cars')->insert(['id' => 38, 'parent_id' => 1, 'name' => 'GMC', 'slug' => 'gmc']);


        DB::table('cars')->insert(['parent_id' => 38, 'name' => 'Acadia', 'slug' => 'acadia']);
        DB::table('cars')->insert(['parent_id' => 38, 'name' => 'Astro 95', 'slug' => 'astro-95']);
        DB::table('cars')->insert(['parent_id' => 38, 'name' => 'Chevrolet/B-Series', 'slug' => 'chevrolet-b-series']);


    DB::table('cars')->insert(['id' => 39, 'parent_id' => 1, 'name' => 'Volvo', 'slug' => 'volvo']);




        DB::table('cars')->insert(['parent_id' => 39, 'name' => 'ÖV 4', 'slug' => 'ov-4']);
        DB::table('cars')->insert(['parent_id' => 39, 'name' => 'PV650 Series', 'slug' => 'pv650-series']);
        DB::table('cars')->insert(['parent_id' => 39, 'name' => 'TR670 Series', 'slug' => 'tr670-series']);
        DB::table('cars')->insert(['parent_id' => 39, 'name' => 'Luxury car', 'slug' => 'luxury-car']);
        DB::table('cars')->insert(['parent_id' => 39, 'name' => 'Large family car', 'slug' => 'large-family-car']);
   

    DB::table('cars')->insert(['id' => 40, 'parent_id' => 1, 'name' => 'Alfa Romeo', 'slug' => 'alfa-romeo']);


        DB::table('cars')->insert(['parent_id' => 40, 'name' => '4C', 'slug' => '4c']);
        DB::table('cars')->insert(['parent_id' => 40, 'name' => '6C', 'slug' => '6c']);
        DB::table('cars')->insert(['parent_id' => 40, 'name' => '8C', 'slug' => '8c']);
        DB::table('cars')->insert(['parent_id' => 40, 'name' => '8C Competizione', 'slug' => '8c-competizione']);
        DB::table('cars')->insert(['parent_id' => 40, 'name' => '12C', 'slug' => '12c']);
        DB::table('cars')->insert(['parent_id' => 40, 'name' => 'ALFA 15/20 HP', 'slug' => 'alfa-15-20-hp']);
        DB::table('cars')->insert(['parent_id' => 40, 'name' => 'ALFA 12 HP', 'slug' => 'alfa-12-hp']);
  


    DB::table('cars')->insert(['id' => 41, 'parent_id' => 1, 'name' => 'Aston Martin', 'slug' => 'aston-martin']);

        DB::table('cars')->insert(['parent_id' => 41, 'name' => 'Aston Martin 2-Litre Sports', 'slug' => 'aston-martin-2-litre-sports']);
        DB::table('cars')->insert(['parent_id' => 41, 'name' => 'Aston Martin Valkyrie', 'slug' => 'aston-martin-valkyrie']);
        DB::table('cars')->insert(['parent_id' => 41, 'name' => 'Aston Martin Bulldog', 'slug' => 'aston-martin-bulldog']);
        DB::table('cars')->insert(['parent_id' => 41, 'name' => 'Aston Martin Cygnet', 'slug' => 'aston-martin-cygnet']);
  

    DB::table('cars')->insert(['id' => 42, 'parent_id' => 1, 'name' => 'Bentley', 'slug' => 'bentley']);

        DB::table('cars')->insert(['parent_id' => 42, 'name' => 'Bentley 3 Litre', 'slug' => 'bentley-3-litre']);
        DB::table('cars')->insert(['parent_id' => 42, 'name' => 'Bentley 4 Litre', 'slug' => 'bentley-4-litre']);
        DB::table('cars')->insert(['parent_id' => 42, 'name' => 'Bentley 8 Litre', 'slug' => 'bentley-8-litre']);
        DB::table('cars')->insert(['parent_id' => 42, 'name' => 'Bentley Azure', 'slug' => 'bentley-azure']);
    

    DB::table('cars')->insert(['id' => 43, 'parent_id' => 1, 'name' => 'BYD', 'slug' => 'byd']);


        DB::table('cars')->insert(['parent_id' => 43, 'name' => 'BYD e5', 'slug' => 'byd-e5']);
        DB::table('cars')->insert(['parent_id' => 43, 'name' => 'BYD K9', 'slug' => 'byd-k9']);
        DB::table('cars')->insert(['parent_id' => 43, 'name' => 'BYD F3', 'slug' => 'byd-f3']);
        DB::table('cars')->insert(['parent_id' => 43, 'name' => 'BYD F6', 'slug' => 'byd-f6']);
        DB::table('cars')->insert(['parent_id' => 43, 'name' => 'BYD F8', 'slug' => 'byd-f8']);
        DB::table('cars')->insert(['parent_id' => 43, 'name' => 'BYD G3', 'slug' => 'byd-g3']);
        DB::table('cars')->insert(['parent_id' => 43, 'name' => 'BYD L3', 'slug' => 'byd-l3']);
        DB::table('cars')->insert(['parent_id' => 43, 'name' => 'BYD Qin', 'slug' => 'byd-qin']);
        DB::table('cars')->insert(['parent_id' => 43, 'name' => 'BYD S8', 'slug' => 'byd-s8']);


    DB::table('cars')->insert(['id' => 44 ,'parent_id' => 1, 'name' => 'Cadillac', 'slug' => 'cadillac']);



        DB::table('cars')->insert(['parent_id' => 44, 'name' => 'Runabout and Tonneau', 'slug' => 'runabout-and-tonneau']);
        DB::table('cars')->insert(['parent_id' => 44, 'name' => 'Runabout and Tonneau', 'slug' => 'runabout-and-tonneau']);
        DB::table('cars')->insert(['parent_id' => 44, 'name' => 'Runabout and Tonneau', 'slug' => 'runabout-and-tonneau']);
        DB::table('cars')->insert(['parent_id' => 44, 'name' => 'Runabout and Tonneau', 'slug' => 'runabout-and-tonneau']);
        DB::table('cars')->insert(['parent_id' => 44, 'name' => 'Runabout and Tonneau', 'slug' => 'runabout-and-tonneau']);
        DB::table('cars')->insert(['parent_id' => 44, 'name' => 'Model D', 'slug' => 'model-d']);
        DB::table('cars')->insert(['parent_id' => 44, 'name' => 'Straight-4', 'slug' => 'straight-4']);
    



    DB::table('cars')->insert(['id' => 45, 'parent_id' => 1, 'name' => 'Chery', 'slug' => 'chery']);

        DB::table('cars')->insert(['parent_id' => 45, 'name' => 'Chery A11', 'slug' => 'chery-a11']);
 
        DB::table('cars')->insert(['parent_id' => 45, 'name' => 'Chery A15', 'slug' => 'chery-a15']);

        DB::table('cars')->insert(['parent_id' => 45, 'name' => 'Chery Eastar', 'slug' => 'chery-eastar']);


        DB::table('cars')->insert(['parent_id' => 45, 'name' => 'Chery A5', 'slug' => 'chery-a5']);

        DB::table('cars')->insert(['parent_id' => 45, 'name' => 'Chery QQ6', 'slug' => 'chery-qq6']);

        DB::table('cars')->insert(['parent_id' => 45, 'name' => 'Karry Youyi', 'slug' => 'karry-youyi']);

        DB::table('cars')->insert(['parent_id' => 45, 'name' => 'Riich R2', 'slug' => 'riich-r2']);
        DB::table('cars')->insert(['parent_id' => 45, 'name' => 'Chery A1', 'slug' => 'chery-a1']);
        DB::table('cars')->insert(['parent_id' => 45, 'name' => 'City car', 'slug' => 'city-car']);

        DB::table('cars')->insert(['parent_id' => 45, 'name' => 'Riich G5', 'slug' => 'riich-g5']);
        DB::table('cars')->insert(['parent_id' => 45, 'name' => 'Riich M1', 'slug' => 'riich-m1']);
        DB::table('cars')->insert(['parent_id' => 45, 'name' => 'Riich X1', 'slug' => 'riich-x1']);
        DB::table('cars')->insert(['parent_id' => 45, 'name' => 'Rely H5', 'slug' => 'rely-h5']);
        DB::table('cars')->insert(['parent_id' => 45, 'name' => 'Riich G6', 'slug' => 'riich-g6']);
        DB::table('cars')->insert(['parent_id' => 45, 'name' => 'Chery Q22', 'slug' => 'chery-q22']);

        DB::table('cars')->insert(['parent_id' => 45, 'name' => 'Riich G3', 'slug' => 'riich-g3']);
        DB::table('cars')->insert(['parent_id' => 45, 'name' => 'Chery X5', 'slug' => 'chery-x5']);
        DB::table('cars')->insert(['parent_id' => 45, 'name' => 'Chery QQ3', 'slug' => 'chery-qq3']);
        DB::table('cars')->insert(['parent_id' => 45, 'name' => 'City car', 'slug' => 'city-car']);
        DB::table('cars')->insert(['parent_id' => 45, 'name' => 'Chery Tiggo', 'slug' => 'chery-tiggo']);

        DB::table('cars')->insert(['parent_id' => 45, 'name' => 'Chery S22', 'slug' => 'chery-s22']);

        DB::table('cars')->insert(['parent_id' => 45, 'name' => 'Chery V5', 'slug' => 'chery-v5']);

        DB::table('cars')->insert(['parent_id' => 45, 'name' => 'Chery A3', 'slug' => 'chery-a3']);
        DB::table('cars')->insert(['parent_id' => 45, 'name' => 'Sedan (automobile)', 'slug' => 'sedan-automobile']);
        DB::table('cars')->insert(['parent_id' => 45, 'name' => 'Chery A13', 'slug' => 'chery-a13']);
        DB::table('cars')->insert(['parent_id' => 45, 'name' => 'Chery Q21', 'slug' => 'chery-q21']);
        
        DB::table('cars')->insert(['parent_id' => 45, 'name' => 'Chery E5', 'slug' => 'chery-e5']);
        DB::table('cars')->insert(['parent_id' => 45, 'name' => 'Chery E8', 'slug' => 'chery-e8']);
        DB::table('cars')->insert(['parent_id' => 45, 'name' => 'Chery Arrizo 7', 'slug' => 'chery-arrizo-7']);
        DB::table('cars')->insert(['parent_id' => 45, 'name' => 'Chery T15', 'slug' => 'chery-t15']);
        DB::table('cars')->insert(['parent_id' => 45, 'name' => 'Chery B12', 'slug' => 'chery-b12']);
        DB::table('cars')->insert(['parent_id' => 45, 'name' => 'Chery P12', 'slug' => 'chery-p12']);
        DB::table('cars')->insert(['parent_id' => 45, 'name' => 'Chery F11', 'slug' => 'chery-f11']);
        DB::table('cars')->insert(['parent_id' => 45, 'name' => 'Chery Faira', 'slug' => 'chery-faira']);
        DB::table('cars')->insert(['parent_id' => 45, 'name' => 'Chery B14', 'slug' => 'chery-b14']);


    DB::table('cars')->insert(['id' => 46, 'parent_id' => 1, 'name' => 'Chrysler', 'slug' => 'chrysler']);

        DB::table('cars')->insert(['parent_id' => 46, 'name' => 'Chrysler 150', 'slug' => 'chrysler-150']);
        DB::table('cars')->insert(['parent_id' => 46, 'name' => 'Chrysler 180', 'slug' => 'chrysler-180']);
        DB::table('cars')->insert(['parent_id' => 46, 'name' => 'Chrysler 200', 'slug' => 'chrysler-200']);
        DB::table('cars')->insert(['parent_id' => 46, 'name' => 'Chrysler 300 letter series', 'slug' => 'chrysler-300-letter-series']);
        DB::table('cars')->insert(['parent_id' => 46, 'name' => 'Chrysler 300M', 'slug' => 'chrysler-300m']);
        DB::table('cars')->insert(['parent_id' => 46, 'name' => 'Chrysler 300 non-letter series', 'slug' => 'chrysler-300-non-letter-series']);
        DB::table('cars')->insert(['parent_id' => 46, 'name' => 'Chrysler Airflow', 'slug' => 'chrysler-airflow']);
        DB::table('cars')->insert(['parent_id' => 46, 'name' => 'Chrysler Airstream', 'slug' => 'chrysler-airstream']);
        DB::table('cars')->insert(['parent_id' => 46, 'name' => 'Chrysler Alpine', 'slug' => 'chrysler-alpine']);
        DB::table('cars')->insert(['parent_id' => 46, 'name' => 'Chrysler Aspen', 'slug' => 'chrysler-aspen']);
        DB::table('cars')->insert(['parent_id' => 46, 'name' => 'Hillman Avenger', 'slug' => 'hillman-avenger']);
        DB::table('cars')->insert(['parent_id' => 46, 'name' => 'Chrysler Centura', 'slug' => 'chrysler-centura']);
        DB::table('cars')->insert(['parent_id' => 46, 'name' => 'Chrysler Australia', 'slug' => 'chrysler-australia']);
        DB::table('cars')->insert(['parent_id' => 46, 'name' => 'Chrysler Charger', 'slug' => 'chrysler-charger']);
        DB::table('cars')->insert(['parent_id' => 46, 'name' => 'Chrysler by Chrysler', 'slug' => 'chrysler-by-chrysler']);
        DB::table('cars')->insert(['parent_id' => 46, 'name' => 'Chrysler Cirrus', 'slug' => 'chrysler-cirrus']);
        DB::table('cars')->insert(['parent_id' => 46, 'name' => 'Chrysler Colt', 'slug' => 'chrysler-colt']);
        DB::table('cars')->insert(['parent_id' => 46, 'name' => 'South Africa', 'slug' => 'south-africa']);
        DB::table('cars')->insert(['parent_id' => 46, 'name' => 'Chrysler Concorde', 'slug' => 'chrysler-concorde']);
        DB::table('cars')->insert(['parent_id' => 46, 'name' => 'Chrysler Conquest', 'slug' => 'chrysler-conquest']);
        DB::table('cars')->insert(['parent_id' => 46, 'name' => 'Chrysler Cordoba', 'slug' => 'chrysler-cordoba']);
        DB::table('cars')->insert(['parent_id' => 46, 'name' => 'Chrysler Crossfire', 'slug' => 'chrysler-crossfire']);
        DB::table('cars')->insert(['parent_id' => 46, 'name' => 'Chrysler D-50', 'slug' => 'chrysler-d-50']);
        DB::table('cars')->insert(['parent_id' => 46, 'name' => 'Canada', 'slug' => 'canada']);
        DB::table('cars')->insert(['parent_id' => 46, 'name' => 'Lancia Delta', 'slug' => 'lancia-delta']);
        DB::table('cars')->insert(['parent_id' => 46, 'name' => 'UK', 'slug' => 'uk']);
        DB::table('cars')->insert(['parent_id' => 46, 'name' => 'Republic of Ireland', 'slug' => 'republic-of-ireland']);
        DB::table('cars')->insert(['parent_id' => 46, 'name' => 'Chrysler Drifter', 'slug' => 'chrysler-drifter']);
        DB::table('cars')->insert(['parent_id' => 46, 'name' => 'Chrysler Executive', 'slug' => 'chrysler-executive']);
        DB::table('cars')->insert(['parent_id' => 46, 'name' => 'Chrysler Fifth Avenue', 'slug' => 'chrysler-fifth-avenue']);
        DB::table('cars')->insert(['parent_id' => 46, 'name' => 'Chrysler Galant', 'slug' => 'chrysler-galant']);
        DB::table('cars')->insert(['parent_id' => 46, 'name' => 'Chrysler Horizon', 'slug' => 'chrysler-horizon']);
        DB::table('cars')->insert(['parent_id' => 46, 'name' => 'Chrysler Hunter', 'slug' => 'chrysler-hunter']);
        DB::table('cars')->insert(['parent_id' => 46, 'name' => 'Chrysler Imperial', 'slug' => 'chrysler-imperial']);
        DB::table('cars')->insert(['parent_id' => 46, 'name' => 'Chrysler Imperial Parade Phaeton', 'slug' => 'chrysler-imperial-parade-phaeton']);
        DB::table('cars')->insert(['parent_id' => 46, 'name' => 'Chrysler L300 Express', 'slug' => 'chrysler-l300-express']);
        DB::table('cars')->insert(['parent_id' => 46, 'name' => 'Chrysler Lancer', 'slug' => 'chrysler-lancer']);
        DB::table('cars')->insert(['parent_id' => 46, 'name' => 'Chrysler Laser', 'slug' => 'chrysler-laser']);
        DB::table('cars')->insert(['parent_id' => 46, 'name' => 'Chrysler LeBaron', 'slug' => 'chrysler-lebaron']);
        DB::table('cars')->insert(['parent_id' => 46, 'name' => 'Chrysler LHS', 'slug' => 'chrysler-lhs']);
        DB::table('cars')->insert(['parent_id' => 46, 'name' => 'Chrysler Newport', 'slug' => 'chrysler-newport']);
        DB::table('cars')->insert(['parent_id' => 46, 'name' => 'Chrysler Neon', 'slug' => 'chrysler-neon']);
        DB::table('cars')->insert(['parent_id' => 46, 'name' => 'Japan', 'slug' => 'japan']);
        DB::table('cars')->insert(['parent_id' => 46, 'name' => 'Chrysler New Yorker', 'slug' => 'chrysler-new-yorker']);
        DB::table('cars')->insert(['parent_id' => 46, 'name' => 'Chrysler Fifth Avenue', 'slug' => 'chrysler-fifth-avenue']);
        DB::table('cars')->insert(['parent_id' => 46, 'name' => 'Chrysler Pacifica', 'slug' => 'chrysler-pacifica']);
        DB::table('cars')->insert(['parent_id' => 46, 'name' => 'Chrysler Prowler', 'slug' => 'chrysler-prowler']);
        DB::table('cars')->insert(['parent_id' => 46, 'name' => 'Chrysler PT Cruiser', 'slug' => 'chrysler-pt-cruiser']);
        DB::table('cars')->insert(['parent_id' => 46, 'name' => 'Chrysler Regal', 'slug' => 'chrysler-regal']);
        DB::table('cars')->insert(['parent_id' => 46, 'name' => 'Chrysler Royal (Australia)', 'slug' => 'chrysler-royal-australia']);
        DB::table('cars')->insert(['parent_id' => 46, 'name' => 'Special:Upload', 'slug' => 'specialupload']);
        DB::table('cars')->insert(['parent_id' => 46, 'name' => 'Wikipedia:IMAGE', 'slug' => 'wikipediaimage']);
        DB::table('cars')->insert(['parent_id' => 46, 'name' => 'Chrysler Royal', 'slug' => 'chrysler-royal']);
        DB::table('cars')->insert(['parent_id' => 46, 'name' => 'Chrysler Royal (Australia)', 'slug' => 'chrysler-royal-australia']);
        DB::table('cars')->insert(['parent_id' => 46, 'name' => 'Chrysler Saratoga', 'slug' => 'chrysler-saratoga']);
        DB::table('cars')->insert(['parent_id' => 46, 'name' => 'Chrysler Sebring', 'slug' => 'chrysler-sebring']);
        DB::table('cars')->insert(['parent_id' => 46, 'name' => 'Chrysler Sigma', 'slug' => 'chrysler-sigma']);
        DB::table('cars')->insert(['parent_id' => 46, 'name' => 'Chrysler Sunbeam', 'slug' => 'chrysler-sunbeam']);
        DB::table('cars')->insert(['parent_id' => 46, 'name' => 'Chrysler TC by Maserati', 'slug' => 'chrysler-tc-by-maserati']);
        DB::table('cars')->insert(['parent_id' => 46, 'name' => 'Chrysler Touring', 'slug' => 'chrysler-touring']);
        DB::table('cars')->insert(['parent_id' => 46, 'name' => 'Chrysler Town and Country', 'slug' => 'chrysler-town-and-country']);
        DB::table('cars')->insert(['parent_id' => 46, 'name' => 'Chrysler Turbine Car', 'slug' => 'chrysler-turbine-car']);
        DB::table('cars')->insert(['parent_id' => 46, 'name' => 'Gas turbine', 'slug' => 'gas-turbine']);
        DB::table('cars')->insert(['parent_id' => 46, 'name' => 'Chrysler Valiant', 'slug' => 'chrysler-valiant']);
        DB::table('cars')->insert(['parent_id' => 46, 'name' => 'Chrysler Valiant', 'slug' => 'chrysler-valiant']);
        DB::table('cars')->insert(['parent_id' => 46, 'name' => 'Chrysler Vogue', 'slug' => 'chrysler-vogue']);
        DB::table('cars')->insert(['parent_id' => 46, 'name' => 'Chrysler Voyager', 'slug' => 'chrysler-voyager']);
        DB::table('cars')->insert(['parent_id' => 46, 'name' => 'Chrysler Royal (Australia)', 'slug' => 'chrysler-royal-australia']);
        DB::table('cars')->insert(['parent_id' => 46, 'name' => 'Chrysler Windsor', 'slug' => 'chrysler-windsor']);
        DB::table('cars')->insert(['parent_id' => 46, 'name' => 'Lancia Ypsilon', 'slug' => 'lancia-ypsilon']);


    DB::table('cars')->insert(['id' => 47, 'parent_id' => 1, 'name' => 'Citroên', 'slug' => 'citroen']);



        DB::table('cars')->insert(['parent_id' => 47, 'name' => 'Kégresse track', 'slug' => 'kegresse-track']);
        DB::table('cars')->insert(['parent_id' => 47, 'name' => 'Citroën 7CV', 'slug' => 'citroen-7cv']);
        DB::table('cars')->insert(['parent_id' => 47, 'name' => 'Citroën 7C', 'slug' => 'citroen-7c']);
        DB::table('cars')->insert(['parent_id' => 47, 'name' => 'Citroën 7U', 'slug' => 'citroen-7u']);
        DB::table('cars')->insert(['parent_id' => 47, 'name' => 'Citroën 8CV', 'slug' => 'citroen-8cv']);
        DB::table('cars')->insert(['parent_id' => 47, 'name' => 'Citroën 8CV', 'slug' => 'citroen-8cv']);
     
DB::table('cars')->insert(['id' => 48, 'parent_id' => 1, 'name' => 'Daewoo', 'slug' => 'daewoo']);


        DB::table('cars')->insert(['parent_id' => 48, 'name' => 'Suzuki Carry', 'slug' => 'suzuki-carry']);
        DB::table('cars')->insert(['parent_id' => 48, 'name' => '1.5i', 'slug' => '15i']);
        DB::table('cars')->insert(['parent_id' => 48, 'name' => '1.5i', 'slug' => '15i']);
        DB::table('cars')->insert(['parent_id' => 48, 'name' => 'Alpheon', 'slug' => 'alpheon']);
        DB::table('cars')->insert(['parent_id' => 48, 'name' => 'Arcadia', 'slug' => 'arcadia']);
        DB::table('cars')->insert(['parent_id' => 48, 'name' => 'Brougham', 'slug' => 'brougham']);
        DB::table('cars')->insert(['parent_id' => 48, 'name' => 'BS/BM', 'slug' => 'bs-bm']);
        DB::table('cars')->insert(['parent_id' => 48, 'name' => 'Chairman', 'slug' => 'chairman']);
        DB::table('cars')->insert(['parent_id' => 48, 'name' => 'Cielo', 'slug' => 'cielo']);

    DB::table('cars')->insert(['id' => 49, 'parent_id' => 1, 'name' => 'Daihatsu', 'slug' => 'daihatsu']);


        DB::table('cars')->insert(['parent_id' => 49, 'name' => 'Altis', 'slug' => 'altis']);
        DB::table('cars')->insert(['parent_id' => 49, 'name' => 'Applause', 'slug' => 'applause']);
        DB::table('cars')->insert(['parent_id' => 49, 'name' => 'Atrai', 'slug' => 'atrai']);
        DB::table('cars')->insert(['parent_id' => 49, 'name' => 'Ayla', 'slug' => 'ayla']);
        DB::table('cars')->insert(['parent_id' => 49, 'name' => 'Bee', 'slug' => 'bee']);
        DB::table('cars')->insert(['parent_id' => 49, 'name' => 'Boon', 'slug' => 'boon']);
        DB::table('cars')->insert(['parent_id' => 49, 'name' => 'Cast', 'slug' => 'cast']);


    DB::table('cars')->insert(['id' => 50, 'parent_id' => 1, 'name' => 'Dodge', 'slug' => 'dodge']);

        DB::table('cars')->insert(['parent_id' => 50, 'name' => 'Cashuat', 'slug' => 'cashuat']);
        DB::table('cars')->insert(['parent_id' => 50, 'name' => 'WC series', 'slug' => 'wc-series']);
        DB::table('cars')->insert(['parent_id' => 50, 'name' => 'WC54', 'slug' => 'wc54']);
        DB::table('cars')->insert(['parent_id' => 50, 'name' => 'K-50 truck', 'slug' => 'k-50-truck']);
        DB::table('cars')->insert(['parent_id' => 50, 'name' => 'M6 Gun Motor Carriage', 'slug' => 'm6-gun-motor-carriage']);
        DB::table('cars')->insert(['parent_id' => 50, 'name' => '2000GTX', 'slug' => '2000gtx']);
        DB::table('cars')->insert(['parent_id' => 50, 'name' => '50 Series', 'slug' => '50-series']);
        DB::table('cars')->insert(['parent_id' => 50, 'name' => '300', 'slug' => '300']);
        DB::table('cars')->insert(['parent_id' => 50, 'name' => '330', 'slug' => '330']);
        DB::table('cars')->insert(['parent_id' => 50, 'name' => '400', 'slug' => '400']);
        DB::table('cars')->insert(['parent_id' => 50, 'name' => 'Wayfarer', 'slug' => 'wayfarer']);



    DB::table('cars')->insert(['id' => 51, 'parent_id' => 1, 'name' => 'Ferrari', 'slug' => 'ferrari']);



        DB::table('cars')->insert(['parent_id' => 51, 'name' => 'Ferrari Club of America', 'slug' => 'ferrari-club-of-america']);
        DB::table('cars')->insert(['parent_id' => 51, 'name' => '2005 United States Grand Prix', 'slug' => '2005-united-states-grand-prix']);
        DB::table('cars')->insert(['parent_id' => 51, 'name' => 'Ferrari', 'slug' => 'ferrari']);
        DB::table('cars')->insert(['parent_id' => 51, 'name' => 'Berlinetta', 'slug' => 'berlinetta']);
        DB::table('cars')->insert(['parent_id' => 51, 'name' => 'Coupé', 'slug' => 'coupe']);
        DB::table('cars')->insert(['parent_id' => 51, 'name' => 'Convertible', 'slug' => 'convertible']);
        DB::table('cars')->insert(['parent_id' => 51, 'name' => 'Ferrari 195 Inter', 'slug' => 'ferrari-195-inter']);
        DB::table('cars')->insert(['parent_id' => 51, 'name' => 'Ferrari 275', 'slug' => 'ferrari-275']);

    DB::table('cars')->insert(['id' => 52 ,'parent_id' => 1, 'name' => 'Geely', 'slug' => 'geely']);

        DB::table('cars')->insert(['parent_id' => 52, 'name' => 'Geely BL', 'slug' => 'geely-bl']);
        DB::table('cars')->insert(['parent_id' => 52, 'name' => 'Geely Borui', 'slug' => 'geely-borui']);
        DB::table('cars')->insert(['parent_id' => 52, 'name' => 'Geely CD', 'slug' => 'geely-cd']);
        DB::table('cars')->insert(['parent_id' => 52, 'name' => 'Geely CK', 'slug' => 'geely-ck']);
        DB::table('cars')->insert(['parent_id' => 52, 'name' => 'Geely HQ', 'slug' => 'geely-hq']);
        DB::table('cars')->insert(['parent_id' => 52, 'name' => 'Geely LC', 'slug' => 'geely-lc']);
        DB::table('cars')->insert(['parent_id' => 52, 'name' => 'Geely MR', 'slug' => 'geely-mr']);
        DB::table('cars')->insert(['parent_id' => 52, 'name' => 'Geely PU', 'slug' => 'geely-pu']);


    DB::table('cars')->insert(['id' => 53, 'parent_id' => 1, 'name' => 'Hummer', 'slug' => 'hummer']);

        DB::table('cars')->insert(['parent_id' => 53, 'name' => 'H1', 'slug' => 'h1']);
        DB::table('cars')->insert(['parent_id' => 53, 'name' => 'H2', 'slug' => 'h2']);
        DB::table('cars')->insert(['parent_id' => 53, 'name' => 'H3', 'slug' => 'h3']);
        DB::table('cars')->insert(['parent_id' => 53, 'name' => 'HX', 'slug' => 'hx']);



    DB::table('cars')->insert(['id' => 54, 'parent_id' => 1, 'name' => 'Infiniti', 'slug' => 'infiniti']);



        DB::table('cars')->insert(['parent_id' => 54, 'name' => 'FX', 'slug' => 'fx']);
        DB::table('cars')->insert(['parent_id' => 54, 'name' => 'G-series (Q40/Q60)', 'slug' => 'g-series-q40-q60']);
        DB::table('cars')->insert(['parent_id' => 54, 'name' => 'J30', 'slug' => 'j30']);
        DB::table('cars')->insert(['parent_id' => 54, 'name' => 'Q30', 'slug' => 'q30']);
        DB::table('cars')->insert(['parent_id' => 54, 'name' => 'Q40', 'slug' => 'q40']);
        DB::table('cars')->insert(['parent_id' => 54, 'name' => 'Q45', 'slug' => 'q45']);
        DB::table('cars')->insert(['parent_id' => 54, 'name' => 'Q50', 'slug' => 'q50']);
        DB::table('cars')->insert(['parent_id' => 54, 'name' => 'Q60', 'slug' => 'q60']);
        DB::table('cars')->insert(['parent_id' => 54, 'name' => 'QX4', 'slug' => 'qx4']);
        DB::table('cars')->insert(['parent_id' => 54, 'name' => 'QX30', 'slug' => 'qx30']);
        DB::table('cars')->insert(['parent_id' => 54, 'name' => 'QX50', 'slug' => 'qx50']);
        DB::table('cars')->insert(['parent_id' => 54, 'name' => 'QX60', 'slug' => 'qx60']);
        DB::table('cars')->insert(['parent_id' => 54, 'name' => 'QX70', 'slug' => 'qx70']);
        DB::table('cars')->insert(['parent_id' => 54, 'name' => 'QX80', 'slug' => 'qx80']);

    DB::table('cars')->insert(['id' => 55, 'parent_id' => 1, 'name' => 'Isuzu', 'slug' => 'isuzu']);

        DB::table('cars')->insert(['parent_id' => 55, 'name' => '117 Coupé', 'slug' => '117-coupe']);
        DB::table('cars')->insert(['parent_id' => 55, 'name' => '810', 'slug' => '810']);
        DB::table('cars')->insert(['parent_id' => 55, 'name' => '4200R', 'slug' => '4200r']);
        DB::table('cars')->insert(['parent_id' => 55, 'name' => 'Amigo', 'slug' => 'amigo']);
        DB::table('cars')->insert(['parent_id' => 55, 'name' => 'Ascender', 'slug' => 'ascender']);
        DB::table('cars')->insert(['parent_id' => 55, 'name' => 'Aska', 'slug' => 'aska']);
        DB::table('cars')->insert(['parent_id' => 55, 'name' => 'Axiom', 'slug' => 'axiom']);
        DB::table('cars')->insert(['parent_id' => 55, 'name' => 'Bellel', 'slug' => 'bellel']);
        DB::table('cars')->insert(['parent_id' => 55, 'name' => 'Bellett Gemini', 'slug' => 'bellett-gemini']);
        DB::table('cars')->insert(['parent_id' => 55, 'name' => 'Bellett', 'slug' => 'bellett']);
        DB::table('cars')->insert(['parent_id' => 55, 'name' => 'BU', 'slug' => 'bu']);
        DB::table('cars')->insert(['parent_id' => 55, 'name' => 'C-Series', 'slug' => 'c-series']);
        DB::table('cars')->insert(['parent_id' => 55, 'name' => 'Como', 'slug' => 'como']);
        DB::table('cars')->insert(['parent_id' => 55, 'name' => 'Cubic', 'slug' => 'cubic']);
        DB::table('cars')->insert(['parent_id' => 55, 'name' => 'Fargo', 'slug' => 'fargo']);
        DB::table('cars')->insert(['parent_id' => 55, 'name' => 'Faster', 'slug' => 'faster']);
        DB::table('cars')->insert(['parent_id' => 55, 'name' => 'Florian', 'slug' => 'florian']);
        DB::table('cars')->insert(['parent_id' => 55, 'name' => 'Forward', 'slug' => 'forward']);
        DB::table('cars')->insert(['parent_id' => 55, 'name' => 'Gala', 'slug' => 'gala']);
        DB::table('cars')->insert(['parent_id' => 55, 'name' => 'Gala Mio', 'slug' => 'gala-mio']);
        DB::table('cars')->insert(['parent_id' => 55, 'name' => 'Geminett II', 'slug' => 'geminett-ii']);
        DB::table('cars')->insert(['parent_id' => 55, 'name' => 'Gemini', 'slug' => 'gemini']);
        DB::table('cars')->insert(['parent_id' => 55, 'name' => 'Giga', 'slug' => 'giga']);
        DB::table('cars')->insert(['parent_id' => 55, 'name' => 'Grafter', 'slug' => 'grafter']);
        DB::table('cars')->insert(['parent_id' => 55, 'name' => 'H-Series', 'slug' => 'h-series']);
        DB::table('cars')->insert(['parent_id' => 55, 'name' => 'Heavy Duty', 'slug' => 'heavy-duty']);
        DB::table('cars')->insert(['parent_id' => 55, 'name' => 'Hombre', 'slug' => 'hombre']);
        DB::table('cars')->insert(['parent_id' => 55, 'name' => 'Hillman Minx', 'slug' => 'hillman-minx']);
        DB::table('cars')->insert(['parent_id' => 55, 'name' => 'Journey', 'slug' => 'journey']);
        DB::table('cars')->insert(['parent_id' => 55, 'name' => 'Journey-K', 'slug' => 'journey-k']);
        DB::table('cars')->insert(['parent_id' => 55, 'name' => 'Journey-Q', 'slug' => 'journey-q']);
        DB::table('cars')->insert(['parent_id' => 55, 'name' => 'KB', 'slug' => 'kb']);
        DB::table('cars')->insert(['parent_id' => 55, 'name' => 'LB', 'slug' => 'lb']);
        DB::table('cars')->insert(['parent_id' => 55, 'name' => 'Leopard', 'slug' => 'leopard']);
        DB::table('cars')->insert(['parent_id' => 55, 'name' => 'Lingqingka', 'slug' => 'lingqingka']);
        DB::table('cars')->insert(['parent_id' => 55, 'name' => 'MU', 'slug' => 'mu']);
        DB::table('cars')->insert(['parent_id' => 55, 'name' => 'MU-7', 'slug' => 'mu-7']);
        DB::table('cars')->insert(['parent_id' => 55, 'name' => 'MU-X', 'slug' => 'mu-x']);
        DB::table('cars')->insert(['parent_id' => 55, 'name' => 'Oasis', 'slug' => 'oasis']);
        DB::table('cars')->insert(['parent_id' => 55, 'name' => 'Panther', 'slug' => 'panther']);
        DB::table('cars')->insert(['parent_id' => 55, 'name' => 'Piazza', 'slug' => 'piazza']);
        DB::table('cars')->insert(['parent_id' => 55, 'name' => 'Pika', 'slug' => 'pika']);
        DB::table('cars')->insert(['parent_id' => 55, 'name' => 'Reach', 'slug' => 'reach']);
        DB::table('cars')->insert(['parent_id' => 55, 'name' => 'Rodeo', 'slug' => 'rodeo']);
        DB::table('cars')->insert(['parent_id' => 55, 'name' => 'Rodeo Denver', 'slug' => 'rodeo-denver']);
        DB::table('cars')->insert(['parent_id' => 55, 'name' => 'Saehan BL064', 'slug' => 'saehan-bl064']);
        DB::table('cars')->insert(['parent_id' => 55, 'name' => 'Spark', 'slug' => 'spark']);
        DB::table('cars')->insert(['parent_id' => 55, 'name' => 'Statesman De Ville', 'slug' => 'statesman-de-ville']);
        DB::table('cars')->insert(['parent_id' => 55, 'name' => 'Super Cruiser', 'slug' => 'super-cruiser']);
        DB::table('cars')->insert(['parent_id' => 55, 'name' => 'VehiCROSS', 'slug' => 'vehicross']);
        DB::table('cars')->insert(['parent_id' => 55, 'name' => 'Wasp', 'slug' => 'wasp']);
        DB::table('cars')->insert(['parent_id' => 55, 'name' => 'WFR', 'slug' => 'wfr']);
        DB::table('cars')->insert(['parent_id' => 55, 'name' => 'MU Wizard', 'slug' => 'mu-wizard']);
        DB::table('cars')->insert(['parent_id' => 55, 'name' => 'Wizard', 'slug' => 'wizard']);


    DB::table('cars')->insert(['id' => 56, 'parent_id' => 1, 'name' => 'Jaguar', 'slug' => 'jaguar']);


        DB::table('cars')->insert(['parent_id' => 56, 'name' => 'SS 1', 'slug' => 'ss-1']);
        DB::table('cars')->insert(['parent_id' => 56, 'name' => '2.4 Litre', 'slug' => '24-litre']);
        DB::table('cars')->insert(['parent_id' => 56, 'name' => '3.4 Litre', 'slug' => '34-litre']);
        DB::table('cars')->insert(['parent_id' => 56, 'name' => '3.8 Litre', 'slug' => '38-litre']);
        DB::table('cars')->insert(['parent_id' => 56, 'name' => 'SS 90', 'slug' => 'ss-90']);
        DB::table('cars')->insert(['parent_id' => 56, 'name' => '240', 'slug' => '240']);
        DB::table('cars')->insert(['parent_id' => 56, 'name' => '340', 'slug' => '340']);
        DB::table('cars')->insert(['parent_id' => 56, 'name' => '420G', 'slug' => '420g']);
        DB::table('cars')->insert(['parent_id' => 56, 'name' => 'C-Type', 'slug' => 'c-type']);
        DB::table('cars')->insert(['parent_id' => 56, 'name' => 'C-XF', 'slug' => 'c-xf']);
        DB::table('cars')->insert(['parent_id' => 56, 'name' => 'F-Pace', 'slug' => 'f-pace']);
        DB::table('cars')->insert(['parent_id' => 56, 'name' => 'F-Type', 'slug' => 'f-type']);
        DB::table('cars')->insert(['parent_id' => 56, 'name' => 'SS 100', 'slug' => 'ss-100']);
        DB::table('cars')->insert(['parent_id' => 56, 'name' => 'Mark 1', 'slug' => 'mark-1']);
        DB::table('cars')->insert(['parent_id' => 56, 'name' => 'Mark 2', 'slug' => 'mark-2']);
        DB::table('cars')->insert(['parent_id' => 56, 'name' => 'Mark IV', 'slug' => 'mark-iv']);
        DB::table('cars')->insert(['parent_id' => 56, 'name' => 'Mark V', 'slug' => 'mark-v']);
        DB::table('cars')->insert(['parent_id' => 56, 'name' => 'Mark VII', 'slug' => 'mark-vii']);
        DB::table('cars')->insert(['parent_id' => 56, 'name' => 'Mark VIII', 'slug' => 'mark-viii']);
        DB::table('cars')->insert(['parent_id' => 56, 'name' => 'Mark IX', 'slug' => 'mark-ix']);
        DB::table('cars')->insert(['parent_id' => 56, 'name' => 'Mark X', 'slug' => 'mark-x']);
        DB::table('cars')->insert(['parent_id' => 56, 'name' => 'R-Coupe', 'slug' => 'r-coupe']);
        DB::table('cars')->insert(['parent_id' => 56, 'name' => 'S-Type', 'slug' => 's-type']);
        DB::table('cars')->insert(['parent_id' => 56, 'name' => 'S-Type (1963)', 'slug' => 's-type-1963']);
        DB::table('cars')->insert(['parent_id' => 56, 'name' => 'X-Type', 'slug' => 'x-type']);
        DB::table('cars')->insert(['parent_id' => 56, 'name' => 'XE', 'slug' => 'xe']);
        DB::table('cars')->insert(['parent_id' => 56, 'name' => 'XF', 'slug' => 'xf']);
        DB::table('cars')->insert(['parent_id' => 56, 'name' => 'XJ', 'slug' => 'xj']);
        DB::table('cars')->insert(['parent_id' => 56, 'name' => 'XJ (X300)', 'slug' => 'xj-x300']);
        DB::table('cars')->insert(['parent_id' => 56, 'name' => 'XJ (X308)', 'slug' => 'xj-x308']);
        DB::table('cars')->insert(['parent_id' => 56, 'name' => 'XJ (XJ40)', 'slug' => 'xj-xj40']);
        DB::table('cars')->insert(['parent_id' => 56, 'name' => 'XJ (X358)', 'slug' => 'xj-x358']);
        DB::table('cars')->insert(['parent_id' => 56, 'name' => 'XJ (X350)', 'slug' => 'xj-x350']);
        DB::table('cars')->insert(['parent_id' => 56, 'name' => 'XJ (X351)', 'slug' => 'xj-x351']);
        DB::table('cars')->insert(['parent_id' => 56, 'name' => 'XJ13', 'slug' => 'xj13']);
        DB::table('cars')->insert(['parent_id' => 56, 'name' => 'XJ220', 'slug' => 'xj220']);
        DB::table('cars')->insert(['parent_id' => 56, 'name' => 'XJR', 'slug' => 'xjr']);
        DB::table('cars')->insert(['parent_id' => 56, 'name' => 'XJR sportscars', 'slug' => 'xjr-sportscars']);
        DB::table('cars')->insert(['parent_id' => 56, 'name' => 'XJR-8', 'slug' => 'xjr-8']);
        DB::table('cars')->insert(['parent_id' => 56, 'name' => 'XJR-9', 'slug' => 'xjr-9']);
        DB::table('cars')->insert(['parent_id' => 56, 'name' => 'XJR-11', 'slug' => 'xjr-11']);
        DB::table('cars')->insert(['parent_id' => 56, 'name' => 'XJR-12', 'slug' => 'xjr-12']);
        DB::table('cars')->insert(['parent_id' => 56, 'name' => 'XJR-14', 'slug' => 'xjr-14']);
        DB::table('cars')->insert(['parent_id' => 56, 'name' => 'XJR-15', 'slug' => 'xjr-15']);
        DB::table('cars')->insert(['parent_id' => 56, 'name' => 'XJR-17', 'slug' => 'xjr-17']);
        DB::table('cars')->insert(['parent_id' => 56, 'name' => 'XJS', 'slug' => 'xjs']);
        DB::table('cars')->insert(['parent_id' => 56, 'name' => 'XK (X150)', 'slug' => 'xk-x150']);
        DB::table('cars')->insert(['parent_id' => 56, 'name' => 'XK-E', 'slug' => 'xk-e']);
        DB::table('cars')->insert(['parent_id' => 56, 'name' => 'XK', 'slug' => 'xk']);
        DB::table('cars')->insert(['parent_id' => 56, 'name' => 'XK (X100)', 'slug' => 'xk-x100']);
        DB::table('cars')->insert(['parent_id' => 56, 'name' => 'XK100', 'slug' => 'xk100']);
        DB::table('cars')->insert(['parent_id' => 56, 'name' => 'XK120', 'slug' => 'xk120']);
        DB::table('cars')->insert(['parent_id' => 56, 'name' => 'XK140', 'slug' => 'xk140']);
        DB::table('cars')->insert(['parent_id' => 56, 'name' => 'XK150', 'slug' => 'xk150']);
        DB::table('cars')->insert(['parent_id' => 56, 'name' => 'XKSS', 'slug' => 'xkss']);



    DB::table('cars')->insert(['id' => 57, 'parent_id' => 1, 'name' => 'Jeep', 'slug' => 'jeep']);


        DB::table('cars')->insert(['parent_id' => 57, 'name' => 'Cherokee (SJ)', 'slug' => 'cherokee-sj']);
        DB::table('cars')->insert(['parent_id' => 57, 'name' => 'Cherokee (XJ)', 'slug' => 'cherokee-xj']);
        DB::table('cars')->insert(['parent_id' => 57, 'name' => 'Cherokee (KL)', 'slug' => 'cherokee-kl']);
        DB::table('cars')->insert(['parent_id' => 57, 'name' => 'CJ', 'slug' => 'cj']);
        DB::table('cars')->insert(['parent_id' => 57, 'name' => 'Comanche', 'slug' => 'comanche']);
        DB::table('cars')->insert(['parent_id' => 57, 'name' => 'Commander (XK)', 'slug' => 'commander-xk']);
        DB::table('cars')->insert(['parent_id' => 57, 'name' => 'Compass', 'slug' => 'compass']);
        DB::table('cars')->insert(['parent_id' => 57, 'name' => 'FJ', 'slug' => 'fj']);
        DB::table('cars')->insert(['parent_id' => 57, 'name' => 'Forward Control', 'slug' => 'forward-control']);
        DB::table('cars')->insert(['parent_id' => 57, 'name' => 'Gladiator', 'slug' => 'gladiator']);
        DB::table('cars')->insert(['parent_id' => 57, 'name' => 'Grand Cherokee', 'slug' => 'grand-cherokee']);
        DB::table('cars')->insert(['parent_id' => 57, 'name' => 'Grand Cherokee (WJ)', 'slug' => 'grand-cherokee-wj']);
        DB::table('cars')->insert(['parent_id' => 57, 'name' => 'Grand Cherokee (WK)', 'slug' => 'grand-cherokee-wk']);
        DB::table('cars')->insert(['parent_id' => 57, 'name' => 'Grand Cherokee (WK2)', 'slug' => 'grand-cherokee-wk2']);
        DB::table('cars')->insert(['parent_id' => 57, 'name' => 'Grand Cherokee (ZJ)', 'slug' => 'grand-cherokee-zj']);
        DB::table('cars')->insert(['parent_id' => 57, 'name' => 'Cherokee', 'slug' => 'cherokee']);
        DB::table('cars')->insert(['parent_id' => 57, 'name' => 'J8', 'slug' => 'j8']);
        DB::table('cars')->insert(['parent_id' => 57, 'name' => 'Willys Station Wagon', 'slug' => 'willys-station-wagon']);
        DB::table('cars')->insert(['parent_id' => 57, 'name' => 'Willys Truck', 'slug' => 'willys-truck']);
        DB::table('cars')->insert(['parent_id' => 57, 'name' => 'Wagoneer', 'slug' => 'wagoneer']);
        DB::table('cars')->insert(['parent_id' => 57, 'name' => 'Jeepito', 'slug' => 'jeepito']);
        DB::table('cars')->insert(['parent_id' => 57, 'name' => 'Willys-Overland Jeepster', 'slug' => 'willys-overland-jeepster']);
        DB::table('cars')->insert(['parent_id' => 57, 'name' => 'Jeepster Commando', 'slug' => 'jeepster-commando']);
        DB::table('cars')->insert(['parent_id' => 57, 'name' => 'Liberty', 'slug' => 'liberty']);
        DB::table('cars')->insert(['parent_id' => 57, 'name' => 'Liberty (KJ)', 'slug' => 'liberty-kj']);
        DB::table('cars')->insert(['parent_id' => 57, 'name' => 'Liberty (KK)', 'slug' => 'liberty-kk']);
        DB::table('cars')->insert(['parent_id' => 57, 'name' => 'Patriot', 'slug' => 'patriot']);
        DB::table('cars')->insert(['parent_id' => 57, 'name' => 'Renegade (BU)', 'slug' => 'renegade-bu']);
        DB::table('cars')->insert(['parent_id' => 57, 'name' => 'Wagoneer (SJ)', 'slug' => 'wagoneer-sj']);
        DB::table('cars')->insert(['parent_id' => 57, 'name' => 'Wrangler', 'slug' => 'wrangler']);


    DB::table('cars')->insert(['id' => 58, 'parent_id' => 1, 'name' => 'Kia', 'slug' => 'kia']);


        DB::table('cars')->insert(['parent_id' => 58, 'name' => 'Amanti', 'slug' => 'amanti']);
        DB::table('cars')->insert(['parent_id' => 58, 'name' => 'Avella', 'slug' => 'avella']);
        DB::table('cars')->insert(['parent_id' => 58, 'name' => 'Besta', 'slug' => 'besta']);
        DB::table('cars')->insert(['parent_id' => 58, 'name' => 'Bimantara (car)', 'slug' => 'bimantara-car']);
        DB::table('cars')->insert(['parent_id' => 58, 'name' => 'Bongo', 'slug' => 'bongo']);
        DB::table('cars')->insert(['parent_id' => 58, 'name' => 'Borrego', 'slug' => 'borrego']);
        DB::table('cars')->insert(['parent_id' => 58, 'name' => 'Brisa', 'slug' => 'brisa']);
        DB::table('cars')->insert(['parent_id' => 58, 'name' => 'Cadenza', 'slug' => 'cadenza']);
        DB::table('cars')->insert(['parent_id' => 58, 'name' => 'Carens', 'slug' => 'carens']);
        DB::table('cars')->insert(['parent_id' => 58, 'name' => 'Carnival', 'slug' => 'carnival']);
        DB::table('cars')->insert(['parent_id' => 58, 'name' => 'Cerato', 'slug' => 'cerato']);
        DB::table('cars')->insert(['parent_id' => 58, 'name' => 'Clarus', 'slug' => 'clarus']);
        DB::table('cars')->insert(['parent_id' => 58, 'name' => 'Combi', 'slug' => 'combi']);
        DB::table('cars')->insert(['parent_id' => 58, 'name' => 'Concord', 'slug' => 'concord']);
        DB::table('cars')->insert(['parent_id' => 58, 'name' => 'Credos', 'slug' => 'credos']);
        DB::table('cars')->insert(['parent_id' => 58, 'name' => 'Forte', 'slug' => 'forte']);
        DB::table('cars')->insert(['parent_id' => 58, 'name' => 'Granbird', 'slug' => 'granbird']);
        DB::table('cars')->insert(['parent_id' => 58, 'name' => 'Grand Carnival', 'slug' => 'grand-carnival']);
        DB::table('cars')->insert(['parent_id' => 58, 'name' => 'Joice', 'slug' => 'joice']);
        DB::table('cars')->insert(['parent_id' => 58, 'name' => 'Capital', 'slug' => 'capital']);
        DB::table('cars')->insert(['parent_id' => 58, 'name' => 'K9', 'slug' => 'k9']);
        DB::table('cars')->insert(['parent_id' => 58, 'name' => 'Niro', 'slug' => 'niro']);
        DB::table('cars')->insert(['parent_id' => 58, 'name' => 'Soul EV', 'slug' => 'soul-ev']);
        DB::table('cars')->insert(['parent_id' => 58, 'name' => 'Lotze', 'slug' => 'lotze']);
        DB::table('cars')->insert(['parent_id' => 58, 'name' => 'Mentor', 'slug' => 'mentor']);
        DB::table('cars')->insert(['parent_id' => 58, 'name' => 'Mohave', 'slug' => 'mohave']);
        DB::table('cars')->insert(['parent_id' => 58, 'name' => 'Opirus', 'slug' => 'opirus']);
        DB::table('cars')->insert(['parent_id' => 58, 'name' => 'Optima', 'slug' => 'optima']);
        DB::table('cars')->insert(['parent_id' => 58, 'name' => 'Pegas', 'slug' => 'pegas']);
        DB::table('cars')->insert(['parent_id' => 58, 'name' => 'Morning', 'slug' => 'morning']);
        DB::table('cars')->insert(['parent_id' => 58, 'name' => 'Picanto', 'slug' => 'picanto']);
        DB::table('cars')->insert(['parent_id' => 58, 'name' => 'Potentia', 'slug' => 'potentia']);
        DB::table('cars')->insert(['parent_id' => 58, 'name' => 'Pregio', 'slug' => 'pregio']);
        DB::table('cars')->insert(['parent_id' => 58, 'name' => 'Pride', 'slug' => 'pride']);
        DB::table('cars')->insert(['parent_id' => 58, 'name' => 'Ray', 'slug' => 'ray']);
        DB::table('cars')->insert(['parent_id' => 58, 'name' => 'Retona', 'slug' => 'retona']);
        DB::table('cars')->insert(['parent_id' => 58, 'name' => 'Rio', 'slug' => 'rio']);
        DB::table('cars')->insert(['parent_id' => 58, 'name' => 'Sedona', 'slug' => 'sedona']);
        DB::table('cars')->insert(['parent_id' => 58, 'name' => 'Sephia', 'slug' => 'sephia']);
        DB::table('cars')->insert(['parent_id' => 58, 'name' => 'Shuma', 'slug' => 'shuma']);
        DB::table('cars')->insert(['parent_id' => 58, 'name' => 'Sorento', 'slug' => 'sorento']);
        DB::table('cars')->insert(['parent_id' => 58, 'name' => 'Soul', 'slug' => 'soul']);
        DB::table('cars')->insert(['parent_id' => 58, 'name' => 'Spectra', 'slug' => 'spectra']);
        DB::table('cars')->insert(['parent_id' => 58, 'name' => 'Sportage', 'slug' => 'sportage']);
        DB::table('cars')->insert(['parent_id' => 58, 'name' => 'Stinger', 'slug' => 'stinger']);
        DB::table('cars')->insert(['parent_id' => 58, 'name' => 'Venga', 'slug' => 'venga']);

    DB::table('cars')->insert(['id' => 59, 'parent_id' => 1, 'name' => 'Lomborghini', 'slug' => 'lomborghini']);

        DB::table('cars')->insert(['parent_id' => 59, 'name' => '350 GT', 'slug' => '350-gt']);
        DB::table('cars')->insert(['parent_id' => 59, 'name' => 'V12', 'slug' => 'v12']);
        DB::table('cars')->insert(['parent_id' => 59, 'name' => '400 GT', 'slug' => '400-gt']);
        DB::table('cars')->insert(['parent_id' => 59, 'name' => 'V12', 'slug' => 'v12']);
        DB::table('cars')->insert(['parent_id' => 59, 'name' => 'Miura', 'slug' => 'miura']);
        DB::table('cars')->insert(['parent_id' => 59, 'name' => 'V12', 'slug' => 'v12']);
        DB::table('cars')->insert(['parent_id' => 59, 'name' => 'V12', 'slug' => 'v12']);
        DB::table('cars')->insert(['parent_id' => 59, 'name' => 'V12', 'slug' => 'v12']);
        DB::table('cars')->insert(['parent_id' => 59, 'name' => 'Jarama', 'slug' => 'jarama']);
        DB::table('cars')->insert(['parent_id' => 59, 'name' => 'V12', 'slug' => 'v12']);
        DB::table('cars')->insert(['parent_id' => 59, 'name' => 'Urraco', 'slug' => 'urraco']);
        DB::table('cars')->insert(['parent_id' => 59, 'name' => 'V8', 'slug' => 'v8']);
        DB::table('cars')->insert(['parent_id' => 59, 'name' => 'V8', 'slug' => 'v8']);
        DB::table('cars')->insert(['parent_id' => 59, 'name' => 'V8', 'slug' => 'v8']);
        DB::table('cars')->insert(['parent_id' => 59, 'name' => 'Countach', 'slug' => 'countach']);
        DB::table('cars')->insert(['parent_id' => 59, 'name' => 'V12', 'slug' => 'v12']);
        DB::table('cars')->insert(['parent_id' => 59, 'name' => 'V12', 'slug' => 'v12']);
        DB::table('cars')->insert(['parent_id' => 59, 'name' => 'V12', 'slug' => 'v12']);
        DB::table('cars')->insert(['parent_id' => 59, 'name' => 'Silhouette', 'slug' => 'silhouette']);
        DB::table('cars')->insert(['parent_id' => 59, 'name' => 'V8', 'slug' => 'v8']);
        DB::table('cars')->insert(['parent_id' => 59, 'name' => 'Jalpa', 'slug' => 'jalpa']);
        DB::table('cars')->insert(['parent_id' => 59, 'name' => 'V8', 'slug' => 'v8']);
        DB::table('cars')->insert(['parent_id' => 59, 'name' => 'LM002', 'slug' => 'lm002']);
        DB::table('cars')->insert(['parent_id' => 59, 'name' => 'V12', 'slug' => 'v12']);
        DB::table('cars')->insert(['parent_id' => 59, 'name' => 'V12', 'slug' => 'v12']);
        DB::table('cars')->insert(['parent_id' => 59, 'name' => 'V12', 'slug' => 'v12']);
        DB::table('cars')->insert(['parent_id' => 59, 'name' => 'Murciélago', 'slug' => 'murcielago']);
        DB::table('cars')->insert(['parent_id' => 59, 'name' => 'V12', 'slug' => 'v12']);
        DB::table('cars')->insert(['parent_id' => 59, 'name' => 'V12', 'slug' => 'v12']);
        DB::table('cars')->insert(['parent_id' => 59, 'name' => 'Gallardo', 'slug' => 'gallardo']);
        DB::table('cars')->insert(['parent_id' => 59, 'name' => 'V10', 'slug' => 'v10']);
        DB::table('cars')->insert(['parent_id' => 59, 'name' => 'V10', 'slug' => 'v10']);
        DB::table('cars')->insert(['parent_id' => 59, 'name' => 'Reventón', 'slug' => 'reventon']);
        DB::table('cars')->insert(['parent_id' => 59, 'name' => 'Reventon Roadster', 'slug' => 'reventon-roadster']);
        DB::table('cars')->insert(['parent_id' => 59, 'name' => 'V12', 'slug' => 'v12']);
        DB::table('cars')->insert(['parent_id' => 59, 'name' => 'Sesto Elemento', 'slug' => 'sesto-elemento']);
        DB::table('cars')->insert(['parent_id' => 59, 'name' => 'Veneno', 'slug' => 'veneno']);
        DB::table('cars')->insert(['parent_id' => 59, 'name' => 'Aventador', 'slug' => 'aventador']);
        DB::table('cars')->insert(['parent_id' => 59, 'name' => 'Huracán', 'slug' => 'huracan']);
        DB::table('cars')->insert(['parent_id' => 59, 'name' => 'Centenario', 'slug' => 'centenario']);

    DB::table('cars')->insert(['id' => 60, 'parent_id' => 1, 'name' => 'Lancia', 'slug' => 'lancia']);


        DB::table('cars')->insert(['parent_id' => 60, 'name' => 'Rally 037', 'slug' => 'rally-037']);
        DB::table('cars')->insert(['parent_id' => 60, 'name' => '2000', 'slug' => '2000']);
        DB::table('cars')->insert(['parent_id' => 60, 'name' => 'A112', 'slug' => 'a112']);
        DB::table('cars')->insert(['parent_id' => 60, 'name' => 'Alfa', 'slug' => 'alfa']);
        DB::table('cars')->insert(['parent_id' => 60, 'name' => 'Appia', 'slug' => 'appia']);
        DB::table('cars')->insert(['parent_id' => 60, 'name' => 'Aprilia', 'slug' => 'aprilia']);
        DB::table('cars')->insert(['parent_id' => 60, 'name' => 'Ardennes', 'slug' => 'ardennes']);
        DB::table('cars')->insert(['parent_id' => 60, 'name' => 'Ardea', 'slug' => 'ardea']);
        DB::table('cars')->insert(['parent_id' => 60, 'name' => 'Artena', 'slug' => 'artena']);
        DB::table('cars')->insert(['parent_id' => 60, 'name' => 'Astura', 'slug' => 'astura']);
        DB::table('cars')->insert(['parent_id' => 60, 'name' => 'Augusta', 'slug' => 'augusta']);
        DB::table('cars')->insert(['parent_id' => 60, 'name' => 'Aurelia', 'slug' => 'aurelia']);
        DB::table('cars')->insert(['parent_id' => 60, 'name' => 'Belna', 'slug' => 'belna']);
        DB::table('cars')->insert(['parent_id' => 60, 'name' => 'Beta', 'slug' => 'beta']);
        DB::table('cars')->insert(['parent_id' => 60, 'name' => 'Beta (van)', 'slug' => 'beta-van']);
        DB::table('cars')->insert(['parent_id' => 60, 'name' => 'Beta Montecarlo', 'slug' => 'beta-montecarlo']);
        DB::table('cars')->insert(['parent_id' => 60, 'name' => 'Beta Trevi', 'slug' => 'beta-trevi']);
        DB::table('cars')->insert(['parent_id' => 60, 'name' => 'Beta (1909)', 'slug' => 'beta-1909']);
        DB::table('cars')->insert(['parent_id' => 60, 'name' => 'Chrysler 300', 'slug' => 'chrysler-300']);
        DB::table('cars')->insert(['parent_id' => 60, 'name' => 'Flaminia', 'slug' => 'flaminia']);
        DB::table('cars')->insert(['parent_id' => 60, 'name' => 'Flavia', 'slug' => 'flavia']);
        DB::table('cars')->insert(['parent_id' => 60, 'name' => 'Fulvia', 'slug' => 'fulvia']);
        DB::table('cars')->insert(['parent_id' => 60, 'name' => 'Gamma', 'slug' => 'gamma']);
        DB::table('cars')->insert(['parent_id' => 60, 'name' => 'Gamma (1910)', 'slug' => 'gamma-1910']);
        DB::table('cars')->insert(['parent_id' => 60, 'name' => 'HPE', 'slug' => 'hpe']);
        DB::table('cars')->insert(['parent_id' => 60, 'name' => 'Jolly', 'slug' => 'jolly']);
        DB::table('cars')->insert(['parent_id' => 60, 'name' => 'Kappa', 'slug' => 'kappa']);
        DB::table('cars')->insert(['parent_id' => 60, 'name' => 'Kappa (1919)', 'slug' => 'kappa-1919']);
        DB::table('cars')->insert(['parent_id' => 60, 'name' => 'Lambda', 'slug' => 'lambda']);
        DB::table('cars')->insert(['parent_id' => 60, 'name' => 'LC1', 'slug' => 'lc1']);
        DB::table('cars')->insert(['parent_id' => 60, 'name' => 'LC2', 'slug' => 'lc2']);
        DB::table('cars')->insert(['parent_id' => 60, 'name' => 'Lince (armored car)', 'slug' => 'lince-armored-car']);
        DB::table('cars')->insert(['parent_id' => 60, 'name' => 'Lybra', 'slug' => 'lybra']);
        DB::table('cars')->insert(['parent_id' => 60, 'name' => 'Medusa', 'slug' => 'medusa']);
        DB::table('cars')->insert(['parent_id' => 60, 'name' => 'Montecarlo', 'slug' => 'montecarlo']);
        DB::table('cars')->insert(['parent_id' => 60, 'name' => 'Musa', 'slug' => 'musa']);
        DB::table('cars')->insert(['parent_id' => 60, 'name' => 'Phedra', 'slug' => 'phedra']);
        DB::table('cars')->insert(['parent_id' => 60, 'name' => 'Prisma', 'slug' => 'prisma']);
        DB::table('cars')->insert(['parent_id' => 60, 'name' => 'Scorpion', 'slug' => 'scorpion']);
        DB::table('cars')->insert(['parent_id' => 60, 'name' => 'Stratos', 'slug' => 'stratos']);
        DB::table('cars')->insert(['parent_id' => 60, 'name' => 'Superjolly', 'slug' => 'superjolly']);
        DB::table('cars')->insert(['parent_id' => 60, 'name' => 'Chrysler minivans (RT)', 'slug' => 'chrysler-minivans-rt']);
        DB::table('cars')->insert(['parent_id' => 60, 'name' => 'Voyager', 'slug' => 'voyager']);
        DB::table('cars')->insert(['parent_id' => 60, 'name' => 'Autobianchi Y10', 'slug' => 'autobianchi-y10']);
        DB::table('cars')->insert(['parent_id' => 60, 'name' => 'Y10', 'slug' => 'y10']);
        DB::table('cars')->insert(['parent_id' => 60, 'name' => 'Ypsilon', 'slug' => 'ypsilon']);
        DB::table('cars')->insert(['parent_id' => 60, 'name' => 'Zagato', 'slug' => 'zagato']);
        DB::table('cars')->insert(['parent_id' => 60, 'name' => 'Zeta', 'slug' => 'zeta']);
        DB::table('cars')->insert(['parent_id' => 60, 'name' => 'Zeta (1912)', 'slug' => 'zeta-1912']);

    DB::table('cars')->insert(['id' => 61, 'parent_id' => 1, 'name' => 'Land Rover', 'slug' => 'land-rover']);


        DB::table('cars')->insert(['parent_id' => 61, 'name' => 'Land Rover', 'slug' => 'land-rover']);
        DB::table('cars')->insert(['parent_id' => 61, 'name' => '101 Forward Control', 'slug' => '101-forward-control']);
        DB::table('cars')->insert(['parent_id' => 61, 'name' => 'Freelander', 'slug' => 'freelander']);
        DB::table('cars')->insert(['parent_id' => 61, 'name' => '1/2 ton Lightweight', 'slug' => '1-2-ton-lightweight']);
        DB::table('cars')->insert(['parent_id' => 61, 'name' => 'Series II', 'slug' => 'series-ii']);
        DB::table('cars')->insert(['parent_id' => 61, 'name' => 'Series IIa', 'slug' => 'series-iia']);
        DB::table('cars')->insert(['parent_id' => 61, 'name' => 'Series III', 'slug' => 'series-iii']);
        DB::table('cars')->insert(['parent_id' => 61, 'name' => 'Llama', 'slug' => 'llama']);
        DB::table('cars')->insert(['parent_id' => 61, 'name' => 'Long Range Patrol Vehicle', 'slug' => 'long-range-patrol-vehicle']);
        DB::table('cars')->insert(['parent_id' => 61, 'name' => 'LR3', 'slug' => 'lr3']);
        DB::table('cars')->insert(['parent_id' => 61, 'name' => 'LR4', 'slug' => 'lr4']);
        DB::table('cars')->insert(['parent_id' => 61, 'name' => 'Perentie', 'slug' => 'perentie']);
        DB::table('cars')->insert(['parent_id' => 61, 'name' => 'Range Rover', 'slug' => 'range-rover']);
        DB::table('cars')->insert(['parent_id' => 61, 'name' => 'Range Rover (L322)', 'slug' => 'range-rover-l322']);
        DB::table('cars')->insert(['parent_id' => 61, 'name' => 'Range Rover (L405)', 'slug' => 'range-rover-l405']);
        DB::table('cars')->insert(['parent_id' => 61, 'name' => 'Range Rover (P38A)', 'slug' => 'range-rover-p38a']);
        DB::table('cars')->insert(['parent_id' => 61, 'name' => 'Range Rover Classic', 'slug' => 'range-rover-classic']);
        DB::table('cars')->insert(['parent_id' => 61, 'name' => 'Range Rover Evoque', 'slug' => 'range-rover-evoque']);
        DB::table('cars')->insert(['parent_id' => 61, 'name' => 'Range Rover Sport', 'slug' => 'range-rover-sport']);
        DB::table('cars')->insert(['parent_id' => 61, 'name' => 'Range Rover Velar', 'slug' => 'range-rover-velar']);
        DB::table('cars')->insert(['parent_id' => 61, 'name' => 'Ranger Special Operations Vehicle', 'slug' => 'ranger-special-operations-vehicle']);
        DB::table('cars')->insert(['parent_id' => 61, 'name' => 'Series', 'slug' => 'series']);
        DB::table('cars')->insert(['parent_id' => 61, 'name' => 'Shorland armoured car', 'slug' => 'shorland-armoured-car']);
        DB::table('cars')->insert(['parent_id' => 61, 'name' => 'Snatch Land Rover', 'slug' => 'snatch-land-rover']);
        DB::table('cars')->insert(['parent_id' => 61, 'name' => 'Wolf', 'slug' => 'wolf']);


    DB::table('cars')->insert(['id' => 62, 'parent_id' => 1, 'name' => 'Lexus', 'slug' => 'lexus']);

        DB::table('cars')->insert(['parent_id' => 62, 'name' => 'CT', 'slug' => 'ct']);
        DB::table('cars')->insert(['parent_id' => 62, 'name' => 'GS', 'slug' => 'gs']);
        DB::table('cars')->insert(['parent_id' => 62, 'name' => 'GS (S190)', 'slug' => 'gs-s190']);
        DB::table('cars')->insert(['parent_id' => 62, 'name' => 'GX', 'slug' => 'gx']);
        DB::table('cars')->insert(['parent_id' => 62, 'name' => 'HS', 'slug' => 'hs']);
        DB::table('cars')->insert(['parent_id' => 62, 'name' => 'BTC-T IS200', 'slug' => 'btc-t-is200']);
        DB::table('cars')->insert(['parent_id' => 62, 'name' => 'LC', 'slug' => 'lc']);
        DB::table('cars')->insert(['parent_id' => 62, 'name' => 'LFA', 'slug' => 'lfa']);
        DB::table('cars')->insert(['parent_id' => 62, 'name' => 'LS', 'slug' => 'ls']);
        DB::table('cars')->insert(['parent_id' => 62, 'name' => 'LX', 'slug' => 'lx']);
        DB::table('cars')->insert(['parent_id' => 62, 'name' => 'RC', 'slug' => 'rc']);
        DB::table('cars')->insert(['parent_id' => 62, 'name' => 'RX', 'slug' => 'rx']);
        DB::table('cars')->insert(['parent_id' => 62, 'name' => 'SC', 'slug' => 'sc']);

    DB::table('cars')->insert(['parent_id' => 1, 'name' => 'Mahindra', 'slug' => 'mahindra']);

        DB::table('cars')->insert(['parent_id' => 63, 'name' => '62Armada', 'slug' => '62armada']);
        DB::table('cars')->insert(['parent_id' => 63, 'name' => '62Axe', 'slug' => '62axe']);
        DB::table('cars')->insert(['parent_id' => 63, 'name' => '62Bolero', 'slug' => '62bolero']);
        DB::table('cars')->insert(['parent_id' => 63, 'name' => '62Bolero Camper', 'slug' => '62bolero-camper']);
        DB::table('cars')->insert(['parent_id' => 63, 'name' => '62Genio', 'slug' => '62genio']);
        DB::table('cars')->insert(['parent_id' => 63, 'name' => '62Legend', 'slug' => '62legend']);
        DB::table('cars')->insert(['parent_id' => 63, 'name' => '62KUV100', 'slug' => '62kuv100']);
        DB::table('cars')->insert(['parent_id' => 63, 'name' => '62Maxx', 'slug' => '62maxx']);
        DB::table('cars')->insert(['parent_id' => 63, 'name' => '62Maxximo', 'slug' => '62maxximo']);
        DB::table('cars')->insert(['parent_id' => 63, 'name' => '62Mojo', 'slug' => '62mojo']);
        DB::table('cars')->insert(['parent_id' => 63, 'name' => '62TUV300', 'slug' => '62tuv300']);
        DB::table('cars')->insert(['parent_id' => 63, 'name' => '62Major', 'slug' => '62major']);
        DB::table('cars')->insert(['parent_id' => 63, 'name' => '62Mine Protected Vehicle', 'slug' => '62mine-protected-vehicle']);
        DB::table('cars')->insert(['parent_id' => 63, 'name' => '62Quanto', 'slug' => '62quanto']);
        DB::table('cars')->insert(['parent_id' => 63, 'name' => '62Scorpio', 'slug' => '62scorpio']);
        DB::table('cars')->insert(['parent_id' => 63, 'name' => '62Scorpio Getaway', 'slug' => '62scorpio-getaway']);
        DB::table('cars')->insert(['parent_id' => 63, 'name' => '62Thar', 'slug' => '62thar']);
        DB::table('cars')->insert(['parent_id' => 63, 'name' => '62Verito', 'slug' => '62verito']);
        DB::table('cars')->insert(['parent_id' => 63, 'name' => '62XUV500', 'slug' => '62xuv500']);
        DB::table('cars')->insert(['parent_id' => 63, 'name' => '62Xylo', 'slug' => '62xylo']);



    DB::table('cars')->insert(['parent_id' => 1, 'name' => 'Daimler', 'slug' => 'daimler']);
    DB::table('cars')->insert(['parent_id' => 1, 'name' => 'Mazda', 'slug' => 'mazda']);

    DB::table('cars')->insert(['parent_id' => 1, 'name' => 'MINI', 'slug' => 'mini']);
    DB::table('cars')->insert(['parent_id' => 1, 'name' => 'Subaru', 'slug' => 'subaru']);


    DB::table('cars')->insert(['parent_id' => 1, 'name' => 'Harley-Davidson', 'slug' => 'harley-davidson']);
    DB::table('cars')->insert(['parent_id' => 1, 'name' => 'Mitsubishi Motors', 'slug' => 'mitsubishi-motors']);
    DB::table('cars')->insert(['parent_id' => 1, 'name' => 'Dongfeng Motor', 'slug' => 'dongfeng-motor']);

    DB::table('cars')->insert(['parent_id' => 1, 'name' => 'Hino', 'slug' => 'hino']);

    DB::table('cars')->insert(['parent_id' => 1, 'name' => 'SAIC', 'slug' => 'saic']);
    DB::table('cars')->insert(['parent_id' => 1, 'name' => 'Opel', 'slug' => 'opel']);
    DB::table('cars')->insert(['parent_id' => 1, 'name' => 'Kenworth', 'slug' => 'kenworth']);

    DB::table('cars')->insert(['parent_id' => 1, 'name' => 'Scania', 'slug' => 'scania']);
    DB::table('cars')->insert(['parent_id' => 1, 'name' => 'Lincoln', 'slug' => 'lincoln']);
    DB::table('cars')->insert(['parent_id' => 1, 'name' => 'Great Wall Motors', 'slug' => 'great-wall-motors']);

    DB::table('cars')->insert(['parent_id' => 1, 'name' => 'Tata Motors', 'slug' => 'tata-motors']);
    DB::table('cars')->insert(['parent_id' => 1, 'name' => 'Acura', 'slug' => 'acura']);

    DB::table('cars')->insert(['parent_id' => 1, 'name' => 'Skoda', 'slug' => 'skoda']);

    DB::table('cars')->insert(['parent_id' => 1, 'name' => 'RAM Trucks', 'slug' => 'ram-trucks']);
    DB::table('cars')->insert(['parent_id' => 1, 'name' => 'Buick', 'slug' => 'buick']);

    DB::table('cars')->insert(['parent_id' => 1, 'name' => 'Pang Da Automobile', 'slug' => 'pang-da-automobile']);
    DB::table('cars')->insert(['parent_id' => 1, 'name' => 'Changan', 'slug' => 'changan']);

    DB::table('cars')->insert(['parent_id' => 1, 'name' => 'Smart', 'slug' => 'smart']);
    DB::table('cars')->insert(['parent_id' => 1, 'name' => 'FAW', 'slug' => 'faw']);
    DB::table('cars')->insert(['parent_id' => 1, 'name' => 'Renault Trucks', 'slug' => 'renault-trucks']);

    DB::table('cars')->insert(['parent_id' => 1, 'name' => 'Maruti Suzuki', 'slug' => 'maruti-suzuki']);
    DB::table('cars')->insert(['parent_id' => 1, 'name' => 'Pontiac', 'slug' => 'pontiac']);

    DB::table('cars')->insert(['parent_id' => 1, 'name' => 'Foton', 'slug' => 'foton']);

    DB::table('cars')->insert(['parent_id' => 1, 'name' => 'Tesla Motors', 'slug' => 'tesla-motors']);
    DB::table('cars')->insert(['parent_id' => 1, 'name' => 'JAC', 'slug' => 'jac']);
    DB::table('cars')->insert(['parent_id' => 1, 'name' => 'JMC', 'slug' => 'jmc']);
    DB::table('cars')->insert(['parent_id' => 1, 'name' => 'Vauxhall', 'slug' => 'vauxhall']);
    DB::table('cars')->insert(['parent_id' => 1, 'name' => 'Scion', 'slug' => 'scion']);
    DB::table('cars')->insert(['parent_id' => 1, 'name' => 'Seat', 'slug' => 'seat']);
    DB::table('cars')->insert(['parent_id' => 1, 'name' => 'DAF', 'slug' => 'daf']);
    DB::table('cars')->insert(['parent_id' => 1, 'name' => 'GAC Group', 'slug' => 'gac-group']);
    DB::table('cars')->insert(['parent_id' => 1, 'name' => 'Xiamen King Long', 'slug' => 'xiamen-king-long']);
    DB::table('cars')->insert(['parent_id' => 1, 'name' => 'Zhengzhou Yutong Bus', 'slug' => 'zhengzhou-yutong-bus']);
    DB::table('cars')->insert(['parent_id' => 1, 'name' => 'UD Trucks', 'slug' => 'ud-trucks']);
    DB::table('cars')->insert(['parent_id' => 1, 'name' => 'Hero', 'slug' => 'hero']);
    DB::table('cars')->insert(['parent_id' => 1, 'name' => 'Maserati', 'slug' => 'maserati']);
    DB::table('cars')->insert(['parent_id' => 1, 'name' => 'Lamborghini', 'slug' => 'lamborghini']);
    DB::table('cars')->insert(['parent_id' => 1, 'name' => 'Eicher', 'slug' => 'eicher']);
    DB::table('cars')->insert(['parent_id' => 1, 'name' => 'Haima', 'slug' => 'haima']);
    DB::table('cars')->insert(['parent_id' => 1, 'name' => 'Bajaj Auto', 'slug' => 'bajaj-auto']);
    DB::table('cars')->insert(['parent_id' => 1, 'name' => 'Holden', 'slug' => 'holden']);
    DB::table('cars')->insert(['parent_id' => 1, 'name' => 'Lada', 'slug' => 'lada']);
    DB::table('cars')->insert(['parent_id' => 1, 'name' => 'Kamaz', 'slug' => 'kamaz']);
    DB::table('cars')->insert(['parent_id' => 1, 'name' => 'Mack', 'slug' => 'mack']);

    DB::table('cars')->insert(['parent_id' => 1, 'name' => 'Renault Samsung', 'slug' => 'renault-samsung']);
    DB::table('cars')->insert(['parent_id' => 1, 'name' => 'SSangYong', 'slug' => 'ssangyong']);
    DB::table('cars')->insert(['parent_id' => 1, 'name' => 'Saab', 'slug' => 'saab']);


    DB::table('cars')->insert(['parent_id' => 1, 'name' => 'GAZ', 'slug' => 'gaz']);
    DB::table('cars')->insert(['parent_id' => 1, 'name' => 'China Motor Corp', 'slug' => 'china-motor-corp']);
    DB::table('cars')->insert(['parent_id' => 1, 'name' => 'Ashok Leyland', 'slug' => 'ashok-leyland']);
    DB::table('cars')->insert(['parent_id' => 1, 'name' => 'Brilliance', 'slug' => 'brilliance']);
    DB::table('cars')->insert(['parent_id' => 1, 'name' => 'FAW Tianjin', 'slug' => 'faw-tianjin']);
    DB::table('cars')->insert(['parent_id' => 1, 'name' => 'Proton', 'slug' => 'proton']);
    DB::table('cars')->insert(['parent_id' => 1, 'name' => 'New Flyer', 'slug' => 'new-flyer']);
    DB::table('cars')->insert(['parent_id' => 1, 'name' => 'UAZ', 'slug' => 'uaz']);
    DB::table('cars')->insert(['parent_id' => 1, 'name' => 'Sinotruk', 'slug' => 'sinotruk']);
    DB::table('cars')->insert(['parent_id' => 1, 'name' => 'UMW', 'slug' => 'umw']);
    DB::table('cars')->insert(['parent_id' => 1, 'name' => 'Drb-Hicom', 'slug' => 'drb-hicom']);
    DB::table('cars')->insert(['parent_id' => 1, 'name' => 'Porsche', 'slug' => 'porsche']);

    /* MOTORCYCLE INTO 2 QUERY */


    DB::table('cars')->insert(['parent_id' => 2, 'name' => 'Yamaha Motor Company', 'slug' => 'yamaha-motor-company']);
    DB::table('cars')->insert(['parent_id' => 2, 'name' => 'Ducati', 'slug' => 'ducati']);
    DB::table('cars')->insert(['parent_id' => 2, 'name' => 'Kawasaki Heavy Industries', 'slug' => 'kawasaki-heavy-industries']);
    DB::table('cars')->insert(['parent_id' => 2, 'name' => 'Triumph', 'slug' => 'triumph']);
    DB::table('cars')->insert(['parent_id' => 2, 'name' => 'Harley-Davidson Motor Company', 'slug' => 'harley-davidson-motor-company']);

    DB::table('cars')->insert(['parent_id' => 2, 'name' => 'Suzuki Motor Corporation', 'slug' => 'suzuki-motor-corporation']);
    DB::table('cars')->insert(['parent_id' => 2, 'name' => 'Aprilia', 'slug' => 'aprilia']);
    DB::table('cars')->insert(['parent_id' => 2, 'name' => 'KTM', 'slug' => 'ktm']);
    DB::table('cars')->insert(['parent_id' => 2, 'name' => 'MV Agusta', 'slug' => 'mv-agusta']);
    DB::table('cars')->insert(['parent_id' => 2, 'name' => 'Moto Guzzi', 'slug' => 'moto-guzzi']);
    DB::table('cars')->insert(['parent_id' => 2, 'name' => 'Benelli', 'slug' => 'benelli']);
    DB::table('cars')->insert(['parent_id' => 2, 'name' => 'Royal Enfield', 'slug' => 'royal-enfield']);
    DB::table('cars')->insert(['parent_id' => 2, 'name' => 'Indian Motocycle Manufacturing Company', 'slug' => 'indian-motocycle-manufacturing-company']);
    DB::table('cars')->insert(['parent_id' => 2, 'name' => 'Cagiva', 'slug' => 'cagiva']);
    DB::table('cars')->insert(['parent_id' => 2, 'name' => 'Bimota', 'slug' => 'bimota']);
    DB::table('cars')->insert(['parent_id' => 2, 'name' => 'Bajaj Auto', 'slug' => 'bajaj-auto']);
    DB::table('cars')->insert(['parent_id' => 2, 'name' => 'Norton Motorcycle Company', 'slug' => 'norton-motorcycle-company']);
    DB::table('cars')->insert(['parent_id' => 2, 'name' => 'Victory Motorcycles', 'slug' => 'victory-motorcycles']);
    DB::table('cars')->insert(['parent_id' => 2, 'name' => 'Hero Motorcorp', 'slug' => 'hero-motorcorp']);
    DB::table('cars')->insert(['parent_id' => 2, 'name' => 'Husqvarna Motorcycles', 'slug' => 'husqvarna-motorcycles']);
    DB::table('cars')->insert(['parent_id' => 2, 'name' => 'Hyosung', 'slug' => 'hyosung']);
    DB::table('cars')->insert(['parent_id' => 2, 'name' => 'Buell Motorcycle Company', 'slug' => 'buell-motorcycle-company']);
    DB::table('cars')->insert(['parent_id' => 2, 'name' => 'Kymco', 'slug' => 'kymco']);
    DB::table('cars')->insert(['parent_id' => 2, 'name' => 'Sym', 'slug' => 'sym']);
    DB::table('cars')->insert(['parent_id' => 2, 'name' => 'CCM', 'slug' => 'ccm']);
    DB::table('cars')->insert(['parent_id' => 2, 'name' => 'Cycles Peugeot', 'slug' => 'cycles-peugeot']);
    DB::table('cars')->insert(['parent_id' => 2, 'name' => 'Audi', 'slug' => 'audi']);
    DB::table('cars')->insert(['parent_id' => 2, 'name' => 'Piaggio', 'slug' => 'piaggio']);
    DB::table('cars')->insert(['parent_id' => 2, 'name' => 'Gasgas', 'slug' => 'gasgas']);
    DB::table('cars')->insert(['parent_id' => 2, 'name' => 'Motorhispania', 'slug' => 'motorhispania']);
    DB::table('cars')->insert(['parent_id' => 2, 'name' => 'Rieju', 'slug' => 'rieju']);
    DB::table('cars')->insert(['parent_id' => 2, 'name' => 'Gilera', 'slug' => 'gilera']);
    DB::table('cars')->insert(['parent_id' => 2, 'name' => 'Dodge', 'slug' => 'dodge']);
    DB::table('cars')->insert(['parent_id' => 2, 'name' => 'Blata', 'slug' => 'blata']);
    DB::table('cars')->insert(['parent_id' => 2, 'name' => 'SWM Motorcycles', 'slug' => 'swm-motorcycles']);
    DB::table('cars')->insert(['parent_id' => 2, 'name' => 'Maico', 'slug' => 'maico']);
    DB::table('cars')->insert(['parent_id' => 2, 'name' => 'Adler', 'slug' => 'adler']);
    DB::table('cars')->insert(['parent_id' => 2, 'name' => 'Moto Morini', 'slug' => 'moto-morini']);
    DB::table('cars')->insert(['parent_id' => 2, 'name' => 'Derbi', 'slug' => 'derbi']);
    DB::table('cars')->insert(['parent_id' => 2, 'name' => 'Sunbeam', 'slug' => 'sunbeam']);
    DB::table('cars')->insert(['parent_id' => 2, 'name' => 'Companies', 'slug' => 'companies']);
    DB::table('cars')->insert(['parent_id' => 2, 'name' => 'business', 'slug' => 'business']);
    DB::table('cars')->insert(['parent_id' => 2, 'name' => 'shopping', 'slug' => 'shopping']);
    DB::table('cars')->insert(['parent_id' => 2, 'name' => 'brands', 'slug' => 'brands']);
    DB::table('cars')->insert(['parent_id' => 2, 'name' => 'star trek sulu quotes', 'slug' => 'star-trek-sulu-quotes']);
    DB::table('cars')->insert(['parent_id' => 2, 'name' => 'best adult games', 'slug' => 'best-adult-games']);
    DB::table('cars')->insert(['parent_id' => 2, 'name' => 'international trade books', 'slug' => 'international-trade-books']);
    DB::table('cars')->insert(['parent_id' => 2, 'name' => 'swingers club stories', 'slug' => 'swingers-club-stories']);
    DB::table('cars')->insert(['parent_id' => 2, 'name' => 'snowboard companies', 'slug' => 'snowboard-companies']);
    DB::table('cars')->insert(['parent_id' => 2, 'name' => 'evil people quotes', 'slug' => 'evil-people-quotes']);
    DB::table('cars')->insert(['parent_id' => 2, 'name' => 'pro female skateboarders', 'slug' => 'pro-female-skateboarders']);
    DB::table('cars')->insert(['parent_id' => 2, 'name' => 'navy seal movies', 'slug' => 'navy-seal-movies']);
    DB::table('cars')->insert(['parent_id' => 2, 'name' => 'initials on wrist tattoos', 'slug' => 'initials-on-wrist-tattoos']);
    DB::table('cars')->insert(['parent_id' => 2, 'name' => 'Famous Lis', 'slug' => 'famous-lis']);

    /* BICYCLE 3  */

    DB::table('cars')->insert(['parent_id' => 3, 'name' => 'Giant Bicycles', 'slug' => 'giant-bicycles']);
    DB::table('cars')->insert(['parent_id' => 3, 'name' => 'Trek Bicycle Corporation', 'slug' => 'trek-bicycle-corporation']);
    DB::table('cars')->insert(['parent_id' => 3, 'name' => 'Specialized Bicycle Components', 'slug' => 'specialized-bicycle-components']);
    DB::table('cars')->insert(['parent_id' => 3, 'name' => 'Cannondale Bicycle Corporation', 'slug' => 'cannondale-bicycle-corporation']);
    DB::table('cars')->insert(['parent_id' => 3, 'name' => 'SCOTT Sports', 'slug' => 'scott-sports']);
    DB::table('cars')->insert(['parent_id' => 3, 'name' => 'Canyon', 'slug' => 'canyon']);
    DB::table('cars')->insert(['parent_id' => 3, 'name' => 'Bianchi Bicycles', 'slug' => 'bianchi-bicycles']);
    DB::table('cars')->insert(['parent_id' => 3, 'name' => 'Santa Cruz', 'slug' => 'santa-cruz']);
    DB::table('cars')->insert(['parent_id' => 3, 'name' => 'Cube bikes', 'slug' => 'cube-bikes']);
    DB::table('cars')->insert(['parent_id' => 3, 'name' => 'GT Bicycles', 'slug' => 'gt-bicycles']);
    DB::table('cars')->insert(['parent_id' => 3, 'name' => 'Pinarello', 'slug' => 'pinarello']);
    DB::table('cars')->insert(['parent_id' => 3, 'name' => 'Fuji', 'slug' => 'fuji']);
    DB::table('cars')->insert(['parent_id' => 3, 'name' => 'Colnago', 'slug' => 'colnago']);
    DB::table('cars')->insert(['parent_id' => 3, 'name' => 'Felt Bicycles', 'slug' => 'felt-bicycles']);
    DB::table('cars')->insert(['parent_id' => 3, 'name' => 'Raleigh Bicycle Company', 'slug' => 'raleigh-bicycle-company']);
    DB::table('cars')->insert(['parent_id' => 3, 'name' => 'Schwinn', 'slug' => 'schwinn']);
    DB::table('cars')->insert(['parent_id' => 3, 'name' => 'Diamondback', 'slug' => 'diamondback']);
    DB::table('cars')->insert(['parent_id' => 3, 'name' => 'Focus', 'slug' => 'focus']);
    DB::table('cars')->insert(['parent_id' => 3, 'name' => 'Kona Bicycle Company', 'slug' => 'kona-bicycle-company']);
    DB::table('cars')->insert(['parent_id' => 3, 'name' => 'Ghost', 'slug' => 'ghost']);
    DB::table('cars')->insert(['parent_id' => 3, 'name' => 'Marin', 'slug' => 'marin']);
    DB::table('cars')->insert(['parent_id' => 3, 'name' => 'Wilier', 'slug' => 'wilier']);
    DB::table('cars')->insert(['parent_id' => 3, 'name' => 'LaPierre', 'slug' => 'lapierre']);
    DB::table('cars')->insert(['parent_id' => 3, 'name' => 'Jamis Bicycles', 'slug' => 'jamis-bicycles']);
    DB::table('cars')->insert(['parent_id' => 3, 'name' => 'Trinx', 'slug' => 'trinx']);
    DB::table('cars')->insert(['parent_id' => 3, 'name' => 'Mongoose', 'slug' => 'mongoose']);
    DB::table('cars')->insert(['parent_id' => 3, 'name' => 'Cinelli', 'slug' => 'cinelli']);
    DB::table('cars')->insert(['parent_id' => 3, 'name' => 'Rocky Mountain Bicycles', 'slug' => 'rocky-mountain-bicycles']);
    DB::table('cars')->insert(['parent_id' => 3, 'name' => 'Surly Bikes', 'slug' => 'surly-bikes']);
    DB::table('cars')->insert(['parent_id' => 3, 'name' => 'Polygon', 'slug' => 'polygon']);
    DB::table('cars')->insert(['parent_id' => 3, 'name' => 'Totem Bicycles', 'slug' => 'totem-bicycles']);
    DB::table('cars')->insert(['parent_id' => 3, 'name' => 'Time', 'slug' => 'time']);
    DB::table('cars')->insert(['parent_id' => 3, 'name' => 'Montra', 'slug' => 'montra']);
    DB::table('cars')->insert(['parent_id' => 3, 'name' => 'Haro Bike', 'slug' => 'haro-bike']);
    DB::table('cars')->insert(['parent_id' => 3, 'name' => 'Gary Fisher', 'slug' => 'gary-fisher']);
    DB::table('cars')->insert(['parent_id' => 3, 'name' => 'BH', 'slug' => 'bh']);
    DB::table('cars')->insert(['parent_id' => 3, 'name' => 'Mondraker', 'slug' => 'mondraker']);
    DB::table('cars')->insert(['parent_id' => 3, 'name' => 'Hercules Roadeo', 'slug' => 'hercules-roadeo']);
    DB::table('cars')->insert(['parent_id' => 3, 'name' => 'KHS Bicycles', 'slug' => 'khs-bicycles']);
    DB::table('cars')->insert(['parent_id' => 3, 'name' => 'Red Line', 'slug' => 'red-line']);
    DB::table('cars')->insert(['parent_id' => 3, 'name' => 'Electra Bicycle Company', 'slug' => 'electra-bicycle-company']);
    DB::table('cars')->insert(['parent_id' => 3, 'name' => 'Razor Bicycles', 'slug' => 'razor-bicycles']);
    DB::table('cars')->insert(['parent_id' => 3, 'name' => 'Litespeed', 'slug' => 'litespeed']);
    DB::table('cars')->insert(['parent_id' => 3, 'name' => 'Ideal Bikes', 'slug' => 'ideal-bikes']);
    DB::table('cars')->insert(['parent_id' => 3, 'name' => 'Magna', 'slug' => 'magna']);
    DB::table('cars')->insert(['parent_id' => 3, 'name' => 'Iron Horse Bicycles', 'slug' => 'iron-horse-bicycles']);
    DB::table('cars')->insert(['parent_id' => 3, 'name' => 'LeMond Racing Cycles', 'slug' => 'lemond-racing-cycles']);
    DB::table('cars')->insert(['parent_id' => 3, 'name' => 'Companies', 'slug' => 'companies']);
    DB::table('cars')->insert(['parent_id' => 3, 'name' => 'business', 'slug' => 'business']);
    DB::table('cars')->insert(['parent_id' => 3, 'name' => 'shopping', 'slug' => 'shopping']);
    DB::table('cars')->insert(['parent_id' => 3, 'name' => 'cycling', 'slug' => 'cycling']);
    DB::table('cars')->insert(['parent_id' => 3, 'name' => 'brands', 'slug' => 'brands']);
    DB::table('cars')->insert(['parent_id' => 3, 'name' => 'famous initials', 'slug' => 'famous-initials']);
    DB::table('cars')->insert(['parent_id' => 3, 'name' => 'cult documentaries on netflix', 'slug' => 'cult-documentaries-on-netflix']);
    DB::table('cars')->insert(['parent_id' => 3, 'name' => 'jude law movies', 'slug' => 'jude-law-movies']);
    DB::table('cars')->insert(['parent_id' => 3, 'name' => 'foreign knighthoods', 'slug' => 'foreign-knighthoods']);
    DB::table('cars')->insert(['parent_id' => 3, 'name' => 'bill bryson books', 'slug' => 'bill-bryson-books']);
    DB::table('cars')->insert(['parent_id' => 3, 'name' => 'best nfl defense ever', 'slug' => 'best-nfl-defense-ever']);
    DB::table('cars')->insert(['parent_id' => 3, 'name' => 'famous people with communication degrees', 'slug' => 'famous-people-with-communication-degrees']);
    DB::table('cars')->insert(['parent_id' => 3, 'name' => 'us city populations', 'slug' => 'us-city-populations']);
    DB::table('cars')->insert(['parent_id' => 3, 'name' => 'sports heros', 'slug' => 'sports-heros']);


    /* BUS QUERY 4 */


    DB::table('cars')->insert(['parent_id' => 4, 'name' => 'ACE Cougar', 'slug' => 'ace-cougar']);
    DB::table('cars')->insert(['parent_id' => 4, 'name' => 'AEC Q-type', 'slug' => 'aec-q-type']);
    DB::table('cars')->insert(['parent_id' => 4, 'name' => 'Associated Equipment Company', 'slug' => 'associated-equipment-company']);

    /* TRACTOR QUERY 16 */

    DB::table('cars')->insert(['parent_id' => 16, 'name' => 'John Deere', 'slug' => 'john-deere']);
    DB::table('cars')->insert(['parent_id' => 16, 'name' => 'Massey Ferguson', 'slug' => 'massey-ferguson']);
    DB::table('cars')->insert(['parent_id' => 16, 'name' => 'Case IH', 'slug' => 'case-ih']);
    DB::table('cars')->insert(['parent_id' => 16, 'name' => 'New Holland Tractors', 'slug' => 'new-holland-tractors']);
    DB::table('cars')->insert(['parent_id' => 16, 'name' => 'Fendt', 'slug' => 'fendt']);
    /*SPORTS CAR 15*/
    DB::table('cars')->insert(['parent_id' => 15, 'name' => 'Abarth 205', 'slug' => 'abarth-205']);
    DB::table('cars')->insert(['parent_id' => 15, 'name' => '500 2007', 'slug' => '500-2007']);
    DB::table('cars')->insert(['parent_id' => 15, 'name' => 'Porsche 356', 'slug' => 'porsche-356']);
    DB::table('cars')->insert(['parent_id' => 15, 'name' => '850', 'slug' => '850']);
    DB::table('cars')->insert(['parent_id' => 15, 'name' => 'AC 378 GT Zagato', 'slug' => 'ac-378-gt-zagato']);
    DB::table('cars')->insert(['parent_id' => 15, 'name' => 'AC 3000ME', 'slug' => 'ac-3000me']);
    DB::table('cars')->insert(['parent_id' => 15, 'name' => 'AC Ace', 'slug' => 'ac-ace']);
    DB::table('cars')->insert(['parent_id' => 15, 'name' => 'AC Aceca', 'slug' => 'ac-aceca']);/*TRUCK 20*/

    DB::table('cars')->insert(['parent_id' => 20, 'name' => 'American LaFrance', 'slug' => 'american-lafrance']);
DB::table('cars')->insert(['parent_id' => 20, 'name' => 'American Lafrance Condor', 'slug' => 'american-lafrance-condor']);
DB::table('cars')->insert(['parent_id' => 20, 'name' => 'Agrale', 'slug' => 'agrale']);
DB::table('cars')->insert(['parent_id' => 20, 'name' => 'AMW', 'slug' => 'amw']);
DB::table('cars')->insert(['parent_id' => 20, 'name' => 'AMW TP Series', 'slug' => 'amw-tp-series']);
DB::table('cars')->insert(['parent_id' => 20, 'name' => 'Ashok Leyland', 'slug' => 'ashok-leyland']);

/*PICKUP*/


DB::table('cars')->insert(['parent_id' => 21, 'name' => 'American LaFrance', 'slug' => 'american-lafrance']);
DB::table('cars')->insert(['parent_id' => 21, 'name' => 'American Lafrance Condor', 'slug' => 'american-lafrance-condor']);
DB::table('cars')->insert(['parent_id' => 21, 'name' => 'Agrale', 'slug' => 'agrale']);
DB::table('cars')->insert(['parent_id' => 21, 'name' => 'AMW', 'slug' => 'amw']);
DB::table('cars')->insert(['parent_id' => 21, 'name' => 'AMW TP Series', 'slug' => 'amw-tp-series']);
DB::table('cars')->insert(['parent_id' => 21, 'name' => 'Ashok Leyland', 'slug' => 'ashok-leyland']);
DB::table('cars')->insert(['parent_id' => 21, 'name' => 'Ashok Layland Avia', 'slug' => 'ashok-layland-avia']);
DB::table('cars')->insert(['parent_id' => 21, 'name' => 'Ashok Leyland U-Truck', 'slug' => 'ashok-leyland-u-truck']);
DB::table('cars')->insert(['parent_id' => 21, 'name' => 'Askam', 'slug' => 'askam']);
DB::table('cars')->insert(['parent_id' => 21, 'name' => 'Astra', 'slug' => 'astra']);
DB::table('cars')->insert(['parent_id' => 21, 'name' => 'AMW TR Series', 'slug' => 'amw-tr-series']);

  }
}

