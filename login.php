<?php include('header.php'); ?>
<section class="bg-light vh-100 d-flex">
    <div class="col-3 m-auto">
        <div class="card">
            <div class="card-body">
                <div class="border rounded-circle mx-auto d-flex" style="width:100px;height:100px;">
                    <i class="fa fa-user text-dark fa-3x m-auto"></i>
                </div>
                <form action="actions/login.php" method="POST">
                    <div class="md-form mt-3">
                        <label for="email">Your Email</label>
                        <input type="email" id="email" name="email" class="form-control" required>
                    </div>
                    <div class="md-form mt-3">
                        <label for="password">Your Password</label>
                        <input type="password" id="password" name="password" class="form-control" required>
                    </div>
                    <div class="md-form mt-3">
                        <button type="submit" name="login" class="btn btn-primary btn-block">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<?php include('footer.php'); ?>
