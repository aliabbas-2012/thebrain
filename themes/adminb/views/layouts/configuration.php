<?php
/**
 * pcm widgetsto
 */
if (isset($this->PcmWidget['filter'])) {
    
    $this->widget($this->PcmWidget['filter']['name'], $this->PcmWidget['filter']['attributes']);
    
 
}

?>