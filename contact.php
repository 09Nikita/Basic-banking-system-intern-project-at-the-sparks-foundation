<?php include 'nav.php'; ?>

<section>
    <div id="contact.php">
        <h2 class="text-center">Contact</h2>
    </div>
    <div class="w-50 m-auto"><form action="userinfo.php" method="post">
      <div class="form-group">
        <label>Username</label>
        <input type="text" name="user" autocomplete="off" class="form-control" placeholder="Your Name">
      </div>
      <div class="form-group">
        <label>Email Id</label>
        <input type="text" name="email" autocomplete="off" class="form-control" placeholder="Email">
      </div>
      <div class="form-group">
        <label>Mobile No</label>
        <input type="text" name="mobile" autocomplete="off" class="form-control" placeholder="mobile number">
      </div>
      <div class="form-group">
        <label>Comments</label>
        <textarea class="form-control" name="Comments" placeholder="Write your doubts here"></textarea>
      </div>
      <button type="submit" class="btn btn-success">submit</button>
    </form>
    </div>
</section>
<?php include 'footer.php'; ?>