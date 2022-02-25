

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
                    <?php echo form_open('userdelete/'. $id, array('class' => 'form-horizontal', 'id' => 'form-status_user')); ?>
                                        <div class="form-group">
                                            <div class="col-sm-offset-2 col-sm-10">

                                            <?php echo lang('yesno_sure', 'password', array('class' => 'col-sm-2 control-label')); ?>
                                                <label class="radio-inline">
                                                    <input type="radio" name="confirm" id="confirm1" value="yes" checked="checked"> <?php echo strtoupper(lang('actions_yes', 'confirm')); ?>
                                                </label>
                                                <label class="radio-inline">
                                                    <input type="radio" name="confirm" id="confirm0" value="no"> <?php echo strtoupper(lang('actions_no', 'confirm')); ?>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-sm-offset-2 col-sm-10">
                                                <?php echo form_hidden($csrf); ?>
                                                <?php echo form_hidden(array('id'=>$id)); ?>
                                                <div class="btn-group">
                                                    <?php echo form_button(array('type' => 'submit', 'class' => 'btn btn-primary btn-flat', 'content' => lang('actions_submit'))); ?>
                                                    <?php echo anchor('users', lang('actions_cancel'), array('class' => 'btn btn-default btn-flat')); ?>
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