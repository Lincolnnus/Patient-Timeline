==========
GSOC Timeline Viewer CodeIgnitor Implementation
-------------

Please check your .htaccess file for url routing

The CCDA json documents are encluded in /ccda folder with the file name indicating the patient id.
for instance <code>/ccda/1.json</code>

The patient model is contained in the <code>/models/patient_model.php</code>
The patient controller is contained in the <code>/controllers/patient.php</code>
The patient views are contained in the <code>/views/patient_view.php</code> and <code>/views/timeline_view.php</code>

---------------
By default, codeignitor will include index.php in your request

for instance, index.php/patient/summary/1 to show the summery view of the ccda of user with id=1
index.php/patient/timeline/1 to show the ccda of user with id=1

To remove the index.php in your url, please follow the steps here to edit your .htaccess file.
http://ellislab.com/codeigniter/user-guide/general/urls.html




