<?php

namespace app\model {

    /**
     * Description of User, it basically extends AbstractUser and implemetns atleast two methods
     *
     * @Model(sessionUser)
     */
    class User extends ParichyaUser
    {

        public $IS_MOD = false;

        public function configure()
        {
            self::$MOBILE_AUTH = false;
            self::$GOOGLE_AUTH = true;

        }

        public function on_auth_success($user)
        {
            if ($user->admin == 1) {
                $this->role = "ADMIN";
            }
        }
    }
}
