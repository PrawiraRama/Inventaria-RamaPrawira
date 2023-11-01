
<?php 

?>

<div class="wrapper">
            <div class="container main">
                <div class="row">
                    <div class="col-md-6 side-image">
                    </div>


                    <div class="col-md-6 right">
                        
                        
                        <div class="input-box">

                            <h1>Account Login</h1>

                            <!-- Input Username dan Password -->
                            <form action="<?= BASEURL ?>/login/user" method="post">

                                <input class="form-control shadow p-3 mb-4 bg-body-tertiary rounded-3"type="text" name="username" placeholder="Username">
                                <input class="form-control shadow p-3 mb-5 bg-body-tertiary rounded-3"type="password" name="password" placeholder="Password">
                                
                                <div class="input-field">
                                    <button type="submit" class="submit">Login</button>
                                </div>

                            </form>

                            </div>
                    </div>
                </div>
            </div>
</div>
    
  