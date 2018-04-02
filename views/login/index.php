<form method="post">
    <label>Usuário</label>
    <input type="text" name="userdata[user]"/>
    <label>Senha</label>
    <input type="password" name="userdata[user_password]"/>
    <input type="submit" value="Entrar"/>
    <?php
        if ($this->login_error) { ?>
            <span><?=$this->login_error?></span>
    <?php } ?>
</form>