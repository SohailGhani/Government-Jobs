<?php
class Home_m extends CI_Model{



    //getting all records from database and display it on from end.


    public function getData()
    {


        $query = $this->db->from('job_ads')
                        ->join('cities', 'cities.cityId=job_ads.cityId')
                        ->join('paper', 'paper.paperId=job_ads.paperId')
                        ->join('departments', 'departments.depttId=job_ads.depttId')
                        ->join('categories', 'categories.catId=job_ads.catId')
                        ->get();
        return $query->result();
    }




    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    public function getdept($id)
    {
        $query = $this->db->where('depttId', $id)
                            ->from('departments')
                            ->get();
        return $query->row();
    }





    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////





    public function getcate($id)
    {
        $query = $this->db->where('catId', $id)
            ->from('categories')
            ->get();
        return $query->row();

    }
    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    ///
    ///




    public function getc($id)
    {
        $query = $this->db->where('cityId', $id)
                            ->from('cities')
                            ->get();
        return $query->row();
    }



    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////





    public function getp($id)
    {
        $query = $this->db->where('paperId', $id)
                            ->from('paper')
                            ->get();
        return $query->row();
    }





    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////





    //getting specific id based record from database and display it on from end.


    public function getSpecificCatData($id)
    {
        $this->db->where('categories.catId', $id);
        $query1 = $this->db->from('job_ads')
            ->join('cities', 'cities.cityId=job_ads.cityId')
            ->join('paper', 'paper.paperId=job_ads.paperId')
            ->join('departments', 'departments.depttId=job_ads.depttId')
            ->join('categories', 'categories.catId=job_ads.catId')
            ->get();


        return $query1->result();
    }



    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////



    //getting specifc departments from database and display it on from end.



    public function getSpecificDepttData($id)
    {
        $this->db->where('departments.depttId', $id);
        $query1 = $this->db->from('job_ads')
            ->join('cities', 'cities.cityId=job_ads.cityId')
            ->join('paper', 'paper.paperId=job_ads.paperId')
            ->join('departments', 'departments.depttId=job_ads.depttId')
            ->join('categories', 'categories.catId=job_ads.catId')
            ->get();


        return $query1->result();
    }






    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////



    //getting specific city from database and display it on from end.


    public function getSpecificCityData($id)
    {
        $this->db->where('cities.cityId', $id);
        $query1 = $this->db->from('job_ads')
            ->join('cities', 'cities.cityId=job_ads.cityId')
            ->join('paper', 'paper.paperId=job_ads.paperId')
            ->join('departments', 'departments.depttId=job_ads.depttId')
            ->join('categories', 'categories.catId=job_ads.catId')
            ->get();


        return $query1->result();
    }




    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////



    //getting specific paper from database and display it on from end.



    public function getSpecificPaperData($id)
    {
        $this->db->where('paper.paperId', $id);
        $query1 = $this->db->from('job_ads')
            ->join('cities', 'cities.cityId=job_ads.cityId')
            ->join('paper', 'paper.paperId=job_ads.paperId')
            ->join('departments', 'departments.depttId=job_ads.depttId')
            ->join('categories', 'categories.catId=job_ads.catId')
            ->get();


        return $query1->result();
    }





    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


    //getting all categories from database and display it on from end.


     public function getCat()
     {
        $query = $this->db->get('categories');

        return $query->result();
     }



     /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////



    //getting all department from database and display it on from end.


    public function getdep()
    {
        $query = $this->db->get('departments');

        return $query->result();
    }




    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////



    //getting all cities from database and display it on from end.



    public function getCity()
    {
        $query = $this->db->get('cities');

        return $query->result();
    }





    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


    //getting all sliders from database and display it on from end.


    public function geAlltSliders()
    {
        $query = $this->db->get('slider');
        return $query->result();
    }




    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


    //getting all papers from database and display it on from end.


    public function getnPaper()
    {
        $query = $this->db->get('paper');

        return $query->result();
    }







    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////



    //getting specific id based job from database and display it on from end readMore view.


    public function readMore($id)
    {

        $this->db->where('id', $id);
        $query1 = $this->db->from('job_ads')
                        ->join('cities', 'cities.cityId=job_ads.cityId')
                        ->join('paper', 'paper.paperId=job_ads.paperId')
                        ->join('departments', 'departments.depttId=job_ads.depttId')
                        ->join('categories', 'categories.catId=job_ads.catId')
                        ->get();

        return $query1->row_array();
    }



    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////



    //getting specific id based job from database and display it on from end imagefull view



    public function imgShow($id)
    {
        $this->db->where('id', $id);
        $query1 = $this->db->from('job_ads')
            ->join('cities', 'cities.cityId=job_ads.cityId')
            ->join('paper', 'paper.paperId=job_ads.paperId')
            ->join('departments', 'departments.depttId=job_ads.depttId')
            ->join('categories', 'categories.catId=job_ads.catId')
            ->get();
        return $query1->row_array();
    }


    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


    //getting specif search based job from database and display it on from end searchResult view

    public function searchJob($query)
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
    
}

?>
