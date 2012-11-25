<?PHP
require_once("./include/fg_membersite.php");

$fgmembersite = new FGMembersite();

//Provide your site name here
$fgmembersite->SetWebsiteName('liverpoolwififinder.co.uk');

//Provide the email address where you want to get notifications
$fgmembersite->SetAdminEmail('mike_weatherall@hotmail.co.uk');

//Provide your database login details here:
//hostname, user name, password, database name and table name
//note that the script will create the table (for example, fgusers in this case)
//by itself on submitting register.php for the first time
$fgmembersite->InitDB(/*hostname*/'cust-mysql-123-06',
                      /*username*/'uli_1016014_0001',
                      /*password*/'ge0rge123',
                      /*database name*/'liverpoolwififinde_1016014_db1',
                      /*table name*/'fgusers3');

//For better security. Get a random string from this link: http://tinyurl.com/randstr
// and put it here
$fgmembersite->SetRandomKey('qSRcVS6DrTzrPvr');

?>