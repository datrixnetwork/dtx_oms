<?php
namespace App\BusinessLayer\Users;

use DB;
use Illuminate\Http\Request;
use Exception;
use App\Helpers\Helper;
use Illuminate\Support\Str;
use Validator;

class bl_User_Info{

    private $config          = false;
    private $_model          = false;
    public  $successResponse = ['status'=>'success','Code'=>200,'message'=>'Your request has been processed successfully'];

    public function __construct($data){
        if(!$this->_model){
            $this->_model = Helper::LoadMdl($data['model']);
        }
     }


    public function create($data){

        $data0          = $data['reqBody'];
        $isValidate     = $this->validateLoginData($data0);

        if($isValidate['status'] == false){
            throw new Exception("First name is required", 403);
        }

        $firstName              = $data0['first_name'];
        $userName               = Str::lower($firstName).rand(10,1000000).'@primeMarket.com';
        $userPassword           = md5(Helper::generateRandomString(8));

        try{
            DB::beginTransaction();
            $userInfo               = $this->_model['User']::create(['user_name'=>$userName,'user_password'=>$userPassword,'user_role_id'=>2]);
            $gatewayData            = array('user_id'=>$userInfo['id'],'gateway_id'=>$data0['gateway_id'],'acc_title'=>$data0['acc_title'],'acc_number'=>$data0['acc_number']);
            unset($data0['gateway_id'],$data0['acc_title'],$data0['acc_number']);
            $data0['user_id']       = $userInfo['id'];

            $paymentUserGateway     = $this->_model['User_Payment_Info']::create($gatewayData);
            $userDetail             = $this->_model['User_Info']::create($data0);
            DB::commit();
            $response               = Helper::MakeResponse('ok','User has been created');
        }
        catch(Exception $ex){
            DB::rollback();
            $response               = Helper::MakeResponse('error',$ex->getMessage());
        }
        return $response;
    }


    public function show($data,$id=false){

    }


    public function remove($request,$id){

    }

    public function update($request,$id){

    }

    private function validateLoginData($data){

        $validated = TRUE;

        $validator = Validator::make($data, [
            'first_name' => 'required'
        ]);
        if ($validator->fails()) {
            $validated = FALSE;
        }

        return array('status'=>$validated,'data'=>$validator);
    }


}
