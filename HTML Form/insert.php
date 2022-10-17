>?php
$username = $_POST['myName'];
$Company  = $_POST['myCompany'];
$PhoneNum  = $_POST['myNumber'];
$message  = $_POST['myText'];

if(!empty($username || !empty($PhoneNum) || !empty($Company) || !empty($message)){
    $host ="localhost";
    $dbUsername="root";
    $dbPassword="";
    $dbname=" HTML-FORM";
    $conn = new mysqli($host,$dbUsername,$dbPassword,$dbname);
    if(mysqli_connect_error()){
        die('connect Error'('.mysqli_connect_error().')'mysqli_connect_error());
    }
    else {
       
    }

}
else{
    echo "All field are required";
    die();
}

?>