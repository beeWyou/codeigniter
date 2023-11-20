<html>
    <head>
        <body>
        <section class="container forms">
            <div class="form login">
                <div class="form-content">
                    <header>Signup</header>
                    <form class ="user" method="POST" action="<?= base_url('Auth/regis'); ?> ">
                        <div class="field input-field">
                            <input name="nama" value="<?= set_value('nama'); ?>" type="name" placeholder="Nama Lengkap" class="input">
                            <?= form_error('nama', '<small class="text-danger pl-3" style="color:red;">', '</small>'); ?>
                        </div>
                        <div class="field input-field">
                            <input name="email" value="<?= set_value('email'); ?>" type="email" placeholder="Email" class="input">
                            <?= form_error('email', '<small class="text-danger pl-3" style="color:red;">', '</small>'); ?>
                        </div>

                        <div class="field input-field">
                            <input name="password" value="<?= set_value('password`'); ?>" type="password" placeholder="Create password" class="password">
                            <?= form_error('password', '<small class="text-danger pl-3" style="color:red;">', '</small>'); ?>
                        </div>
                        <div class="field input-field">
                            <input name="password2" type="password" value="<?= set_value('password2`'); ?>" placeholder="Confirm password" class="password">
                            <i class='bx bx-hide eye-icon'></i>
                            <?= form_error('password2', '<small class="text-danger pl-3" style="color:red;">', '</small>'); ?>
                        </div>
                        <div class="field button-field">
                            <button>Signup</button>
                        </div>
                    </form>
                    <div class="form-link">
                        <span>Don't have an account?  </span> <a href="<?= base_url('Auth') ?>">Login</a>
                    </div>
                    
        </body>
    </head>
</html>