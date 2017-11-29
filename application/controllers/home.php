<?php
class Home extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('home_m');
    }




    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


    //directing to user main page having fetched all records for tables


    public function index()
    {
        $data['jobs'] = $this->home_m->getData();
        $data['cat'] = $this->home_m->getCat();
        $data['dep'] = $this->home_m->getdep();
        $data['city'] = $this->home_m->getCity();
        $data['nPaper'] = $this->home_m->getnPaper();
        $data['sliders'] = $this->home_m->geAlltSliders();


        $data['content'] = 'user/home_v';
        $this->load->view('components/usertemplate', $data);
    }



    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////




    //directing to main user page with Jobs on the base of selected category



    public function categories($id)
    {
        if ($data['jobs'] = $this->home_m->getSpecificCatData($id))
        {
            $dept=$this->home_m->getcate($id);

            $this->session->set_flashdata('success', "Jobs in $dept->catName");


            $data['cat'] = $this->home_m->getCat();
            $data['dep'] = $this->home_m->getdep();
            $data['city'] = $this->home_m->getCity();
            $data['nPaper'] = $this->home_m->getnPaper();
            $data['sliders'] = $this->home_m->geAlltSliders();

            /*$this->session->set_flashdata('success', "$data['cat']->catName");*/


            $data['content'] = 'user/home_v';
            $this->load->view('components/usertemplate', $data);
        }
        else {

            $dept=$this->home_m->getcate($id);

            $this->session->set_flashdata('success', "No Job in $dept->catName");

            $data['cat'] = $this->home_m->getCat();
            $data['dep'] = $this->home_m->getdep();
            $data['city'] = $this->home_m->getCity();
            $data['nPaper'] = $this->home_m->getnPaper();
            $data['sliders'] = $this->home_m->geAlltSliders();


            $data['content'] = 'user/home_v';
            $this->load->view('components/usertemplate', $data);

        }
    }



    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////



    //directing to main user page with Jobs on the base of selected department


    public function departments($id)
    {
        if ($data['jobs'] = $this->home_m->getSpecificDepttData($id))
        {

            $dept=$this->home_m->getdept($id);

            $this->session->set_flashdata('success', "Jobs in $dept->depttName");
            $data['cat'] = $this->home_m->getCat();
            $data['dep'] = $this->home_m->getdep();
            $data['city'] = $this->home_m->getCity();
            $data['nPaper'] = $this->home_m->getnPaper();
            $data['sliders'] = $this->home_m->geAlltSliders();


            $data['content'] = 'user/home_v';
            $this->load->view('components/usertemplate', $data);
        }
        else {

            $dept=$this->home_m->getdept($id);

            $this->session->set_flashdata('success', "No Jobs in $dept->depttName");

            $data['cat'] = $this->home_m->getCat();
            $data['dep'] = $this->home_m->getdep();
            $data['city'] = $this->home_m->getCity();
            $data['nPaper'] = $this->home_m->getnPaper();
            $data['sliders'] = $this->home_m->geAlltSliders();


            $data['content'] = 'user/home_v';
            $this->load->view('components/usertemplate', $data);

        }

    }





    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


    //directing to main user page with Jobs on the base of selected City



    public function cities($id)
    {
        if ($data['jobs'] = $this->home_m->getSpecificCityData($id))
        {
            $dept=$this->home_m->getc($id);

            $this->session->set_flashdata('success', "Jobs in $dept->cityName");


            $data['cat'] = $this->home_m->getCat();
            $data['dep'] = $this->home_m->getdep();
            $data['city'] = $this->home_m->getCity();
            $data['nPaper'] = $this->home_m->getnPaper();
            $data['sliders'] = $this->home_m->geAlltSliders();


            $data['content'] = 'user/home_v';
            $this->load->view('components/usertemplate', $data);
        }
        else {

            $dept=$this->home_m->getc($id);

            $this->session->set_flashdata('success', "No Jobs in $dept->cityName");

            $data['cat'] = $this->home_m->getCat();
            $data['dep'] = $this->home_m->getdep();
            $data['city'] = $this->home_m->getCity();
            $data['nPaper'] = $this->home_m->getnPaper();
            $data['sliders'] = $this->home_m->geAlltSliders();


            $data['content'] = 'user/home_v';
            $this->load->view('components/usertemplate', $data);

        }
    }





    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////



    //directing to main user page with Jobs on the base of selected paper


    public function papers($id)
    {
        if ($data['jobs'] = $this->home_m->getSpecificPaperData($id))
        {

            $dept=$this->home_m->getp($id);

            $this->session->set_flashdata('success', "Jobs in $dept->PaperName");


            $data['cat'] = $this->home_m->getCat();
            $data['dep'] = $this->home_m->getdep();
            $data['city'] = $this->home_m->getCity();
            $data['nPaper'] = $this->home_m->getnPaper();
            $data['sliders'] = $this->home_m->geAlltSliders();


            $data['content'] = 'user/home_v';
            $this->load->view('components/usertemplate', $data);
        }
        else {

            $dept=$this->home_m->getp($id);

            $this->session->set_flashdata('success', "No Jobs in $dept->PaperName");

            $data['cat'] = $this->home_m->getCat();
            $data['dep'] = $this->home_m->getdep();
            $data['city'] = $this->home_m->getCity();
            $data['nPaper'] = $this->home_m->getnPaper();
            $data['sliders'] = $this->home_m->geAlltSliders();


            $data['content'] = 'user/home_v';
            $this->load->view('components/usertemplate', $data);

        }
    }





    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////



    //dericting to readMoreView of selected Job



    public function readMore($id)
    {
        $data['read'] = $this->home_m->readMore($id);

        $data['content'] = 'user/readMoreView';
        $this->load->view('components/usertemplate', $data);
    }



    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////



    //directing to imagefull view, on the base of selected image


    public function imgShow($id)
    {
        $data['read'] = $this->home_m->imgShow($id);
        $data['content'] = 'user/imagefull';
        $this->load->view('components/usertemplate', $data);
    }






    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


    //directing to searchResults view on the vase of search

    
    public function searchJobs()
    {
        $query = $this->input->post('query');
        $data['result'] = $this->home_m->searchJob($query);
        $data['query'] = $query;
        $data['content'] = 'user/searchResults';
        $this->load->view('components/usertemplate', $data);
    }
}



?>
