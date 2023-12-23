<?php $__env->startSection('title', 'Homepage'); ?>

<?php $__env->startSection('content'); ?>

    <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container">
      <a class="navbar-brand" href="#">SDRCCCOOP</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
            <?php if(Auth::user()->role_id  === 1): ?>
                <li class="nav-item active">
                    <a class="nav-link" href="<?php echo e(route('landingpagesubmenu.loansmenu'), false); ?>">Loans</a>    
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo e(route('reports'), false); ?>">Reports</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                </li>
            <?php endif; ?>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Jumbotron -->
  <div class="jumbotron" style="background-color: #343a40">
    <div class="container">
      <h1 class="display-4">Salon De Rose Credit Cooperative System</h1>
      <p class="lead">An inhouse credit cooperative system designed for your needs</p>
    </div>
  </div>

  <!-- Features -->
  <div class="features">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 feature-item">
          <h3>Employee Loans</h3>
          <p>Our Employee Loan Services offer competitive and affordable interest rates, ensuring that you can access the funds you need without burdening yourself with high repayment costs.</p>
        </div>
        <div class="col-lg-4 feature-item">
          <h3>Flexible Repayment Options</h3>
          <p>We understand that everyone's financial situation is unique. That's why our loan program provides flexible repayment options tailored to your needs. Whether you prefer monthly installments or a customized repayment plan, we've got you covered.</p>
        </div>
        <div class="col-lg-4 feature-item">
          <h3>Quick Approval Process</h3>
          <p>Emergencies don't wait, and neither should you. Our streamlined approval process ensures that you can get the funds you need quickly, with minimal paperwork and hassle. Apply online, and our dedicated team will work to process your application promptly</p>
        </div>
      </div>
    </div>
  </div>

  <!-- Footer -->
  <div class="footer">
    <div class="container">
      <p>&copy; 2023 Salon De Rose Credit Cooperative. All rights reserved.</p>
    </div>
  </div>



    

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\sdrccoop\public_html_final\sdrcccoop\resources\views/landing-page.blade.php ENDPATH**/ ?>