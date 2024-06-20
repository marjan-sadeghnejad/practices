<style>
input{
    margin: 10px;
    text-align: right;
}
lable{
    color: darkblue;
}
</style>

<html>
<form action="" method="post">
    <lable for="firstName">نام : </label>
     <input type="firstName" name="firstName" id="firstName"><br>
    <lable for="lastName">نام خانوادگی : </labe>
     <input type="lastName" name="lastName" id="LastName"><br>
     <lable for="MeliCode">کد ملی : </labe>
     <input type="MeliCode" name="MeliCode" id="Code"><br>
     <lable for="TelNo">شماره تماس : </labe>
     <input type="TelNo" name="TelNo" id="TelNo"><br>
     <lable for="Email">ایمیل : </labe>
     <input type="Email" name="Email" id="Email"><br>
     <lable for="Add">آدرس پستی : </labe>
     <input type="Add" name="Add" id="Add"><br>
     <input type="submit" name="submit" value="ارسال"><br>

</form>

</html>
<?php
if($_SERVER['REQUEST_METHOD']==='POST' && isset($_POST['submit']) ){

    $firstName= $_POST['firstName'];
    $lastName= $_POST['lastName'];
    $MeliCode= $_POST['MeliCode'];
    $TelNo= $_POST['TelNo'];
    $Email= $_POST['Email'];
    $Add= $_POST['Add'];

// echo $firstName," - " ,$lastName ," - ", $MeliCode," - " , $TelNo," - " , $Email," - " ,$Add ;

$persons = [
    '$MeliCode' => [$firstName , $lastName , $TelNo , $Email , $Add ]
    
];

// echo "<pre>";
// print_r( $persons);
// echo"</pre>";
    
if( $firstName==$persons['$MeliCode'][0] &&
    $lastName== $persons['$MeliCode'][1] &&
    $TelNo==$persons['$MeliCode'][2] &&
    $Email== $persons['$MeliCode'][3] &&
    $Add== $persons['$MeliCode'][4]){
        echo "<br>";
        echo "<br>";
        echo "اطلاعات فرم شما تکمیل شد";
    
    } 
}
?>

