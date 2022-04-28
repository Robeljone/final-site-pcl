<?php include_once('includes/header.php') ?>
<!--Container Main start-->
<div class="height-100 bg-light">
    <h4>User List</h4>
    </br>
    <form class="well form-horizontal" action="form/adduser" method="post" enctype='multipart/form-data'>
        <div class="form-group">
            <div class="row">
                <div class="col-md-4 inputGroupContainer">
                    <label class="col-md-2 control-label">F-Name</label>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <input name="fname" placeholder="Full Name" class="form-control" type="text">
                    </div>
                    </br>
                    <button class="button-primary">Register</button>
                </div>
                <div class="col-md-4 inputGroupContainer">
                    <label class="col-md-2 control-label">U-Name</label>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <input name="uname" placeholder="User Name" class="form-control" type="text">
                    </div>
                </div>
                <div class="col-md-4 inputGroupContainer">
                    <label class="col-md-2 control-label">Password</label>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <input name="passw" placeholder="Password" class="form-control" type="text">
                    </div>
                </div>
            </div>
        </div>
    </form>
    </br>
    <h5>List of Users</h5>
    <table id="dtBasicExample" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th class="th-sm">Num
                </th>
                <th class="th-sm">Full Name
                </th>
                <th class="th-sm">User Name
                </th>
                <th class="th-sm">Status
                </th>
                <th class="th-sm">Action
                </th>
            </tr>
        </thead>
        <tbody>
            <?php $i=1; 
            foreach ($list as $listdat) {?>
            <tr class="odd">
                <td class="dtr-control sorting_1" tabindex="0"><?php echo $i?></td>
                <td><?php echo $listdat->FullName;?></td>
                <td><?php echo $listdat->username;?></td>
                <td><?php echo $listdat->statu;?></td>
                <td>
                    <?php
                if ($listdat->statu ==  'active')
                                                 {
                                                    echo("
                                                    <select>
                                                    <option></option>
                                                    <option>Passive</option>
                                                    <option>Delete</option>
                                                    </select>
                                                    ");
                                                }else
                                                {
                                                    echo("
                                                    <select>
                                                    <option></option>
                                                    <option>Active</option>
                                                    <option>Delete</option>
                                                    </select>
                                                    ");
                                                }
                                                
                                                
                                                ;?>
                </td>
            </tr>

            <?php 
                                        $i=$i+1;
                                        } ?>
        </tbody>
        <tfoot>
            <tr>
                <th class="th-sm">Num
                </th>
                <th class="th-sm">Full Name
                </th>
                <th class="th-sm">User Name
                </th>
                <th class="th-sm">Status
                </th>
                <th class="th-sm">Action
                </th>
            </tr>
        </tfoot>
    </table>
</div>