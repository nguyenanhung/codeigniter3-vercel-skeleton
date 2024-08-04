<?php

defined('BASEPATH') or exit('No direct script access allowed');

/**
 * Class Test_module
 *
 * @author    713uk13m <dev@nguyenanhung.com>
 * @copyright 713uk13m <dev@nguyenanhung.com>
 */
class Test_module extends HungNG_CI_Base_Module
{
    /**
     * First_module constructor.
     *
     * @author   : 713uk13m <dev@nguyenanhung.com>
     * @copyright: 713uk13m <dev@nguyenanhung.com>
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
    }

    /**
     * Function index
     *
     * @author   : 713uk13m <dev@nguyenanhung.com>
     * @copyright: 713uk13m <dev@nguyenanhung.com>
     * @time     : 09/10/2021 24:58
     */
    public function index(): void
    {
        $response = [
            'code' => StatusCodes::HTTP_OK
        ];
        $this->output
            ->set_status_header()
            ->set_content_type('application/json', 'uft-8')
            ->set_output(json_encode($response))
            ->_display();
        exit();
    }
}
