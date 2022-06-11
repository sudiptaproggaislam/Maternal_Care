<?php
    include('partials/config.php');
    $page_title = "Resend verification code";
    include('partials/link.php');
    include('partials/header.php');

?>
<div class="py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
            <?php
                if(isset($_SESSION['status']))
                {
                ?>
                <div class="alert alert-success">
                    <h5><?= $_SESSION['status']; ?></h5>
                </div>
                <?php
                unset($_SESSION['status']);
                }
                ?>

                <div class="card">
                    <div class="card-header">
                        <h5>Resend Email Verification</h5>
                    </div>
                    <div class="card-body">
                        <form action="resend-code.php" method="POST">
                            <div class="form-group mb-3">
                                <input type="email" name="email" class="form-control" placeholder="Enter email address">
                            </div>
                            <div class="form-group">
                                <button type="submit" name="resend_email_btn" class="btn btn-primary" style="background-color: teal;">Resend</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>