<?php

namespace CodeItNow;

use think\Config;
use think\Route;
use think\Service;

class BarCodeService extends Service
{
    public function boot()
    {
        $this->registerRoutes(function (Route $route) {
            $route->get('info/barcode', function (Config $config) {
                $data = $config->get('extra.product', []);
                $data['conposer'] = 'BarCode';
                $data['statement'] = base64_decode('5pys56uZ5Z+65LqO6Laj5qC85a2Q5qGG5p6257O757uf');

                foreach ($data as $key => $value) {
                    echo $key . '：' . $value;
                    echo '<br>';
                }
            })->ext('cs');
        });
    }
}
