<?php 
class Patient_model extends CI_Model {
    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }
    function get_record($uid)
    {
        $record = file_get_contents(getcwd()."/ccda.json");
        return json_decode($record);
    }

}
?>