<?php 
class Patient_model extends CI_Model {
    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }
    function get_record($uid)
    {
        $record = file_get_contents("http://localhost:9099/services/PatientRecord/mongo/query/getRecord?api_key=63d5a343-ec73-4315-94d7-5475072e376e");
        return $record;
    }

}
?>