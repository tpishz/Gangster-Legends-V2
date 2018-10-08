<?php

    class loginTemplate extends template {
    
        public $loginForm = '
                <{text}>
                <form action="?page=login&action=login" method="post">
                    <input autocomplete="off" type="input" class="form-control" name="username" placeholder="Username" /><br />
                    <input type="password" class="form-control" name="password" placeholder="Password" /><br />
                    <button type="submit" class="btn pull-right">Login</button>
                </form>
		';

        public $loginOptions = '

            <form method="post" action="?page=admin&module=login&action=settings">

                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="pull-left">Login Suffix</label>
                            <textarea type="text" class="form-control" name="loginSuffix" rows="5">{loginSuffix}</textarea>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="pull-left">Login Postfix</label>
                            <textarea type="text" class="form-control" name="loginPostfix" rows="5">{loginPostfix}</textarea>
                        </div>
                    </div>
                </div>

                <div class="text-right">
                    <button class="btn btn-default" name="submit" type="submit" value="1">Save</button>
                </div>
            </form>
        ';
        
    }

?>