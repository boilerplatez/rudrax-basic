<?php

namespace app\controller {

    class BasicController extends AbstractController
    {

        /**
         * @Description - Welcome page
         *
         * @RequestMapping(url="welcome",method="POST",type="template")
         * @RequestParams(true)
         */
        public function welcome($model = null, $name=null)
        {

            $profile = array(
                "name" => $name
            );

            $model->assign("profile", $profile);

            return "welcome";
        }

        /**
         * @Description - Wrong submission GET instead of POST
         *
         * @RequestMapping(url="welcome",method="GET",type="template")
         * @RequestParams(true)
         */
        public function welcome2()
        {
            return "nowelcome";
        }

        /**
         * @Description - Default url
         *
         * @RequestMapping(url="",method="GET",type="template")
         * @RequestParams(true)
         */
        public function index($model = null)
        {
            return "index";
        }
    }
}