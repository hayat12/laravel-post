<?php
namespace App;
class Helper{
    public function notFoundResponse($message="No result found"){
        return response()->json(['success'=> false,'message'=>$message], 404);
    }
    public function foundResponse($result){
        return response()->json(
            ['success'=> true,
            'result'=>$result],
            200);
    }
}
