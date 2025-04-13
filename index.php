<?php
include('libraries/log4php/Logger.php');
Logger::configure('config.xml');

/**
 * This is a classic usage pattern: one logger object per class.
 */
final class logsDetail {
    private $log;
     
    /** Logger is instantiated in the constructor. */
    public function __construct()
    {
        /* The __CLASS__ constant holds the class name, i.e. "logsDetail".
        Therefore this creates a logger named "logsDetail" (which we configured in the config.xml file)*/
        $this->log = Logger::getLogger(__CLASS__);
    }
 
    /** Logger can be used from any member method. */
    public function appendLogsDetail()
    {
        // $this->log->info("This is an INFO log message." . PHP_EOL . print_r($this->log, true));
        // $this->log->debug("This is a DEBUG log message.");
        // $this->log->warn("This is a WARNING log message.");
        // $this->log->error("This is an ERROR log message.");
        // $this->log->fatal("This is a FATAL log message.");
        for ($i=0; $i<=100; $i++) {
            $this->log->info("This is an INFO log message.");
            $this->log->debug("This is a DEBUG log message.");
            $this->log->warn("This is a WARNING log message.");
            $this->log->error("This is an ERROR log message.");
            $this->log->fatal("This is a FATAL log message.");
        }
    }
}
 
$logs_data = new logsDetail();
if(isset($logs_data)) {
    $logs_data->appendLogsDetail();
    echo "Logs has been added successfully..". PHP_EOL;
}

?>