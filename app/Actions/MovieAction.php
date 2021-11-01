<?php
namespace App\Actions;

use App\Actions\DataAction;
use App\Http\Resources\GenreCollection;
use App\Http\Resources\PerformerCollection;
use App\Http\Resources\PlaceCollection;
use App\Http\Resources\TimeSlotCollection;
use App\Models\Genre;
use App\Models\Performer;
use App\Models\Place;
use Illuminate\Support\Facades\Storage;

class MovieAction {
    protected $path;

    public function findGenre($param) {
  
        return new GenreCollection(Genre::whereGenre($param)->get());
    }

    public function findTime($request) {
        
        $res = collect(DataAction::getTimeSlot())
                ->where('theater_name', $request->theater_name)
                ->where('start_time', '>', $request->start_time)
                ->where('end_time', '<', $request->end_time);

        return new TimeSlotCollection($res);
    }

    public function findPlace($request) {
 
        $res =Place::where('theater_name', $request->theater_name)
                ->whereDate('start_time', \Carbon\Carbon::parse($request->date)->toDateString())
                ->whereDate('end_time', \Carbon\Carbon::parse($request->date)->toDateString())
                ->get();

        return new PlaceCollection($res);
    }

    public function new($request) {
        $res = Place::where('created_at', '<=',  \Carbon\Carbon::parse($request->date)->toDateString())
                ->get();

        return new PlaceCollection($res);
    }

    public function findPerformer($param) {

        $res = Performer::wherePerformer($param)->get();

        return new PerformerCollection($res);
    }

    public function giveRating($request) {

        Place::where('title', $request->movie_title)
            ->update([
                'rating' => $request->rating,
                'description' => $request->description,
            ]);

        return 'Successfully added review for the irishman by user: ' . $request->username;
    }

    public function store($request) {

        $empty = $this->isFileEmpty();

        $msg = $empty 
            ? $this->setPath()->write($request)
            : $this->setPath()->prepend($request);

        return $msg;
    }

    public function setPath() {

        $this->path = 'public/movie.json';

        return $this;
    }

    public function isFileEmpty(){

        $res = json_decode(Storage::get('public/movie.json'), true);

        return empty($res) ? true : false;
    }

    public function write($request) {

        $contents = [
            'data' => [
                [
                    'title' => $request->title,
                    'release' => $request->release,
                    'length' => $request->length,
                    'description' => $request->description,
                    'mpaa_rating' => $request->mpaa_rating,
                    'genre' => json_encode($request->genre,JSON_PRETTY_PRINT),
                    'director' => $request->director,
                    'performer' => json_encode($request->performer,JSON_PRETTY_PRINT),
                    'language' => $request->language
                ]
            ]
        ];
        Storage::put($this->path, json_encode($contents,JSON_PRETTY_PRINT));

        return 'Successfully added movie '. $request->title .' with Movie ID 1';
    }

    public function prepend($request) {

        $res = json_decode(Storage::get($this->path),true);

        array_push($res['data'], [
            'title' => $request->title,
            'release' => $request->release,
            'length' => $request->length,
            'description' => $request->description,
            'mpaa_rating' => $request->mpaa_rating,
            'genre' => json_encode($request->genre,JSON_PRETTY_PRINT),
            'director' => $request->director,
            'performer' => json_encode($request->performer,JSON_PRETTY_PRINT),
            'language' => $request->language
        ]);

        Storage::put($this->path, json_encode($res,JSON_PRETTY_PRINT));

        return 'Successfully added movie '. $request->title .' with Movie ID '. count($res['data']);
    }
}
