# DOCUSAURUS

## fresh install including openapi sample

https://github.com/PaloAltoNetworks/docusaurus-openapi-docs

https://github.com/PaloAltoNetworks/docusaurus-openapi-docs?tab=readme-ov-file#bootstrapping-from-template-new-docusaurus-site
This will fail using "git repository method" so we clone the repo locally

```shell
mkdir phrasea-documentation-builder2/
cd phrasea-documentation-builder2/
# we will use local template
git clone https://github.com/PaloAltoNetworks/docusaurus-template-openapi-docs.git
npx create-docusaurus@3.8.1 --typescript --package-manager pnpm phrasea docusaurus-template-openapi-docs
# ? this installed 3.7 ?

cd phrasea
# bump to 3.8
pnpm i react@18 react-dom@18  @docusaurus/core@3.8.1 @docusaurus/preset-classic@3.8.1 @docusaurus/theme-common@3.8.1
pnpm build

pnpm run serve
```

## add search

https://github.com/praveenn77/docusaurus-lunr-search

```shell
pnpm i docusaurus-lunr-search@3.6 lunr lunr-languages
pnpm dedupe
```

### set config for search
`/docusaurus.config.ts`
```json
...
    plugins: [
        ...,
        // add parsing
        [ 
            require.resolve('docusaurus-lunr-search'),
            {
                languages: ['en', 'fr'] // language codes
            }
        ]
    ],
...
```

## add i18n
### set config
`/docusaurus.config.ts`
```json
...
    // add i18 settings
    i18n: {
        defaultLocale: 'en',
        locales: ['en', 'fr'],
        path: 'i18n',
        localeConfigs: {
            en: {
                label: 'English',
                direction: 'ltr',
                htmlLang: 'en-US',
                calendar: 'gregory',
                path: 'en',
            },
            fr: {
                label: 'Français',
                direction: 'ltr',
                htmlLang: 'fr-FR',
                calendar: 'gregory',
                path: 'fr',
            },
        },
    },
    ...
    themeConfig: {
        navbar: {
            items: [
                ...,
                // add locale dropdown select
                {
                    type: 'localeDropdown',
                    position: 'left',
                },
            ],
        },
    },
    ...
```

### translate md files

a (incomplete) mirror of `docs/*` must be translated to `i18n/{locale}/docusaurus-plugin-content-docs/current`

e.g. translate intro.md to fr
```shell
mkdir -p i18n/fr/docusaurus-plugin-content-docs/current
cp docs/intro.md i18n/fr/docusaurus-plugin-content-docs/current/
```
translate `i18n/fr/docusaurus-plugin-content-docs/current/intro.md` 
```shell
pnpm build
```








pnpm i @docusaurus/core@latest @docusaurus/preset-classic@latest @docusaurus/theme-common@latest

pnpm dedupe

pnpm gen-api-docs all

pnpm build

