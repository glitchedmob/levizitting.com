import type { Config } from 'stylelint';

const config: Config = {
    extends: [
        'stylelint-config-standard',
        'stylelint-config-standard-scss',
        'stylelint-config-recommended-vue/scss',
    ],
    rules: {},
};

export default config;
