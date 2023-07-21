<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
     <link rel="shortcut icon" href="./img/SOLU.png" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <title>contact</title>
</head>
<style>

  .form{
  
    display: flex;
  }
  .f{
    
    padding: 20px;
    
  width: 50%;
  margin: 1% 2em;
  height: 500px;
  }
  input[type=text]{
  width: 100%;
  
      height: 35px;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
textarea[type=text]{
  width: 100%;
  
      height: 25vh;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
button[type=submit] {
  width: 100%;
    
  background-color: orange;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}
@media (min-width: 320px) and (max-width: 480px) {
  .form{
  
  display: block;
}
  .f{
    padding: 20px;
    
    width:90%;
    margin: 1% 2em;
    height: 530px;
  }
  input[type=email]{
  width: 100%;

      height: 35px;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
}   
  </style>
<body>
<?php include 'header.php';
     ?> 
         </div>
           <div class="sarv">
             <div class="sar" >
               <br> <br> <br> <br> <br> <br> <br> <br> <br> 
              <center><h2  style="font-size: 44px; color: #f6f6ff;">contact us</h2>
            <br>
              
             </center>
             </div>
             </div>
             <div class="form">
              

<div
class="f"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3501.9903809109933!2d77.37673801455952!3d28.630050390945254!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390ceff8864e0cf1%3A0xa20290bf75099ebd!2sBSI%20Business%20Park%20H15!5e0!3m2!1sen!2sin!4v1678284329820!5m2!1sen!2sin" width="103%" height="470" style="border:0; margin-left: 100px; margin-left: -2%;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>
                <form method="post" id="frmContactus" class="f">
             
					<div class="contact-form">
					  <div class="form-group">
						 <label class="control-label col-sm-2" for="name">Name:</label>
						 <div class="col-sm-10">          
							<input type="text" class="form-control" id="name"  autocomplete="off" onkeydown="return/[a-z A-z]/i.test(event.key)"  placeholder="Enter name" name="name" required>
						 </div>
					  </div>
					  <div class="form-group">
						 <label class="control-label col-sm-2" for="email">Email:</label>
						 <div class="col-sm-10">
							<input type="email" class="form-control" id="email"autocomplete="off"onkeypress="return validateNameber(event)" placeholder="Enter email" name="email" required>
						 </div>
					  </div>
					  <div class="form-group">
						 <label class="control-label col-sm-2" for="mobile">Mobile:</label>
						 <div class="col-sm-10">
							<input type="text" class="form-control" id="mobile"onkeypress="return validateNumber(event)" pattern="{/0-9/}"   maxlength="10" placeholder="Enter mobile" name="mobile" required>
						 </div>

					  </div>
					    <script>
              function validateNumber(e) {
                const pattern = /^[0-9]$/;
  
                return pattern.test(e.key)
              }


            
            </script>
					  <div class="form-group">
						 <label class="control-label col-sm-2" for="comment">Comment:</label>
						 <div class="col-sm-10">
							<textarea   type="text" class="form-control" rows="5" id="comment" name="comment"></textarea>
						 </div>
					  </div>
					  <div class="form-group">
						 <div class="col-sm-offset-2 col-sm-10">
							<button type="submit" class="btn btn-default" name="submit" id="submit">Submit</button>
							<span style="color:red;" id="msg"></span>
						 </div>
					  </div>
				   </div>
			   <!-- </form> -->
            </div>
         </div>
      </div>
	  <script>
	  jQuery('#frmContactus').on('submit',function(e){
		jQuery('#msg').html('');
		jQuery('#submit').html('Please wait');
		jQuery('#submit').attr('disabled',true);
		jQuery.ajax({
			url:'submit.php',
			type:'post',
			data:jQuery('#frmContactus').serialize(),
			success:function(result){
				jQuery('#msg').html(result);
				jQuery('#submit').html('Submit');
				jQuery('#submit').attr('disabled',false);
				jQuery('#frmContactus')[0].reset();
			}
		});
		e.preventDefault();
	  });
	  </script>
          
             
      
              </div>
       </div>
              </form>
             </div>
             <?php include 'footer.php';
     ?>
             
</body>
</html>