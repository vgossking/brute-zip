<?php

/**
 * Created by PhpStorm.
 * User: vu.vuong
 * Date: 5/15/2017
 * Time: 3:20 PM
 */
class UnzipBrute
{
    private $zip;
    private $source;
    private $destination;

    public function __construct(ZipArchive $zip)
    {
        $this->zip = $zip;
    }

    /**
     * @return mixed
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * @return mixed
     */
    public function getDestination()
    {
        return $this->destination;
    }

    /**
     * @param mixed $destination
     */
    public function setDestination($destination)
    {
        $this->destination = $destination;
    }

    /**
     * @param mixed $source
     */
    public function setSource($source)
    {
        $this->source = $source;
    }

    public function prepareZip(){
        if($this->zip->open($this->source) === true) return true;
        return false;
    }

    public function unzip($password){
        if($this->prepareZip()){
            if($this->zip->setPassword($password)){
                if($this->zip->extractTo(__DIR__)){
                    echo "PASSWORD = ".$password;
                    echo "<br/>";
                    return 1;
                }
            }
        }
        return 0;
    }

    public function brute(){
        $password = '';
        $charSet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890!@#$%^&*()';
        $size = strlen($charSet);
        $baseSize = 1;
        $counter = 0;
        $time_pre = microtime(true);
        while(true){
            for($i=0;$i<$size;$i++) {
                $base[0] = $i;
                $pass = '';
                for($j=$baseSize-1;$j>=0;$j--) {
                    $password = $charSet[$base[$j]];
                    $pass.=$password;
                    $test = $this->unzip($pass);
                    if($test == 1){
                        $time_end = microtime(true);
                        $time_doing = $time_end - $time_pre;
                        echo 'Time = '.$time_doing;
                        echo "<br/>";
                        exit;
                    }
                }

                //echo '<br/>';
            }
            // How many $base elements reached their max?
            for($i=0;$i<$baseSize;$i++) {
                if($base[$i] == $size-1) $counter++;
                else break;
            }
            // Every array element reached max value? Expand array and set values to 0.
            if($counter == $baseSize) {
                // Notice <=$baseSize! Initialize 0 values to all existing array elements and ADD 1 more element with that value
                for($i=0;$i<=$baseSize;$i++) {
                    $base[$i] = 0;
                }
                $baseSize = count($base);
            }
            // Carry one
            else {
                $base[$counter]++;
                for($i=0;$i<$counter;$i++) $base[$i] = 0;
            }
            $counter=0;
        }
    }
}