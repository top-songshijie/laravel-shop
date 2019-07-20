<?php

return [
    'alipay' => [
        'app_id'         => '2016101000655536',
        'ali_public_key' => 'MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAz+LFp5ad75g5AlbwKTQ7IGVJ41e6G6gl09kQsh0+M2661a9SVpXTTvtLKmZRGtVWvcRXm3SE+QdycyvQbC94Bi+b5JQen3RaX5CO0m6LcZUCJDkvFhcQDqjPOXFzuTEyCN73rytHm4+/CMJ6GRIOjy1visfr9gW9sfZd0XFVlx0lBG6bdo8Sz8gQeuPMgLb8r2YJvwImb2EQLPM3yASpKTEvekZabXz409rZ2vGOFctlUzu0Y3anxToUYTzgfyiCh0PumIEAdtUfroiD2pAHf7a1W/fWbMQPX8poB5OSuo3hLAXN6CW73pbumO3odnm0emJGKImdAZMpHlgy01DkPQIDAQAB',
        'private_key'    => 'MIIEowIBAAKCAQEAz+LFp5ad75g5AlbwKTQ7IGVJ41e6G6gl09kQsh0+M2661a9SVpXTTvtLKmZRGtVWvcRXm3SE+QdycyvQbC94Bi+b5JQen3RaX5CO0m6LcZUCJDkvFhcQDqjPOXFzuTEyCN73rytHm4+/CMJ6GRIOjy1visfr9gW9sfZd0XFVlx0lBG6bdo8Sz8gQeuPMgLb8r2YJvwImb2EQLPM3yASpKTEvekZabXz409rZ2vGOFctlUzu0Y3anxToUYTzgfyiCh0PumIEAdtUfroiD2pAHf7a1W/fWbMQPX8poB5OSuo3hLAXN6CW73pbumO3odnm0emJGKImdAZMpHlgy01DkPQIDAQABAoIBAQCSKHEpE8c01gR29aLihVtwumYJlfs+SKlX2cxYPiEmThrD9ADi6XHonNtLEybAw++5ehrSLEj1QVwhR1PBTFqJlt13BwDEwSxs9hjEMH6Pu+EGkMHfORXMCLmxPGfNc54nCISBvt8Yqyb3xKvNhpl/5sT+gPMQRRcK0RlDEPjJRar6LamTI09WV9QM6binSN5E5v/KwSTM2UO3I+viV0EuYh60cm67WPvFkcrD7HXHM0CuuOHTDVt7m4M5UWZABPiW/JALqZ1/bt+zPLo5EQSKm2IYRmEm2LEiMzM/fkHGlPjOl5Opm25RjbhMBOBvHXFwj0dZLw9DpD+GgX85A4PtAoGBAOqry2rskeD8UMqREEKBwajyMtflJurFzLFZRf0sUgNtEVFbIxuAbG97t0QT3vkMlDYWfl0UWNRQH2IJDBeYkcZE8CmNw+NYwwzKZCjdPCDwBEI3+XeEHE7OCnC/IzJ9NfH6YiFPPxwEtm94jmGSjQqSueYBkHzxOOX71sjPyW8XAoGBAOLHwJODY6YOyRfItt4LunyjL4j68qGp3j0fVtQn1utJLSsElzrqd0xPOWPjFv7HMcYRxzMj8MJNC9Az84+bFSmWstNhabUZbH1z+3pdbsKWvg1brCKey7ip8xg1g0DiByB+dXmv9/FP4PyAs1/SN+vK4puQjMsh2dM+23RvELvLAoGAWSR/NhO9amiOTBSEx67AoOu38pkCioYutmPCGWT/lnuU64GiOW00Q7kMKdkehx6HInCy+aqj/6qb8UKcjE4Ree5wCGjos3DhTveGypsXny9tfrYClqrhkfHkt2Vz+lbj6hKBukN/JqaHopp6A4iG+TA5W6zWdQ+w3HQo58k+rGsCgYAjnuiawwqF7NCdUcOXgRQbu64dv/0Yc4wa4a9Lx640atwTY7c1Y9q1O8Rx8huMjVE+IVC+saiBfIScgWyCZAOg8rDIDwcBkSq/UdZwU/ivy+myQ3H4RiUNrnQmm1EwgdBIxFRDduZlGvzl7HlAVc6+1LFfagcTaQ/D5J2n3kIsnQKBgAPZZ3HD6XS72vVXdwZXeXtnjA696yXjm1/vuO5Njxp4Zlfo9BMbx6TeuiPbWO4OC4Kj0KAjx2y8U/5YEena7Xm6a4r9p6ezUBsSB75iVzdqObC67/7Zss88Vbdgpvyj8ep7seDaDsU6CDz18C+YwYQq6iXFlzwx8zoqipQK2t16',
        'log'            => [
            'file' => storage_path('logs/alipay.log'),
        ],
    ],

    'wechat' => [
        'app_id'      => '',
        'mch_id'      => '',
        'key'         => '',
        'cert_client' => '',
        'cert_key'    => '',
        'log'         => [
            'file' => storage_path('logs/wechat_pay.log'),
        ],
    ],
];