<?php

class About extends Controller {
    public function index ($nama = 'asfi', $pekerjaan = 'vol', $umur = 22 )
{
   $data['nama'] = $nama;
   $data['pekerjaan'] = $pekerjaan;
   $data['umur'] = $umur;
   $data['judul'] = 'About Me';
   $this->view('templates/header', $data);
   $this->view('About/index', $data);
   $this->view('templates/footer');

}
public function page()
{
        $this->view('templates/header');
        $this->view('About/page');
        $this->view('templates/footer');

}
}