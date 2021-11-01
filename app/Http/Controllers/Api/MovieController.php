<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Actions\MovieAction;

class MovieController extends Controller
{
    public function genre(Request $request, MovieAction $movie) {

        $validated = $request->validate([
            'genre'  => 'required',
        ]);

        if($validated){

            $res = $movie->findGenre($request->genre);

            return response()->json($res);
        } else {
            return abort(400, 'Bad Request');
        }
    }

    public function timeslot(Request $request, MovieAction $movie) {

        $validated = $request->validate([
            'theater_name'  => 'required',
            'start_time'    => 'required',
            'end_time'      => 'required'
        ]);
 
        if($validated) {

            $res = $movie->findTime($request);
            
            return response()->json(['data' => $res], 200);
        } else {

            return abort(400, 'Bad Request');
        }
    }

    public function place(Request $request, MovieAction $movie) {

        $validated = $request->validate([
            'theater_name'  => 'required',
            'date'          => 'required',
        ]);

        if($validated) {

            $res = $movie->findPlace($request);

            return response()->json(['data' => $res], 200);
        } else {

            return abort(400, 'Bad Request');
        }
    }

    public function performer(Request $request, MovieAction $movie) {

        $validated = $request->validate([
            'performer_name'  => 'required',
        ]);

        if($validated) {

            $res = $movie->findPerformer($request->performer_name);

            return response()->json(['data' => $res], 200);
        } else {

            return abort(400, 'Bad Request');
        }
    }

    public function rating(Request $request, MovieAction $movie) {

        $validated = $request->validate([
            'movie_title'  => 'required',
            'username'  => 'required',
            'rating'  => 'required',
            'description'  => 'required'
        ]);

        if($validated) {
            $res =  $movie->giveRating($request);

            return response()->json(['message' => $res, 'status' => 'Success'], 200);
        } else {

            return abort(400, 'Bad Request');
        }

    }

    public function new(Request $request, MovieAction $movie) {

        $validated = $request->validate([
            'date'  => 'required',
        ]);

        if($validated) {
            $res =  $movie->new($request);

            return response()->json(['data' => $res], 200);
        } else {

            return abort(400, 'Bad Request');
        }
    }

    public function store(Request $request, MovieAction $movie) {

        $validated = $request->validate([
            'title'  => 'required',
            'release'=> 'required',
            'length' => 'required',
            'description' => 'required',
            'mpaa_rating' => 'required',
            'genre'  => 'required|array',
            'director' => 'required',
            'performer' => 'required|array',
            'language' => 'required'
        ]);

        if ($validated) {
            $res = $movie->store($request);

            return response()->json(['message' => $res, 'status' => 'Success'], 200);
        } else {

            return abort(400, 'Bad Request');
        }
    }
}
