<?php
session_start();
if(empty($_SESSION['name']))
{
    header('location:index.php');
}
include('header.php');
include('includes/connection.php');
?>
        <div class="page-wrapper">
            <div class="content">
                <div class="row">
                    <div class="col-sm-4 col-3">
                        <h4 class="page-title">Contact Information</h4>
                    </div>
                </div>
                <div class="table-responsive">
                                    <table class="datatable table table-stripped ">
                                    <thead>
                                        <tr>
                                            <th>Contact ID</th>
                                            <th>Name</th>
                                            <th>E-mail</th>
                                            <th>Mobile Number</th>
                                            <th>Subject</th>
                                            <th>Message</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        if(isset($_GET['ids'])){
                                        $id = $_GET['ids'];
                                        $delete_query = mysqli_query($connection, "delete from tbl_contact where id='$id'");
                                        }
                                        $fetch_query = mysqli_query($connection, "select * from tbl_contact");
                                        while($row = mysqli_fetch_array($fetch_query))
                                        {
                                            // $time = strtotime($row['time']);
                                            // $time = date('h:i', $time);
                                            // $timestamp = strtotime($time) + 60*60;
                                            // $timeout = date('h:i', $timestamp);

                                        ?>
                                        <tr>
                                            <td><?php echo $row['id']; ?></td>
                                            <td><?php echo $row['name']; ?></td>
                                            <td><?php echo $row['e_mail']; ?></td>
                                            <td><?php echo $row['phone']; ?></td>
                                            <td><?php echo $row['subject']; ?></td>
                                            <td><?php echo $row['message']; ?></td>
                                            <?php if($row['status']==1) { ?>
                                            <td><span class="custom-badge status-green">Replay</span></td>
                                        <?php } else {?>
                                            <td><span class="custom-badge status-red">Not Replay</span></td>
                                        <?php } ?>
                                            <td class="text-right">
                                            <div class="dropdown dropdown-action">
                                                <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="edit-contact.php?id=<?php echo $row['id'];?>"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                                    <a class="dropdown-item" href="contact.php?ids=<?php echo $row['id'];?>" onclick="return confirmDelete()"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
                                                </div>
                                            </div>
                                        </td>
                                        </tr>
                                    <?php } ?>
                                    </tbody>
                                </table>
                            </div>
				
            </div>
            
        </div>
		
   
<?php
include('footer.php');
?>
<script language="JavaScript" type="text/javascript">
function confirmDelete(){
    return confirm('Are you sure want to delete this Contact Information?');
}
</script>