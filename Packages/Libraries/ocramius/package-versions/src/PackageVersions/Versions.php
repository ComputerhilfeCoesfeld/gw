<?php

declare(strict_types=1);

namespace PackageVersions;

/**
 * This class is generated by ocramius/package-versions, specifically by
 * @see \PackageVersions\Installer
 *
 * This file is overwritten at every run of `composer install` or `composer update`.
 */
final class Versions
{
    public const ROOT_PACKAGE_NAME = 'neos/neos-base-distribution';
    /**
     * Array of all available composer packages.
     * Dont read this array from your calling code, but use the \PackageVersions\Versions::getVersion() method instead.
     *
     * @var array<string, string>
     * @internal
     */
    public const VERSIONS          = array (
  'behat/transliterator' => 'v1.2.0@826ce7e9c2a6664c0d1f381cbb38b1fb80a7ee2c',
  'composer/ca-bundle' => '1.2.5@62e8fc2dc550e5d6d8c9360c7721662670f58149',
  'composer/composer' => '1.9.1@bb01f2180df87ce7992b8331a68904f80439dd2f',
  'composer/semver' => '1.5.0@46d9139568ccb8d9e7cdd4539cab7347568a5e2e',
  'composer/spdx-licenses' => '1.5.2@7ac1e6aec371357df067f8a688c3d6974df68fa5',
  'composer/xdebug-handler' => '1.4.0@cbe23383749496fe0f373345208b79568e4bc248',
  'doctrine/annotations' => 'v1.8.0@904dca4eb10715b92569fbcd79e201d5c349b6bc',
  'doctrine/cache' => '1.10.0@382e7f4db9a12dc6c19431743a2b096041bcdd62',
  'doctrine/collections' => '1.6.4@6b1e4b2b66f6d6e49983cebfe23a21b7ccc5b0d7',
  'doctrine/common' => 'v2.11.0@b8ca1dcf6b0dc8a2af7a09baac8d0c48345df4ff',
  'doctrine/dbal' => 'v2.10.0@0c9a646775ef549eb0a213a4f9bd4381d9b4d934',
  'doctrine/event-manager' => '1.1.0@629572819973f13486371cb611386eb17851e85c',
  'doctrine/inflector' => '1.3.1@ec3a55242203ffa6a4b27c58176da97ff0a7aec1',
  'doctrine/instantiator' => '1.3.0@ae466f726242e637cebdd526a7d991b9433bacf1',
  'doctrine/lexer' => '1.2.0@5242d66dbeb21a30dd8a3e66bf7a73b66e05e1f6',
  'doctrine/migrations' => 'v1.8.1@215438c0eef3e5f9b7da7d09c6b90756071b43e6',
  'doctrine/orm' => 'v2.7.0@4d763ca4c925f647b248b9fa01b5f47aa3685d62',
  'doctrine/persistence' => '1.3.3@99b196bbd4715a94fa100fac664a351ffa46d6a5',
  'doctrine/reflection' => 'v1.0.0@02538d3f95e88eb397a5f86274deb2c6175c2ab6',
  'flowpack/neos-frontendlogin' => '4.0.0@d7759e58389730736cf7c59b5b4dc38fba7e4536',
  'gedmo/doctrine-extensions' => 'v2.4.38@81681364331b131518060e4776300a5346df1eb5',
  'guzzlehttp/psr7' => '1.6.1@239400de7a173fe9901b9ac7c06497751f00727a',
  'imagine/imagine' => '1.2.3@cb2361e5bb4410b681462d8e4f912bc5dabf84ab',
  'justinrainbow/json-schema' => '5.2.9@44c6787311242a979fa15c704327c20e7221a0e4',
  'league/csv' => '9.5.0@b348d09d0d258a4f068efb50a2510dc63101c213',
  'neos/cache' => '6.1.0@2ef7d46d65e0953217d2ca83d14d5466c5461ad1',
  'neos/composer-plugin' => '2.0.1@cd20e3c9b548127f4fa1e0f31662072bf82250d4',
  'neos/content-repository' => '5.1.1@85227085be26ec99f6da47ae019be307caada613',
  'neos/demo' => '6.1.4@001ad1ad2f7fa7740688fda59eaaf022f17b29e5',
  'neos/diff' => '5.1.1@c2e0739e53599da3616ba81be5260797ed5277e0',
  'neos/eel' => '6.1.0@224f93855dfd718ea1d11fc6695424477417497d',
  'neos/error-messages' => '6.1.0@0376f1bb3faaf799964e9bfa309e616297411ed4',
  'neos/flow' => '6.1.0@936a7f4818d36a34634ca47599f233c9a017dbdb',
  'neos/flow-log' => '6.1.0@153149e3f12a4e8b634703c83703d6a9d79e8735',
  'neos/fluid-adaptor' => '6.1.0@54bc802e970819f40f1f4a879cf6dc993d447e9a',
  'neos/form' => '5.0.1@dc2ad7a45daa7769696995300c2caa64e42e934c',
  'neos/fusion' => '5.1.1@dcbffc3683ca70d98f068a130449361c9c4ea37f',
  'neos/fusion-afx' => 'v1.4.0@6a7b1208c6c488f5745c1bf6df2fd9fc39e9b2fc',
  'neos/fusion-form' => 'v1.0.3@bc95e395a34f54355a42498977b57ba8a301b512',
  'neos/http-factories' => '6.1.0@0f7708958088f0b2c8037537efe5b99f0b29927e',
  'neos/imagine' => '3.1.2@053e17f5d78bb9355eeae4b05f355c175fb770bc',
  'neos/kickstarter' => '6.1.0@fdcaa4d3757d3814cf869b5cf72580939026b405',
  'neos/media' => '5.1.1@e0960295991fb57a51ba2e2b336942feb2f2ca06',
  'neos/media-browser' => '5.1.1@4a3d76211af4ae8e7f776ae3a820e0034d81600d',
  'neos/neos' => '5.1.1@36e0ebc0ef659f0d840c62d03a7dc6028c10dac8',
  'neos/neos-setup' => 'dev-master@56c87422bd5c28703fcc96a3ee99aa8286e71d17',
  'neos/neos-ui' => '5.1.1@af8a8df2d0e6f000301dc71b83b999d161329ec1',
  'neos/neos-ui-compiled' => '5.1.1@59c3d0acb6984f17d49ae15799407fc8f0318326',
  'neos/nodetypes-assetlist' => '5.1.1@c596349fe60da53dfc8fed7f8e0732f65f811748',
  'neos/nodetypes-basemixins' => '5.1.1@557c713ba9f94d324ed6686fcd07d1fc2d70f351',
  'neos/nodetypes-contentreferences' => '5.1.1@00a2fa40abd01c7a4c3e009c1a14d6d2682902b1',
  'neos/nodetypes-form' => '5.1.1@10b70f6579aca82dbe3a2b6c7b6115c9f535fdc9',
  'neos/nodetypes-html' => '5.1.1@88c5463f751dcd4191e79d6c104309534609d72f',
  'neos/nodetypes-navigation' => '5.1.1@54ca3e176f41542dfa43c40db861faaaa9e9cad2',
  'neos/party' => '5.0.2@8f33a9514cb8327a507424a72a6f8e3e10d93c97',
  'neos/redirecthandler' => '4.0.2@de2adbaac40e5e407fac9182fa63c9b72e1e73bd',
  'neos/redirecthandler-databasestorage' => '4.0.1@50ebbb3a04589b405d16bd975943661a362a0c23',
  'neos/redirecthandler-neosadapter' => '4.0.3@1504e8a580ad931e93de0983e50ad426cf568d18',
  'neos/redirecthandler-ui' => '2.2.0@0a232a5c600743a365e5b4cf789979dfd1fd9da4',
  'neos/seo' => '3.0.6@28e6fd53e84a51637f2accbeaaa115685456fc03',
  'neos/setup' => 'dev-master@8611798914123aa52a922da9556752299580cfb1',
  'neos/site-kickstarter' => '5.1.1@d42a99348d0f9b2fbfe03eab1808d3a61311a72a',
  'neos/twitter-bootstrap' => '3.0.5@044ecbad696de2af778b238bbd6f21762f594169',
  'neos/utility-arrays' => '6.1.0@20c8a7e3a7e61f856b562eeb660e2b05fca39e16',
  'neos/utility-files' => '6.1.0@bee92ab32faa855f18ffa6bcbcb9ab0775d2773a',
  'neos/utility-mediatypes' => '6.1.0@b3b6999ecca2bf508f9cf5a792fb2d5c2caa3515',
  'neos/utility-objecthandling' => '6.1.0@eaed34b1c0560bedfd15bc69a8fe1393aad44cbd',
  'neos/utility-opcodecache' => '6.1.0@39b987a2cd620adc142b496a38797e817d3dcadb',
  'neos/utility-pdo' => '6.1.0@ba59d054a6020a263e091299d51c1ecd94ac9918',
  'neos/utility-schema' => '6.1.0@151a3e5c21c35f0e8b168d48205741cfb419cc93',
  'neos/utility-unicode' => '6.1.0@878960eaec04988c8daad3ca1c85a4656f93a4d5',
  'ocramius/package-versions' => '1.5.1@1d32342b8c1eb27353c8887c366147b4c2da673c',
  'ocramius/proxy-manager' => '2.2.3@4d154742e31c35137d5374c998e8f86b54db2e2f',
  'paragonie/random_compat' => 'v9.99.99@84b4dfb120c6f9b4ff7b3685f9b8f1aa365a0c95',
  'psr/cache' => '1.0.1@d11b50ad223250cf17b86e38383413f5a6764bf8',
  'psr/container' => '1.0.0@b7ce3b176482dbbc1245ebf52b181af44c2cf55f',
  'psr/http-factory' => '1.0.1@12ac7fcd07e5b077433f5f2bee95b3a771bf61be',
  'psr/http-message' => '1.0.1@f6561bf28d520154e4b0ec72be95418abe6d9363',
  'psr/log' => '1.1.2@446d54b4cb6bf489fc9d75f55843658e6f25d801',
  'psr/simple-cache' => '1.0.1@408d5eafb83c57f6365a3ca330ff23aa4a5fa39b',
  'ralouphie/getallheaders' => '3.0.3@120b605dfeb996808c31b6477290a714d356e822',
  'ramsey/uuid' => '3.9.2@7779489a47d443f845271badbdcedfe4df8e06fb',
  'seld/jsonlint' => '1.7.2@e2e5d290e4d2a4f0eb449f510071392e00e10d19',
  'seld/phar-utils' => '1.0.1@7009b5139491975ef6486545a39f3e6dad5ac30a',
  'symfony/console' => 'v4.4.2@82437719dab1e6bdd28726af14cb345c2ec816d0',
  'symfony/dom-crawler' => 'v4.4.2@36bbcab9369fc2f583220890efd43bf262d563fd',
  'symfony/filesystem' => 'v4.4.2@40c2606131d56eff6f193b6e2ceb92414653b591',
  'symfony/finder' => 'v4.4.2@ce8743441da64c41e2a667b8eb66070444ed911e',
  'symfony/polyfill-ctype' => 'v1.13.1@f8f0b461be3385e56d6de3dbb5a0df24c0c275e3',
  'symfony/polyfill-mbstring' => 'v1.13.1@7b4aab9743c30be783b73de055d24a39cf4b954f',
  'symfony/polyfill-php73' => 'v1.13.1@4b0e2222c55a25b4541305a053013d5647d3a25f',
  'symfony/process' => 'v4.4.2@b84501ad50adb72a94fb460a5b5c91f693e99c9b',
  'symfony/service-contracts' => 'v2.0.1@144c5e51266b281231e947b51223ba14acf1a749',
  'symfony/yaml' => 'v4.4.2@a08832b974dd5fafe3085a66d41fe4c84bb2628c',
  'typo3fluid/fluid' => '2.6.8@854c3b682aa4d2899f4246276cc60ad52cd8e34e',
  'zendframework/zend-code' => '3.4.1@268040548f92c2bfcba164421c1add2ba43abaaa',
  'zendframework/zend-eventmanager' => '3.2.1@a5e2583a211f73604691586b8406ff7296a946dd',
  'mikey179/vfsstream' => 'v1.6.8@231c73783ebb7dd9ec77916c10037eff5a2b6efe',
  'myclabs/deep-copy' => '1.9.4@579bb7356d91f9456ccd505f24ca8b667966a0a7',
  'neos/behat' => 'dev-master@33c186ac981a7776cecf60b89f3c983c794b849b',
  'neos/buildessentials' => 'dev-master@a7ee07376d6243acf2813e4ce0ea2d35ff7cfa84',
  'phar-io/manifest' => '1.0.3@7761fcacf03b4d4f16e7ccb606d4879ca431fcf4',
  'phar-io/version' => '2.0.1@45a2ec53a73c70ce41d55cedef9063630abaf1b6',
  'phpdocumentor/reflection-common' => '2.0.0@63a995caa1ca9e5590304cd845c15ad6d482a62a',
  'phpdocumentor/reflection-docblock' => '4.3.4@da3fd972d6bafd628114f7e7e036f45944b62e9c',
  'phpdocumentor/type-resolver' => '1.0.1@2e32a6d48972b2c1976ed5d8967145b6cec4a4a9',
  'phpspec/prophecy' => '1.10.1@cbe1df668b3fe136bcc909126a0f529a78d4cbbc',
  'phpunit/php-code-coverage' => '7.0.10@f1884187926fbb755a9aaf0b3836ad3165b478bf',
  'phpunit/php-file-iterator' => '2.0.2@050bedf145a257b1ff02746c31894800e5122946',
  'phpunit/php-text-template' => '1.2.1@31f8b717e51d9a2afca6c9f046f5d69fc27c8686',
  'phpunit/php-timer' => '2.1.2@1038454804406b0b5f5f520358e78c1c2f71501e',
  'phpunit/php-token-stream' => '3.1.1@995192df77f63a59e47f025390d2d1fdf8f425ff',
  'phpunit/phpunit' => '8.5.1@7870c78da3c5e4883eaef36ae47853ebb3cb86f2',
  'sebastian/code-unit-reverse-lookup' => '1.0.1@4419fcdb5eabb9caa61a27c7a1db532a6b55dd18',
  'sebastian/comparator' => '3.0.2@5de4fc177adf9bce8df98d8d141a7559d7ccf6da',
  'sebastian/diff' => '3.0.2@720fcc7e9b5cf384ea68d9d930d480907a0c1a29',
  'sebastian/environment' => '4.2.3@464c90d7bdf5ad4e8a6aea15c091fec0603d4368',
  'sebastian/exporter' => '3.1.2@68609e1261d215ea5b21b7987539cbfbe156ec3e',
  'sebastian/global-state' => '3.0.0@edf8a461cf1d4005f19fb0b6b8b95a9f7fa0adc4',
  'sebastian/object-enumerator' => '3.0.3@7cfd9e65d11ffb5af41198476395774d4c8a84c5',
  'sebastian/object-reflector' => '1.1.1@773f97c67f28de00d397be301821b06708fca0be',
  'sebastian/recursion-context' => '3.0.0@5b0cd723502bac3b006cbf3dbf7a1e3fcefe4fa8',
  'sebastian/resource-operations' => '2.0.1@4d7a795d35b889bf80a0cc04e08d77cedfa917a9',
  'sebastian/type' => '1.1.3@3aaaa15fa71d27650d62a948be022fe3b48541a3',
  'sebastian/version' => '2.0.1@99732be0ddb3361e16ad77b68ba41efc8e979019',
  'symfony/css-selector' => 'v2.8.52@7b1692e418d7ccac24c373528453bc90e42797de',
  'theseer/tokenizer' => '1.1.3@11336f6f84e16a720dae9d8e6ed5019efa85a0f9',
  'webmozart/assert' => '1.6.0@573381c0a64f155a0d9a23f4b0c797194805b925',
  'neos/neos-base-distribution' => '5.1.1@',
);

    private function __construct()
    {
    }

    /**
     * @throws \OutOfBoundsException If a version cannot be located.
     *
     * @psalm-param key-of<self::VERSIONS> $packageName
     */
    public static function getVersion(string $packageName) : string
    {
        if (isset(self::VERSIONS[$packageName])) {
            return self::VERSIONS[$packageName];
        }

        throw new \OutOfBoundsException(
            'Required package "' . $packageName . '" is not installed: check your ./vendor/composer/installed.json and/or ./composer.lock files'
        );
    }
}
