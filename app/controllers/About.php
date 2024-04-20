<?php

class About extends Controller
{
   public function index($nama = 'user', $role = 'developer', $umur = 22)
   {
      $data['nama'] = $nama;
      $data['role'] = $role;
      $data['umur'] = $umur;
      $data['judul'] = 'About me';

      $this->view('templates/header', $data);
      $this->view('about/index', $data);
      $this->view('templates/footer');
   }
   
   public function page()
   {
      $data['judul'] = 'My page';
      
      $this->view('templates/header', $data);
      $this->view('about/page');
      $this->view('templates/footer');
   }
}
