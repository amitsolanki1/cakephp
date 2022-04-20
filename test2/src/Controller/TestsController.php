<?php
declare(strict_types=1);

namespace App\Controller;


class TestsController extends AppController
{
    public function index()
    {
        $this->set('index','active');
    }

    public function about()
    {
        $this->set('about','active');
    }
    
    public function contact(){
        $this->set('contact','active');
    }

    public function services(){
        $this->set('service','active');
    }
}
