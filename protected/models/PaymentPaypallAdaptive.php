<?php

/**
 * This is the model class for table "payment_paypall_adaptive".
 *
 * The followings are the available columns in table 'payment_paypall_adaptive':
 * @property string $id
 * @property integer $sender_id
 * @property integer $buyer_id
 * @property integer $item_id
 * @property string $buyer_status
 * @property string $seller_status
 * @property double $amount
 * @property double $extra_amount
 * @property double $start_transfer_puzzzle
 * @property double $puzzzle_commission
 * @property double $puzzzle_admin_status
 * @property string $ip_address
 * @property string $create_time
 * @property string $create_user_id
 * @property string $update_time
 * @property string $update_user_id
 *
 * The followings are the available model relations:
 * @property PaymentPaypallAdaptiveHistory[] $paymentPaypallAdaptiveHistories
 */
class PaymentPaypallAdaptive extends DTActiveRecord {

    public $_transfer_amount;
    public $_transfer_status;
    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'payment_paypall_adaptive';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('sender_id, buyer_id, item_id, ip_address, create_time, create_user_id, update_time, update_user_id', 'required'),
            array('sender_id, buyer_id, item_id', 'numerical', 'integerOnly' => true),
            array('amount, extra_amount, start_transfer_puzzzle, puzzzle_commission', 'numerical'),
            array('buyer_status, seller_status', 'length', 'max' => 9),
            array('ip_address', 'length', 'max' => 50),
            array('_transfer_status,puzzzle_admin_status', 'safe'),
            array('create_user_id, update_user_id', 'length', 'max' => 11),
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('id, sender_id, buyer_id, item_id, buyer_status, seller_status, amount, extra_amount, start_transfer_puzzzle, puzzzle_commission, ip_address, create_time, create_user_id, update_time, update_user_id', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
            'paymentPaypallAdaptiveHistories' => array(self::HAS_MANY, 'PaymentPaypallAdaptiveHistory', 'paypall_adaptive_id'),
            'seller' => array(self::BELONGS_TO, 'Users', 'sender_id'),
            'buyer' => array(self::BELONGS_TO, 'Users', 'buyer_id'),
            'offer' => array(self::BELONGS_TO, 'BspItem', 'item_id'),
            'order' => array(self::HAS_ONE, 'BspOrder', 'payment_adaptive_id'),
            'paypall_response' => array(self::HAS_ONE, 'Paypalresponse', 'paypal_action_id', 'condition' => 'item_id  IS NOT NULL AND Ack = "Success"', "order" => " paypall_response.id DESC"),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'id' => 'ID',
            'sender_id' => 'Sender',
            'buyer_id' => 'Buyer',
            'item_id' => 'Item',
            'buyer_status' => 'Buyer Status',
            'seller_status' => 'Seller Status',
            'amount' => 'Amount',
            'extra_amount' => 'Extra Amount',
            'start_transfer_puzzzle' => 'Start Transfer Puzzzle',
            'puzzzle_commission' => 'Puzzzle Commission',
            'puzzzle_admin_status' => 'Puzzzle Admin Status',
            'ip_address' => 'Ip Address',
            'create_time' => 'Create Time',
            'create_user_id' => 'Create User',
            'update_time' => 'Update Time',
            'update_user_id' => 'Update User',
        );
    }

    /**
     * Retrieves a list of models based on the current search/filter conditions.
     *
     * Typical usecase:
     * - Initialize the model fields with values from filter form.
     * - Execute this method to get CActiveDataProvider instance which will filter
     * models according to data in model fields.
     * - Pass data provider to CGridView, CListView or any similar widget.
     *
     * @return CActiveDataProvider the data provider that can return the models
     * based on the search/filter conditions.
     */
    public function search() {
        // @todo Please modify the following code to remove attributes that should not be searched.

        $criteria = new CDbCriteria;

        $criteria->compare('id', $this->id, true);
        $criteria->compare('sender_id', $this->sender_id);
        $criteria->compare('buyer_id', $this->buyer_id);
        $criteria->compare('item_id', $this->item_id);
        $criteria->compare('buyer_status', $this->buyer_status, true);
        $criteria->compare('seller_status', $this->seller_status, true);
        $criteria->compare('amount', $this->amount);
        $criteria->compare('extra_amount', $this->extra_amount);
        $criteria->compare('start_transfer_puzzzle', $this->start_transfer_puzzzle);
        $criteria->compare('puzzzle_commission', $this->puzzzle_commission);
        $criteria->compare('puzzzle_admin_status', $this->puzzzle_admin_status);
        $criteria->compare('ip_address', $this->ip_address, true);
        $criteria->compare('create_time', $this->create_time, true);
        $criteria->compare('create_user_id', $this->create_user_id, true);
        $criteria->compare('update_time', $this->update_time, true);
        $criteria->compare('update_user_id', $this->update_user_id, true);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    /**
     * Returns the static model of the specified AR class.
     * Please note that you should have this exact method in all your CActiveRecord descendants!
     * @param string $className active record class name.
     * @return PaymentPaypallAdaptive the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    /**
     * 
     * @return type
     */
    public function afterSave() {
        $this->saveHistory();
        return parent::afterSave();
    }

    /**
     * save history for log
     */
    public function saveHistory() {
        $model = new PaymentPaypallAdaptiveHistory();
        $model->paypall_adaptive_id = $this->id;
        $model->buyer_status = $this->buyer_status;
        $model->seller_status = $this->seller_status;
        $model->amount = $this->amount;
        $model->extra_amount = $this->extra_amount;
        $model->start_transfer_puzzzle = $this->start_transfer_puzzzle;
        $model->puzzzle_commission = $this->puzzzle_commission;
        $model->puzzzle_admin_status = $this->puzzzle_admin_status;
        $model->save();
    }

    /**
     * 
     * @param type $owner
     * @param type $offer
     */
    public function saveInitialPaymentOrder($owner, $offer) {

        $payPallSetting = Paypalsettings::model()->findByPk(2);
        //check old offer with same user

        $criteria = new CDbCriteria();
        $criteria->addCondition("item_id = " . $offer->id . " AND seller_status <> 'rejected' AND buyer_id = ".Yii::app()->user->id);
        $old = PaymentPaypallAdaptive::model()->count($criteria);
        if ($old == 0) {
            $model = new PaymentPaypallAdaptive;
            $model->buyer_id = Yii::app()->user->id;
            $model->sender_id = $owner->id;
            $model->item_id = $offer->id;
            if ($owner->paypal_mail != "") {
                $model->buyer_status = "initiated";
            }
            if ($offer->discount_price != "") {
                $model->amount = $offer->discount_price;
            } else {
                $model->amount = $offer->price;
            }

            $model->seller_status = "initiated";
            $model->puzzzle_commission = $payPallSetting->comission_rate;
            $model->ip_address = Yii::app()->request->userHostAddress;


            $model->save();
            $this->generateNotification($model->sender_id, $model->id, "seller", "You have recieved invitation to sale your offer");
            return true;
        } else {
            return false;
        }
    }

    /**
     * 
     * @param type $user_id
     * @param type $payment_adaptive_id
     * @param type $message
     */
    public function generateNotification($user_id, $payment_adaptive_id, $type, $message) {
        $model = new BspNotify();
        $model->user_id = $user_id;
        $model->payment_adaptive_id = $payment_adaptive_id;
        $model->message = $message;
        $model->user_type = $type;
        $model->save();
    }
    /*
     * 
     */
    public function afterFind() {
        $this->_transfer_status = 0;
        if(
                $this->buyer_status == "completed" && 
                $this->seller_status == "confirmed" && 
                $this->puzzzle_admin_status == "initiated"){
             $this->_transfer_status = 1;
        }
        return parent::afterFind();
    }

    /**

     *  money will be transfred to puzzle
     * 

     * @param type $paymentAdaptive
     * @param type $notifyModel
     * @return type
     */
    public function payToPuzzle($paymentAdaptive, $notifyModel) {
        $payPallSetting = Paypalsettings::model()->findByPk(2);
        Yii::import('application.extensions.paypalladaptive.samples.PPBootStrap');
        Yii::import('application.extensions.paypalladaptive.samples.Common.Constants');
        Yii::import('application.extensions.paypalladaptive.samples.Common.Error');
        Yii::import('application.extensions.paypalladaptive.samples.Common.Response');

        require_once(Yii::getPathOfAlias('application.extensions.paypalladaptive.samples.PPBootStrap')) . ".php";
        require_once(Yii::getPathOfAlias('application.extensions.paypalladaptive.samples.Common.Constants')) . ".php";

        $error_adaptive = Yii::getPathOfAlias('application.extensions.paypalladaptive.samples.Common.Error');
        $response_adaptive = Yii::getPathOfAlias('application.extensions.paypalladaptive.samples.Common.Response');

        $host_base = Yii::app()->request->hostInfo;
        $cancel_url = $host_base . Yii::app()->controller->createUrl("/web/offers/payPallPayment", array("id" => $notifyModel->Id, "status" => "cancelled"));
        $return_url = $host_base . Yii::app()->controller->createUrl("/web/offers/payPallPayment", array("id" => $notifyModel->Id, "status" => "completed"));


        define("DEFAULT_SELECT", "- Select -");
        spl_autoload_unregister(array('YiiBase', 'autoload'));


        $receiver = array();
        /*
         * A receiver's email address 
         */

        $receiver[0] = new Receiver();
        $receiver[0]->email = $payPallSetting->app_account_email;
        /*
         *  	Amount to be credited to the receiver's account 
         */
        $receiver[0]->amount = (double) $payPallSetting->comission_rate;
        /*
         * Set to true to indicate a chained payment; only one receiver can be a primary receiver. Omit this field, or set it to false for simple and parallel payments. 
         */
        $receiver[0]->primary = false;

        $receiverList = new ReceiverList($receiver);


        $payRequest = new PayRequest(new RequestEnvelope("en_US"), "PAY", $cancel_url, "USD", $receiverList, $return_url);

        $payRequest->senderEmail = Yii::app()->user->User->paypal_mail;

        $payRequest->feesPayer = "SENDER";

        $service = new AdaptivePaymentsService(Paypalsettings::model()->getPayPallAdaptiveSetting());
        try {
            /* wrap API method calls on the service object with a try catch */
            $response = $service->Pay($payRequest);
            spl_autoload_register(array('YiiBase', 'autoload'));
            
            return Paypalresponse::model()->storeResponse($response, $paymentAdaptive, $payPallSetting);
        } catch (Exception $ex) {
            
        }
       
    
    }

}
