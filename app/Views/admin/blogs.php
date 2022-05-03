<?php include_once('includes/header.php') ?>
<!--Container Main start-->
<div class="height-100 bg-light">
    <h4>Manage Blogs</h4>
    </br>
    <form class="well form-horizontal" action="/form/addblog" method="post" enctype='multipart/form-data'>
        <div class="form-group">
            <div class="row">
                <div class="col-md-3 inputGroupContainer">
                    <label class="col-md-2 control-label">Name</label>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <input name="fname" placeholder="First Name" class="form-control" type="text">
                    </div>
                </div>
                <div class="col-md-3 inputGroupContainer">
                    <label class="col-md-2 control-label">Title</label>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <input name="blogtitle" placeholder="First Name" class="form-control" type="text">
                    </div>
                </div>
                <div class="col-md-3 inputGroupContainer">
                    <label class="col-md-2 control-label">Image</label>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <input type="file" name="cover" class="form-control" accept="image/png, image/gif, image/jpeg">
                    </div>
                </div>
            </div>
        </div>
        </br>
        <div class="form-group">
            <label class="col-md-4 control-label">content</label>
            <div class="col-md-4 inputGroupContainer">
                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
                    <textarea class="form-control" name="content"></textarea>
                </div></br>
                <button class="primary-button">Register</button>
            </div>
        </div>
    </form>
    </br>
    <h5>List of Posted Blogs</h5>
    <table id="dtBasicExample" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th class="th-sm">Num
                </th>
                <th class="th-sm">Title
                </th>
                <th class="th-sm">Date
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
                <td><?php echo $listdat->title;?></td>
                <td><?php echo $listdat->dates;?></td>
                <td><?php echo $listdat->statu;?></td>
                <td>
                <?php
                if ($listdat->statu ==  'active')
                                                 {
                                                    echo('
                                                  <a href="Form/passive/'.$listdat->id.'">Passive</a></br>
                                                  <a href="Form/delete/'.$listdat->id.'">Delete</a>
                                                    ');
                                                }else
                                                {
                                                    echo('
                                                    <a href="Form/active/'.$listdat->id.'">Active</a></br>
                                                    <a href="Form/delete/'.$listdat->id.'">Delete</a>
                                                    ');
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
                <th class="th-sm">Title
                </th>
                <th class="th-sm">Date
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