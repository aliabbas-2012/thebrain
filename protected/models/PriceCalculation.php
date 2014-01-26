<?php

/**
 * 
 */
class PriceCalculation extends CFormModel {

    public $start_date, $start_time, $end_date, $end_time, $item_id;

    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('start_date,start_time,end_date,end_time,item_id', 'safe'),
        );
    }

    /**
     *  usef for price calculation
     * @param type $startTimeStr
     * @param type $allUnits
     * @param type $endTimeStr
     * @param type $offset
     * @return boolean
     */
    public function time_since($startTimeStr, $allUnits = false, $endTimeStr = false, $offset) {
        //Set start and end times in seconds
        $endTimeInt = (!$endTimeStr) ? time() : strtotime($endTimeStr);
        $startTimeInt = strtotime($startTimeStr);

        if ($endTimeInt === false || $startTimeInt === false) {
            return false;
        }
        //Calculate the difference
        $timeDiff = $endTimeInt - $startTimeInt; //Get the difference in seconds
        $measurements = array(
            //'year'   => 31536000,
            'Month' => 2592000,
            'Week' => 604800,
            'Day' => 86400,
            'Hour' => 3600,
                // 'minute' => 60,
                // 'second' => 1
        );
        $labels = array_slice(array_keys($measurements), array_search($offset, array_keys($measurements)));
        $returnValues = array();
        foreach ($labels as $label) {
            $measurement = $measurements[$label];
            if ($timeDiff >= $measurement) {
                $units = floor($timeDiff / $measurement);
                $timeDiff -= $units * $measurement;
                $returnValues[$label] = $units;
            }
        }

        return $returnValues;
    }

    /**
     * 
     * @param type $startDate
     * @param type $endDate
     * @return int
     */
    protected function checkDay($startDate, $endDate) {
        $start_date = strtotime($startDate);
        $last_date = strtotime($endDate);
        $counter = 0;
        $range = 0;
        while ($start_date <= $last_date) {
            $start_date = strtotime('+1 day', $start_date);
            if (date('N', $start_date) == 5) {
                $range = 1;
            }
            if (date('N', $start_date) == 1 && $range == 1) {
                $range = 2;
            }
            if ($range == 2) {
                $counter++;
                $range = 0;
            }
        }
        return $counter;
    }

}

?>
