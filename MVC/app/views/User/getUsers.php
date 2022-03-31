<?php require APPROOT . '/views/includes/header.php'; 
?>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
 

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="/MVC/User/getUsers">Get Users</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/MVC/User/createUser">Create User</a>
</li>
     
    </ul>
   
  </div>
</nav>

    <h1>Get Users View</h1>
    
    <table  class="table table-bordered">
        <tr>
            <td>ID</td>
            <td>City</td>
            <td>Phone</td>
            <td colspan="3" class="text-center"> Actions</td>
        </tr>
        <?php
            foreach($data["users"] as $user){
                echo"<tr>";
                echo '<td>
                </td>';
                echo"<td>$user->ID</td>";
                echo"<td>$user->City</td>";
                echo"<td>$user->Phone</td>";
                echo"<td>
                <a href='/MVC/User/details/$user->ID'> Details</a>
                </td>";
                echo"<td>
                <a href='/MVC/User/update/$user->ID'> Update</a>
                </td>";
                echo"<td>
                <a href='/MVC/User/delete/$user->ID'> Delete</a>
                </td>";
                echo"</tr>";

            }
        ?>
    </table>


   
<?php require APPROOT . '/views/includes/footer.php'; ?>