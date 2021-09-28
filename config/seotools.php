<?php
/**
 * @see https://github.com/artesaos/seotools
 */

return [
    'meta' => [
        /*
         * The default configurations to be used by the meta generator.
         */
        'defaults'       => [
            'title'        => "Saycheers.com", // set false to total remove
            'titleBefore'  => false, // Put defaults.title before page title, like 'It's Over 9000! - Dashboard'
            'description'  => 'Produk CHEERS diambil dari sumber mata air terlindungi, yang telah melalui seleksi dan penelitian bertahun-tahun oleh para ahli, sehingga terjaga kualitas dan kesegarannya. Diproduksi dengan teknologi modern dan higienis tanpa bahan kimia tambahan.', // set false to total remove
            'separator'    => ' - ',
            'keywords'     => ['Cheers','Saycheers','saycheers.com','cheers','alkaline','air minum','air mineral','air minum ph tinggi','air minum cheers'],
            'canonical'    => false, // Set null for using Url::current(), set false to total remove
            'robots'       => false, // Set to 'all', 'none' or any combination of index/noindex and follow/nofollow
        ],
        /*
         * Webmaster tags are always added.
         */
        'webmaster_tags' => [
            'google'    => null,
            'bing'      => null,
            'alexa'     => null,
            'pinterest' => null,
            'yandex'    => null,
            'norton'    => null,
        ],

        'add_notranslate_class' => false,
    ],
    'opengraph' => [
        /*
         * The default configurations to be used by the opengraph generator.
         */
        'defaults' => [
            'title'       => 'Saycheers.com', // set false to total remove
            'description' => 'Produk CHEERS diambil dari sumber mata air terlindungi, yang telah melalui seleksi dan penelitian bertahun-tahun oleh para ahli, sehingga terjaga kualitas dan kesegarannya. Diproduksi dengan teknologi modern dan higienis tanpa bahan kimia tambahan.', // set false to total remove
            'url'         => null, // Set null for using Url::current(), set false to total remove
            'type'        => 'WebPage',
            'site_name'   => false,
            'images'      => [],
        ],
    ],
    'twitter' => [
        /*
         * The default values to be used by the twitter cards generator.
         */
        'defaults' => [
            'card'        => 'Saycheers.com',
            'site'        => '@CheersWater',
        ],
    ],
    'json-ld' => [
        /*
         * The default configurations to be used by the json-ld generator.
         */
        'defaults' => [
            'title'       => 'Saycheers.com', // set false to total remove
            'description' => 'Produk CHEERS diambil dari sumber mata air terlindungi, yang telah melalui seleksi dan penelitian bertahun-tahun oleh para ahli, sehingga terjaga kualitas dan kesegarannya. Diproduksi dengan teknologi modern dan higienis tanpa bahan kimia tambahan.', // set false to total remove
            'url'         => null, // Set null for using Url::current(), set false to total remove
            'type'        => 'WebPage',
            'images'      => [],
        ],
    ],
];
