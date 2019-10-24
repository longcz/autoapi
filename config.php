<?php
return [
    'title'         => 'apidoc',                 # 文档title
    'version'       => '1.0.0',                  # 文档版本
    'copyright'     => '版权信息',              # 版权信息
    'password'      => '',                       # 访问密码，为空不需要密码
    'qq'            => '0000000000',             # 联系方式
    'document'      => [
        "explain" => [
            'name' => '说明',
            'list' => [
                'tags'   => ['测试','测试1'],
                'labels' => ['L', 'N'],
            ]
        ],
        "code"    => [
            'name' => '返回码',
            'list' => [
                '0'   => '成功',
                '1'   => '失败'
            ]
        ]
    ],
    'header' => [  // 全局请求header,一般存放token之类的
    ],
    'params' => [  // 全局请求参数
        '__uid' => 2
    ],
    'controller'    => [  // 需要生成文档的类
        [
            'name' => 'v2',
            'list' => [
                'api\controller\v2\Open',
                'api\controller\v2\User'
            ]
        ],
        [
            'name' => 'v3',
            'list' => [
            ]
        ]
    ],
    'filter_method' => [ // 过滤、不解析的方法名称
        '_empty'
    ]
];