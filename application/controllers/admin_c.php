<?php
class Admin_c extends CI_Controller{
    function __construct() {
        parent::__construct();
        $this->load->model('admin_m');
        $this->load->helper(array('form', 'url'));
    }



    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


    //redicted to admin pannel having loaded all record

    public function index()
    {
        $data['jobs'] = $this->admin_m->getRecords();

        $data['content'] = 'admin/adminJobs';
        $this->load->view('components/template', $data);
    }



    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////



    //Diredcted to slider read area wiith get all sliders loaded

    public function sliderread()
    {
        $data['sliders'] = $this->admin_m->geAlltSliders();
        $data['content'] = 'admin/sliderread';
        $this->load->view('components/template', $data);
    }







    ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


    //all tables added for showing thier attributes in respected view

    public function addData()
    {
        $data['city'] = $this->admin_m->getCities();
        $data['deptt'] = $this->admin_m->getDeptt();
        $data['pName'] = $this->admin_m->getPapers();
        $data['cat'] = $this->admin_m->getCategories();

        $data['content'] = 'admin/admin_v';
        $this->load->view('components/template', $data);
    }


    ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    //directed for adding new slider, having set condition that maximum 3 sliders can be added as view design is set for three sliders


    public function addSliders()
    {
        $data['sliders'] = $this->admin_m->getSliders();



        if (count($data['sliders']) < 3 )
        {
            $data['content'] = 'admin/addslider';
            $this->load->view('components/template', $data);
        }
        else
        {
            $this->session->set_flashdata('failed', 'You cannot add more then 3 sliders ,delete one to add another!');

            $data['sliders'] = $this->admin_m->geAlltSliders();
            $data['content'] = 'admin/sliderread';
            $this->load->view('components/template', $data);
        }




    }



    ////////////////////////////////////////////////////////////////////////////////////////


    //New job adding method ,uploads image validates input fields

    public function add_job()
    {


        $config['upload_path'] = "./assets/img/gallery/";
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        /*$config['max_width']  = '1024';
        $config['max_height']  = '768';*/

        $this->load->library('upload', $config);

        // Configure the file to upload

        $this->upload->do_upload();


        $this->form_validation->set_rules('adName', 'Ad Name', 'required');
        $this->form_validation->set_rules('depttSelect', 'Department', 'required');
        $this->form_validation->set_rules('annoucementDate', 'Annoucement Date', 'required');
        $this->form_validation->set_rules('lastDate', 'Last Date', 'required');
        $this->form_validation->set_rules('total', 'Total Jobs', 'required');
        $this->form_validation->set_rules('paperSelect', 'News Paper Name', 'required');
        $this->form_validation->set_rules('paperSelect', 'News Paper Name', 'required');
        $this->form_validation->set_rules('description', 'Description ', 'required');
        $this->form_validation->set_rules('catSelect', 'category ', 'required');
        $this->form_validation->set_rules('citySelect', 'City ', 'required');
        $this->form_validation->set_error_delimiters('<div class="text-danger" >','</div>');




           if($this->form_validation->run())
           {
            $info = $this->upload->data();
            $data = array(
                'ad_title' => $this->input->post('adName'),
                'ad_image' => base_url("assets/img/gallery/".$info['raw_name'].$info['file_ext']),
                'ad_announced_date' => $this->input->post('annoucementDate'),
                'ad_last_date' => $this->input->post('lastDate'),
                'total_jobs' => $this->input->post('total'),
                'description' => $this->input->post('description'),
                'depttId' => $this->input->post('depttSelect'),
                'paperId' => $this->input->post('paperSelect'),
                'catId' => $this->input->post('catSelect'),
                'cityId' => $this->input->post('citySelect')

            );



            if($this->admin_m->createJob($data)) {
                $this->session->set_flashdata('success', 'Job posted successfully!');
                redirect('admin_c');
            }else{
                $this->session->set_flashdata('failed', 'Failed to post the job, Try again!');
                $this->index();
            }


    }
    else
    {
         $data['city'] = $this->admin_m->getCities();
         $data['deptt'] = $this->admin_m->getDeptt();
         $data['pName'] = $this->admin_m->getPapers();
         $data['cat'] = $this->admin_m->getCategories();

         $data['content'] = 'admin/admin_v';
         $this->load->view('components/template', $data);

    }
    }





    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////



    //New slider adding method ,uploads image validates imput fields




    public function addSlider()
    {


        $config['upload_path'] = "./assets/img/gallery/";
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        /*$config['max_width']  = '1024';
        $config['max_height']  = '768';*/

        $this->load->library('upload', $config);

        // Configure the file to upload

        $this->upload->do_upload();




        $this->form_validation->set_rules('sliderTitle', 'Slider Title', 'required');
        $this->form_validation->set_rules('sliderDescription', 'Description ', 'required');
        $this->form_validation->set_error_delimiters('<div class="text-danger" >','</div>');




        if($this->form_validation->run())
        {
            $info = $this->upload->data();
            $data = array(
                'sliderTitle' => $this->input->post('sliderTitle'),
                'sliderDescroption' => $this->input->post('sliderDescription'),
                'sliderImage' => base_url("assets/img/gallery/".$info['raw_name'].$info['file_ext'])
                );



            if($this->admin_m->createSlider($data)) {
                $this->session->set_flashdata('success', 'Slider Inserted successfully!');

                $data['sliders'] = $this->admin_m->geAlltSliders();
                $data['content'] = 'admin/sliderread';
                $this->load->view('components/template', $data);
            }
            else
            {
                $this->session->set_flashdata('failed', 'Failed to Insert the Slider, Try again!');

                $data['sliders'] = $this->admin_m->getSliders();
                $data['content'] = 'admin/addslider';
                $this->load->view('components/template', $data);
            }


        }
        else
        {

            $data['content'] = 'admin/addslider';
            $this->load->view('components/template', $data);

        }
    }


    ////////////////////////////////////////////////////////////////////////////////////////////////////////////


    //update job method ,uploads image and changes name in database if image selected if not updates recordes only


    public function update($id)
    {
        $config['upload_path'] =  "./assets/img/gallery/";
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        /*$config['max_width']  = '1024';
        $config['max_height']  = '768';*/

        $this->load->library('upload', $config);

        // Configure the file to upload



        $this->form_validation->set_rules('adName', 'Ad Name', 'required');
        $this->form_validation->set_rules('adDeptt', 'Department', 'required');
        $this->form_validation->set_rules('announcedDate', 'Annoucement Date', 'required');
        $this->form_validation->set_rules('lastDate', 'Last Date', 'required');
        $this->form_validation->set_rules('total', 'Total Jobs', 'required');
        $this->form_validation->set_rules('paperSelect', 'News Paper Name', 'required');
        $this->form_validation->set_rules('description', 'Description', 'required');
        $this->form_validation->set_rules('catSelect', 'Category', 'required');
        $this->form_validation->set_rules('citySelect', 'City', 'required');
        $this->form_validation->set_rules('paperSelect', 'News Paper', 'required');
        $this->form_validation->set_error_delimiters('<div class="text-danger" >','</div>');


        $this->upload->do_upload();

        $info = $this->upload->data();
        if ($this->form_validation->run() ) {

            $data = array(
                'ad_title' => $this->input->post('adName'),
                'ad_image' => base_url("assets/img/gallery/" . $info['raw_name'] . $info['file_ext']),
                'ad_announced_date' => $this->input->post('announcedDate'),
                'ad_last_date' => $this->input->post('lastDate'),
                'total_jobs' => $this->input->post('total'),
                'description' => $this->input->post('description'),
                'depttId' => $this->input->post('adDeptt'),
                'paperId' => $this->input->post('paperSelect'),
                'catId' => $this->input->post('catSelect'),
                'cityId' => $this->input->post('citySelect')
            );



                if (empty($info['raw_name'])) {

                    $data = array(
                        'ad_title' => $this->input->post('adName'),
                        'ad_announced_date' => $this->input->post('announcedDate'),
                        'ad_last_date' => $this->input->post('lastDate'),
                        'total_jobs' => $this->input->post('total'),
                        'description' => $this->input->post('description'),
                        'depttId' => $this->input->post('adDeptt'),
                        'paperId' => $this->input->post('paperSelect'),
                        'catId' => $this->input->post('catSelect'),
                        'cityId' => $this->input->post('citySelect')
                    );
                }


            IF ($this->admin_m->update($id, $data)) {
                $this->session->set_flashdata('success', 'Job Updated successfully!');

            } else {
                $this->session->set_flashdata('failed', 'Failed to update the job, Try again!');

            }
            redirect('admin_c');
        }
        else{


            $data['city'] = $this->admin_m->getCities();
            $data['deptt'] = $this->admin_m->getDeptt();
            $data['pName'] = $this->admin_m->getPapers();
            $data['cat'] = $this->admin_m->getCategories();

            $data['job'] = $this->admin_m->getForUpdate($id);
            $data['id'] = $id;
            $data['content'] = 'admin/update';
            $this->load->view('components/template', $data);
        }
    }





    ////////////////////////////////////////////////////////////////////////////////////////////////////////////


    //update slider function with new record and also image if selected if not selected only updates record

    public function updateSliderwith($id)
    {
        $config['upload_path'] = './assets/img/gallery';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';


        $this->load->library('upload', $config);

        // Configure the file to upload



        $this->form_validation->set_rules('sliderT', 'Title', 'required');
        $this->form_validation->set_rules('sliderD', 'Description', 'required');
        $this->form_validation->set_error_delimiters('<div class="text-danger" >','</div>');


        $this->upload->do_upload();

        $info = $this->upload->data();
        if ($this->form_validation->run() )
        {

            $data = array(
                'sliderTitle' => $this->input->post('sliderT'),
                'sliderDescroption' => $this->input->post('sliderD'),
                'sliderImage' =>base_url("assets/img/gallery/".$info['raw_name'].$info['file_ext'])


            );



                if (empty($info['raw_name'])) {

                    $data = array(
                        'sliderTitle' => $this->input->post('sliderT'),
                        'sliderDescroption' => $this->input->post('sliderD')
                    );
                }


            IF ($this->admin_m->updateSliderwith($id, $data)) {
                $this->session->set_flashdata('success', 'Slider Updated successfully!');

            } else {
                $this->session->set_flashdata('failed', 'Failed to update the Slider, Try again!');

            }
            $data['sliders'] = $this->admin_m->geAlltSliders();
            $data['content'] = 'admin/sliderread';
            $this->load->view('components/template', $data);
        }
        else{


            $data['sliders'] = $this->admin_m->getSpacificSlider($id);
            $data['id'] = $id;
            $data['content'] = 'admin/updateslider';
            $this->load->view('components/template', $data);
        }
    }





    ///////////////////////////////////////////////////////////////////////////////////////////////////////////////


    //delete job function deletes job on the base of selected id

    
    public function deleteJob($id)
    {
        if ($this->admin_m->delete($id))
        {
            $this->session->set_flashdata('success', 'Job Deleted!');

        } else {
            $this->session->set_flashdata('failed', 'Failed to delete the job, Try again!');

        }

        redirect('admin_c');
    }


    /////////////////////////////////////////////////////////////////////////////////////////////////////////////


    //delete slider function deletes slider on the base of selected id



    public function deleteSlider($id)
    {
        if ($this->admin_m->deleteSlid($id))
        {
            $this->session->set_flashdata('success', 'Slider Deleted!');

        } else {
            $this->session->set_flashdata('failed', 'Failed to delete the Slider, Try again!');

        }

        $data['sliders'] = $this->admin_m->geAlltSliders();
        $data['content'] = 'admin/sliderread';
        $this->load->view('components/template', $data);
    }


    /////////////////////////////////////////////////////////////////////////////////////////////////////////////


    //directing to update view ,getting records for foreign keys (select)



    public function updateJob($id)
    {
        $data['city'] = $this->admin_m->getCities();
        $data['deptt'] = $this->admin_m->getDeptt();
        $data['pName'] = $this->admin_m->getPapers();
        $data['cat'] = $this->admin_m->getCategories();
        $data['job'] = $this->admin_m->getForUpdate($id);
        $data['id'] = $id;
        $data['content'] = 'admin/update';
        $this->load->view('components/template', $data);
    }




    //////////////////////////////////////////////////////////////////////////////////////////////////////////////


    //directing to slider update view ,getting record of selected slider


    public function updateSlider($id)
    {
        $data['sliders'] = $this->admin_m->getSpacificSlider($id);
        $data['id'] = $id;
        $data['content'] = 'admin/updateslider';
        $this->load->view('components/template', $data);
    }





    //////////////////////////////////////////////////////////////////////////////////////////////////////////////


    //directing to detail view of selected job



    public function viewJob($id)
    {
        $data['job'] = $this->admin_m->jobDetails($id);
        $data['content'] = 'admin/detailsView';
        $this->load->view('components/template', $data);
    }





    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


    //directing to searchResluts ,having selected search result


    public function userSearch()
    {
        $query = $this->input->post('query');
        $data['results'] = $this->admin_m->search($query);
        $data['query'] = $query;
        $data['content'] = 'admin/searchResults';
        $this->load->view('components/template', $data);
    }
}

?>
