<?php

/** @var Router $router */

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

use Illuminate\Support\Facades\DB;
use Laravel\Lumen\Routing\Router;

//home
$router->get('/', function () {
    return view('login');
});

//voting page
$router->get('/vote', function () {
    return redirect('/');
});

$router->post('/vote', ['middleware' => 'voteMiddle', function() {
    $house = $_SESSION['house'];
    return view("houses.{$house}Page");
}]);

//vote success or fail page
$router->post('/submit', function () {
    session_start();
    $admno = (int) $_SESSION["admno"];

    $hasVoted = DB::table('student table')->where('admno', $admno)->value('has_voted');

    if ($hasVoted)
        return view("unsuccessVoted.html");

    $house = $_SESSION['house'];

    $postList = ["houseBoy", "houseGirl", "sportsBoy", "sportsGirl"];

    if (array_diff(array_keys($_POST), $postList))
        return "redirect('unsuccessNotFound')";

    /* cast vote */

    $queriesExecuted = 1;

    foreach ($_POST as $post => $name) {
        $affectedRows = DB::table('prefect table')->where('House', $house)
            ->where('Post', $post)
            ->where('Name', $name)
            ->increment('Votes', 1);

        if ($affectedRows == 0) { //names have been manipulated

            foreach ($_POST as $inPost => $inName) {

                if ($queriesExecuted-- != 0)
                    break;

                DB::table('prefect table')->where('House', $house)
                    ->where('Post', $inPost)
                    ->where('Name', $inName)
                    ->decrement('Votes', 1);
            }

            return view('unsuccessNotFound');
        } else $queriesExecuted++;
    }

    DB::update("UPDATE `student table` SET has_voted = true WHERE admno = $admno");

    return view("success");

});

$router->get('/submit', function () {
    return redirect('/');
});
