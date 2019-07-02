<?php  
$cv["name"]="Berna";
$cv["surname"]="Büyükada";
$cv["date of Birth"]="19.05.2002";
$cv["Address"]="Hadımköy Toki Konutları 3.Etap K6-6 D:7 Arn/İst";
$cv["Marital Status"]="Single";
$cv["E-Mail"]="bernabuyukada.bil@gmail.com";
$cv["Mobile Phone"]="0531 584 1988";
$cv["Company Name"]="Ubit";          
$cv["Position"]="Intern";
$cv["Education"]="High School";
$cv["High School"]="İbrahim Özaydın Mesleki ve Teknik Anadolu Lisesi";
$cv["Language"]="Intermediate English";
$cv["Program Language"]="C# Good, HTML and SQL Known Medium,";
$cv["Hobbies"]="listening to Music, Make Travelling, Software"

?>

<!DOCTYPE html>
<html lang="tr">
    <head> 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>
        Cv
        </title>
    </head>   
    <body>
      <header>
        <div class="col-md-12" style="text-align: center; margin-top: 2em;">
         
            <img src="2.jpg" width="200px" height="180px">
        </div>
      </header>
      <div class="container">
        <h1 style="text-align: center;"><u>-USER INFORMATION-</u></h1>

          <div class="row">
            <div class="col-md-4" >
              <label value="Name-Surname" class="form-label"><b>Name-Surname :</b></label>
            </div>  
            <div class="col-md-8">
              <span><?php echo $cv["name"];?></span><span><?php echo " ".$cv["surname"];?></span>
            </div> 
          </div>

          <div class="row" >
            <div class="col-md-4"> 
              <label value="Address" class="form-label"><b>Address :</b></label>
            </div>
            <div class="col-md-8">
              <span><?php echo $cv["Address"];?></span>
            </div>
          </div>

          <div class="row">
            <div class="col-md-4">
              <label value="Date Of Birth" class="form-label"><b>Date Of Birth : </b></label>
            </div>
            <div class="col-md-8">
              <span><?php echo $cv["date of Birth"] ;?></span>
            </div>   
          </div>

          <div class="row">
            <div class="col-md-4">
              <label value="Marital Status" class="form-label"><b>Marital Status :</b></label>
              </div>
              <div class="col-md-8">
              <span><?php echo $cv["Marital Status"];?></span>
            </div>
          </div>

          <div class="row">
            <div class="col-md-4">
              <label value="E-Mail" class="form-label"><b>E-Mail :</b></label>  
            </div>
            <div class="col-md-8">
              <span><?php echo $cv["E-Mail"];?></span>
            </div>
          </div>

          <div class="row">
            <div class="col-md-4">
              <label value="Mobile Phone" class="form-label"><b>Mobile Phone :</b></label>
            </div>
            <div class="col-md-8">
              <span><?php echo $cv["Mobile Phone"];?></span>       
            </div>     
          </div>

          <div class="row">
            <div class="col-md-4">
              <label value="Company Name" class="form-label"><b>Company Name :</b></label>
            </div>
            <div class="col-md-8">
              <span><?php echo $cv["Company Name"] ;?></span>
            </div>
          </div>

          <div class="row">
            <div class="col-md-4">
              <label value="Position" class="form-label"><b>Position :</b></label>
            </div>
            <div class="col-md-8">
              <span><?php echo $cv["Position"] ;?></span>
            </div>
          </div>
                         
           <div class="row">
            <div class="col-md-4">
              <label value="Education" class="form-label"><b>Education :</b></label>
            </div>
            <div class="col-md-8">
              <span><?php echo $cv["Education"] ;?></span>
            </div>
          </div>

          <div class="row">
            <div class="col-md-4">
              <label value="High School" class="form-label"><b>High School :</b></label>
            </div>
              <div class="col-md-8">
                <span><?php echo $cv["High School"] ;?></span>   
            </div>           
          </div>

          <div class="row">
            <div class="col-md-4">
              <label value="Language" class="form-label"><b>Language :</b></label>
            </div>
              <div class="col-md-8">
               <span><?php echo $cv["Language"] ;?></span>   
            </div>   
          </div>

          <div class="row">
            <div class="col-md-4">
              <label value="Program Language" class="form-label"><b>Program Language :</b></label>
            </div>
              <div class="col-md-8">
                <span><?php echo $cv["Program Language"] ;?></span>
            </div>
          </div>

          <div class="row">
            <div class="col-md-4">
              <label value="Hobbies" class="form-label"><b>Hobbies</b></label>
            </div>
              <div class="col-md-8">
                <span><?php echo $cv["Hobbies"] ;?></span>
            </div>
          </div>

          <div class="alert alert-primary" role="alert">
                Lütfen bosluklari doldurunuz.
           </div>
        </div>
        <footer>

        </footer>
 </body>
</html>
                
