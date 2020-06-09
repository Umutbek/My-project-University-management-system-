<?php
  include "connect.php";
  include "navbar.php";
  require_once 'auth_check.php';
?>
<!DOCTYPE html>
<html>
<head>
  <title>Title</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/my_style.css">
</head>
<body>
  <?php
  $sql="SELECT * from `order`";
  $res=mysqli_query($db,$sql);
  ?>
		<div class="row">
			<div class="col-md">
				<div class="card card-body">
					<h5 style="margin-left:700px;">Menu</h5>
				</div>
				<div class="card card-body">
          <?php
          echo "<table class='table'>";
            echo "<tr>";
              echo "<th>"; echo "Food"; echo "</th>";
              echo "<th>"; echo "Cost"; echo "</th>";
              echo "<th>"; echo "Category"; echo "</th>";
              echo "<th>"; echo "Select"; echo "</th>";
              echo "<th>"; echo "Delete"; echo "</th>";
            echo "</tr>";
            $sql="SELECT * from `order`";
            $res=mysqli_query($db,$sql);
            while($row=mysqli_fetch_array($res)){?>
                <tr>
                <form action="" method="post" role="form">
                  <td><?php echo $row['name']; ?></td>
                  <td><?php echo $row['cost']; ?></td>
                  <td><?php echo $row['category']; ?></td>
                  <td><input type="checkbox" name="box[]" value="<?php echo $row['id'];?>" required=""></td>
                  <td><input class="btn btn-danger" type="submit" name="deletekey" value="Delete"></td>
                </form>
              </tr>
              <?php
            }
              echo "</tr>";
          echo "</table>";
          ?>
				</div>
			</div>
		</div>
    <?php
    if(isset($_POST['deletekey'])){
      $box=$_POST['box'];
      while(list($key,$val) =  @each($box)){
        mysqli_query($db,"Delete FROM `order` where id=$val");
      }
      ?>
      <script type="text/javascript">
        window.location.href=window.location.href;
      </script>
      <?php
    }
    ?>
      <section id="footer">
        <div class="container text-center">
          <p>Than you for visiting <i class="fa fa-heart-o"></i></p>
        </div>
      </section>
</body>
</html>
