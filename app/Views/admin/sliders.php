<?php include_once('includes/header.php') ?>
<!--Container Main start-->
<div class="height-100 bg-light">
    <h4>Manage Sliders Image</h4>
    </br>
    <form class="well form-horizontal" action="form/addslider" method="post" enctype='multipart/form-data'>
        <div class="form-group">
            <div class="row">
                <div class="col-md-3 inputGroupContainer">
                    <label class="col-md-2 control-label">Title</label>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <input name="title" placeholder="First Name" class="form-control" type="text">
                    </div>
                </div>
                <div class="col-md-3 inputGroupContainer">
                    <label class="col-md-2 control-label">Image</label>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <input name="slide" placeholder="First Name" class="form-control" type="file"
                            accept="image/png, image/gif, image/jpeg">
                    </div>
                    </br>
                <button class="primary-button">Register</button>
                </div>
            </div>
        </div>
    </form>
    </br>
    <h5>List of Slide Images</h5>
    <table id="dtBasicExample" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th class="th-sm">Num
                </th>
                <th class="th-sm">Title
                </th>
                <th class="th-sm">File
                </th>
                <th class="th-sm">Status
                </th>
                <th class="th-sm">Action
                </th>
            </tr>
        </thead>
        <tbody>

        </tbody>
        <tfoot>
            <tr>
                <th class="th-sm">Num
                </th>
                <th class="th-sm">Title
                </th>
                <th class="th-sm">File
                </th>
                <th class="th-sm">Status
                </th>
                <th class="th-sm">Action
                </th>
            </tr>
        </tfoot>
    </table>
</div>
</div>


<!--Container Main end-->