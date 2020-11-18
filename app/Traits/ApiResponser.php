<?php

    namespace App\Traits;
    use Illuminate\Http\Response;
    trait ApiResponser{

    
    protected function createSuccess($data){
        return response()->json(['data' => $data, 'Message' => 'Created successfully.']);
    }
    protected function successResponse($data, $code = Response::HTTP_OK)
    {
        return response()->json(['data'=>$data, 'Site' => 1],$code);
    }
    protected function updateSuccess($data)
    {
        return response()->json(['data' => $data, 'Message' => 'Updated successfully.']);
    }
    protected function deleteSuccess($data)
    {
        return response()->json(['data' => $data, 'Message' => 'Deleted successfully.']);
    }
    protected function errorResponse($message,$code)
    {
        return response()->json(['error'=>$message,'Site' => 1,'code'=>$code],$code);
    }
}
