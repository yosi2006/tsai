<?php
if($_SERVER["REQUEST_METHOD"]=="POST")
{
  $name=htmlspecialchars($_POST['name']);
  $email=htmlspecialchars($_POST['email']);
  echo "<h1>提交成功!</h1>";
  echo "<p>姓名: " . $name . "</p>;
  echo "<p>電子郵件: . $email . "</p>;
}
else
{
  header("Location:index.html");
  exit();
}
?>