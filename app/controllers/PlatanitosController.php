<?php
class PlatanitosController extends BaseController {

    public function getIndex(){
        return Redirect::to('/home');
    //    return View::make('platanitos.home');
    }
    public  function getHome(){
        return View::make('platanitos.home');
    }
}