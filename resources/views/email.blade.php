<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
  table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 2px solid #dddddd;
  text-align: left;
  padding: 8px;
}
</style>
</head>
<body>

<div class="container">
    <h3>Hi</h3>
    <h3>You have a new contact email from your Website. </h3>
    <h2>Details:</h2>
    <table>
  <tr>
    <th>Name</th>
    <th>Email</th>
    <th>Mobile No.</th>
    <th>Subject</th>
    <th>Company Name</th>
    <th>Message</th>
  </tr>
  <tr>
    <td>{{$fname}} {{$lname}}</td>
    <td>{{$email}} </td>
    <td>{{$phone}}</td>
    <td>{{$sub}}</td>
    <td>{{$cname}}</td>
    <td>{{$msg}}</td>
  </tr>
</table>
  
</body>
</html>





