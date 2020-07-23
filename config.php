<?php

return [
    'production' => false,
    'baseUrl' => 'https://neocr.netlify.app/',
    'site' => [
        'title' => 'My website',
        'description' => 'Personal page of Felipe Alvarado S.',
        'image' => 'default-share.png',
    ],
    'owner' => [
        'name' => 'Felipe Alvarado S',
    ],
    'services' => [
        'cmsVersion' => '2.10.49',
        'analytics' => 'UA-135290824-4',
        'disqus' => 'artisanstatic',
        'formcarry' => 'XXXXXXXXXXXX',
        'cloudinary' => [
            'cloudName' => 'dxzfyy1fb',
            'apiKey' => '453259446748744',
        ],
    ],
    'collections' => [
        'posts' => [
            'path' => 'posts/{filename}',
            'sort' => '-date',
            'extends' => '_layouts.post',
            'section' => 'postContent',
            'isPost' => true,
            'comments' => true,
            'tags' => [],
            'hasTag' => function ($page, $tag) {
                return collect($page->tags)->contains($tag);
            },
            'prettyDate' => function ($page, $format = 'M j, Y') {
                return date($format, $page->date);
            },
        ],
        'tags' => [
            'path' => 'tags/{filename}',
            'extends' => '_layouts.tag',
            'section' => '',
            'name' => function ($page) {
                return $page->getFilename();
            },
        ],
    ],
];
