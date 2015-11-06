<h2>Login Form</h2>
 
<?php echo form_open('member/login') ?>
<div class="input">
    <?php
    echo form_label('Username');
    echo form_input('data[username]');
    ?>
</div>
<div class="input">
    <?php
    echo form_label('Password');
    echo form_password('data[password]');
    ?>
</div>
<div class="submit">
    <?php
    echo form_submit('login', 'Login');
    ?>
</div>
<?php echo form_close() ?>