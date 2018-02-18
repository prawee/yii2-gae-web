<?php
/**
 * @Author: Prawee Wongsa <prawee.w@integra8t.com>
 * @Date: 14/2/2018 AD 15:33
 */
use Yii;
?>
<div style="margin-top: 100px;"></div>
<div class="col-xs-6 col-xs-offset-3">
    <img src="https://storage.googleapis.com/oceanic-hold-176205.appspot.com/logo-email-kiddeepass.png" class="img-responsive" width="100%"/>
    <form method="POST">
        <div class="form-group">
            <label for="email">Email</label>
            <input  type="email"
                    class="form-control"
                    name="email"
                    id="email"
                    placeholder="example@email.com" />
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password"
                   class="form-control"
                   name="password"
                   id="password"
                   placeholder="Password" />
        </div>

        <div class="form-group">
            <div class="" style="margin-top:20px;">
                <input id="form-token" type="hidden" name="<?=Yii::$app->request->csrfParam?>"
                       value="<?=Yii::$app->request->csrfToken?>"/>
                <button type="submit" class="btn btn-primary btn-block">Login</button>
            </div>
        </div>
    </form>
</div>
