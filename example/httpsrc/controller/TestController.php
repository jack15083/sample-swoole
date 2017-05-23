<?php

use frame\log\Log;

class TestController extends \frame\base\Controller
{

    public function actionTest()
    {
		Log::info("action test");
        $Totaldata = $this->getRequest();
        $rsp = $this->httpTest();

        $this ->send(' HELLO WORLD ' . print_r($rsp, true));
    }

    private function httpTest(){

        $model = new TestModel();
        $rsp = $model->httpTest();
        $rsp1 = $model->dbTest();
        Log::info(__METHOD__ . " rsp == " . print_r($rsp, true));
        return $rsp1;
    }

}
