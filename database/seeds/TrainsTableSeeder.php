<?php

use App\Train;
use Illuminate\Database\Seeder;

// $table->string('agency', 150);
// $table->string('departure_station', 150);
// $table->string('arrival_station', 150);
// $table->time('departure_time');
// $table->time('arrival_time');
// $table->string('train_code', 12);
// $table->smallInteger('number_carriages')->unsigned();
// $table->boolean('in_time');
// $table->boolean('deleted');
class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $trains = [
            [
                "agency" => "Trenitalia",
                "departure_station" => "Napoli Centrale",
                "arrival_station" => "Roma Termini",
                "departure_time" => "10:00",
                "arrival_time" => "12:00",
                "train_code" => "618720720210",
                "number_carriages" => "20",
                "in_time" => "1",
                "deleted" => "0",
            ],
            [
                "agency" => "Trenitalia",
                "departure_station" => "Napoli Centrale",
                "arrival_station" => "Pisa",
                "departure_time" => "12:00",
                "arrival_time" => "18:00",
                "train_code" => "618720724444",
                "number_carriages" => "15",
                "in_time" => "1",
                "deleted" => "0",
            ],
        ];

        foreach ($trains as $train){
            $newTrain = new Train();
            $newTrain->agency = $train['agency'];
            $newTrain->departure_station = $train['departure_station'];
            $newTrain->arrival_station = $train['arrival_station'];
            $newTrain->departure_time = $train['departure_time'];
            $newTrain->arrival_time = $train['arrival_time'];
            $newTrain->train_code = $train['train_code'];
            $newTrain->number_carriages = $train['number_carriages'];
            $newTrain->in_time = $train['in_time'];
            $newTrain->deleted = $train['deleted'];
            $newTrain->save();
        }
    }
}
