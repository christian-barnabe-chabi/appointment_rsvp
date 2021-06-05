<?php

namespace App\Controllers;

use App\Models\Service;
use App\Utils\BaseController;
use App\Utils\View;

class ServiceController extends BaseController {

  public function index() {
    $model = new Service();

    $services = $model->findAll();

    return View::present('services/index', ["services" => $services]);
  }

  public function newService() {
    $model = new Service();

    if($this->request->method() == 'POST') {

      $model->create([
        "name" => $this->request->post('name'),
        "description" => $this->request->post('description'),
        "doctorId" => $this->request->post('doctorId'),
        "createdAt" => date("Y-m-d")
      ]);
      return View::present('services/success');
    }

    echo date("Y-m-d");
    return View::present('services/form');

    

  }

  public function deleteService($id) {
    $model = new Service();
    $model->delete(["id"=>$id]);
    $services = $model->findAll();

    return View::present('services/index', ["services" => $services]);
  }

}

?>