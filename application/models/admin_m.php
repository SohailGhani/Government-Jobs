<?php
class Admin_m extends CI_Model{


    
    // Retrieving all records from database and display it on the front end.


    public function getRecords()
    {
        $query = $this->db->from('job_ads')
                        ->join('cities', 'cities.cityId=job_ads.cityId')
                        ->join('paper', 'paper.paperId=job_ads.paperId')
                        ->join('departments', 'departments.depttId=job_ads.depttId')
                        ->join('categories', 'categories.catId=job_ads.catId')
                        ->get();

        return $query->result();
    }


    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    ///


    //Retrieving all sliders from database and display it on front end.


    public function geAlltSliders()
    {
        $query = $this->db->get('slider');
        return $query->result();
    }

    ///////////////////////////////////////////////////////////////////////////////////////////////////////////


    //Retrieving all cities from database and display it on front end.

    public function getCities(){
        $query = $this->db->get('cities');
        return $query->result();
    }


    ///////////////////////////////////////////////////////////////////////////////////////////////////////////


    //Retrieving all sliders from database and display it on front end.


    public function getSliders(){
        $query = $this->db->get('slider');
        return $query->result();
    }

    ////////////////////////////////////////////////////////////////////////////////////////////////////////////


    //Retrieving all Departments from database and display it on front end.


    public function getDeptt(){
        $query = $this->db->get('departments');
        return $query->result();
    }


    ///////////////////////////////////////////////////////////////////////////////////////////////////////////


    //Retrieving all Papers from database and display it on front end.


    public function getPapers(){
        $query = $this->db->get('paper');
        return $query->result();
    }



    ///////////////////////////////////////////////////////////////////////////////////////////////////////////


    //Retrieving all categories from database and display it on front end.


    public function getCategories(){
        $query = $this->db->get('categories');
        return $query->result();
    }

    /////////////////////////////////////////////////////////////////////////////////////////////////////////////


    //Retrieving city name from database on the base of city Id



    public function getCitiesName($id)
    {
        $this->db->where('cityId',$id );
        $query = $this->db->get('cities');

        return $query->result();

    }

    ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////


    //Retrieving specific id based sliders from database for editing.

    public function getSpacificSlider($id)
    {
        $this->db->where('id',$id );
        $query1 = $this->db->get('slider');

        return $query1->row_array();


    }









    ///////////////////////////////////////////////////////////////////////////////////////////////////////////////
    

    // Inserting Records


    public function createJob($data)
    {
        $this->db->insert('job_ads', $data);
        if($this->db->affected_rows() > 0 ){
           return TRUE;
       }else{
           return FALSE;
       }
    }





    ///////////////////////////////////////////////////////////////////////////////////////////////////////////////


    // Inserting Sliders


    public function createSlider($data)
    {
        $this->db->insert('slider', $data);
        if($this->db->affected_rows() > 0 ){
            return TRUE;
        }else{
            return FALSE;
        }
    }

    ////////////////////////////////////////////////////////////////////////////////////////////////////////////
    
    // Delete records


    public function delete($id)
    {
         $this->db->where('id', $id);
        $this->db->delete('job_ads');
        if($this->db->affected_rows() > 0 ){
            return TRUE;
        }else{
            return FALSE;
        }
    }


    ///////////////////////////////////////////////////////////////////////////////////////////////////////////////

    // Delete sliders


    public function deleteSlid($id)
    {
         $this->db->where('id', $id);
        $this->db->delete('slider');
        if($this->db->affected_rows() > 0 ){
            return TRUE;
        }else{
            return FALSE;
        }
    }


    ///////////////////////////////////////////////////////////////////////////////////////////////////////////////


    // Fetch data for update


    public function getForUpdate($id)
    {
        $this->db->where('id', $id);
        $query1 = $this->db->get('job_ads');
        return $query1->row_array();
    }


    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////




    // Update the feteched data


    public function update($id, $data)
    {
        $this->db->where('id', $id);
        if($this->db->update('job_ads', $data))
        {return TRUE;}
        else
        {return FALSE;}
    }


//////////////////////////////////////////////////////////////////////////////////////////////////////////////////




    // Update the feteched sliders data


    public function updateSliderwith($id, $data)
    {
        $this->db->where('id', $id);
        if($this->db->update('slider', $data))
        {return TRUE;}
        else
        {return FALSE;}
    }




    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////




    // Fetch a specific record by clicking the view button


    public function jobDetails($id)
    {
           $this->db->where('id', $id);
        $this->db->join('cities', 'cities.cityId=job_ads.cityId');
        $this->db->join('paper', 'paper.paperId=job_ads.paperId');
        $this->db->join('departments', 'departments.depttId=job_ads.depttId');
        $this->db->join('categories', 'categories.catId=job_ads.catId');
           $query1 = $this->db->get('job_ads');
           return $query1->row_array();
    }

    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////


    // Search for specific record in the database.


    public function search($query)
    {
        $q = $this->db->from('job_ads')
                     ->like('ad_title', $query)
                    ->join('cities', 'cities.cityId=job_ads.cityId')
                    ->join('paper', 'paper.paperId=job_ads.paperId')
                    ->join('departments', 'departments.depttId=job_ads.depttId')
                    ->join('categories', 'categories.catId=job_ads.catId')
                    ->get();


        return $q->result();
    }



    //////////////////////////////////////////////////////////////////////////////////////////////////////////////



    //checking admin email and password

    public function logIn($email,$password)
    {
        $query = $this->db->where(['userEmail'=>$email,'userPassword'=>$password])
            ->get('admin');



        if ($query->num_rows() > 0)
        {
            return $query->row();
        }
    }




}

?>

