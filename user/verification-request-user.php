<!-- header link -->
<?php
    include 'header.php';
    include 'navbar.php';
?>
<div class="content-wrapper" style="min-height: 265px;">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">
                        <i class="fas fa-user"></i> Want to verify your account!
                    </h1>
                    <p>Here are the few steps you have to follow for verifying your account:</p>
                    <ul>
                        <li>Provide your email address</li>
                        <li>Get a reference number</li>
                        <li>Enter the reference number</li>
                        <li>Wait for admin to verify your account within 24-72 hours.</li>
                    </ul>
                    <form action="">
                        <label for="email">Enter your email</label>
                        <input type="email" placeholder="example@com">
                        <button class="btn-success">Submit</button>
                    </form>
                    <p>Got your reference number!</p>
                    <form action="">
                        <input type="text" placeholder="A12B34C5"> 
                        <a href="index.php" title="view-dashboard"><button class="btn-success">Request for verified account!</button></a>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- footer link -->
<?php
    include 'footer.php';
?>
