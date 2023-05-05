<?php
session_start();
include(__DIR__. '/access.php');
include_once(__DIR__. '/templates/header.html.php');

?>

<?php startblock('title');
echo $_SESSION['user'] . " Profile";
endblock() ?>
<?php startblock('body') ?>

<div>
    <div>

    </div>
</div>
<div class="row col-10 rounded mx-auto mt-1">
    <div class="col-md-3 text-center">
        <img src="/templates/images/profile1.png" alt="profile-pic"/>
    </div>
    <div class="col-md-8">
 <table class="table table-striped">
   <h2 colspan="2">My Profile</h2r>
    <tbody>
         <tr>
            <th><i class="bi bi-file-person-fill"></i>Name</th>
            <td>
                <?= $_SESSION['name'] ?>
            </td>
        </tr>
        <tr>
            <th><i class="bi bi-person-workspace"></i>
Username</th>
            <td>
                <?= $_SESSION['user'] ?>
            </td>
        </tr>
        <tr>
            <th><i class="bi bi-telephone"></i>
Phone number</th>
            <td>
                <?= $_SESSION['phone'] ?>
            </td>
        </tr>
        <tr>
            <th><i class="bi bi-envelope-at"></i>
Email</th>
            <td>
                <?= $_SESSION['email'] ?>
            </td>
        </tr>
        <tr>
            <th><i class="bi bi-signpost-split"></i>
Choosen Track</th>
            <td>
                <?= $_SESSION['track'] ?>
            </td>
        </tr>
    </tbody>

    </table>
    <div class="text-center">
    <a href="edit_profile.html.php" class="btn btn-secondary"><i class="bi bi-pencil-square"></i>Edit Profile</a>
    </div>
    </div>
   
</div>





<?php endblock() ?>