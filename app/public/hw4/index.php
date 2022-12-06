<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>HW4</title>
</head>

<body>
  <h1>Register</h1>
  <form action="server.php" method="post" enctype="multipart/form-data">
    <div>
      <label for="username">Username</label>
      <input type="text" name="username" id="username">
    </div>
    <div>
      <label for="password">Password</label>
      <input type="password" name="password" id="password">
    </div>
    <div>
      <label for="confirm">Confirm Password</label>
      <input type="password" name="confirm" id="confirm">
    </div>
    <div>
      <label for="email">Email</label>
      <input type="email" name="email" id="email">
    </div>
    <div>
      <label for="phone">Phone</label>
      <input type="tel" name="phone" id="phone">
    </div>
    <div>
      <label for="birthday">Birthday</label>
      <input type="date" name="birthday" id="birthday">
    </div>
    <div>
      <label for="country">Country</label>
      <select name="country" id="country">
        <option value="UA">Ukraine</option>
        <option value="US">United States</option>
        <option value="CA">Canada</option>
      </select>
    </div>
    <div>
      <label for="docs">Documents</label>
      <input type="file" name="docs" id="docs">
    </div>
    <div>
      <span>Account type</span>
      <input type="radio" name="type" id="type_personal" value="personal">
      <label for="type_personal">Personal</label>
      <input type="radio" name="type" id="type_business" value="business">
      <label for="type_business">Business</label>
    </div>
    <div>
      <label for="accept_terms">Accept terms</label>
      <input type="checkbox" name="accept_terms" id="accept_terms">
    </div>
    <div>
      <input type="submit" value="Register">
    </div>
  </form>
  <hr>

  <?php
  $names = [
    'John',
    'Mary',
    'Peter',
    'Jane',
    'Mark',
    'Sara',
    'Paul',
    'Kate',
    'Luke',
    'Alice'
  ];
  ?>

  <ul>
    <? foreach ($names as $name): ?>
    <li>
      <?= $name ?>
    </li>
    <? endforeach ?>
  </ul>
</body>
