<?php
$id = $_GET['id'];
include "header.php";
?>

<div align=center>
        <!-- Begin Page Content -->
        <div class="container-fluid">

<div class="card shadow w-50 bg-gradient-dark">
                <div class="card-header py-3 bg-secondary">
                  <h1 class="m-0 font-weight-bold text-light">ARCHIVE SANCTION</h1>
                </div>
                
                <div class="card-body">
                  <h5 style="color:white;">Are you sure you want to archive this sanction?</h5>
           <br>
           <br>
           
           <form method="post" action="sanc_deact_proc.php?id=<?= $id?>">
           <button type="submit" class="btn btn-success btn-icon-split" style="margin-left:5%;">
            <span class="icon text-white-50">
                <i class="fas fa-check"></i>
            </span>
            <span class="text">
                Continue
            </span>
            </a>
            </button>
        &nbsp;&nbsp;&nbsp;
        <a href="sanc_manage.php" class="btn btn-danger btn-icon-split">
            <span class="icon text-white-50">
                <i class="fas fa-times"></i>
            </span>
            <span class="text">
                Cancel&nbsp;&nbsp;&nbsp;
            </span>
            </a>
          
            </div>

              </div>

