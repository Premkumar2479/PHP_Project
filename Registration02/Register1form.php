



<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">


<div id="reg_form" style="width:55%; margin-left:auto; margin-right:auto; ">
    <form class="reg_form_container" method="post" action="content1.php">
  <div class="mb-3">
    <label for="name" class="form-label">Name:</label>
    <input type="text" class="form-control" id="name" name="name" aria-describedby="emailHelp">

    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>

  <div class="mb-3">
    <label for="email" class="form-label">Email address</label>
    <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="password" class="form-label">Password</label>
    <input type="password" class="form-control" id="password" name="password">
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>

<div id="cu_form" style="width:55%; margin-left:auto; margin-right:auto; display:block;"><div class="mb-3">
   <form action="content1.php" method="post">
  <label for="email" class="form-label">Email address</label>
  <input type="email" class="form-control" id="email_cu" name="email_cu" placeholder="name@example.com">
</div>
<div class="mb-3">
  <label for="msg" class="form-label">Example textarea</label>
  <textarea  class="form-control" id="msg" name="msg" rows="3"
  placeholder="Leave your Message..."></textarea>
</div>
 <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>