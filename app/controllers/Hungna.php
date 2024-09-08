<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Hungna extends HungNG_CI_Base_Controllers
{
    public function test()
    {
        exit('nguyenanhung');
    }

    public function admin_cache(): void
    {
        $auth = config_item('admin_config_basic_auth');
        $username = $this->input->get_post('username', true);
        $password = $this->input->get_post('password', true);
        $type = $this->input->get_post('type', true);
        if ($username === null || $password === null) {
            $response = [
                'serviceId' => $auth['serviceId'] ?? '',
                'result' => EXIT_USER_INPUT,
                'desc' => 'Sai hoặc thiếu tham số'
            ];
        } elseif (($username != $auth['username']) || ($password != $auth['password'])) {
            $response = [
                'serviceId' => $auth['serviceId'] ?? '',
                'result' => EXIT_USER_INPUT,
                'desc' => 'Sai chữ ký xác thực'
            ];
        } else {
            $this->load->driver('cache', config_item('main_cache_adapter'));
            if ($type === 'info') {
                $response = [
                    'result' => EXIT_SUCCESS,
                    'serviceId' => $auth['serviceId'],
                    'framework' => $auth['framework'],
                    'desc' => 'Lấy thông tin Cache',
                    'details' => [
                        'info' => $this->cache->cache_info()
                    ]
                ];
            } else {
                $response = [
                    'result' => EXIT_SUCCESS,
                    'serviceId' => $auth['serviceId'],
                    'framework' => $auth['framework'],
                    'desc' => 'Xóa Cache',
                    'details' => [
                        'info' => $this->cache->cache_info(),
                        'clean' => $this->cache->clean()
                    ]
                ];
            }
        }
        $this->output
            ->set_content_type('application/json')
            ->set_output(json_encode($response, JSON_PRETTY_PRINT))
            ->_display();
        exit();
    }
}
