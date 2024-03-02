<?php $this->load->view('includes/header');?>
    <div class="container">
        <div class="row">
        <div class="card">
        <div class="card-body">
            <h5 class="card-title text-center">Student list</h5>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>SN</th>
                        <th>name</th>
                        <th>email</th>
                        <th>mobile</th>
                        <th>address</th>
                        <th>options</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i=1; foreach($students as $row){?>
                    <tr>
                        <td><?=$i++?></td>
                        <td><?=$row['name']?></td>
                        <td><?=$row['email']?></td>
                        <td><?=$row['mobile']?></td>
                        <td><?=$row['address']?></td>
                        <td>
                          <a href="<?=base_url()?>student/edit/<?=$row['id']?>"class="btn btn-primary">edit</a>
                          <a href="<?=base_url()?>student/delete/<?=$row['id']?>"class="btn btn-danger">delete</a>
                        </td>
                    </tr>
                    <?php }?>
                </tbody>
                    </table>

        </div>
        </div>
        </div>
    </div>
    <?php $this->load->view('includes/footer');?>

