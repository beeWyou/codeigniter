<body>
        <section class="container forms">
            <div class="form login">
                <div class="form-content">
                    <header>Login</header>
                    <?= $this->session->flashdata('message'); ?>
                    <form class="user" method="post" action="<?= base_url('Auth/cek_login'); ?>">
                        <div class="field input-field">
                            <input type="email" name="email" placeholder="Email" class="input">
                        </div>

                        <div class="field input-field">
                            <input type="password" name="password" placeholder="Password" class="password">
                            <i class='bx bx-hide eye-icon'></i>
                        </div>

                        <div class="form-link">
                            <a href="<?= base_url('Auth/tes') ?>" class="forgot-pass">Forgot password?</a>
                        </div>

                        <div class="field button-field">
                            <button type="submit" class="btn btn-primary btn-user btn-block">Login</button>
                        </div>
                    </form>

                    <div class="form-link">
                        <span>Don't have an account?  </span> <a href="<?= base_url('Auth/regis') ?>">Signup</a>
                    </div>
                         
            </div>
            </div>
      