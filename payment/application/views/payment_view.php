<!DOCTYPE html>
<html>
<head>
	<title>Payment view</title>
</head>
<body>
<form action="http://localhost:8012/payment/index.php/welcome/processPayment" method="post">
	<div class="form-group">
    <label for="exampleInputEmail1">Purpose</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Purpose" name="purpose">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp" placeholder="Enter email">
  </div>
  
  <div class="form-group">
    <label for="exampleInputEmail1">Amount</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="amount">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</body>
</html>