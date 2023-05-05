<?php
session_start();
include('./inc/profile.php');
include('./templates/header.html.php');



?>
<div class="col-8 mx-auto mt-3 p-2 ">



<form method="POST" action="">
       <div class="">
        <!-- <div>
            <label class="input-group" for="fname">First Name</label>
            <input class="input-group-text" type="text" name="fname" value="<?= $result['fname'] ?>" id="" />
            <?= $errMsg['fname'] ?>
        </div>
        <div>
            <label class="input-group" for="lname">Last Name</label>
            <input class="input-group-text" type="text" name="lname" value="<?= $lname ?>" id="" />
            <?= $errMsg['lname'] ?>
        </div> -->
        <div>
            <label class="input-group" for="phone">Phone number</label>
            <input class="input-group-text" type="tel" name="phone" value="<?= $_SESSION['phone'] ?>" id=""/>
            <?= $errMsg['phone'] ?>
        </div>
        <div>
            <label class="input-group" for="email">Email</label>
            <input  class="input-group-text"type="email" name="email" value="<?= $_SESSION['email'] ?>" id="" />
            <?= $errMsg['email'] ?>
        </div>
        
        <div>
            <label class="input-group" for="username">Username</label>
            <input class="input-group-text" type="text" name="username" value="<?= $_SESSION['user'] ?>" id="" />
            <?= $errMsg['username'] ?>
        </div>
        <div>
            <label class="input-group" for="password">Password</label>
            <input  class="input-group-text" type="password" name="password" id="" />
            <?= $errMsg['pass'] ?>
        </div>
        <div>
            <label class="input-group" for="track">Track</label>
            <input type="radio" name="track" value="farmer" id="" />Farmer
            <input type="radio" name="track" value="agronomist export" id="" />Agronomist export
            <?= $errMsg['track'] ?>
        </div>
        <div>
            <button class="btn btn-success" name="editProfile">Edit</button>
        </div>
    </form>
    </div>
</div>