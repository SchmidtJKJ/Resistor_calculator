<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <meta charset="utf-8">
    <title>Resset your password</title>

    <style>
      h3{
          color: red;
        }
        h5{
          color: red;
        }
        body{
              background-color:;
            }

      .main{
        max-width: 50%;
        width: 70%;
        margin-left: 250px;
        margin-top: 50px;
      }
      footer{
        background: black;
        color: gray;
        font-size: 12px;
        padding: 20px 20px;
        text-align: center;
      }
      </style>

  </head>
  <body class="w3-light-grey" style="background: url('https://source.unsplash.com/twukN12EN7c/1920x1080') no-repeat center center fixed;
  ">
    <div>
    <div class="main">
      <h3>Let's find your account</h3>
      <form action="changePassword.php" method="post">

        <div class="form-group">
          <div class="form-group">
            <label> username </label>
            <input type="text" name= "username" placeholder="enter your username" class="form-control" required>


            <br>
            <div class="select">
              <select name="security-question">
                <option>Choose your security question to answer</option>
                <option value="1">In what city were you born ? </option>
                <option value="2">What was the make of your first car ? </option>
                <option value="3">What was your SAT scrore ? </option>
              </select>
              <label >answer</label>
              <input type="text" name="answer" placeholder="enter your answer" class="form-control" required>
              </div>

            </div>
            <br>
          </div>
                <button type="submit" name = "Continue" class="btn btn-primary"  style="color: red"> Continue </button>
        </div>

    </div>


  </body>
</html>
