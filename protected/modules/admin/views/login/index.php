<div class="panel panel-dark panel-flat">
    <div class="panel-heading text-center">
        <a href="#">
            ABCD
        </a>
    </div>
    <div class="panel-body">
        <p class="text-center pv">SIGN IN TO CONTINUE.</p>
        <?php
        $form = $this->beginWidget('CActiveForm', array(
            'id' => 'login-form',
            'enableClientValidation' => true,
            'clientOptions' => array(
                'validateOnSubmit' => true,
            ),
            'htmlOptions' => array(
                'autcomplete' => "off",
                'class' => 'mb-lg'
            ),
        ));
        ?>
            <div class="form-group has-feedback">
                <?php echo $form->textField($model, 'username', array('class' => 'form-control', 'placeholder' => 'Username')); ?>
                <span class="fa fa-envelope form-control-feedback text-muted"></span>
                <?php echo $form->error($model, 'username'); ?>
            </div>
            <div class="form-group has-feedback">
                <?php echo $form->passwordField($model, 'password', array('class' => 'form-control', 'placeholder' => 'Password')); ?>
                <span class="fa fa-lock form-control-feedback text-muted"></span>
                <?php echo $form->error($model, 'password'); ?>
            </div>
            <div class="clearfix">
                <div class="checkbox c-checkbox pull-left mt0">
                    <label>
                        <input type="checkbox" value="" name="remember" data-parsley-multiple="remember">
                        <span class="fa fa-check"></span>Remember Me</label>
                </div>
                <div class="pull-right"><a class="text-muted" href="recover.html">Forgot your password?</a>
                </div>
            </div>
            <button class="btn btn-block btn-primary mt-lg" type="submit">Login</button>
        <?php $this->endWidget(); ?>
        <p class="pt-lg text-center">Forgot Password?</p><a class="btn btn-block btn-default" href="#">Click Here</a>
    </div>
</div>


