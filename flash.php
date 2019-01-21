<?php if(isset($_SESSION['success'])): ?>
    <div class="container mt-2">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="alert alert-success text-center">
                    <?= $_SESSION['success'] ?>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>
<?php if(isset($_SESSION['error'])): ?>
    <div class="container mt-2">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="alert alert-danger text-center">
                    <?= $_SESSION['error'] ?>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>