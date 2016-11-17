<?php
Class Home extends CI_Controller
{
    /**
     * http://localhost/codeApp/index.php/home/view
     */
    public function view($page = "home")
    {
        if (!file_exists('application/views/home/'.$page.'.php')) {
            echo "File does not exist";
        }
        $data['title'] = ucfirst("Home");
        $this->load->view('templates/header', $data);
        $this->load->view('home/'.$page);
        $this->load->view('templates/footer', $data);
    }
}
?>
