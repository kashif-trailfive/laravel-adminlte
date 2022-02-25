<?php
defined('BASEPATH') OR exit('No direct script access allowed');

?>

<div class="content-wrapper" style="min-height: 155px;">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">

                    <h1 class="text-dark"> <?php echo $pagetitle; ?></h1>

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


                        <table class="table table-striped table-hover">
                            <tbody>
                                <?php foreach ($user_info as $user):?>
                                <tr>
                                    <th><?php echo lang('users_ip_address'); ?></th>
                                    <td><?php echo $user->ip_address; ?></td>
                                </tr>
                                <tr>
                                    <th><?php echo lang('users_firstname'); ?></th>
                                    <td><?php echo htmlspecialchars($user->first_name, ENT_QUOTES, 'UTF-8'); ?></td>
                                </tr>
                                <tr>
                                    <th><?php echo lang('users_lastname'); ?></th>
                                    <td><?php echo htmlspecialchars($user->last_name, ENT_QUOTES, 'UTF-8'); ?></td>
                                </tr>
                                <tr>
                                    <th><?php echo lang('users_username'); ?></th>
                                    <td><?php echo htmlspecialchars($user->username, ENT_QUOTES, 'UTF-8'); ?></td>
                                </tr>
                                <tr>
                                    <th><?php echo lang('users_email'); ?></th>
                                    <td><?php echo htmlspecialchars($user->email, ENT_QUOTES, 'UTF-8'); ?></td>
                                </tr>
                                <tr>
                                    <th><?php echo lang('users_created_on'); ?></th>
                                    <td><?php echo date('d-m-Y', $user->created_on); ?></td>
                                </tr>
                                <tr>
                                    <th><?php echo lang('users_last_login'); ?></th>
                                    <td><?php echo ( ! empty($user->last_login)) ? date('d-m-Y', $user->last_login) : NULL; ?>
                                    </td>
                                </tr>
                                <tr>
                                    <th><?php echo lang('users_status'); ?></th>
                                    <td><?php echo ($user->active) ? '<span class="label label-success">'.lang('users_active').'</span>' : '<span class="label label-default">'.lang('users_inactive').'</span>'; ?>
                                    </td>
                                </tr>
                                <tr>
                                    <th><?php echo lang('users_company'); ?></th>
                                    <td><?php echo htmlspecialchars($user->company, ENT_QUOTES, 'UTF-8'); ?></td>
                                </tr>
                                <tr>
                                    <th><?php echo lang('users_phone'); ?></th>
                                    <td><?php echo $user->phone; ?></td>
                                </tr>
                                <tr>
                                    <th><?php echo lang('users_groups'); ?></th>
                                    <td>
                                        <?php foreach ($user->groups as $group):?>
                                        <?php echo '<span class="label" style="background:'.$group->bgcolor.'">'.htmlspecialchars($group->name, ENT_QUOTES, 'UTF-8').'</span>'; ?>
                                        <?php endforeach?>
                                    </td>
                                </tr>
                                <?php endforeach;?>
                            </tbody>
                        </table>

                        <div class="btn-group">

                            <?php echo anchor('users', lang('actions_cancel'), array('class' => 'btn btn-success btn-flat')); ?>

                        </div>


                    </div>
                </div>
            </div>
        </div>


</div>
</section>