<?php


namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class VoteRequires
{
    /**
     * Run the request filter.
     *
     * @param  $request
     * @param Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $allowedSections = ['a','b','c','d','e','f','g','h','j','k','l','m'];

        $request_input_arr = $request->all();

        //validation of all fields

        $allowedFields = ["admno", "first_name", "class", "section"];

        if (array_diff(array_keys($request_input_arr), $allowedFields))
            return redirect('/?err=4');

        //fixme - allow regex validation
        $validate = Validator::make($request_input_arr, [
            'admno' => 'required|integer|min:1|max:65536',
            'first_name' => ['required','string','max:64'],
            'class' => ['required','integer','min:1','max:12'],
            'section' => ['required',Rule::in($allowedSections)],
        ]);

        if ($validate->fails()) {
            return redirect('/?err=4');
//            dd($validate->errors()->all());
        }

        //verify from database
        $studentData = DB::select('select * from `student table` where admno = ?',[$request_input_arr['admno']]);

        if (!$studentData) //admno was not found
            return redirect('/?err=2');

        if ($studentData[0]->has_voted)
            return redirect('/?err=3');

        foreach ($request_input_arr as $column => $value) {
            if ($column == 'admno' || $column == 'has_voted')
                continue;

            if ($studentData[0]->$column != $value and strcasecmp($studentData[0]->$column, $value) )
                return redirect('?err=1');  //data does not match
        }

        session_start();
        $_SESSION['admno'] = $studentData[0]->admno;
//        $_SESSION['house'] = $studentData[0]->house;

        //placeholder
        $_SESSION['house'] = "kabir";

        return $next($request);
    }
}
