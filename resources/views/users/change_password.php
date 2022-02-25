<?php
defined('BASEPATH') OR exit('No direct script access allowed');

?>

<div class="content-wrapper" style="min-height: 155px;">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">

                    <h1 class="text-dark">  <?php echo $pagetitle; ?></h1>

                </div><!-- /.col -->
                <div class="col-sm-6">
                    <?php echo $breadcrumb; ?>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>

    <!-- Main content -->
    <section class="content">

        <div class="row">
            <div class="col-md-12">
            <div class="card card-primary">
                    <div class="card-body">
                        <?php echo $message;?>


                        <?php echo form_open('app/admin/users/change_password', array('class' => 'form-horizontal', 'id' => 'form-edit_user')); ?>

                        <div class="form-group">
                            <?php echo lang('users_password_old', 'password', array('class' => 'col-sm-2 control-label')); ?>
                            <div class="col-sm-10">
                                <?php echo form_input($old_password);?>
                            </div>
                        </div>
                        <div class="form-group">
                            <?php echo lang('users_password', 'password', array('class' => 'col-sm-2 control-label')); ?>
                            <div class="col-sm-10">
                                <?php echo form_input($new_password);?>
                            </div>
                        </div>
                        <div class="form-group">
                            <?php echo lang('users_password_confirm', 'password_confirm', array('class' => 'col-sm-2 control-label')); ?>
                            <div class="col-sm-10">
                                <?php echo form_input($new_password_confirm);?>
                            </div>
                        </div>


                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">

                                <div class="btn-group">
                                    <?php echo form_button(array('type' => 'submit', 'class' => 'btn btn-primary btn-flat', 'content' => lang('actions_submit'))); ?>
                                    <?php echo form_button(array('type' => 'reset', 'class' => 'btn btn-warning btn-flat', 'content' => lang('actions_reset'))); ?>
                                    <?php echo anchor('dashboard', lang('actions_cancel'), array('class' => 'btn btn-default btn-flat')); ?>
                                </div>
                            </div>
                        </div>
                        <?php echo form_close();?>
                    </div>
                </div>
            </div>
        </div>


        </div>
    </section>