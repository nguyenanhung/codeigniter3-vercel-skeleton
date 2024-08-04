<?php

defined('BASEPATH') or exit('No direct script access allowed');

use nguyenanhung\CodeIgniter\BasicHelper\SimpleRequests;

/**
 * Class Requests
 *
 * @author    713uk13m <dev@nguyenanhung.com>
 * @copyright 713uk13m <dev@nguyenanhung.com>
 */
class Requests extends SimpleRequests
{
    protected $mono;
    protected $DEBUG;
    protected $logger_path;
    protected $logger_file;
    protected $timeout;
    protected $header;

    /**
     * Requests constructor.
     *
     * @author   : 713uk13m <dev@nguyenanhung.com>
     * @copyright: 713uk13m <dev@nguyenanhung.com>
     */
    public function __construct()
    {
        parent::__construct();
        $this->DEBUG = true;
        $this->logger_path = __DIR__ . '/../../storage/logs/Requests/';
        $this->timeout = 60;
        $this->header = array();
    }
}
