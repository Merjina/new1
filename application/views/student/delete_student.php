<?php $this->load->view('includes/header');?>
    <div class="container">
        <div class="row">
        <div class="card">
        <div class="card-body">
            <h5 class="card-title text-center">delete Student</h5>
            <form method="post"action="<?=base_url()?>student/delete<?=$id?>">
            <div class="form-group mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control"values="<?=$student->name?>" id="name" name="name">
            </div>
            <div class="form-group mb-3">
                 <label for="email" class="form-label">Email</label>
                 <input type="email" class="form-control"values="<?=$student->email?>"id="email" name="email">
            </div>   
            <div class="form-group mb-3">
                 <label for="mobile"class="form-label" >mobile</label>
                 <input type="text" class="form-control"values="<?=$student->mobile?>" id="mobile"name="mobile">
            </div> 
            <div class="form-group mb-3">
                 <label for="address"class="form-label">address</label>
                 <input type="text" class="form-control"values="<?=$student->address?>" id="address"name="address">
            </div> 
            <button type="submit" class="btn btn-primary">delete</button>
         </form>

        </div>
        </div>
        </div>
    </div>
    <?php $this->load->view('includes/footer');?>

