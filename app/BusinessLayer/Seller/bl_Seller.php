<?php
namespace App\BusinessLayer\Seller;
use Illuminate\Http\Request;
use App\Helpers\Helper;

class bl_Seller{

    private $config          = false;
    private $_model          = false;

    public function __construct($data){
        if(!$this->_model){
            $this->_model = Helper::LoadMdl($data['model']);
        }
     }


    public function create($data){

        $response = $this->_model::create($data['body']);
        return Helper::MakeResponse('ok',$response);
    }


    public function show($data,$id=false){

        if(!$id){
            $response = $this->_model::get();
        }else{
            $response = $this->_model::find($id);
        }

        return Helper::MakeResponse('ok',$response);
    }


    public function remove($request,$id){

        if(!is_numeric($id)){
            throw new Exception("Id Is not numeric", 404);
        }
        $response = $this->_model::destroy($id);
        return Helper::MakeResponse('ok',$response);
    }

    public function update($request,$id){
        if(!is_numeric($id)){
            throw new Exception("Id Is not numeric", 404);
        }
        $this->_model::where('id', $id)->update($request['body'],$id);
        $response = $this->_model::find($id);
        return Helper::MakeResponse('ok',$response);

    }

}
