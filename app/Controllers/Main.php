<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Main extends BaseController
{
   public function index()
    {
        // สั่งระบุชื่อไฟล์พร้อมนามสกุล .html ได้เลย
        return view('index.html');
    }
}
