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
                    <label>
                        <input type="text" name="name" value="<?php echo $user['name']?>" class="form-control">
                    </label>
                </div>
                <div class="form-group">
                    <label>Username</label>
                    <label>
                        <input type="text" name="username" value="<?php echo $user['username']?>" class="form-control">
                    </label>
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <label>
                        <input type="text" name="email" value="<?php echo $user['email']?>" class="form-control">
                    </label>
                </div>
                <div class="form-group">
                    <label>Phone</label>
                    <label>
                        <input type="text" name="phone" value="<?php echo $user['phone']?>" class="form-control">
                    </label>
                </div>
                <div class="form-group">
                    <label>Website</label>
                    <label>
                        <input type="text" name="website" value="<?php echo $user['website']?>" class="form-control">
                    </label>
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