
            

            <div class="section section-signup" style="background-image: url('/static/themes/<?php echo $theme; ?>/assets/img/bg11.jpg'); background-size: cover; background-position: top center; min-height: 700px;">
                <div class="container">
                    <div class="row">
                        <div class="card card-signup" data-background-color="orange">
                            <form class="form" method="POST" action="/register">
                                <div class="header text-center">
                                    <h4 class="title title-up">Register</h4>
                                    
                                    <?php if ( has_text( $message ) ) { ?>

                                        <h5><?php echo $message; ?></h5>

                                        <button class="btn btn-link btn-info">
                                            <a href="<?php echo base_url('login'); ?>">Go to Login</a>
                                        </button>

                                    <?php } else { ?>

                                        <?php if ( has_text( $error ) ) { ?>
                                            <h5><?php echo $error; ?></h5>
                                        <?php } ?>

                                        <div class="social-line">
                                            <a href="#pablo" class="btn btn-neutral btn-facebook btn-icon btn-round">
                                                <i class="fa fa-facebook-square"></i>
                                            </a>
                                            <a href="#pablo" class="btn btn-neutral btn-twitter btn-icon btn-lg btn-round">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                            <a href="#pablo" class="btn btn-neutral btn-google btn-icon btn-round">
                                                <i class="fa fa-google-plus"></i>
                                            </a>
                                        </div>

                                    <?php } ?>

                                </div>

                                <?php if ( FALSE == has_text( $message ) ) { ?>

                                    <div class="card-body">
                                        <div class="input-group form-group-no-border">
                                            <span class="input-group-addon">
                                                <i class="now-ui-icons users_circle-08"></i>
                                            </span>
                                            <input name="username" type="text" class="form-control" placeholder="Username">
                                        </div>
                                        <div class="input-group form-group-no-border">
                                            <span class="input-group-addon">
                                                <i class="now-ui-icons ui-1_email-85"></i>
                                            </span>
                                            <input name="email" type="text" class="form-control" placeholder="eMail">
                                        </div>
                                        <div class="input-group form-group-no-border">
                                            <span class="input-group-addon">
                                                <i class="now-ui-icons ui-1_email-85"></i>
                                            </span>
                                            <input name="password" type="password" class="form-control" placeholder="Password">
                                        </div>
                                        <div class="input-group form-group-no-border">
                                            <span class="input-group-addon">
                                                <i class="now-ui-icons ui-1_email-85"></i>
                                            </span>
                                            <input name="password_conf" type="password" class="form-control" placeholder="Password confirmation">
                                        </div>
                                        <!-- If you want to add a checkbox to this form, uncomment this code -->
                                        <!-- <div class="checkbox">
                                        <input id="checkboxSignup" type="checkbox">
                                            <label for="checkboxSignup">
                                            Unchecked
                                            </label>
                                        </div> -->
                                    </div>
                                    <div class="footer text-center">
                                        <button class="btn btn-primary btn-simple btn-round" type="submit">Submit</button>
                                        <br />            
                                        <button class="btn btn-link btn-info">
                                            <a href="<?php echo base_url('login'); ?>">Login</a> 
                                            &nbsp;&nbsp;
                                            <a href="<?php echo base_url(); ?>">Home</a> 
                                        </button>
                                    </div>

                                    <?php } ?>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
