<?php
session_start();
include_once ('session.php');
require_once 'class.user.php';
if(!isset($_SESSION['acc_no'])){
	
header("Location: login.php");
exit(); 
}

elseif(!isset($_SESSION['mname'])){
    
header("Location: passcode.php");
exit(); 
}
$reg_user = new USER();

$site = $row['site'];

$stct = $reg_user->runQuery("SELECT * FROM site WHERE id = '20'");
$stct->execute(array(":acc_no"=>$_SESSION['acc_no']));
$rowp = $stct->fetch(PDO::FETCH_ASSOC);

$mail = $rowp['email'];
$url = $rowp['url'];
$name = $rowp['name'];
$addr = $rowp['addr'];
$sc = $rowp['sc'];


$stmt = $reg_user->runQuery("SELECT * FROM account WHERE acc_no=:acc_no");
$stmt->execute(array(":acc_no"=>$_SESSION['acc_no']));
$row = $stmt->fetch(PDO::FETCH_ASSOC);
$stat = $row['status'];
if($stat == 'Dormant/Inactive'){
	header('Location: index.php?dormant#dormant');
	exit();
}
if($stat == 'pincode'){
	header('Location: make_transfer2.php');
	exit();
}
if($stat == 'otp'){
	header('Location: otp.php');
	exit();
}
if(isset($_POST['transfer'])){
	$email = $row['email'];
	
	$amount = trim($_POST['amount']);
	$amount = strip_tags($amount);
	$amount = htmlspecialchars($amount);
	
	$acc_no = trim($_POST['acc_no']);
	$acc_no = strip_tags($acc_no);
	$acc_no = htmlspecialchars($acc_no);
	
	$acc_name = trim($_POST['acc_name']);
	$acc_name = strip_tags($acc_name);
	$acc_name = htmlspecialchars($acc_name);
	
	$bank_name = trim($_POST['bank_name']);
	$bank_name = strip_tags($bank_name);
	$bank_name = htmlspecialchars($bank_name);
	
	$swift = trim($_POST['swift']);
	$swift = strip_tags($swift);
	$swift = htmlspecialchars($swift);
	
	$routing = trim($_POST['routing']);
	$routing = strip_tags($routing);
	$routing = htmlspecialchars($routing);
		
	$type = trim($_POST['type']);
	$type = strip_tags($type);
	$type = htmlspecialchars($type);
	
	$remarks = trim($_POST['remarks']);
	$remarks = strip_tags($remarks);
	$remarks = htmlspecialchars($remarks);
	
	if($reg_user->temp($email,$amount,$acc_no,$acc_name,$bank_name,$swift,$routing,$type,$remarks)){
	
	header("Location: dom1.php");
	}
	
}
	
include_once ('counter.php');
?>

<?php include("header.php"); ?>
 <div class="nk-content nk-content-fluid">
     <iframe             src="//www.exchangerates.org.uk/widget/ER-LRTICKER.php?w=1400&amp;s=1&amp;mc=GBP&amp;mbg=F0F0F0&amp;bs=yes&amp;bc=000044&amp;f=verdana&amp;fs=10px&amp;fc=000044&amp;lc=000044&amp;lhc=FE9A00&amp;vc=FE9A00&amp;vcu=008000&amp;vcd=FF0000&amp;"             height="30" width="100%" frameborder="0" scrolling="no" marginwidth="0" marginheight="0"></iframe> 
      
                    <div class="container-xl wide-lg">
                        <div class="nk-content-body">
                            <div class="nk-block-head">
                                <div class="nk-block-head-sub">
                                </div>
                                <div class="nk-block-between-md g-4 card-bordered">
                                    <div class="nk-block-head-content">
                                        <h4 class="nk-block-title fw-normal">Same Bank Transfer.</h4>
                                        <div class="nk-block-des">
                                            <p>Send Money to <?php echo $rowp['name']; ?> Accounts.</p>
                                        </div>
                                    </div><!-- .nk-block-head-content -->
                                    <div class="nk-block-head-content">
                                        <ul class="nk-block-tools gx-3">
                                            <li><a href="wire.php" class="btn btn-secondary btn-light text-light"><span>Wire Transfer Instead?</span><em class="icon ni ni-wallet-out"></em></a></li>
                                        </ul>

                                    </div><!-- .nk-block-head-content -->
                                </div><!-- .nk-block-between -->
                            </div><!-- .nk-block-head -->
                        </div>
                    </div> 
                  <div class="card card-bordered">
               <div class="card-header font-weight-bold text-light" style="background-color:#033d75;"><?php echo $rowp['name']; ?> Secure Transfer  </div>
          <div class="card-inner">
        
        
        
        
        
        
        <form method="POST" action="dom_auth.php" >
          
          			    																																													                    									
                <h6 class="heading-small text-muted mb-4">Compulsory Transfer Form</h6>
                <div class="pl-lg-4">
                    
      <?php 
							if(isset($_GET['error']))
								{
									?>
									<div class='alert alert-danger'>
										<button class='close' data-dismiss='alert'>&times;</button>
										<strong>Unable to Authenticate. Transfer Failed.</strong> 
									</div>
									<?php
								}
						?>
						<?php 
							if(isset($_GET['error1']))
								{
									?>
									<div class='alert alert-danger'>
										<button class='close' data-dismiss='alert'>&times;</button>
										<strong>Invalid <?php echo $rowp['code1']; ?> Code! <?php echo $rowp['code1b']; ?> could not be verified. Transfer Failed.</strong> 
									</div>
									<?php
								}
						?>
						<?php 
							if(isset($_GET['error2']))
								{
									?>
									<div class='alert alert-danger'>
										<button class='close' data-dismiss='alert'>&times;</button>
										<strong>Invalid <?php echo $rowp['code2']; ?> Code! <?php echo $rowp['code2b']; ?> could not be verified. Transfer Failed.</strong> 
									</div>
									<?php
								}
						?>
						<?php 
							if(isset($_GET['error3']))
								{
									?>
									<div class='alert alert-danger'>
										<button class='close' data-dismiss='alert'>&times;</button>
										<strong>Invalid <?php echo $rowp['code3']; ?> Code! <?php echo $rowp['code3b']; ?> could not be verified. Transfer Failed.</strong> 
									</div>
									<?php
								}
						?>
						<?php 
							if(isset($_GET['error4']))
								{
									?>
									<div class='alert alert-danger'>
										<button class='close' data-dismiss='alert'>&times;</button>
										<strong>Invalid Invalid <?php echo $rowp['code4']; ?> Code! <?php echo $rowp['code4b']; ?> could not be verified. Code! Transfer Failed.</strong> 
									</div>
									<?php
								}
						?>
						<?php 
							if(isset($_GET['insufficient']))
								{
									?>
									<div class='alert alert-warning'>
										<button class='close' data-dismiss='alert'>&times;</button>
										<strong>Sorry, your balance is insufficient to make the transfer, please transfer a lower amount.</strong> 
									</div>
									<?php
								}
						?>
						<?php 
							if(isset($_GET['amounterror']))
								{
									?>
									<div class='alert alert-warning'>
										<button class='close' data-dismiss='alert'>&times;</button>
										<strong>Sorry, the amount is too little, please transfer a higher amount.</strong> 
									</div>
									<?php
								}
						?>
                    
                    <div class="buysell-field form-group">
                     <div class="form-label-group">
                                                <label class="form-label" for="buysell-amount">Amount to Transfer</label>
                                            </div>
                                            <div class="form-control-group">
                                                <input type="number" value="<? echo $_POST['amount']?>" class="form-control form-control-lg form-control-number" id="amount" name="amount" placeholder="2000">
                                                <div class="form-dropdown">
                                                    <div class="text"><?php echo $row['currency']; ?><span></span></div>
                                                </div>
                                            </div></div>
                  <div class="row">
                    
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-label" for="input-first-name">Beneficiary Account Number</label>
                        <input type="text" id="acc_no" class="form-control form-control-alternative" placeholder="Beneficiary Account Number" value="<? echo $_POST['acc_no']?>" name="acc_no" autocomplete="off" required="">
                      </div>
                    </div>
                     
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-label" for="input-email">Beneficiary Account Name</label>
                        <input id="acc_name" class="form-control form-control-alternative" placeholder="Beneficiary Name" name="acc_name" value="<? echo $_POST['acc_name']?>" type="text" autocomplete="off" required="">
                      </div>
                    </div>
                    
                    </div><br>
                  
                  
                        <input type="hidden" id="bank_name" value="<?php echo $rowp['name']; ?>" class="form-control form-control-alternative" name="bank_name"  >
                      
                      <input type="hidden" id="inline_radio" value="Account Type" class="form-control form-control-alternative" name="inline_radio"  >
                       
                  
                    
               	<input type="hidden" class="form-control" name="email" value="<?php echo $row['email']; ?> ">
              <input class="form-control" placeholder="Bank Address" name="swift" type="hidden" value="DOMESTIC" required="">
               <input class="form-control" placeholder="Swiftcode" name="routing" type="hidden" value="DOMESTIC" required="">
               <input class="form-control" placeholder="Swiftcode" name="cout" type="hidden" value="Domestic-Transfer" required=""> 
                    
                  
                   <div class="row">
                    <div class="col-lg-12">
                      <div class="form-group">
                       <label class="form-label" for="input-first-name">Narration/Purpose</label>
                        <input id="remarks" class="form-control" placeholder="Funds Description" value="<? echo $_POST['remarks']?>" name="remarks" type="text" autocomplete="off" required data-error-msg="Narration or Purpose is required."> 
                      </div>
                    </div>
                    
                  </div>
                  
                    
                </div> <br>
                
                <div class="pl-lg-4">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        
                        <button type="button" class="btn btn-primary btn-block wireBtn" data-toggle="modal" id="submitButton" data-target="#myModal"  >Confirm Details</button>
                        
                         
                      </div>
                    </div>
                  </div>
                 
                </div>
        
        

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
 
<script>
$(document).ready(function() {
  $("input").on("input", function() {
    $("#dacc_no").html(`  ${$("#acc_no").val()}`);
    $("#dacc_name").html(` ${$("#acc_name").val()}`);
    $("#dremarks").html(` ${$("#remarks").val()}`);
    $("#dbank_name").html(` ${$("#bank_name").val()}`);
    $("#damount").html(` ${$("#amount").val()}`);
  });
});
</script>
        
  

              
                <div class="modal fade" tabindex="-1" role="dialog" id="myModal" data-keyboard="false" data-backdrop="static">
        <div class="modal-dialog modal-dialog-centered modal-md" role="document">
            <div class="modal-content">
                <div class="modal-body modal-body-lg">
                    <div class="nk-block-head nk-block-head-xs text-center">
                        <h3 class="nk-block-title">Domestic Transfer details &nbsp;&nbsp;&nbsp; <a href="#" data-dismiss="modal" class="btn btn-sm btn-light">x</a></h3>  
                        <div class="nk-block-text">
                            <div class="caption-text">
                            	
                        </div>
                    </div>
                    <div class="nk-block">
                        <div class="buysell-overview">
                           
                                <ul class="buysell-overview-list">
                                 <li class="buysell-overview-item">
                                    <span class="pm-title">Transfer Amount</span>
                                    <span class="pm-currency"><?php echo $row['currency']; ?><h5 id="damount"></h5></span>
                                </li>
                                 <li class="buysell-overview-item">
                                    <span class="pm-title">Bank Name</span>
                                    <span class="pm-currency"><p id="dbank_name"></p></span>
                                </li>
                                <li class="buysell-overview-item">
                                    <span class="pm-title">Account Holder</span>
                                    <span class="pm-currency"><p id="dacc_name"></p></span>
                                </li>
                                <li class="buysell-overview-item">
                                    <span class="pm-title">Account Number</span>
                                    <span class="pm-currency"> <p id="dacc_no"></p></span>
                                </li>
                                 <li class="buysell-overview-item">
                                    <span class="pm-title">Processing Time</span>
                                    <span class="pm-currency">Instant Transfer</span>
                                </li>
                                 
                                <li class="buysell-overview-item">
                                    <span class="pm-title">Description</span>
                                    <span class="pm-currency"><p id="dremarks"></p> </span>
                                </li>
                            </ul>
                         </div>
                        <div class="buysell-field form-group">
                            <div class="form-label-group">
                                <label class="form-label"> Payment account</label>
                            </div>
                               <input type="hidden" value="btc" name="bs-currency" id="buysell-choose-currency-modal">
                            <div class="dropdown buysell-cc-dropdown">
                                <a href="#" class="buysell-cc-choosen dropdown-indicator" data-toggle="dropdown">
                                    <div class="coin-item coin-btc">
                                        <div class="coin-icon">
                                            <em class="icon ni ni-wallet-out"></em>
                                        </div>
                                        <div class="coin-info">
                                            <span class="coin-name"><?php echo $row['currency']; ?> <?php echo number_format ($row['t_bal'],2); ?></span>
                                        </div>
                                    </div>
                                </a>
                            <div class="dropdown-menu dropdown-menu-auto dropdown-menu-mxh">
                                    <ul class="buysell-cc-list">
                                        <li class="buysell-cc-item selected">
                                            <a href="#" class="buysell-cc-opt" data-currency="btc">
                                                <div class="coin-item coin-btc">
                                                    <div class="coin-icon">
                                                        <em class="icon ni ni-wallet-out"></em>
                                                    </div>
                                                    <div class="coin-info">
                                                        <span class="coin-name"><?php echo $row['type']; ?></span>
                                                        <span class="coin-text">*****<?php echo substr($_SESSION['acc_no'], 5,9) ?></span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li> <!-- .buysell-cc-item -->
                                    </ul>
                                </div>
                            </div><!-- .dropdown -->
                        </div><!-- .buysell-field -->
                        <div class="buysell-field form-action text-left">
                        	<hr>
                        	<h4 class="text-danger">KINDLY NOTE*</h4>
                         
                        	<strong class="text-dark">By continuing this transfer, You acknowledged that this domestic transfer is not intended to anyone else other than the named recipient and the amount would be deducted from your account balance.</strong><br>
                        	<strong class="text-dark">No third party has Authority over this International Transfer.</strong>
                        	<hr>

                            <div> 
                            
                                <button class="btn btn-primary btn-block wireBtn"   type="submit"  name="transfer">Proceed to Make Transfer&gt;&gt;</button>
 
                                </form>
                            
                            </div>
                            <div class="pt-3">
                                <a href="#" data-dismiss="modal" class="btn btn-sm btn-light">modify</a>
                            </div>
                        </div>
                    </div><!-- .nk-block -->
                </div><!-- .modal-body -->
            </div><!-- .modal-content -->
        </div><!-- .modla-dialog -->
    </div><!-- .modal -->
          
              

        
        
                  
              

        
        
        
        
     
    </div>
</div>
 
<?php include("footer.php"); ?>