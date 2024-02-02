<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 * Class Welcome
 *
 * @author    713uk13m <dev@nguyenanhung.com>
 * @copyright 713uk13m <dev@nguyenanhung.com>
 */
class Welcome extends HungNG_CI_Base_Controllers
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('directory');
    }

    public function index(): void
    {
        $response = [
            'code' => StatusCodes::HTTP_OK,
            'message' => StatusCodes::$statusTexts[StatusCodes::HTTP_OK],
            'data' => [
                'author_name' => 'Hung Nguyen',
                'author_email' => 'dev@nguyenanhung.com'
            ],
            'request' => [
                'ip' => getIPAddress(),
                'user_agent' => $this->input->user_agent(true)
            ]
        ];
        $this->output
            ->set_status_header()
            ->set_content_type('application/json', 'utf-8')
            ->set_output(json_encode($response, JSON_PRETTY_PRINT))
            ->_display();
        exit;
    }

    public function ip(): void
    {
        $this->output->set_status_header()->set_content_type('application/json', 'utf-8')->set_output(getIpInformation())->_display();
        exit;
    }

    public function php()
    {
        phpinfo();
    }
}
