<?php 
session_start();
if(empty($_SESSION['name']))
{
    header('location:index.php');
}
include('header.php');
include('includes/connection.php');

$id = $_GET['id'];
$fetch_query = mysqli_query($connection, "select * from tbl_contact where id='$id'");
$row = mysqli_fetch_array($fetch_query);

if(isset($_REQUEST['save-contact']))
{
      $name = $_REQUEST['name'];
      $e_mail = $_REQUEST['e_mail'];
      $phone = $_REQUEST['phone'];
      $subject = $_REQUEST['subject'];
      $message = $_REQUEST['message'];
      $status = $_REQUEST['status'];
      
      $update_query = mysqli_query($connection, "update tbl_contact set name='$name', e_mail='$e_mail', phone='$phone', subject='$subject', message='$message', status='$status' where id='$id'");
      if($update_query>0)
      {
          $msg = "Contact Information updated successfully";
          $fetch_query = mysqli_query($connection, "select * from tbl_contact where id='$id'");
          $row = mysqli_fetch_array($fetch_query);   
          
      }
      else
      {
          $msg = "Error!";
      }
  }

?>
        <div class="page-wrapper">
            <div class="content">
                <div class="row">
                    <div class="col-sm-4 ">
                        <h4 class="page-title">Edit Contact Information</h4>
                    </div>
                    <div class="col-sm-8  text-right m-b-20">
                        <a href="contact.php" class="btn btn-primary btn-rounded float-right">Back</a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <form method="post" >
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Contact ID</label>
                                        <input class="form-control" type="text" name="id" value="<?php echo $row['id']; ?>" disabled> 
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Name</label>
                                        <input class="form-control" type="text" name="name" value="<?php  echo $row['name']; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input class="form-control" type="email" name="e_mail" value="<?php echo $row['e_mail']; ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6"> 
                                    <div class="form-group">
                                        <label>Mobile Number</label>
                                        <input class="form-control" type="text" name="phone" value="<?php echo $row['phone']; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Subject</label>
                                        <input class="form-control" type="text" name="subject" value="<?php echo $row['subject']; ?>">
                                    </div>
                                </div>                               
                            </div>
                            
                            <div class="form-group">
                                <label>Message</label>
                                <textarea cols="30" rows="4" class="form-control" name="message" required><?php  echo $row['message'];  ?></textarea>
                            </div>
                            <div class="form-group">
                                <label class="display-block">Contact Status</label>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="status" id="product_active" value="1" <?php if($row['status']==1) { echo 'checked' ; } ?>>
                                    <label class="form-check-label" for="product_active">
                                    Replay
                                    </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="status" id="product_inactive" value="0" <?php if($row['status']==0) { echo 'checked' ; } ?>>
                                    <label class="form-check-label" for="product_inactive">
                                    Not Replay
                                    </label>
                                </div>
                            </div>
                             
                            <div class="m-t-20 text-center">
                                <button name="save-contact" class="btn btn-primary submit-btn">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
			
        </div>
    
<?php 
include('footer.php');
?>
<script type="text/javascript">
     <?php
        if(isset($msg)) {

              echo 'swal("' . $msg . '");';
          }
     ?>
</script> 