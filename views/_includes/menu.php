<?php if (!defined('ABSPATH')) exit; ?>

<!-- Menu para usuários logados -->
<?php if ($this->logged_in) { ?>
<ul>
    <li>
        <a href="<?=HOME_URI?>/home">Home</a>
    </li>
</ul>

<!-- Menu para usuários não logados -->
<?php } else { ?>
<ul>
    <li>
        <a href="<?=HOME_URI?>/login">Login</a>
    </li>
</ul>
<?php } ?>