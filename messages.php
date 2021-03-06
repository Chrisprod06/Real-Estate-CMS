<?php
$title = 'General | APM Admin';
include_once 'includes/header.inc.php';
?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?php echo $lang['interestlist']?></h1>
        <a href="#manualInterestList" class="btn btn-primary" data-toggle="modal"><i class="fas fa-question-circle"></i> <span><?php echo $lang['help']?></span></a>
    </div>

    <!-- Content Row -->
    <div class="row">


        <div class="table-responsive">
            <div class="table-wrapper">
                <div class="table-title">
                    <div class="row">
                        <div class="col-sm-6">
                            <h2><?php echo $lang['manage']?> <b><?php echo $lang['interestlists']?></b></h2>
                        </div>
                        <div class="col-sm-6">
                            <form action="includes/interestListPDF.inc.php" method="POST">
                                <div class="col d-flex justify-content-end mb-2">
                                    <button type="submit" name="create_pdf6" class="btn btn-info"><i class="material-icons">&#xE147;</i> <?php echo $lang['generatereport']?></button>
                            </form>
                        </div>
                    </div>
                </div>
                <table data-page-length='5' id="contentTables" class="table table-striped table-hover">
                    <thead>
                        <th>Interest ID</th>
                        <th>Property ID</th>
                        <th><?php echo $lang['firstname']?></th>
                        <th><?php echo $lang['lastname']?></th>
                        <th><?php echo $lang['telephone']?></th>
                        <th><?php echo $lang['email']?></th>
                        <th><?php echo $lang['message']?></th>
                        <th><?php echo $lang['actions']?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php include_once "includes/updateInterestList.inc.php"; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- Delete Modal HTML -->
<div id="deleteInterestedUser" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action = "includes/deleteInterestedUser.inc.php" method = "POST">
                <div class="modal-header">
                    <h4 class="modal-title"><?php echo $lang['deleteinteresteduser']?></h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
                    <p><?php echo $lang['areyousure']?></p>
                    <p class="text-warning"><small><?php echo $lang['thisaction']?></small></p>
                </div>
                <div class="modal-footer">
                    <input type="button" class="btn btn-default" data-dismiss="modal" value="<?php echo $lang['cancel']?>">
                    <input type="hidden" name="interestID" value= '<?php echo $_GET['interestID']?>'>
                    <input type="submit" class="btn btn-danger" value="<?php echo $lang['delete']?>">
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Manual Modal HTML -->
<div id="manualInterestList" class="modal fade">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">              
                   <?php
                   if(isset($_SESSION['lang'])){
                       if($_SESSION['lang'] == "gr"){
                           include_once 'manuals/manualInterestListGreek.html';
                       }else if ($_SESSION['lang'] == "en"){
                           include_once 'manuals/manualInterestListEnglish.html';
                       }
                   }                   
                   ?>
                    <div class="modal-footer">
                        <input type="button" class="btn btn-primary" data-dismiss="modal" value="Ok" ?>
                    </div>
               
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<?php
include_once 'includes/footer.inc.php';
?>