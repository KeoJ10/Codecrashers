<?php 
namespace classes\logger;

class logger {
private $handle;

public function __construct($filename, $mode) {
    if(file_exists($filename)){
    $this->handle = fopen($filename, $mode);
}
}

public function __destruct() {
        fclose($this->handle);
}

public function addLog($author, $message) {
        $message = preg_replace('/\;/', '{semicolen}', $message);
        $log = $author . ';' . $message . ';' . date('Y-m-d H:i:s'). ';' . $_SERVER['REMOTE_ADDR'] . PHP_EOL;
        fwrite($this->handle, $log);
}

public function showLog() : string {
    $logContent = '';
    $array = [];
        while (!feof($this->handle)) {
            $currentLine = fgets($this->handle);
            if(strlen($currentLine) == 0) {
                continue;
            }
            $array = preg_split('/;/', $currentLine);
            $array = preg_replace('/\{semicolen\}/', ';', $array);
            $logContent .= '<article> <p>' . $array[1] . '</p><p>geschreven door <strong>'. $array[0] . '</strong> op ' . $array[2] . ' vanaf ip adress ' . $array[3] . '</article></p>';
        }
    return $logContent;
}
}
?>