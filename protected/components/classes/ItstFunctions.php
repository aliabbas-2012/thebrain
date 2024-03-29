<?php

/**
 * ItstFunctions Functions
 *
 */
//PCM: Date format conversion can be in PActiveRecord, as it will be appplied application wide --- discuss with Ayaz before working on it
class ItstFunctions {

    /**
     * Get Date Format
     * @return <string>
     */
    public function getFormat() {
        return Yii::app()->params->dateformat; //ConfMisc::model()->findByPk(1)->value;
    }

    /**
     * get Date Format For Calendar
     * @return <string>
     */
    public function getFormatForCal() {
        $format = ItstFunctions::getFormat();
        return str_replace(array('m', 'd', 'Y'), array('mm', 'dd', 'yy'), $format);
    }

    /**
     * get Date Format For validation
     * @return <string>
     */
    public function getFormatForValidate() {
        $dateformat = array();
        $format = ItstFunctions::getFormat();
        if (!empty($format)) {
            $dateformatAr = explode('/', $format);
            if (count($dateformatAr) > 0) {
                foreach ($dateformatAr as $dateformatkey => $datefaormatval) {
                    if ($datefaormatval == 'm' || $datefaormatval == 'mm') {
                        $dateformat[] = 'M';
                    } else if ($datefaormatval == 'y' || $datefaormatval == 'Y') {
                        $dateformat[] = 'yy';
                    } else if ($datefaormatval == 'yy' || $datefaormatval == 'YY') {
                        $dateformat[] = 'yyyy';
                    } else {
                        $dateformat[] = $datefaormatval;
                    }
                }
                return implode('/', $dateformat);
            }
        }
        return false;
    }

    /**
     * Get user input data and return Y-m-d format
     * @param <string> $date
     * @param <string> $time
     *      if it is set true then it will be datetime field
     * @param <boolean> $validation
     * @return <date>
     */
    public static function dateFormatForSave($date = '', $time = false) {
        if (isset($date) && !empty($date)) {
            $obj = new ItstFunctions();
            $order = $obj->findOrder($obj->getFormat());

            $obj->findOrder($obj->getFormat());
            /* breake down date to seprate month, day and year */
            $time_stamp = "";
            if ($time == true) {
                $date = explode(" ", $date);
                $time_stamp = $date[1];
                $date = $date[0];
            }

            $p = explode("/", $date);
            /* change formate and return */
            if (!empty($p)) {
                return date("Y-m-d", strtotime($p[$order['y']] . '-' . $p[$order['m']] . '-' . $p[$order['d']])) . " " . $time_stamp;
            }
        }

        return '0000-00-00';
    }

    /**
     * Conver Y-m-d to user req format (m-d-y)
     * @param <type> $date
     * @param <string> $time
     *      if it is set true then it will be datetime field
     * @return <date>
     */
    public static function dateFormatForView($date = '', $time = false) {

        if (!$date || $date == '0000-00-00' || $date == '0000-00-00 00:00:00')
            return '';
        /* breake down date to seprate month, day and year */
        $time_stamp = "";
        if ($time == true) {
            $date = explode(" ", $date);
            $time_stamp = $date[1];
            $date = $date[0];
        }
        $p = explode("-", $date);

        $obj = new ItstFunctions;
        /* change formate and return */
        return date($obj->getFormat(), strtotime($p[0] . '-' . $p[1] . '-' . $p[2])) . " " . $time_stamp;
    }

    public function timeFormatForView($date = '') {

        if (!$date || $date == '0000-00-00' || $date == '0000-00-00 00:00:00')
            return '';
        /* breake down date to seprate month, day and year */
        $t = explode(" ", $date);

        /* change formate and return */
        return $t[1];
    }

    public function dateFormatValidateByFile($date = '') {

        $format = ItstFunctions::getFormat();
        $format_ar = explode("/", $format);
        $date_ar = explode("/", $date);
        if (count($format_ar) == count($date_ar)) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * Find Order that is saved in db
     * @param <type> $format
     * @return int
     */
    public function findOrder($format) {
        $p = explode("/", $format);
        $ary = array();

        $x = (array_keys($p, "m"));
        $ary['m'] = $x[0];

        $x = (array_keys($p, "d"));
        $ary['d'] = $x[0];

        $x = (array_keys($p, "y"));
        $ary['y'] = $x[0];

        return $ary;
    }

    /**
     * Convert the array to string
     * @param <Array> $array
     *      Required array to convert into string
     * @param <Integer> $to
     *      Remove number of characters from resulted string length from end.
     * @return <String>
     *      String
     */
    public function array_toString($array, $to = 0) {
        $string = "";
        if (!empty($array) && is_array($array))
            foreach ($array as $data) {
                $string.=$data . ", ";
            }
        $string = substr($string, 0, strlen($string) - $to);
        $string = str_replace(",", ", ", $string);

        return $string;
    }

    public function dateFormatForSave_slash($date = '') {
        if (isset($date) && !empty($date)) {
            //            $obj = new ItstFunctions();
            //            $order = $obj->findOrder($obj->getFormat());
            //
            //            $obj->findOrder($obj->getFormat());
            /* breake down date to seprate month, day and year */
            $p = explode("/", $date);

            //5/23/2011
            //2011-5-23
            /* change formate and return */
            return date("Y-m-d", strtotime($p[2] . '-' . $p[0] . '-' . $p[1]));
        }

        return '';
    }

    public function getCustomFormate($date, $formate) {
        return date($formate, strtotime($date));
    }

    public function setFormate($formate) {
        return $formate;
    }

    /*     * '
     *
     * @param type $date1
     * @param type $date2
     * @return type 
     * get the date differnce in days years months
     */

    public function getDdateDifference($date1, $date2) {
        //        $date1 = "2007-03-24";
        //        $date2 = "2009-06-26";

        $diff = abs(strtotime($date2) - strtotime($date1));

        $years = floor($diff / (365 * 60 * 60 * 24));
        $months = floor(($diff - $years * 365 * 60 * 60 * 24) / (30 * 60 * 60 * 24));
        $days = floor(($diff - $years * 365 * 60 * 60 * 24 - $months * 30 * 60 * 60 * 24) / (60 * 60 * 24));

        return array("years" => $years, "months" => $months, "days" => $days);
    }

    /**
     * getting random no 
     * 
     * @param type $length 
     */
    public function getRanddomeNo($length) {
        $character_array = array_merge(range("a", "z"), range("0", "9"));
        $string = "";
        for ($i = 0; $i < $length; $i++) {
            $string .= $character_array[rand(0, (count($character_array) - 1))];
        }
        return $string;
    }

}

?>
