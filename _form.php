<div class="container">
    <div class="card">
        <div class="card-header">
            <h3>
                <?php if($user['id']): ?>
                 Update user <b><?php echo $user['name']?></b>
                <?php else: ?>
                    Create new User
                <?php endif ?>
            </h3>
        </div>
        <div class="card-body">

            <form action="" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" name="name" value="<?php echo $user['name']?>"
                           class="form-control <?php echo $errors['name'] ? 'is-invalid': ''  ?>">
                    <div class="invalid-feedback">
                        <?php echo $errors['name'] ?>
                    </div>
                </div>
                <div class="form-group">
                    <label>Username</label>
                    <input type="text" name="username" value="<?php echo $user['username']?>"
                           class="form-control  <?php echo $errors['username'] ? 'is-invalid': ''  ?>">
                    <div class="invalid-feedback">
                        <?php echo $errors['username'] ?>
                    </div>
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="text" name="email" value="<?php echo $user['email']?>"
                           class="form-control  <?php echo $errors['email'] ? 'is-invalid': ''  ?>">
                    <div class="invalid-feedback">
                        <?php echo $errors['email'] ?>
                    </div>
                </div>
                <div class="form-group">
                    <label>Phone</label>
                    <input type="text" name="phone" value="<?php echo $user['phone']?>"
                           class="form-control  <?php echo $errors['phone'] ? 'is-invalid': ''  ?>">
                    <div class="invalid-feedback">
                        <?php echo $errors['phone'] ?>
                    </div>
                </div>
                <div class="form-group">
                    <label>Website</label>
                    <input type="text" name="website" value="<?php echo $user['website']?>"
                           class="form-control  <?php echo $errors['website'] ? 'is-invalid': ''  ?>">
                    <div class="invalid-feedback">
                        <?php echo $errors['website'] ?>
                    </div>
                </div>
                <div class="form-group">
                    <label>Image</label>
                    <input type="file" name="picture" class="form-control-file">
                </div>

                <button class="btn btn-success">Submit</button>
            </form>

        </div>

    </div>

</div>