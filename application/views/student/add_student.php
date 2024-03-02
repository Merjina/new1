    <?php $this->load->view('includes/header');?>
    <div class="container">
        <div class="row">
        <div class="card">
        <div class="card-body">
            <h5 class="card-title text-center">Add Student</h5>
            <form method="post"action="<?=base_url()?>student/add">
            <div class="form-group mb-3">
                 <label for="name" class="form-label">Name</label>
                 <input type="text" class="form-control" id="name" name="name">
            </div>
            <div class="form-group mb-3">
                 <label for="email" class="form-label">Email</label>
                 <input type="email" class="form-control"id="email" name="email">
            </div>   
            <div class="form-group mb-3">
                 <label for="mobile"class="form-label" >mobile</label>
                 <input type="text" class="form-control" id="mobile"name="mobile">
            </div> 
            <div class="form-group mb-3">
                 <label for="address"class="form-label">address</label>
                 <input type="text" class="form-control" id="address"name="address">
            </div> 
            <button type="submit" class="btn btn-primary">Submit</button>
         </form>
         <?php
         if($this->session->flashdata('success')) {?>
         <div class="alert alert-success" role="alert">
            successfully added
         </div>
        <?php }
        ?>
        <?php
         if($this->session->flashdata('error')) {?>
         <div class="alert alert-danger" role="alert">
            failed
         </div>
        <?php }
        ?>

        </div>
        </div>
        </div>
    </div>
    <?php $this->load->view('includes/footer');?>

