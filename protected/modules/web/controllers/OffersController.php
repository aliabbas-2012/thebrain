<?php

/**
 * 
 */
class OffersController extends Controller {

    /**
     * @return array action filters
     */
    public function filters() {
        return array(
            'accessControl', // perform access control for CRUD operations
            'postOnly + delete', // we only allow deletion via POST request
        );
    }

    /**
     * Item model
     * @var type 
     * used in widget
     */
    public $item;

    /**
     * Specifies the access control rules.
     * This method is used by the 'accessControl' filter.
     * @return array access control rules
     */
    public function accessRules() {
        return array(
            array('allow', // allow authenticated user to perform 'create' and 'update' actions
                'actions' => array(
                    'post',
                    'addpartial',
                    'changeStatus',
                    'deleteOffer',
                    'getChildrenCategories',
                    'sentMessage',
                    'deleteoffertype'
                ),
                'users' => array('@'),
            ),
            array('allow', // allow authenticated user to perform 'create' and 'update' actions
                'actions' => array(
                    'category',
                    'search',
                    'calculatePrice',
                    'detail'
                ),
                'users' => array('*'),
            ),
            array('deny', // deny all users
                'users' => array('*'),
            ),
        );
    }

    /**
     * category search
     */
    public function actionCategory($category = "") {
        $cat_arr = explode("-", $category);
        $criteria = new CDbCriteria();
        $criteria->addCondition("group_id = " . $cat_arr[count($cat_arr) - 1]);
        $criteria->addCondition("iStatus = 1");
        $dataProvider = new CActiveDataProvider('BspItem', array(
            'criteria' => $criteria,
            'pagination' => array('pageSize' => 15)
        ));
        if (isset($_POST['ajax']) && isset($_POST['update_element_id'])) {
            if ($_POST['update_element_id'] == "grid-view-div") {
                $this->renderPartial("//offers/_grid_offers", array(
                    "cat_arr" => $cat_arr,
                    "dataProvider" => $dataProvider,
                    'criteria' => $criteria,
                ));
            } else {

                $this->renderPartial("//user/_tab_items", array(
                    "cat_arr" => $cat_arr,
                    "dataProvider" => $dataProvider,
                    'criteria' => $criteria,
                    "items" => $dataProvider->getData(),
                ));
                //thumb-view-div
            }
        } else {
            $this->render("//offers/category", array(
                "cat_arr" => $cat_arr,
                "dataProvider" => $dataProvider,
                'criteria' => $criteria,
            ));
        }
    }

    /**
     * search page
     */
    public function actionSearch() {
        $model = new OfferSearch;
        $criteria = new CDbCriteria();
        if (isset($_POST['OfferSearch'])) {
            $model->attributes = $_POST['OfferSearch'];
            if (!empty($model->keyword)) {
                $criteria->compare("name", $model->keyword, true, "OR");
                $criteria->compare("t.id", $model->keyword, true, "OR");
                $criteria->compare("offer_number", $model->keyword, true, "OR");
                $criteria->compare("description", $model->keyword, true, "OR");
                $criteria->compare("seo_keywords", $model->keyword, true, "OR");
                $criteria->compare("seo_title", $model->keyword, true, "OR");
            }
            $criteria->compare("lat", $model->lat);
            $criteria->compare("lng", $model->lng);
            //new attribute
            $criteria->compare("special_deal", $model->special_deal);
            $criteria->addCondition("iStatus = 1");
            $with = array();
            if ($model->withVideo == 1) {
                $with = array(
                    'item_video' => array(
                        'joinType' => 'INNER JOIN',
                    ),
                );
            }
            if ($model->withSound == 1) {
                $with ['item_related_sounds'] = array(
                    'joinType' => 'INNER JOIN',
                );
            }
            if ($model->popularity == 1) {
                $with ['image_log'] = array(
                    'joinType' => 'INNER JOIN',
                );
            }
            if ($model->nearFirst == 1) {
                $criteria->order = "t.id ASC";
            }

            if (!empty($with)) {
                $criteria->with = $with;
            }

            if ($model->lowPrice == 1) {
                $criteria->addCondition("(discount_price IS NOT NULL OR discount_price !='')");
            }
            if ($model->highPrice == 1) {
                $criteria->addCondition("(price IS NOT NULL OR price !='')");
            }

            if ($model->lat != "" && $model->lng != "" && $model->distance != "") {
                $users = $model->getLantLongUser();
                $search_users = array();
                foreach ($users as $user) {
                    if ($model->getDistantByLocation($model->lat, $model->lng, $user->lat, $user->lng, $model->distance) > 0) {
                        $search_users[$user->id] = $user->id;
                    }
                }
                if (!empty($search_users)) {
                    $criteria->addInCondition("user_id", $search_users);
                }
            }
        }
        /**
         * group id setting
         */
        if (!empty($_GET['grp_id'])) {
            $criteria->addCondition("group_id = " . $_GET['grp_id']);
        }
//        CVarDumper::dump($model->attributes,10,true);
//        CVarDumper::dump($_POST['OfferSearch'],10,true);
        //CVarDumper::dump($criteria,10,true);
        $dataProvider = new CActiveDataProvider('BspItem', array(
            'criteria' => $criteria,
            'pagination' => array('pageSize' => 1000)
        ));

        if (isset($_GET['ajax'])) {
            $this->renderPartial("//offers/_search_result", array(
                "cat_arr" => array("0" => "", 1 => ""),
                "dataProvider" => $dataProvider
            ));
        } else {
            $this->render("//offers/search", array(
                "cat_arr" => array("0" => "", 1 => ""),
                "dataProvider" => $dataProvider
            ));
        }
    }

    /**
     * 
     * @param type $id
     */
    public function actionChangeStatus($id) {
        $offer = BspItem::model()->findByPk($id);

        if ($offer->iStatus == 0) {
            BspItem::model()->updateByPk($id, array("iStatus" => 1));
            Yii::app()->user->setFlash("offer-status", 'Offer Status has been Active Now');
        } else if ($offer->iStatus == 1) {
            BspItem::model()->updateByPk($id, array("iStatus" => 0));
            Yii::app()->user->setFlash("offer-status", 'Offer Status has been In-Active Now');
        }

        $this->redirect($this->createUrl("/web/userdata/myoffers"));
    }

    /**
     * 
     * @param type $id
     */
    public function actionDeleteOffer($id) {

        BspItem::model()->deleteByPk($id);
        Yii::app()->user->setFlash("offer-status", 'You have deleted offer');
        $this->redirect($this->createUrl("/web/userdata/myoffers"));
    }

    /**
     * 
     * @param type $slug
     */
    public function actionDetail($slug = "") {
        $slug_arr = explode("-", $slug);
        $model = BspItem::model()->findByPk($slug_arr[0]);
        $priceCal = BspItemConditionHour::model()->findAll("item_id = " . $slug_arr[0]);
        $this->item = $model;
        $model->saveViewerForLog();
        $this->render("//offers/detail", array("model" => $model, "priceCal" => $priceCal));
    }

    /**
     * post offer to create post 
     * @param type $id
     * @param type $action
     */
    public function actionPost($slug = "", $action = "create") {
        $model = new BspItemFrontEnd();
        $user = ChangeUser::model()->findByPk(Yii::app()->user->id);

        if ($slug != "") {
            $slug_arr = explode("-", $slug);
            $id = $slug_arr[0];
            $model = BspItemFrontEnd::model()->findByPk($id, "user_id =" . Yii::app()->user->id);
            $model->saveViewerForLog();
            if (empty($model)) {
                throw new CHttpException(404, 'The specified post cannot be found.');
            }
        }

        if (isset($_POST['BspItemFrontEnd']) && isset($_POST['ChangeUser'])) {
            $model->attributes = $_POST['BspItemFrontEnd'];
            $user->attributes = $_POST['ChangeUser'];
            //set user avatar 

            $this->checkCilds($model);
            $isvalid = 1;
            if (!$model->validate()) {
                $isvalid = 0;
            }
            if (!$user->validate()) {
                $isvalid = 0;
            }
            if ($this->setOfferImage($model)) {
                
            }
            if ($isvalid == 1) {
                if ($model->save()) {
                    //incase of !empty password then the login 
                    if (!empty($user->password_new)) {

                        $user->password = md5($user->password_new);
                    } else {
                        unset($user->password);
                    }

                    $user->save(false);
                    foreach ($model->image_items as $modelImg) {
                        $modelImg->item_id = $model->id;

                        $modelImg->save();
                    }

                    $item = BspItem::model()->findByPk($model->id);
                    $this->redirect($this->createUrl("/web/offers/detail", array("slug" => $item->slug)));
                }
            }
        }
        $this->render("//offers/post", array("model" => $model, "user" => $user));
    }

    /**
     * Price calculation
     */
    public function actionCalculatePrice() {
        $model = new PriceCalculation();
        if (isset($_POST['PriceCalculation'])) {
            $model->attributes = $_POST['PriceCalculation'];
        }
        $item = BspItem::model()->findByPk($model->item_id);

        $periodmain = BspItem::getPeriod($item->per_price);

        $periods = $model->time_since($model->start_date . ' ' . $model->start_time, true, $model->end_date . ' ' . $model->end_time, $periodmain);
        $time = '';
        foreach ($periods as $label => $value) {
            $time .= $value . " " . $label . " ";
        }


        $prices = $item->offerPrices;
        $sum = 0;

        foreach ($prices as $price) {
            $period = BspItem::getPeriod($price->period);
            if (in_array($period, array_keys($periods))) {
                if ($periods[$period] > 0) {

                    if ($price->option == "abs") {
                        if ($price->start <= $periods[$period]) {
                            $sum += $price->start * $price->price;
                            $periods[$period] -= $price->start;
                        }
                    }
                    if ($price->option == "range") {
                        if ($price->end <= $periods[$period]) {
                            $range = ($price->end - $price->start) + 1;
                            $sum += $range * $price->price;
                            $periods[$period] -= $range;
                        } else {
                            $sum += $periods[$period] * $price->price;
                        }
                    }
                    if ($price->option == "extra" && $periods[$period] > 0) {
                        $sum += ($periods[$period]) * $price->price;
                    }
                }
            }
        }
        if (in_array($periodmain, array_keys($periods))) {
            if ($periods[$periodmain] > 0) {
                $price = $item->special_deal == 1 ? $item->discount_price : $item->price;
                $sum += $periods[$periodmain] * $price;
            }
        }

        echo CJSON::encode(array("period" => $time, "price" => $sum));
    }

    /**
     * render partial for ajax
     */
    public function actionAddpartial() {
        if (isset($_POST['partial']) && isset($_POST['ajax'])) {
            switch ($_POST['partial']) {
                case "_price_offer_day_row":
                    $model = new BspItemPriceOfferDay;
                    break;
                case "_price_offer_hour_row":
                    $model = new BspItemPriceOfferHour;
                    break;
                case "_price_offer_week_row":
                    $model = new BspItemPriceOfferWeek;
                    break;
                case "_price_offer_month_row":
                    $model = new BspItemPriceOfferMonth;
                    break;
                default:
                    break;
            }
            $this->renderPartial("//offers/price_offers/" . $_POST['partial'], array("model" => $model, "index" => $_POST['index']), false, true);
        }
    }

    /**
     *  set offer images
     * @param type $model
     */
    public function setOfferImage($model) {
        $is_valid = 0;

        if (isset($_POST['BspItemImage'])) {
            $bspItem_imag = array();
            foreach ($_POST['BspItemImage'] as $key => $bspItemImg) {

                if (!empty($bspItemImg['id'])) {
                    $modelItemImg = BspItemImage::model()->findByPk($bspItemImg['id']);
                } else {
                    $modelItemImg = new BspItemImage;
                }
                $modelItemImg->attributes = $bspItemImg;
                if ($modelItemImg->validate()) {
                    $is_valid = 1;
                }
                $bspItem_imag [] = $modelItemImg;
            }
            $model->image_items = $bspItem_imag;
        }

        return $is_valid;
    }

    /**
     * managing recrods
     * @param type $model
     * @return boolean
     */
    private function checkCilds($model) {
        /**
         * Bsp Item Image
         */
        if (isset($_POST['BspItemVideo'])) {
            $model->setRelationRecords('item_video', is_array($_POST['BspItemVideo']) ? $_POST['BspItemVideo'] : array());
        }
        if (isset($_POST['BspItemSoundUrl'])) {
            $model->setRelationRecords('item_related_sounds', is_array($_POST['BspItemSoundUrl']) ? $_POST['BspItemSoundUrl'] : array());
        }
        /**
         * offer prices
         */
        if ($model->per_price == 2) {
            $this->setOfferHour($model);
        } else if ($model->per_price == 3) {
            $this->setOfferDay($model);
        } else if ($model->per_price == 4) {
            $this->setOfferWeek($model);
        } else if ($model->per_price == 5) {
            $this->setOfferMonth($model);
        }
        return true;
    }

    /**
     * set price hour
     */
    public function setOfferHour($model) {
        if (isset($_POST['BspItemPriceOfferHour'])) {
            $model->setRelationRecords('item_price_offers_hour', is_array($_POST['BspItemPriceOfferHour']) ? $_POST['BspItemPriceOfferHour'] : array());
        }
    }

    /**
     * set price DAy
     */
    public function setOfferDay($model) {
        if (isset($_POST['BspItemPriceOfferHour'])) {
            $model->setRelationRecords('item_price_offers_hour', is_array($_POST['BspItemPriceOfferHour']) ? $_POST['BspItemPriceOfferHour'] : array());
        }
        if (isset($_POST['BspItemPriceOfferDay'])) {
            $model->setRelationRecords('item_price_offers_day', is_array($_POST['BspItemPriceOfferDay']) ? $_POST['BspItemPriceOfferDay'] : array());
        }
    }

    /**
     * set price Week
     */
    public function setOfferWeek($model) {
        if (isset($_POST['BspItemPriceOfferHour'])) {
            $model->setRelationRecords('item_price_offers_hour', is_array($_POST['BspItemPriceOfferHour']) ? $_POST['BspItemPriceOfferHour'] : array());
        }
        if (isset($_POST['BspItemPriceOfferDay'])) {
            $model->setRelationRecords('item_price_offers_day', is_array($_POST['BspItemPriceOfferDay']) ? $_POST['BspItemPriceOfferDay'] : array());
        }
        if (isset($_POST['BspItemPriceOfferWeek'])) {
            $model->setRelationRecords('item_price_offers_week', is_array($_POST['BspItemPriceOfferWeek']) ? $_POST['BspItemPriceOfferWeek'] : array());
        }
    }

    /**
     * set price Month
     */
    public function setOfferMonth($model) {
        if (isset($_POST['BspItemPriceOfferHour'])) {
            $model->setRelationRecords('item_price_offers_hour', is_array($_POST['BspItemPriceOfferHour']) ? $_POST['BspItemPriceOfferHour'] : array());
        }
        if (isset($_POST['BspItemPriceOfferDay'])) {
            $model->setRelationRecords('item_price_offers_day', is_array($_POST['BspItemPriceOfferDay']) ? $_POST['BspItemPriceOfferDay'] : array());
        }
        if (isset($_POST['BspItemPriceOfferWeek'])) {
            $model->setRelationRecords('item_price_offers_week', is_array($_POST['BspItemPriceOfferWeek']) ? $_POST['BspItemPriceOfferWeek'] : array());
        }
        if (isset($_POST['BspItemPriceOfferMonth'])) {
            $model->setRelationRecords('item_price_offers_month', is_array($_POST['BspItemPriceOfferMonth']) ? $_POST['BspItemPriceOfferMonth'] : array());
        }
    }

    /**
     * get children category
     */
    public function actionGetChildrenCategories() {
        $data = BspCategory::model()->getChildrenCategories($_REQUEST['id']);
        echo CJSON::encode($data);
    }

    /**
     * sent Message
     */
    public function actionSentMessage() {
        $model = new BspMessage;
        $recieve_user = "";
        if (isset($_POST['BspMessage'])) {
            $model->attributes = $_POST['BspMessage'];
            $model->user_send = Yii::app()->user->id;
            $recieve_user = Users::model()->findByPk($model->user_receive);
            $attachment = $model->attachment;
            if ($model->validate()) {
                if ($model->save()) {
                    if (!empty($attachment)) {
                        $upload_path = DTUploadedFile::creeatRecurSiveDirectories(array("message", $model->Id));
                        $source = $upload_path = DTUploadedFile::getFolderPath(array("temp", Yii::app()->user->id, get_class($model), get_class($model) . "_attachment"));
                        if (is_file($source . $model->attachment)) {
                            copy($source . $model->attachment, $upload_path . $model->attachment);
                            BspMessage::model()->updateByPk($model->Id, array("sFile" => $model->attachment));
                            $email['attachment'] = $source . $model->attachment;
                            $email['type'] = $this->get_mime($source . $model->attachment);
                            $email['name'] = $model->attachment;
                        }
                    }

                    $email['From'] = Yii::app()->user->user->user_email;
                    $email['FromName'] = Yii::app()->user->user->username;
                    $email['To'] = $recieve_user->user_email = "itsgeniusstar@gmail.com";
                    $email['Subject'] = $model->subject;
                    $email['Body'] = $model->detail;
                    $email['Body'] = $this->renderPartial('//common/_email_template', array('email' => $email), true, false);


                    $this->sendEmail2($email);

                    //set flash
                    Yii::app()->user->setFlash("success", "Your Message has been sent");
                }
            }
        }

        $this->renderPartial("//offers/_sent_message", array("model" => $model, "recieve_user" => $recieve_user));
    }

    /**
     * 
     * @param type $file
     * @return boolean
     */

    /**
     * Tries to get mime data of the file. 
     * @return {String} mime-type of the given file 
     * @param $filename String 
     */
    function get_mime($filename) {
        preg_match("/\.(.*?)$/", $filename, $m);    # Get File extension for a better match 
        switch (strtolower($m[1])) {
            case "js": return "application/javascript";
            case "json": return "application/json";
            case "jpg": case "jpeg": case "jpe": return "image/jpg";
            case "png": case "gif": case "bmp": return "image/" . strtolower($m[1]);
            case "css": return "text/css";
            case "xml": return "application/xml";
            case "html": case "htm": case "php": return "text/html";
            default:
                if (function_exists("mime_content_type")) { # if mime_content_type exists use it. 
                    $m = mime_content_type($filename);
                } else if (function_exists("")) {    # if Pecl installed use it 
                    $finfo = finfo_open(FILEINFO_MIME);
                    $m = finfo_file($finfo, $filename);
                    finfo_close($finfo);
                } else {    # if nothing left try shell 
                    if (strstr($_SERVER[HTTP_USER_AGENT], "Windows")) { # Nothing to do on windows 
                        return ""; # Blank mime display most files correctly especially images. 
                    }
                    if (strstr($_SERVER[HTTP_USER_AGENT], "Macintosh")) { # Correct output on macs 
                        $m = trim(exec('file -b --mime ' . escapeshellarg($filename)));
                    } else {    # Regular unix systems 
                        $m = trim(exec('file -bi ' . escapeshellarg($filename)));
                    }
                }
                $m = split(";", $m);
                return trim($m[0]);
        }
    }

    /**
     * delete offer type
     * like saved or recent
     */
    public function actionDeleteoffertype() {
        if (isset($_POST['offer_id'])) {
            if ($_POST['offer_type'] == "recent") {
                $criteria = new CDbCriteria();
                $criteria->addCondition("item_id =" . $_POST['offer_id']);
                $items = BspItemLog::model()->findAll($criteria);
                foreach ($items as $item) {
                    BspItemLog::model()->deleteByPk($item->id);
                }
            } else if ($_POST['offer_type'] == "saved") {
                $criteria = new CDbCriteria();
                $criteria->addCondition("item_id =" . $_POST['offer_id']);
                $criteria->addCondition("create_user_id = ".Yii::app()->user->id);
                $items = BspFarvorite::model()->findAll($criteria);
                foreach ($items as $item) {
                    BspFarvorite::model()->deleteByPk($item->id);
                }
            }
        }
    }

}