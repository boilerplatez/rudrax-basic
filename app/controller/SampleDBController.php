<?php
/**
 * Created by IntelliJ IDEA.
 * User: LT
 * Date: 09/12/16
 * Time: 10:15 PM
 */

namespace app\controller;

use app\service\R;

class SampleDBController extends AbstractController
{

    /**
     * @Description - Items page
     *
     * @RequestMapping(url="items",type="template")
     * @RequestParams(true)
     */
    public function items_page($model = null, $title = null, $quantity = 0)
    {

        if (!is_null($title)) {
            //Save New Profile
            $item = R::dispense("item");
            $item->title = $title;
            $item->quantity = $quantity;
            R::store($item);
        }

        //Load Existing profiles
        $items = R::findAll("item");

        $model->assign("items", $items);
        return "items";
    }


}