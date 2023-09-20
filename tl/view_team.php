<?php

include "tl_header.php";
$viewAssign = $oms->view_temp_team($_POST);

?>

<div id="page-wrapper" class="">
    &nbsp;

    <div class="row">
        <div class="col-sm-10">
            <br>
            <h4></h4>
            <br><br>
            <div class="panel panel-default">

                <!-- <div class="panel-heading">
                    Ad-hoc List
                </div> -->

                <!-- /.panel-heading -->
                <div class="panel-body">
                    <table width="100%" class="table table-striped table-bordered table-hover mx-auto" id="dataTables-eg1">
                        <thead>
                            <tr>
                                <th>Team ID</th>
                                <th>Engagement ID</th>
                                <!-- <th>Team Foundation Date</th> -->
                                <th>Team Member</th>
                                <th>Auditor-in-Charge</th>
                                <th>Audit type</th>
                                <th>HO/Sub-process/Branches</th>
                                <th>Auditor Responsibility</th>
                                <th>Status</th>
                                <th>Approval</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $i = 1;
                            if ($viewAssign) {
                                foreach ($viewAssign as $DeValue) {
                            ?>
                                    <tr class="odd gradeX">

                                        <td><?php echo $DeValue['id']; ?></td>
                                        <td><?php echo $DeValue['E_id']; ?></td>
                                        
                                        <td><?php echo $DeValue['Team_member']; ?></td>
                                        <td><?php echo $DeValue['Auditor_in_charge']; ?></td>

                                        <td><?php echo $DeValue['audit_type']; ?></td>
                                        <td><?php echo $DeValue['auditee']; ?></td>
                                        <td><?php echo $DeValue['Description']; ?></td>
                                        <td><?php echo $DeValue['status']; ?></td>
                                        <td><?php echo $DeValue['Approval']; ?></td>

                                    </tr>
                            <?php
                                    $i++;
                                }
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
</div>


<?php
include "footer.php";
?>