const mix = require('laravel-mix');
const SVGSpritemapPlugin = require('svg-spritemap-webpack-plugin');
const CopyPlugin = require("copy-webpack-plugin");

mix.sass('resources/sass/app.scss', 'public/css')
    .options({
        processCssUrls: false
    })
    .js('resources/js/app.js', 'public/js')
    .webpackConfig({
        plugins: [
            new SVGSpritemapPlugin(
                'resources/img/**/*.svg',
                {
                    output: {
                        filename: 'img/icons/sprite.svg',
                        svg4everybody: false,
                        chunk: {
                            keep: true,
                        },
                        svgo: {
                            plugins: [
                                {
                                    'removeStyleElement': false
                                },
                                {
                                    'removeAttrs': {
                                        attrs: ["fill", "stroke"]
                                    }
                                }
                            ]
                        },
                    },
                    sprite: {
                        prefix: 'icon-',
                        generate: {
                            title: false,
                        },
                    },
                }
            ),
            new CopyPlugin({
                patterns: [
                    {
                        from: 'resources/img',
                        to: 'img',
                        globOptions: {
                            ignore: ["**/icons/**"],
                        },
                    }
                ],
            }),

        ],
    })
    .sourceMaps();
