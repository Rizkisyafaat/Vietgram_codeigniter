<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Profile | Vietgram</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/css/styles.css')?>">
</head>


<!-- =================================================================================== -->



<body>
    <nav class="navigation">
        <div class="navigation__column">
            <a href="<?= base_url('controller_feed')?>">
                <img src="<?= base_url('assets/images/logo.png')?>" />
            </a>
        </div>
        <form action="<?= base_url('controller_feed/cari'); ?>" method="get">
            <div class="navigation__column">
                <i class="fa fa-search"></i>
                <input type="text" name="cari" placeholder="Search">
            </div>
        </form>
        <div class="navigation__column">
            <ul class="navigations__links">
                <li class="navigation__list-item">
                    <a href="<?= base_url('controller_upload'); ?>" class="navigation__link">
                        <!-- <i class="fa fa-compass fa-lg"></i> -->
                        <img src="<?= base_url('assets/images/upload.png')?>" width="22" height="22">
                    </a>
                </li>
                <li class="navigation__list-item">
                    <a href="#" class="navigation__link">
                        <i class="fa fa-heart-o fa-lg"></i>
                    </a>
                </li>
                <li class="navigation__list-item">
                    <a href="<?= base_url('controller_profile'); ?>" class="navigation__link">
                        <i class="fa fa-user-o fa-lg"></i>
                    </a>
                </li>
            </ul>
        </div>
    </nav>

    <main id="edit-profile">
        <div class="edit-profile__container">
            <header class="edit-profile__header">
                <div class="edit-profile__avatar-container">
                    <img src="<?= base_url("assets/images/").$profile['photo_profile']; ?>" class="edit-profile__avatar" />
                </div>
                <h4 class="edit-profile__username"><?= $profile['username']; ?></h4>
            </header>


            <form action="<?= base_url('controller_edit'); ?>" method="post" class="edit-profile__form">
                <div class="form__row">
                    <label for="full-name" class="form__label">Name:</label>
                    <input id="full-name" type="text" class="form__input" name="name" value="<?= $profile['name']; ?>" />
                </div>
                <div class="form__row">
                    <label for="user-name" class="form__label">Username:</label>
                    <input id="user-name" type="text" class="form__input" name="username" value="<?= $profile['username']; ?>" />
                </div>
                <div class="form__row">
                    <label for="website" class="form__label">Website:</label>
                    <input id="website" type="url" class="form__input" name="web" value="<?= $profile['website']; ?>" />
                </div>
                <div class="form__row">
                    <label for="bio" class="form__label">Bio:</label>
                    <textarea id="bio" name="bio"><?= $profile['bio']; ?></textarea>
                </div>
                <div class="form__row">
                    <label for="email" class="form__label">Email:</label>
                    <input id="email" type="email" class="form__input" name="email" value="<?= $profile['email']; ?>" />
                </div>
                <div class="form__row">
                    <label for="phone" class="form__label">Phone Number:</label>
                    <input id="phone" type="tel" class="form__input" name="phone" value="<?= $profile['phone']; ?>" />
                </div>
                <div class="form__row">
                    <label for="gender" class="form__label">Gender:</label>
                    <select id="gender" name="gender">
                        <option value="can't remember" selected>Can't remember</option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                    </select>
                </div>
                <input type="submit" name="submit" value="Submit">
            </form>
        </div>
    </main>


<!-- =================================================================================== -->



    <footer class="footer">
        <div class="footer__column">
            <nav class="footer__nav">
                <ul class="footer__list">
                    <li class="footer__list-item"><a href="#" class="footer__link">About Us</a></li>
                    <li class="footer__list-item"><a href="#" class="footer__link">Support</a></li>
                    <li class="footer__list-item"><a href="#" class="footer__link">Blog</a></li>
                    <li class="footer__list-item"><a href="#" class="footer__link">Press</a></li>
                    <li class="footer__list-item"><a href="#" class="footer__link">Api</a></li>
                    <li class="footer__list-item"><a href="#" class="footer__link">Jobs</a></li>
                    <li class="footer__list-item"><a href="#" class="footer__link">Privacy</a></li>
                    <li class="footer__list-item"><a href="#" class="footer__link">Terms</a></li>
                    <li class="footer__list-item"><a href="#" class="footer__link">Directory</a></li>
                    <li class="footer__list-item"><a href="#" class="footer__link">Language</a></li>
                </ul>
            </nav>
        </div>
        <div class="footer__column">
            <span class="footer__copyright">© 2017 Vietgram</span>
        </div>
    </footer>
</body>

</html>