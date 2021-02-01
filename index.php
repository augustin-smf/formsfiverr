<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css" integrity="sha512-mSYUmp1HYZDFaVKK//63EcZq4iFWFjxSL+Z3T/aCt4IO9Cejm03q3NKKYN6pFQzY0SBOr8h+eCIAZHPXcpZaNw==" crossorigin="anonymous" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
    <title>Form</title>
    <style>
#signature{
width: 100%;
height: auto;
border: 1px solid black;
}
</style>
  </head>
  <body>
    <section class="my-2">
        <div class="row">
            <div class="col-md-4 offset-4">
                <form action="sendmail.php" method="post" enctype="multipart/form-data">
  <div class="form-group">
    <label for="exampleInputEmail1">Name</label>
    <input type="text" class="form-control" name="name" id="exampleInputEmail1">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">First Name</label>
    <input type="text" class="form-control" name="firstname" id="exampleInputPassword1">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Birth date</label>
     <div class="input-group date">
  <input type="text" class="form-control" placeholder="DD/MM/YYYY" name="dob">
  <div class="input-group-append">
    <span class="input-group-text" id="basic-addon2"><i class="fas fa-calendar-alt"></i></span>
  </div>
</div>
  </div>  
  <div class="form-group">
    <label for="exampleInputPassword1">Date of beginning</label>
     <div class="input-group ">
  <input type="text" class="form-control begin_date" placeholder="DD/MM/YYYY" name="begin_date">
  <div class="input-group-append">
    <span class="input-group-text" id="basic-addon2"><i class="fas fa-calendar-alt"></i></span>
  </div>
</div>
  </div>
    <div class="form-group">
    <label for="exampleInputPassword1">Date of ending</label>
     <div class="input-group">
  <input type="text" class="form-control end_date" placeholder="DD/MM/YYYY" name="end_date">
  <div class="input-group-append">
    <span class="input-group-text" id="basic-addon2"><i class="fas fa-calendar-alt"></i></span>
  </div>
</div>
  </div>
   <div class="form-group">
    <label for="exampleInputPassword1">Street Address</label>
    <input type="text" class="form-control" name="address" id="exampleInputPassword1">
  </div>
   <div class="form-group">
    <label for="exampleInputPassword1">City</label>
    <input type="text" class="form-control" name="city" id="exampleInputPassword1">
  </div>
   <div class="form-group">
    <label for="exampleInputPassword1">Zip Code</label>
    <input type="text" class="form-control" name="zipcode" id="exampleInputPassword1">
  </div>
   <div class="form-group">
    <label for="exampleInputPassword1">Country</label>
    <input type="text" class="form-control" name="country" id="exampleInputPassword1">
  </div>
  <!-- Signature area -->
<div id="signature"></div><br/>
 
<input type="button" class="btn btn-sm btn-info mb-2" id="click" value="Show Signature"><br/>
<textarea id="output" name="sig" style="display: none;" class="form-control" rows="5"></textarea><br/>

<!-- Preview image -->
<img src="" id="sign_prev" style='display: none;' />

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
            </div>
        </div>
    </section>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js" integrity="sha512-T/tUfKSV1bihCnd+MxKD0Hm1uBBroVYBOYSk1knyvQ9VyZJpc/ALb4P0r6ubwVPSGB2GvjeoMAJJImBG12TiaQ==" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/locales/bootstrap-datepicker.fr.min.js" integrity="sha512-fx3aztaUjb4NyoD+Tso5g7R1l29bU3jnnTfNRKBiY9fdQOHzVhKJ10wEAgQ1zM/WXCzB9bnVryHD1M40775Tsw==" crossorigin="anonymous"></script>
<script type="text/javascript">
    $('.date').datepicker({
        format: 'dd/mm/yyyy',
        autoclose:true,
        weekStart: 1,
        language: 'fr'
    });
     $('.begin_date').datepicker({
        format: 'dd/mm/yyyy',
        autoclose:true,
        weekStart: 1,
        startDate: new Date('2021-06-28'),
        endDate: new Date('2021-09-05'),
        daysOfWeekDisabled: "0,2,3,4,5,6",
        language: 'fr'

    });
       $('.end_date').datepicker({
        format: 'dd/mm/yyyy',
        autoclose:true,
        weekStart: 1,
        startDate: new Date('2021-06-28'),
        endDate: new Date('2021-09-05'),
        daysOfWeekDisabled: "0,1,2,3,4,6",
        language: 'fr'

    });
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jSignature/2.1.3/jSignature.min.js" integrity="sha512-lZ7GJNAmaXw7L4bCR5ZgLFu12zSkuxHZGPJdIoAqP6lG+4eoSvwbmKvkyfauz8QyyzHGUGVHyoq/W+3gFHCLjA==" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jSignature/2.1.3/flashcanvas.js" integrity="sha512-La2Eh5E5rjqSFrTIgJXLOr3EvkJZ7N+rMOsCr7yVGGE4FUTBKPDmkycf9NsdXTTFBs7PUKOTxTQyNf1Pp1Xb7A==" crossorigin="anonymous"></script>
<!-- Script -->
<script>
$(document).ready(function() {

 // Initialize jSignature
 var $sigdiv = $("#signature").jSignature({'UndoButton':true});

 $('#click').click(function(){
  // Get response of type image
  var data = $sigdiv.jSignature('getData', 'image');

  // Storing in textarea
  $('#output').val(data);

  // Alter image source 
  $('#sign_prev').attr('src',"data:"+data);
  $('#sign_prev').show();
 });
});
</script>
  </body>
</html>