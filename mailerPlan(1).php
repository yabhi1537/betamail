<?php 
error_reporting(0);
$this->load->view('includes/header');
$this->load->view('includes/sidebar');

?>
<style>
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: "Open Sans",sans-serif;
  text-decoration: none;
  list-style: none;
}

body{
  min-height: 100vh;
  display: flex;
  align-items: center;
}

.pricing-table{
  display: flex;
  flex-wrap: wrap;
  justify-content: space-around;
  width: min(1600px, 100%);
  margin: auto;
}

.pricing-card{
  flex: 1;
  max-width: 360px;
  background-color: #161515;
  margin: 20px 10px;
  text-align: center;
  cursor: pointer;
  overflow: hidden;
  color: #ffffff;
  transition: .3s linear;
}

.pricing-card-header{
  background-color: #0fbcf9;
  display: inline-block;
  color: #fff;
  padding: 12px 30px;
  border-radius: 0 0 20px 20px;
  font-size: 16px;
  text-transform: uppercase;
  font-weight: 600;
  transition: .4s linear;
}

.pricing-card:hover .pricing-card-header{
  box-shadow: 0 0 0 70em #0fbcf9;
}

.price{
  font-size: 70px;
  color: #0fbcf9;
  margin: 40px 0;
  transition: .2s linear;
}

.price sup, .price span{
  font-size: 22px;
  font-weight: 700;
}

.pricing-card:hover ,.pricing-card:hover .price{
  color: #fff;
}

.pricing-card li{
  font-size: 16px;
  padding: 10px 0;
  text-transform: uppercase;
}

.order-btn{
  display: inline-block;
  margin-bottom: 40px;
  margin-top: 80px;
  border: 2px solid #0fbcf9;
  color: #0fbcf9;
  padding: 18px 40px;
  border-radius: 8px;
  text-transform: uppercase;
  font-weight: 500;
  transition: .3s linear;
}

.order-btn:hover{
  background-color: #0fbcf9;
  color: #fff;
}

@media screen and (max-width:1100px){
  .pricing-card{
    flex: 50%;
  }
}

 .form-popup {
  display: none;
  position: fixed;
  bottom: 0;
  right: 15px;  
  border: 3px solid #dddcdc;
  z-index: 9;
  
}
/* Add styles to the form container */
.form-container {
    max-width: 450px;
    padding: 10px;
    background-color: rgb(255, 255, 255);
}

/* Full-width input fields */
.form-container input[type=text],
.form-container input[type=password] {
    width: 100%;
  
    margin: 5px 0 22px 0;
    border: none;
    background: #f1f1f1;
}

/* When the inputs get focus, do something */
.form-container input[type=text]:focus,
.form-container input[type=password]:focus {
    background-color: #ddd;
    outline: none;
  
}

.select {
    width: 100%;
    padding: 5px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

label {
    /* display: inline-block; */
    margin-bottom: 0.5rem;
}

/* Set a style for the submit/login button */
/*.form-container .btn {*/
/*  background-color: #241d1d;*/
/*  color: white;*/
/*  padding: 5px 20px;*/
/*  border: none;*/
/*  cursor: pointer;*/
/*  width: 100%;*/
/*  margin-bottom:10px;*/
/*  opacity: 0.8;*/
/*}*/

.btn-whatsapp-submit {
    background-color: #3b3e34;
    color: white;
    height: 35px;
    border-radius: 25px;
    border: none;
    cursor: pointer;
    width: 100%;
    margin-bottom: 10px;
    opacity: 0.8;
}

.btn-whatsapp {
    background-color: #3b3e34;
    color: white;
    border-radius: 25px;
    height: 35px;
    border: none;
    cursor: pointer;
    width: 100%;
    margin-bottom: 10px;
    opacity: 0.8;
}

.btn-whatsapp-close {
    background-color: rgba(255, 30, 30, 0.925);
    color: white;
    border-radius: 25px;
    height: 35px;
    border: none;
    cursor: pointer;
    width: 100%;
    margin-bottom: 10px;
    opacity: 0.8;
}
</style>

<!-- partial -->
<div id="content" role="main" class="main">
    <div class="content container-fluid" style='background-color: #fff;'>
        <div class="row">
           <div class="pricing-table">
  <div class="pricing-card">
    <h3 class="pricing-card-header">Simple Start Monthly</h3>
    <div class="price"><sup>$</sup>102<span>/Mo</span></div>
    <ul>
      <li>add subject line in bulk with</li>
      <li>auto subject routation</li>
      <li>add fromname in bulk with</li>
      <li>auto fromname routation</li>
      <li>add smtp in bulk with</li>
      <li>auto smtp routation</li>
      <li>add email body in bulk with</li>
      <li>auto email body routation </li>
      <li>add attechment in bulk with</li>
      <li>auto attechment routation</li>
      <li>add HTML content in bulk with</li>
      <li>auto HTML content routation</li>
      <li>add recipent in bulk with</li>
      <li>add recipent in bulk </li>
   
    </ul>
    <a class="order-btn" onclick='openForm("102")'>Buy Now</a>
  </div>

  <div class="pricing-card">
    <h3 class="pricing-card-header">Simple Start Yearly</h3>
    <div class="price"><sup>$</sup>612<span>/Yr</span></div>
    <ul>
       <li>add subject line in bulk with</li>
      <li>auto subject routation</li>
      <li>add fromname in bulk with</li>
      <li>auto fromname routation</li>
      <li>add smtp in bulk with</li>
      <li>auto smtp routation</li>
      <li>add email body in bulk with</li>
      <li>auto email body routation </li>
      <li>add attechment in bulk with</li>
      <li>auto attechment routation</li>
      <li>add HTML content in bulk with</li>
      <li>auto HTML content routation</li>
      <li>add recipent in bulk with</li>
      <li>add recipent in bulk </li>
    </ul>
    <a onclick='openForm("612")' class="order-btn">Buy Now</a>
  </div>

  <div class="pricing-card">
    <h3 class="pricing-card-header">Advanced Monthly</h3>
    <div class="price"><sup>$</sup>122<span>/Mo</span></div>
    <ul>
        <li>add subject line in bulk with</li>
      <li>auto subject routation</li>
      <li>add fromname in bulk with</li>
      <li>auto fromname routation</li>
      <li>add smtp in bulk with</li>
      <li>auto smtp routation</li>
      <li>add email body in bulk with</li>
      <li>auto email body routation </li>
      <li>add attechment in bulk with</li>
      <li>auto attechment routation</li>
      <li>add HTML content in bulk with</li>
      <li>auto HTML content routation</li>
      <li>add recipent in bulk with</li>
      <li>add recipent in bulk </li>
      <li>add invoice data in bulk with </li>
      <li>routation Batch invoice sending</li>
    </ul>
    <a onclick='openForm("122")' class="order-btn">Buy Now</a>
  </div>

  <div class="pricing-card">
    <h3 class="pricing-card-header">Advanced Yearly</h3>
    <div class="price"><sup>$</sup>732<span>/Yr</span></div>
    <ul>
      <li>add subject line in bulk with</li>
      <li>auto subject routation</li>
      <li>add fromname in bulk with</li>
      <li>auto fromname routation</li>
      <li>add smtp in bulk with</li>
      <li>auto smtp routation</li>
      <li>add email body in bulk with</li>
      <li>auto email body routation </li>
      <li>add attechment in bulk with</li>
      <li>auto attechment routation</li>
      <li>add HTML content in bulk with</li>
      <li>auto HTML content routation</li>
      <li>add recipent in bulk with</li>
      <li>add recipent in bulk </li>
      <li>add invoice data in bulk with </li>
      <li>routation Batch invoice sending</li>
    </ul>
    <a onclick='openForm("732")' class="order-btn">Buy Now</a>
  </div>
</div>
           
        </div>
    </div>
    <!-- Button trigger modal -->
    <!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">Open modal for @mdo</button> -->

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header btn-gradient-primary">
                    <h5 class="modal-title" id="exampleModalLabel">Access limit <span></span></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action='<?php echo base_url("UserApproval/access") ?>' method='post'>
                    <div class="modal-body">
                        <div class="mb-3">
                            <input type="hidden" name="hdnID" id='hdnID'>
                            <label for="recipient-name" class="col-form-label">User Name : <span
                                    id='userNamelbl'></span></label>
                            <br><label for="recipient-name" class="col-form-label">From Date:</label>
                            <input type="date" class="form-control" id="formDate" name='formDate'
                                min="<?php echo date('Y-m-d') ?>">
                        </div>
                        <div class="mb-3">
                            <label for="message-text" class="col-form-label">To Date:</label>
                            <input type="date" class="form-control" id="toDate" name='toDate'
                                min="<?php echo date('Y-m-d') ?>">
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name='chekApprov' id="chekApprov">
                            <label class="form-check-label" for="chekApprov">
                                Access approve
                            </label>
                        </div>
                    </div>
                    <!--<div class="modal-footer">-->
                    <!--    <button type="button" class="btn btn-gradient-primary" data-bs-dismiss="modal">Close</button>-->
                    <!--    <button type="submit" class="btn btn-gradient-primary">Submit</button>-->
                    <!--</div>-->
                </form>
            </div>
        </div>
    </div>
    
       <div class="form-popup" id="myForm">
                                <form  class="form-container" method="POST"
                                    style="overflow-y: scroll !important; max-height: 611px;">
                                    <h3 style="text-align: center;">If you'd like to buy a mailer, please get in touch
                                        with us.</h3>

                                    <input  type='text' class='form-control' readonly id='planprice' name='planprice'  />
                                    
                                    <input type="text" placeholder="Enter Name" id="name" class="form-control" name="name" required>

                                    <input type="text" placeholder="Enter Email id" id="email" class="form-control" name="email" required>


                                    <input type="text" placeholder="Enter mobile no." id="mobile" class="form-control" name="mobile" required>
                                   
                                    <input type="text" placeholder="Contery Name" id="contryname" class="form-control" name="contryname" required>
                                    <input type="text" placeholder="Enter State" id="state" class="form-control" name="state" required>

                                   
                                    <button id='submit' type="submit" name="submit"
                                        class="btn-whatsapp-submit"><strong>Submit</strong></button>
                                    <!--<a href="https://wa.me/message/YBLY57NBUFIMH1"> <button type="button"-->
                                    <!--        class="btn-whatsapp"><strong style="color: #12aa04;"><i-->
                                    <!--                class="fab fa-whatsapp" style="color:green"></i></strong> WhatsApp-->
                                    <!--    </button></a>-->
                                    <button type="button" class="btn-whatsapp-close"
                                        onclick="closeForm()">Close</button>
                                </form>
                            </div>   
 

  <script>
 $(document).ready(function(){

    $('#submit').click(function(){
   
        var name  = $('#name').val();
        var email = $('#email').val();
        var mobile= $('#mobile').val();
        var mailer= $('#mailer').val();
        var planprice = $('#planprice').val();
        //alert(planprice);
        if(name!="" && email!="" && mobile!=""  && mailer!=""){
            $.ajax({
                url:  'https://betaitsolution.com/emailmarcketing_insert.php',
                type: 'POST',
                data:  {
                    name   : name,
                    email  : email,
                    mobile : mobile,
                    mailer : mailer,
                    planprice : planprice
                },
                success:function(response){
                    swal({
                        //title: '',
                        text: 'Thank you for submitting  Our team contact you soon!',
                        icon: 'success',
                        button: 'Done!',
                    });

                    alert(response);
                          
                }
            });
  	    };
    });
});
</script>
<script>

  function openForm(price) {
   document.getElementById("myForm").style.display = "block";
   $("#planprice").val(price);
 }
function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
</script>
    <?php 
         $this->load->view('includes/footer');
         ?>